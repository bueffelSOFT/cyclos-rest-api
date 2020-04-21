# Cyclos\Api\ShoppingCartsApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemToShoppingCart**](ShoppingCartsApi.md#additemtoshoppingcart) | **POST** /shopping-carts/items/{ad} | Adds the given webshop ad to the corresponding shopping cart.
[**adjustAndGetShoppingCartDetails**](ShoppingCartsApi.md#adjustandgetshoppingcartdetails) | **POST** /shopping-carts/{id}/adjust | Adjusts a shopping cart items, returning its details.
[**checkoutShoppingCart**](ShoppingCartsApi.md#checkoutshoppingcart) | **POST** /shopping-carts/{id}/checkout | Checks out a shopping cart.
[**getShoppingCartDataForCheckout**](ShoppingCartsApi.md#getshoppingcartdataforcheckout) | **GET** /shopping-carts/{id}/data-for-checkout | Returns configuration data for check-out a shopping cart.
[**getShoppingCartDetails**](ShoppingCartsApi.md#getshoppingcartdetails) | **GET** /shopping-carts/{id} | Returns details of a shopping cart.
[**getShoppingCarts**](ShoppingCartsApi.md#getshoppingcarts) | **GET** /shopping-carts | Returns the shopping carts list.
[**modifyItemQuantityOnShoppingCart**](ShoppingCartsApi.md#modifyitemquantityonshoppingcart) | **PUT** /shopping-carts/items/{ad} | Modifies the corresponding cart with the new quantity for the given webshop ad.
[**removeItemFromShoppingCart**](ShoppingCartsApi.md#removeitemfromshoppingcart) | **DELETE** /shopping-carts/items/{ad} | Removes the given webshop ad from the corresponding shopping cart.
[**removeShoppingCart**](ShoppingCartsApi.md#removeshoppingcart) | **DELETE** /shopping-carts/{id} | Removes a shopping cart.

# **addItemToShoppingCart**
> int addItemToShoppingCart($ad, $quantity)

Adds the given webshop ad to the corresponding shopping cart.

Adds the given webshop ad to the corresponding shopping cart according to the seller and currency and returns the total number of webshop ads in all carts. Optionally a quantity can be specified. The different shopping carts are created dynamically according to the seller and currency. E.g if the user adds the following webshop ads (i.e items): - 1 from Seller1 in Dolars; - 2 from Seller1 in Euros; - 1 from Seller2 un Dolars.  Then the following three carts will be created for the authenticated user:  - 1 cart containing 1 item offered by Seller1 in Dolars; - 1 cart containing 2 items offered by Seller1 in Euros; - 1 cart containing 1 item offered by Seller2 in Dolars.  Finally, the total number of wbshop ads returned will be 4. For those quantity-limited products the given quantity could have been adjusted to meet the restrictions. You can view the adjustment applied to each item when retrieving the details of a shopping cart. if you want to remove the adjustment just send a new request to modify the quantity (using `PUT /shopping-carts/items/{ad}`) and specify the current quantity (i.e the already adjusted and returned in the details of the shopping cart) as the parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\ShoppingCartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad = "ad_example"; // string | Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form `productNumber@user`, with the user identifier as well.
$quantity = 1.2; // double | The quantity being added. It could be a decimal number only if the  corresponding webshop ad allows it.

try {
    $result = $apiInstance->addItemToShoppingCart($ad, $quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartsApi->addItemToShoppingCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad** | **string**| Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form &#x60;productNumber@user&#x60;, with the user identifier as well. |
 **quantity** | **double**| The quantity being added. It could be a decimal number only if the  corresponding webshop ad allows it. | [optional]

### Return type

**int**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adjustAndGetShoppingCartDetails**
> \Cyclos\Api\Model\ShoppingCartView adjustAndGetShoppingCartDetails($id, $fields)

Adjusts a shopping cart items, returning its details.

Works like `GET /shopping-carts/{id}`, but first adjusts the status of all items. For each item checks both the availability and the quantity, setting to corresponding `availability` or `quantityAdjustment` property if anything was modified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\ShoppingCartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->adjustAndGetShoppingCartDetails($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartsApi->adjustAndGetShoppingCartDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\ShoppingCartView**](../Model/ShoppingCartView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutShoppingCart**
> int checkoutShoppingCart($body, $id, $confirmation_password)

Checks out a shopping cart.

Checks out the given shopping cart associated to the authenticated user. After the check-out the purchase order will be awaiting for the seller's  acceptance (i. e with status `pendingSeller`).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\ShoppingCartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\ShoppingCartCheckout(); // \Cyclos\Api\Model\ShoppingCartCheckout | The data for check-out.
$id = "id_example"; // string | The object identification
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.

try {
    $result = $apiInstance->checkoutShoppingCart($body, $id, $confirmation_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartsApi->checkoutShoppingCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\ShoppingCartCheckout**](../Model/ShoppingCartCheckout.md)| The data for check-out. |
 **id** | **string**| The object identification |
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]

### Return type

**int**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShoppingCartDataForCheckout**
> \Cyclos\Api\Model\ShoppingCartDataForCheckout getShoppingCartDataForCheckout($id, $fields)

Returns configuration data for check-out a shopping cart.

Returns configuration data for check-out the given shopping cart by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\ShoppingCartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getShoppingCartDataForCheckout($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartsApi->getShoppingCartDataForCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\ShoppingCartDataForCheckout**](../Model/ShoppingCartDataForCheckout.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShoppingCartDetails**
> \Cyclos\Api\Model\ShoppingCartView getShoppingCartDetails($id, $fields)

Returns details of a shopping cart.

Returns the details of a shopping cart by id with all webshop ads offered by the same seller and in the same currency.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\ShoppingCartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getShoppingCartDetails($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartsApi->getShoppingCartDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\ShoppingCartView**](../Model/ShoppingCartView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShoppingCarts**
> \Cyclos\Api\Model\ShoppingCartResult[] getShoppingCarts($fields)

Returns the shopping carts list.

Returns the shopping carts for the authenticated user. Each cart contains  all webshop ads offered by the same seller and in the same currency.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\ShoppingCartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getShoppingCarts($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartsApi->getShoppingCarts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\ShoppingCartResult[]**](../Model/ShoppingCartResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyItemQuantityOnShoppingCart**
> int modifyItemQuantityOnShoppingCart($ad, $quantity)

Modifies the corresponding cart with the new quantity for the given webshop ad.

Modifies the corresponding shopping cart with the new quantity for the  given webshop ad only if it was already added to the cart of the authenticted user and returns the total number of webshop ads in all carts. For those quantity-limited products the given quantity could have been  adjusted to met the restrictions. You can view the adjustment applied to  each item when retrieving the details of a shopping cart. if you want to  remove the adjustment just send a new request to modify the quantity  and specify the current quantity (i.e the already adjusted and returned  in the details of the shopping cart) as the parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\ShoppingCartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad = "ad_example"; // string | Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form `productNumber@user`, with the user identifier as well.
$quantity = 1.2; // double | The new quantity for the given webshop ad. It could be a decimal  number only if the corresponding webshop ad allows it. If zero then the webshop ad is removed from the cart.

try {
    $result = $apiInstance->modifyItemQuantityOnShoppingCart($ad, $quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartsApi->modifyItemQuantityOnShoppingCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad** | **string**| Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form &#x60;productNumber@user&#x60;, with the user identifier as well. |
 **quantity** | **double**| The new quantity for the given webshop ad. It could be a decimal  number only if the corresponding webshop ad allows it. If zero then the webshop ad is removed from the cart. |

### Return type

**int**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeItemFromShoppingCart**
> int removeItemFromShoppingCart($ad)

Removes the given webshop ad from the corresponding shopping cart.

Removes the given webshop ad from the corresponding shopping cart according to the seller and currency and returns the total number of the remaining webshop ads in all carts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\ShoppingCartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad = "ad_example"; // string | Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form `productNumber@user`, with the user identifier as well.

try {
    $result = $apiInstance->removeItemFromShoppingCart($ad);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartsApi->removeItemFromShoppingCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad** | **string**| Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form &#x60;productNumber@user&#x60;, with the user identifier as well. |

### Return type

**int**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeShoppingCart**
> int removeShoppingCart($id)

Removes a shopping cart.

Removes the given shopping cart by id and returns the total number of the webshop ads in the remaining all carts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\ShoppingCartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification

try {
    $result = $apiInstance->removeShoppingCart($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartsApi->removeShoppingCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |

### Return type

**int**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

