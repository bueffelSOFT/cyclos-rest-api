<?php
declare(strict_types=1);

namespace Cyclos\Api;

class CyclosWrapper extends ApiWrapper
{
    // region Authentication
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
        // we only need these values, for other options see
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
    // endregion

    // region Get user data
    /**
     * Returns data used for searching users. Includes available groups etc.
     *
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserSearchData(): array
    {
        $url = "/users/data-for-search";

        $req = $this->createRequest($url);
        $res = $this->doRequest($req);

        return $res[0];
    }

    /**
     * Retrieves the list of visible (to the access client) users.
     *
     * @param array $groups return only users in this group(s)
     * @param array $states return only uses with this states
     * @param int $page     number of the page to retrieve
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUsers(
        array $groups = [],
        array $states = [],
        int $page = 0
    ): array
    {
        $filters = [
            'page'         => $page,
            'includeGroup' => true,
            //'addressResult' => 'all',

            // @todo currently uses the default page size of Cyclos (40)
            //'pageSize'     => 10,
        ];

        if (count($groups)) {
            $filters['groups'] = $groups;
        }
        if (count($states)) {
            $filters['statuses'] = $states;
        }

        $req = $this->createRequest('/users', 'GET', [], $filters);
        $res = $this->doRequest($req);

        $data = [
            'users'       => $res[0],
            'page'        => $res[2]['X-Current-Page'][0] ?? null,
            'pageSize'    => $res[2]['X-Page-Size'][0] ?? null,
            'total'       => $res[2]['X-Total-Count'][0] ?? null,
            'hasNextPage' => ($res[2]['X-Has-Next-Page'][0] ?? null) === 'true',
        ];

        return $data;
    }

    /**
     * Export users using the given format.
     * For parameters see getUsers().
     *
     * @param string $format internal name of the export format to use
     * @param array $groups return only users in this group(s)
     * @param array $states return only uses with this states
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function exportUsers(
        string $format = 'csv',
        array $groups = [],
        array $states = [],
    ): \SplFileObject
    {
        $filters = [];
        if (count($groups)) {
            $filters['groups'] = $groups;
        }
        if (count($states)) {
            $filters['statuses'] = $states;
        }

        $req = $this->createRequest("/users/export/$format", 'GET', [], $filters);
        $res = $this->doRequest($req, '\SplFileObject');

        // no paging for user export (even though the apiDoc mentions page &
        // pageSize, they seem to be ignored) -> no need to evaluate headers,
        // simply return the file
        return $res[0];
    }

    /**
     * Retrieves data about the specified user.
     *
     * @param string $identifier    id/login name
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUser(string $identifier): array
    {
        $fields = ['!permissions'];
        $identifier = urlencode($identifier);
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
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserAccounts(string $user): array
    {
        $user = urlencode($user);
        $url = "/$user/accounts";

        $req = $this->createRequest($url);
        $res = $this->doRequest($req);

        // no paging for user accounts -> no need to evaluate headers
        return $res[0];
    }

    /**
     * Returns the account of the given type for the given user.
     *
     * @param string $user  id/login name
     * @param string $type internal name or ID of the account type to filter for
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserAccountByType(string $user, string $type): array
    {
        $user = urlencode($user);
        $url = "/$user/accounts/$type";

        $req = $this->createRequest($url);
        $res = $this->doRequest($req);

        // a user can only have one account per type -> 0 or 1 result
        return $res[0];
    }

    /**
     * Returns the history the account of the given type for the given user.
     *
     * @param string $user      id/login name
     * @param string $type      internal name or ID of the account type to filter for
     * @param array $filters    additional filters
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserAccountHistory(string $user, string $type, array $filters = []): array
    {
        $user = urlencode($user);
        $url = "/$user/accounts/$type/history";

        $req = $this->createRequest($url, 'GET', [], $filters);
        $res = $this->doRequest($req);

        $data = [
            'transfers'    => $res[0],
            'page'         => $res[2]['X-Current-Page'][0] ?? null,
            'pageSize'     => $res[2]['X-Page-Size'][0] ?? null,
            'total'        => $res[2]['X-Total-Count'][0] ?? null,
            'hasNextPage'  => ($res[2]['X-Has-Next-Page'][0] ?? null) === 'true',
        ];

        return $data;
    }

    /**
     * Retrieves the list of (profile or custom) user images (visible to the
     * access client).
     *
     * @param string $identifier login name or ID
     * @param string $kind "profile" or "custom"
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserImages(
        string $identifier,
        string $kind = 'profile'
    ): array
    {
        $identifier = urlencode($identifier);
        $filters = [
            'kind' => $kind,
        ];

        $req = $this->createRequest("/$identifier/images", 'GET', [], $filters);
        $res = $this->doRequest($req);

        // no paging for user images -> no need to evaluate headers
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
        $user = urlencode($user);
        $url = "/$user/addresses";
        $req = $this->createRequest($url);
        $res = $this->doRequest($req);

        // no paging for user addresses -> no need to evaluate headers
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
     * Returns all available agreements for the given user.
     *
     * @param string $user  id/login name
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserAgreements(string $user): array
    {
        $user = urlencode($user);
        $url = "/$user/agreements";

        $req = $this->createRequest($url);
        $res = $this->doRequest($req);

        // no paging for user agreements -> no need to evaluate headers
        return $res[0];
    }
    // endregion

    // region Push user data
    /**
     * Registers a new user, requires a captcha for public registration.
     * @see https://demo.cyclos.org/api/#/Users/createUser for possible params.
     *
     * @param array $params
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function registerUser(array $params): array
    {
        /**
         * Potential parameters (Cyclos 4.16.13)
         * {
         *   "name": "string",
         *   "username": "string",
         *   "email": "string",
         *   "customValues": {
         *     "additionalProp1": "string",
         *     "additionalProp2": "string",
         *     "additionalProp3": "string"
         *   },
         *   "hiddenFields": [
         *     "string"
         *   ],
         *   "group": "string",
         *   "broker": "string",
         *   "mobilePhones": [
         *     {
         *       "name": "string",
         *       "number": "string",
         *       "extension": "string",
         *       "hidden": true,
         *       "enabledForSms": true,
         *       "verified": true,
         *       "kind": "landLine"
         *     }
         *   ],
         *   "landLinePhones": [
         *     {
         *       "name": "string",
         *       "number": "string",
         *       "extension": "string",
         *       "hidden": true,
         *       "enabledForSms": true,
         *       "verified": true,
         *       "kind": "landLine"
         *     }
         *   ],
         *   "passwords": [
         *     {
         *       "type": "string",
         *       "value": "string",
         *       "checkConfirmation": true,
         *       "confirmationValue": "string",
         *       "forceChange": true
         *     }
         *   ],
         *   "skipActivationEmail": true,
         *   "identityProviderRequestId": "string",
         *   "addresses": [
         *     {
         *       "name": "string",
         *       "addressLine1": "string",
         *       "addressLine2": "string",
         *       "street": "string",
         *       "buildingNumber": "string",
         *       "complement": "string",
         *       "zip": "string",
         *       "poBox": "string",
         *       "neighborhood": "string",
         *       "city": "string",
         *       "region": "string",
         *       "country": "string",
         *       "location": {
         *         "latitude": 0,
         *         "longitude": 0
         *       },
         *       "defaultAddress": true,
         *       "hidden": true,
         *       "contactInfo": {
         *         "email": "string",
         *         "mobilePhone": "string",
         *         "landLinePhone": "string",
         *         "landLineExtension": "string",
         *         "customValues": {
         *           "additionalProp1": "string",
         *           "additionalProp2": "string",
         *           "additionalProp3": "string"
         *         }
         *       }
         *     }
         *   ],
         *   "contactInfos": [
         *     {
         *       "name": "string",
         *       "email": "string",
         *       "mobilePhone": "string",
         *       "landLinePhone": "string",
         *       "landLineExtension": "string",
         *       "image": "string",
         *       "address": "string",
         *       "hidden": true,
         *       "customValues": {
         *         "additionalProp1": "string",
         *         "additionalProp2": "string",
         *         "additionalProp3": "string"
         *       }
         *     }
         *   ],
         *   "images": [
         *     "string"
         *   ],
         *   "captcha": {
         *     "challenge": "string",
         *     "response": "string"
         *   },
         *   "acceptAgreement": true,
         *   "acceptAgreements": [
         *     "string"
         *   ],
         *   "asMember": true,
         *   "securityQuestion": "string",
         *   "securityAnswer": "string",
         *   "nfcToken": {
         *     "type": "string",
         *     "token": "string",
         *     "cyclosChallenge": "string"
         *   },
         *   "inviteToken": "string",
         *   "externalPaymentToken": "string",
         *   "userAgentId": "string"
         * }
         */

