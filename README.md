# Cyclos REST-API Client

Use this as dependency in your project instead of writing your own client.
Auto-generation via swagger (currently, 2020-05-06) produces no usable result.
Always use Access-Tokens instead of username//password for best security
and easy blocking of individual clients!

## Usage

```
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
    ->setHost('https://cyclos-domain.tld/{network/}api')
    ->setApiKey('Access-Client-Token', '{client-tag}{access-token}');
$wrapper = new \Cyclos\Api\ApiWrapper($config);

// see createRequest() doc for more parameters
$req = $wrapper->createRequest('/auth');

// see doRequest() doc for more parameters and response type
$res = $wrapper->doRequest($req);

var_dump($res);
```