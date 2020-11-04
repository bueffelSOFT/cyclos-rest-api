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
     * Returns the list of all addresses of the given user.
     * May contain hidden addresses!
     *
     * @param string $user
     * @return mixed
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserAddresses(string $user)
    {
        $url = "/$user/addresses";
        $req = $this->createRequest($url);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * Returns the users default address (or first [public] address, if any)
     * or NULL if none found.
     *
     * @param string $user
     * @return array|null
     */
    public function getUserDefaultAddress(string $user)
    {
        $addresses = $this->getUserAddresses($user);

        // return the default address if one is set
        foreach($addresses as $address) {
            if (isset($address['defaultAddress']) && $address['defaultAddress']) {
                return $address;
            }
        }

        // else return the first public address
        foreach($addresses as $address) {
            if (!isset($address['hidden']) || !$address['hidden']) {
                return $address;
            }
        }

        // else return the first address available
        if (count($addresses)) {
            return $addresses[0];
        }

        return null;
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
     * Returns details for the given advertisement.
     *
     * @param string $ad    ID or "product_number@user_identifier"
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAdvertisement(string $ad) : array
    {
        $url = "/marketplace/$ad";
        $req = $this->createRequest($url);
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
            'currency' => 'climate_bonus',
            'buyer'    => $buyer,
            'items'    => $items,
            'deliveryMethod' => [
                'name' => 'kein Versand nötig', // 'not existent', //
                'price' => 0,
                'maxTime' => ['amount' => 1, 'field' => 'days'],
            ],
            'deliveryAddress' => [
                'street' => 'Schönfelder',
                'buildingNumber' => '12',
                'zip' => '01099',
                'city' => 'DD',
                'country'=> 'DE',
            ],
        ]);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * Adds the given item to the authenticated users shopping cart.
     *
     * @param string $item  item internal name or "productnumber@user"
     * @param float $quantity   int or float
     * @return array [0 => number of items in the cart]
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addItemToCart(string $item, float $quantity)
    {
        $url = "/shopping-carts/items/$item";
        $req = $this->createRequest($url, 'POST', [], [
            'quantity' => $quantity,
        ]);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * Returns the list of shopping carts currenty existing for the given user,
     * one for each seller & currency.
     *
     * @return array    [0 => [
     *      seller => [...],
     *      currency => [...],
     *      insufficientBalance => bool,
     *      items => [...]
     *  ]]
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getShoppingCarts()
    {
        $url = "/shopping-carts";
        $req = $this->createRequest($url);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * Returns data about the cart (total price etc), the current user (addresses)
     * and the seller (possible payment types, delivery methods) that is required
     * to checkout the cart.
     *
     * @param string $cartId
     * @return mixed
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCheckoutData(string $cartId)
    {
        $url = "/shopping-carts/$cartId/data-for-checkout";
        $req = $this->createRequest($url);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * Checks out a shopping cart given by its ID.
     *
     * @param string $cartId
     * @param array $details    [deliveryAddress, deliveryMethod, paymentType, ...]
     * @param string $confirmationPassword  password of the user if necessary
     * @return array    [0 => remaining number of items in all remaining carts]
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function checkoutShoppingCart(string $cartId, array $details, string $confirmationPassword = null)
    {
        $url = "/shopping-carts/$cartId/checkout";
        $headers = [];
        if ($confirmationPassword) {
            $headers['confirmationPassword'] = $confirmationPassword;
        }
        $req = $this->createRequest($url, "POST", $details, [], $headers);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * Deletes a shopping cart given by its ID for the authenticated user.
     *
     * @param string $cartId
     * @return array    [0 => remaining number of items in all remaining carts]
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteShoppingCart(string $cartId)
    {
        $url = "/shopping-carts/$cartId";
        $req = $this->createRequest($url, "DELETE");
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

    /**
     * Retrieve a list of custom operations that are available for execution
     * as the currently authenticated user for either system or a given user.
     *
     * @param string $owner "system" | user id | login name
     * @return mixed
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOperations(string $owner = 'system')
    {
        $url = "/$owner/operations/";
        $req = $this->createRequest($url);
        $res = $this->doRequest($req);
        return $res[0];
    }

    /**
     * Execute an operation for system or on a given user.
     *
     * @param string $operation operation ID or internal name
     * @param string $owner "system"|user id|login name
     * @param array $parameters [formParameters => [...], confirmationPassword, ...]
     * @return mixed
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function runOperations(string $operation, string $owner = 'system', array $parameters = [])
    {
        $url = "/$owner/operations/$operation/run";
        $req = $this->createRequest($url, 'POST', $parameters);
        $res = $this->doRequest($req);
        return $res[0];
    }

    public function postCustomWebservice(string $path, array $parameters = [])
    {
        // @todo das funktioniert nur wenn _nicht_ /api an der Host URL
        // hängt, also muss man entweder einen neuen client mit gekürztem
        // config->setHost() verwenden oder per default immer /api in allen
        // wrapper methoden verwenden und immer nur die gekürzte URL in der config
        // angeben
        $url = "/run/$path";
        $req = $this->createRequest($url, 'POST', $parameters);
        $res = $this->doRequest($req);
        return $res[0];
    }
}
