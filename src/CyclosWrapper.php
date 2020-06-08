<?php
declare(strict_types=1);

namespace Cyclos\Api;

class CyclosWrapper extends ApiWrapper
{
    /**
     * Retrieves the list of visible (to the access client) users.
     *
     * @param array $groups return only users in this group(s)
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUsers($groups = []) : array
    {
        $filters = [];
        if (count($groups)) {
            $filters['groups'] = $groups;
        }

        $req = $this->createRequest('/users', 'GET', [], $filters);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * Retrieves data about the specified user.
     *
     * @param string $identifier    login name or ID
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUser(string $identifier): array
    {
        $fields = ['!permissions'];

        $req = $this->createRequest("/users/$identifier", 'GET', [], [
            'fields' => $fields,
        ]);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * Returns all available accounts for the given user.
     *
     * @param string $user  id/login name
     * @param string|null $type internal name or ID of the account type to filter for
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserAccounts(string $user, string $type = null): array
    {
        $url = "/$user/accounts";
        if ($type) {
            $url .= "/$type";
        }

        $req = $this->createRequest($url);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * Returns all advertisements for the given user
     *
     * @param array $filters list of filters to apply: {
     *     //@todo 'user' for Cyclos 4.13+
     *     'owner'        => 'login_name|id',
     *     'statuses'     => ['active'],
     *     'customFields' => 'internal_field_name:field_value',
     * }
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAdvertisements(array $filters) : array
    {
        $url = "/marketplace";
        $req = $this->createRequest($url, 'GET', [], $filters);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * @todo WIP
     */
    public function createOrder(string $seller, string $buyer, array $items)
    {
        $url = "/$seller/orders/";
        $req = $this->createRequest($url, 'POST', [
            'draft'    => false,
            'currency' => 'KB',
            'buyer'    => $buyer,
            'items'    => $items,
        ]);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * Tries to login the user in Cyclos.
     * Returns the user data and the created sessionToken on success.
     *
     * @param string $user  login name/email/userid, whatever is allowed for normal login
     * @param string $password
     * @param string $ip    remote address to allow blocking
     * @return array [code => string] on login failure,
     *     [user => [], sessionToken => string, group => []] on success
     *     for possible codes see https://demo.cyclos.org/api/#operations-Sessions-loginUser
     * @throws ApiException when the request failed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loginUser(string $user, string $password, string $ip): array
    {
        // we only need this values, for other options see
        // https://demo.cyclos.org/api/#operations-Sessions-loginUser
        $fields = ['user', 'group', 'sessionToken'];

        $formParams = [
            'user'           => $user,
            'password'       => $password,
            'remoteAddress'  => $ip,

            // optional:
            //'channel'        => 'main',
            //'sessionTimeout' => [
            //    'amount' => 2,
            //    'field'  => 'hours',
            //]
        ];

        $req = $this->createRequest('/sessions', 'POST', $formParams, [
            'fields' => $fields,
        ]);

        try {
            $res = $this->doRequest($req);
        }
        catch (ApiException $e) {
            if ($e->getCode() === 401) {
                $response = json_decode($e->getResponseBody(), true);

                // login failed, wrong password or inactive etc.
                return $response;
            }

            // other, unexpected error
            throw $e;
        }

        return $res[0];
    }
}
