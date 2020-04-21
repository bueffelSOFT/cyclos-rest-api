# Cyclos\Api\OrdersApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptOrderByBuyer**](OrdersApi.md#acceptorderbybuyer) | **POST** /orders/{order}/buyer/accept | Accepts a pending order by buyer.
[**acceptOrderBySeller**](OrdersApi.md#acceptorderbyseller) | **POST** /orders/{order}/seller/accept | Accepts a pending order by seller.
[**getDataForSetDeliveryMethod**](OrdersApi.md#getdataforsetdeliverymethod) | **GET** /orders/{order}/seller/data-for-set-delivery | Returns configuration data to set delivery method data by seller.
[**getOrderDataForAcceptByBuyer**](OrdersApi.md#getorderdataforacceptbybuyer) | **GET** /orders/{order}/buyer/data-for-accept | Returns configuration data for accept an order by buyer.
[**rejectOrder**](OrdersApi.md#rejectorder) | **POST** /orders/{order}/reject | Rejects a pending order.
[**searchUserOrders**](OrdersApi.md#searchuserorders) | **GET** /{user}/orders | Searches for orders of a specific user.
[**setDeliveryMethod**](OrdersApi.md#setdeliverymethod) | **POST** /orders/{order}/seller/set-delivery | Sets delivery method data by seller.
[**viewOrder**](OrdersApi.md#vieworder) | **GET** /orders/{order} | Returns details of an order.

# **acceptOrderByBuyer**
> acceptOrderByBuyer($order, $body, $confirmation_password)

Accepts a pending order by buyer.

Accepts a pending order by buyer generating the corresponding payment. The order status must be `pendingBuyer` to be accepted by the authenticated user (i.e the buyer). The `paymentType` and the `confirmationPassword` are required under the following circumstances: `paymentType`: Only required if the order was generated as a sale by the  seller and not from the shopping cart check-out (Sales are not supported yet). `confirmationPassword`: Only required if at check-out a delivery method was not set or its charge type is `negotiatied`. The possible statuses after an order acceptance are: - `paymentPending`: if the generated payment is awaiting authorization; - `completed`: if the payment was done.

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

$apiInstance = new Cyclos\Api\Functions\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = "order_example"; // string | Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote.
$body = new \Cyclos\Api\Model\AcceptOrderByBuyer(); // \Cyclos\Api\Model\AcceptOrderByBuyer | The parameters for accepting the order.
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.

try {
    $apiInstance->acceptOrderByBuyer($order, $body, $confirmation_password);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->acceptOrderByBuyer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote. |
 **body** | [**\Cyclos\Api\Model\AcceptOrderByBuyer**](../Model/AcceptOrderByBuyer.md)| The parameters for accepting the order. | [optional]
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acceptOrderBySeller**
> acceptOrderBySeller($order, $body)

Accepts a pending order by seller.

Accepts a pending order by seller generating the corresponding payment. The order status must be `pendingSeller` to be accepted by the authenticated user (i.e seller). The possible statuses after order acceptance are: - `paymentPending`: if the generated payment is awaiting for authorization; - `completed`: if the payment was done.

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

$apiInstance = new Cyclos\Api\Functions\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = "order_example"; // string | Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote.
$body = new \Cyclos\Api\Model\AcceptOrderBySeller(); // \Cyclos\Api\Model\AcceptOrderBySeller | The parameters for accepting the order.

try {
    $apiInstance->acceptOrderBySeller($order, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->acceptOrderBySeller: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote. |
 **body** | [**\Cyclos\Api\Model\AcceptOrderBySeller**](../Model/AcceptOrderBySeller.md)| The parameters for accepting the order. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataForSetDeliveryMethod**
> \Cyclos\Api\Model\OrderDataForSetDeliveryMethod getDataForSetDeliveryMethod($order, $fields)

Returns configuration data to set delivery method data by seller.

Returns configuration data to set delivery method data by seller of an order given by id.

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

$apiInstance = new Cyclos\Api\Functions\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = "order_example"; // string | Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getDataForSetDeliveryMethod($order, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getDataForSetDeliveryMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\OrderDataForSetDeliveryMethod**](../Model/OrderDataForSetDeliveryMethod.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderDataForAcceptByBuyer**
> \Cyclos\Api\Model\OrderDataForAcceptByBuyer getOrderDataForAcceptByBuyer($order, $fields)

Returns configuration data for accept an order by buyer.

Returns configuration data for accept an order given by id as the buyer.

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

$apiInstance = new Cyclos\Api\Functions\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = "order_example"; // string | Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getOrderDataForAcceptByBuyer($order, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderDataForAcceptByBuyer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\OrderDataForAcceptByBuyer**](../Model/OrderDataForAcceptByBuyer.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rejectOrder**
> rejectOrder($order, $body)

Rejects a pending order.

Rejects a pending order by buyer or seller. The order status must be `pendingBuyer` or `pendingSeller` to be rejected by the authenticated user (buyer/seller). The possible statuses after an order rejection are: - `rejectedBySeller`: if the authenticated user is the seller; - `rejectedByBuyer`: if the authenticated user is the buyer.

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

$apiInstance = new Cyclos\Api\Functions\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = "order_example"; // string | Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote.
$body = new \Cyclos\Api\Model\RejectOrder(); // \Cyclos\Api\Model\RejectOrder | The parameters for rejecting the order.

try {
    $apiInstance->rejectOrder($order, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->rejectOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote. |
 **body** | [**\Cyclos\Api\Model\RejectOrder**](../Model/RejectOrder.md)| The parameters for rejecting the order. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUserOrders**
> \Cyclos\Api\Model\UserOrderResult[] searchUserOrders($user, $fields, $creation_period, $number, $page, $page_size, $related_user, $sales, $skip_total_count, $statuses)

Searches for orders of a specific user.

Returns a page of orders that match a given criteria for a given user. The authenticated user must be the seller, buyer or a manager user with permission to view purchases or sales. A list of statuses is accepted but at this moment only one status can be specified.

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

$apiInstance = new Cyclos\Api\Functions\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$creation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum order creation date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$number = "number_example"; // string | The generated order number according to the webshop settings.
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$related_user = "related_user_example"; // string | Either id or an identification, such as login name, e-mail, etc, for the seller or buyer according whether we are searching for purchases or sales. The allowed identification methods are those the authenticated user can use on keywords search.
$sales = true; // bool | Are we searching for sales or purchases? If not specified it's assumed purchases (i.e `false`)
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$statuses = array(new \Cyclos\Api\Model\OrderStatusEnum()); // \Cyclos\Api\Model\OrderStatusEnum[] | 

try {
    $result = $apiInstance->searchUserOrders($user, $fields, $creation_period, $number, $page, $page_size, $related_user, $sales, $skip_total_count, $statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->searchUserOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **creation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum order creation date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **number** | **string**| The generated order number according to the webshop settings. | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **related_user** | **string**| Either id or an identification, such as login name, e-mail, etc, for the seller or buyer according whether we are searching for purchases or sales. The allowed identification methods are those the authenticated user can use on keywords search. | [optional]
 **sales** | **bool**| Are we searching for sales or purchases? If not specified it&#x27;s assumed purchases (i.e &#x60;false&#x60;) | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **statuses** | [**\Cyclos\Api\Model\OrderStatusEnum[]**](../Model/\Cyclos\Api\Model\OrderStatusEnum.md)|  | [optional]

### Return type

[**\Cyclos\Api\Model\UserOrderResult[]**](../Model/UserOrderResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDeliveryMethod**
> setDeliveryMethod($order, $body)

Sets delivery method data by seller.

Sets the delivery method data by seller for the order given by id. This operation can be used only if the order is in status `pendingSeller` and has not already set delivery method data. After the delivery method has been set the order will be enter in status `pendingBuyer` to be accepted by buyer.

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

$apiInstance = new Cyclos\Api\Functions\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = "order_example"; // string | Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote.
$body = new \Cyclos\Api\Model\SetDeliveryMethod(); // \Cyclos\Api\Model\SetDeliveryMethod | The parameters for setting the delivery method.

try {
    $apiInstance->setDeliveryMethod($order, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->setDeliveryMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote. |
 **body** | [**\Cyclos\Api\Model\SetDeliveryMethod**](../Model/SetDeliveryMethod.md)| The parameters for setting the delivery method. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewOrder**
> \Cyclos\Api\Model\OrderView viewOrder($order, $fields)

Returns details of an order.

Returns detailed information of an order given by id.

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

$apiInstance = new Cyclos\Api\Functions\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = "order_example"; // string | Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->viewOrder($order, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->viewOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| Either the order id or number. If the number is solely comprised of numbers, it must be prefixed by a single quote. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\OrderView**](../Model/OrderView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

