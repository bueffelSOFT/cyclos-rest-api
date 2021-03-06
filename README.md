# Cyclos REST-API Client

[![Latest Stable Version](https://poser.pugx.org/bueffelsoft/cyclos-rest-api/v/stable.png)](https://packagist.org/packages/bueffelsoft/cyclos-rest-api) [![License](https://poser.pugx.org/bueffelsoft/cyclos-rest-api/license.png)](https://packagist.org/packages/bueffelsoft/cyclos-rest-api)

Use this as dependency in your project instead of writing your own client.
Auto-generation via swagger codegen (currently, 2020-05-06) produces no usable result.
Always use Access-Tokens instead of username//password for best security
and easy blocking of individual clients!

```shell
composer require bueffelsoft/cyclos-rest-api
```

## Usage ApiWrapper

The `ApiWrapper` bundles code generated by the swagger codegen to access
any API, it has no endpoint specific functions / models. 

```
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
    ->setHost('https://cyclos-domain.tld/{network/}api')
    ->setApiKey('Access-Client-Token', '{client-tag}{access-token}')
    // or via the session token if one already exists for the end user:
    //->setApiKey('Session-Token', '{session-token}')
;
$wrapper = new \Cyclos\Api\ApiWrapper($config);

// see createRequest() doc for more parameters
$req = $wrapper->createRequest('/auth');

// see doRequest() doc for more parameters and response type

try {
    $res = $wrapper->doRequest($req);
}
catch(\Exception $e) {
  // $e = \Cyclos\Api\ApiException | \GuzzleHttp\Exception\GuzzleException
}

var_dump($res);
```

## Usage of CyclosWrapper

While ApiWrapper is not specific to the Cyclos API the `CyclosWrapper`
is a subclass of it, implementing helper functions to access some of the
endpoints.
Create a config object as shown above and use it to create a new `CyclosWrapper`.
Wrap the calls in a try-catch to check for Exceptions indicating failed
requests. If the exception is an `ApiException` the server
responded with an error, see CyclosWrapper::loginUser for
example handling.

```
use Cyclos\Api\CyclosWrapper;

$wrapper = new CyclosWrapper($config);

// find all users in one or more groups
$users = $wrapper->getUsers(['climate_project']);

// get data for a single user
$user = $wrapper->getUser('username|userId');

// login a user to retrieve a sessionToken and the users data
// IP/remoteAddress is used to block the user after X failed tries
$data = $wrapper->loginUser('username|userId', 'password', $_SERVER['REMOTE_ADDR'] ?? 'cli');

// get all accounts for a given user, may be filtered by account type
// (e.g. to specify the currency) 
$accounts = $wrapper->getUserAccounts("username|userId", 'accountTypeId');

// get all advertisements, may be filtered by owner, status, custom fields, ...
$ads = $wrapper->getAdvertisements([
   'owner'        => "-310719030079881031",  
   'kind'         => 'webshop',
   'statuses'     => ['active'],
   'customFields' => 'anzeigenart:co2_compensation',
]);

// add an item with the given quantity to the current users shopping cart
$items = $wrapper->addItemToCart("-4922405048507268931", 1.2);

// get a list of all carts for the current user (one per seller & currency)
$carts = $res = $wrapper->getShoppingCarts();

// remove a shopping cart, to cancel the process
$remainingData = $wrapper->deleteShoppingCart('-4922405048507268930');

// get data required to complete the sale, returns the current
// users addresses, possible delivery methods & payment types etc.
$data = $wrapper->getCheckoutData('-4922405048507268930');

// checkout the given cart, using the fetched data, this creates an order, 
// waiting to be accepted by the seller
$remainingData = $wrapper->checkoutShoppingCart('-4922405048507268930', [
    'deliveryAddress' => $data['addresses'][0],
    'deliveryMethod' => $data['deliveryMethods'][0]['id'],
    'paymentType' => $data['paymentTypes'][0]['id'],
]);
```
