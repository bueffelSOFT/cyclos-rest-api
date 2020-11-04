<?php
declare(strict_types=1);

namespace Cyclos\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use RuntimeException;
use stdClass;
use function GuzzleHttp\Psr7\build_query;

class ApiWrapper
{
    /**
     * Timeout in seconds per request
     * @var integer
     */
    const TIMEOUT = 20;
    
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(
        Configuration $config = null,
        ClientInterface $client = null,
        HeaderSelector $selector = null
    )
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * Creates an request object from the given elements. This request can then
     * be executed/sent with doRequest().
     *
     * @param string $resourcePath  URL to query/post
     * @param array $formParams     list of elements to send as form
     * @param array $queryParams    query string parameters
     * @param array $headerParams   additional headers
     * @param string $body          complete body, ignores formParams
     * @param bool $multipart
     * @return Request
     */
    public function createRequest(
        string $resourcePath,
        string $method = 'GET',
        array $formParams = [],
        array $queryParams = [],
        array $headerParams = [],
        string $body = null,
        bool $multipart = false
    ) : Request
    {
        $httpBody = '';

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            $httpBody = $body;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }
        elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            }
            elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            }
            else {
                // for HTTP post (form)
                $httpBody = build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Access-Client-Token');
        if ($apiKey !== null) {
            $headers['Access-Client-Token'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Session-Token');
        if ($apiKey !== null) {
            $headers['Session-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = build_query($queryParams);
        return new Request(
            $method,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Sends the given request to the server and deserializes the response.
     *
     * @param Request $request
     * @param string $returnType some requests can simply return a string|int|bool
     * @return array [0 => response, 1 => statuscode, 2 => headers]
     * @throws ApiException when the request returned an error
     * @throws \GuzzleHttp\Exception\GuzzleException on request errors
     */
    public function doRequest(
        Request $request,
        string $returnType = ''
    ) : array
    {
        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        }
        catch (RequestException $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        }

        $responseBody = $response->getBody();
        if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
        } else {
            $content = $responseBody->getContents();
            if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                // @todo 2020-05-06 hier assoc=true gesetzt,
                // wir brauchen keine \std_class objekte, das Deserialisieren
                // in Models klappt nicht mit Swagger
                $content = json_decode($content, true);
            }
        }

        return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders(),
        ];
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Create http client option
     *
     * @throws RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = ['timeout' => self::TIMEOUT ];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'ab');
            if (!$options[RequestOptions::DEBUG]) {
                throw new RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