        $url = "/users";
        $req = $this->createRequest($url, 'POST', $params);
        $res = $this->doRequest($req);

        return $res[0];
    }

    /**
     * Changes the given user's status to the given state.
     *
     * @param string $user id/login name
     * @param string $status active|disabled|blocked|purged
     * @param string|null $comment (optional) comment for the status log entry
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function setUserStatus(string $user, string $status, string $comment = null): array
    {
        $params = [
            'status'  => $status,
        ];
        if ($comment) {
            $params['comment'] = $comment;
        }

        $user = urlencode($user);
        $url = "/$user/status";
        $req = $this->createRequest($url, 'POST', $params);
        $res = $this->doRequest($req);

        return $res[0];
    }

    /**
     * Uploads a file for the given user; can be visible to the user, public
     * and/or admins.
     *
     * @param string $user id/login name
     * @param array $params array with:
     *                      'file' = open file handle to the file to upload
     *                      'fileName' = filename that is used in cyclos when downlading
     *                      'document' = [
     *                          'name'          => 'display name',
     *                          'description'   => 'description text',
     *                          'enabled'       => true,
     *                          'userVisible'   => true,
     *                          'brokerVisible' => false,
     *                      ]
     * @see https://demo.cyclos.org/api/#/Documents/createUserDocumentWithUpload
     *
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function uploadUserDocument(string $user, array $params): array
    {
        $user = urlencode($user);
        $url = "/$user/documents/upload";

        $req = $this->createRequest($url, 'POST', $params, [], [], null, true);
        $res = $this->doRequest($req);

        return $res[0];
    }
    // endregion

    // region Get account & transfer data
    /**
     * Returns data used for searching in/with accounts.
     * Includes available types etc.
     *
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccountSearchData(): array
    {
        $url = "/transfers/data-for-search";

        $req = $this->createRequest($url);
        $res = $this->doRequest($req);

        return $res[0];
    }

    /**
     * Returns the balances for all accounts of the given type.
     *
     * @param string $accountType  account type id or internal name
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccountBalances(
        string $accountType,
        array $filters = [],
        int $page = 0
    ): array
    {
        $url = "/accounts/$accountType/user-balances";

        $filters['page'] = $page;

        $req = $this->createRequest($url, 'GET', [], $filters);
        $res = $this->doRequest($req);

        $data = [
            'users'       => $res[0], // because the most properties are from the user
            'page'        => $res[2]['X-Current-Page'][0] ?? null,
            'pageSize'    => $res[2]['X-Page-Size'][0] ?? null,
            'total'       => $res[2]['X-Total-Count'][0] ?? null,
            'hasNextPage' => ($res[2]['X-Has-Next-Page'][0] ?? null) === 'true',
        ];

        return $data;
    }

    /**
     * Searches for transfers over multiple accounts.
     *
     * @param array $filters    filters like transferTypes, datePeriod, ...
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTransfers(array $filters = []): array
    {
        $url = "/transfers/";

        $req = $this->createRequest($url, 'GET', [], $filters);
        $res = $this->doRequest($req);

        $data = [
            'transfers'    => $res[0],
            'page'         => $res[2]['X-Current-Page'][0] ?? null,
            'pageSize'     => $res[2]['X-Page-Size'][0] ?? null,
            'total'        => $res[2]['X-Total-Count'][0] ?? null,
            'hasNextPage'  => ($res[2]['X-Has-Next-Page'][0] ?? null) === 'true',
        ];

        return $data;
    }

    /**
     * Returns details about a single transfer.
     *
     * @param string $identifier transfer number or ID
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTransfer(string $identifier): array
    {
        $url = "/transfers/$identifier";

        $req = $this->createRequest($url);
        $res = $this->doRequest($req);

        return $res[0];
    }

    /**
     * Searches for transactions over multiple accounts.
     *
     * @param array $filters    filters like transferTypes, datePeriod, ...
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTransactions(array $filters = []): array
    {
        $url = "/transactions/";

        $req = $this->createRequest($url, 'GET', [], $filters);
        $res = $this->doRequest($req);

        $data = [
            'transactions' => $res[0],
            'page'         => $res[2]['X-Current-Page'][0] ?? null,
            'pageSize'     => $res[2]['X-Page-Size'][0] ?? null,
            'total'        => $res[2]['X-Total-Count'][0] ?? null,
            'hasNextPage'  => ($res[2]['X-Has-Next-Page'][0] ?? null) === 'true',
        ];

        return $data;
    }

    /**
     * Returns details about a single transaction, including parent/child
     * transfers (e.g. paid fees).
     *
     * @param string $identifier transaction number or ID
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTransaction(string $identifier): array
    {
        $url = "/transactions/$identifier";

        $req = $this->createRequest($url);
        $res = $this->doRequest($req);

        return $res[0];
    }
    // endregion

    // region Perform payments
    /**
     * Returns data used for performing payments.
     *
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getPerformPaymentData(string $owner, string $to = null, string $type = null): array
    {
        $owner = urlencode($owner);
        $url = "/$owner/payments/data-for-perform";
        $query = [];
        if ($to) {
            $query['to'] = $to;
        }
        if ($type) {
            $query['type'] = $type;
        }

        $req = $this->createRequest($url, 'GET', [], $query);
        $res = $this->doRequest($req);

        return $res[0];
    }

    /**
     * Performs a payment.
     *
     * @param string $owner user identifier | "system" | "self"
     * @param string $subject The payment destination (in case of perform payment) or payer (in case of receive payment).
     * @param float $amount
     * @param string|null $type payment type ID|internal name
     * @param string|null $reference message/description for the payment
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function performPayment(string $owner, string $subject, float $amount, string $type = null, string $reference = null): array
    {
        $owner = urlencode($owner);
        $url = "/$owner/payments";

        $params = [
            'amount' => $amount,
            'subject' => $subject,
        ];
        if ($type) {
            $params['type'] = $type;
        }
        if ($reference) {
            $params['description'] = $reference;
        }

        $req = $this->createRequest($url, 'POST', $params);
        $res = $this->doRequest($req);

        return $res[0];
    }
    // endregion

    // region Advertisments & ShoppingCarts
    /**
     * Returns all advertisements for the given filters.
     *
     * @param array $filters list of filters to apply: {
     *     'user'         => 'login_name|id',
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

        $data = [
            'advertisements' => $res[0],
            'page'           => $res[2]['X-Current-Page'][0] ?? null,
            'pageSize'       => $res[2]['X-Page-Size'][0] ?? null,
            'total'          => $res[2]['X-Total-Count'][0] ?? null,
            'hasNextPage'    => ($res[2]['X-Has-Next-Page'][0] ?? null) === 'true',
        ];

        return $data;
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
    // endregion

    // region Custom operations & webservices
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
        $owner = urlencode($owner);
        $url = "/$owner/operations/";
        $req = $this->createRequest($url);
        $res = $this->doRequest($req);

        // no paging for operations -> no need to evaluate headers
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
    public function runOperation(string $operation, string $owner = 'system', array $parameters = [])
    {
        $owner = urlencode($owner);
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
    // endregion

    // region Imports
    /**
     * Returns data for a new general import of a given kind..
     *
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getImportDataForNew(string $kind): array
    {
        $url = "/imported-files/$kind/data-for-new";

        $req = $this->createRequest($url);
        $res = $this->doRequest($req);

        return $res[0];
    }
    // endregion

    public static function parseCustomFields(array $entry): array
    {
        $customFields = [];
        foreach($entry['customValues'] ?? [] as $customValue) {
            $fieldName = $customValue['field']['internalName'] ?? null;
            if (!$fieldName) {
                // failsave
                continue;
            }

            switch ($customValue['field']['type'] ?? null)
            {
                case 'boolean':
                    $customFields[$fieldName] =
                        $customValue['booleanValue'];
                    break;

                case 'decimal':
                    $customFields[$fieldName] =
                        $customValue['decimalValue'];
                    break;

                case 'singleSelection':
                    $customFields[$fieldName] =
                        $customValue['enumeratedValues'][0]['value'];
                    break;

                case 'url':
                    $customFields[$fieldName] =
                        $customValue['stringValue'];
                    break;

                case 'string':
                    $customFields[$fieldName] =
                        $customValue['stringValue'];
                    break;

                default:
                    $customFields[$fieldName] =
                        '[unsupported field type '.($customValue['field']['type'] ?? '-not set-').']';
                    break;
            }
        }

        return $customFields;
    }
}
