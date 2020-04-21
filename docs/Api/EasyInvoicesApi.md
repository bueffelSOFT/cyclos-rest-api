# Cyclos\Api\EasyInvoicesApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataForPerformEasyInvoice**](EasyInvoicesApi.md#dataforperformeasyinvoice) | **GET** /easy-invoices/data-for-perform/{to} | Returns data for an easy invoice to the given user.
[**getEasyInvoiceQrCode**](EasyInvoicesApi.md#geteasyinvoiceqrcode) | **GET** /easy-invoices/qr-code/{to} | Returns the QR-code image for the given easy invoice&#x27;s parameters
[**performEasyInvoice**](EasyInvoicesApi.md#performeasyinvoice) | **POST** /easy-invoices | Performs a direct payment from an easy invoice.
[**previewEasyInvoice**](EasyInvoicesApi.md#previeweasyinvoice) | **POST** /easy-invoices/preview | Previews a direct payment from an easy invoice before performing it.

# **dataForPerformEasyInvoice**
> \Cyclos\Api\Model\DataForEasyInvoice dataForPerformEasyInvoice($to, $fields, $amount, $type, $currency, $custom_fields)

Returns data for an easy invoice to the given user.

An easy invoice is a pre-filled payment from the authenticated user to another user. Other users can use this for a payment template to that user, with pre-filled data. If an amount is specified, then either there must be only payment types of a single currency to the given user, or either a payment type or currency must be informed. The `easyInvoice` channel will be used to perform this operation, i.e the access and perform payment configurations of that channel will be applied.

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

$apiInstance = new Cyclos\Api\Functions\EasyInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$to = "to_example"; // string | The user which will receive the easy invoice. Unlike other cases of user reference, in this case `self` cannot be used, because the URL may be shared with others, hence, `self` makes no sense.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$amount = amount_example; // float | The easy invoice amount. If provided and the user has multiple currencies, either `type` or `currency` is required.
$type = "type_example"; // string | The payment type id or qualified internal name (in the form `fromAccountType.paymentType`). Either this or `currency` should be informed if an `amount` was given and the user has multiple currencies.
$currency = "currency_example"; // string | The currency id or internal name. Either this or `type` should be informed if an `amount` was given and the user has multiple currencies.
$custom_fields = array("custom_fields_example"); // string[] | Custom field values. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by : (colon). For example, `customFields=field1:value1,field2:value2`. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, profileFields=field1:valueA|valueB. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, `customFields=rank:bronze|silver,birthDate:2000-01-01|2001-12-31` would match results whose custom field with internal name `rank` is either bronze or silver, and whose `birthDate` is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like `customFields=birthDate:|2001-12-31`.

try {
    $result = $apiInstance->dataForPerformEasyInvoice($to, $fields, $amount, $type, $currency, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyInvoicesApi->dataForPerformEasyInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to** | **string**| The user which will receive the easy invoice. Unlike other cases of user reference, in this case &#x60;self&#x60; cannot be used, because the URL may be shared with others, hence, &#x60;self&#x60; makes no sense. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **amount** | **float**| The easy invoice amount. If provided and the user has multiple currencies, either &#x60;type&#x60; or &#x60;currency&#x60; is required. | [optional]
 **type** | **string**| The payment type id or qualified internal name (in the form &#x60;fromAccountType.paymentType&#x60;). Either this or &#x60;currency&#x60; should be informed if an &#x60;amount&#x60; was given and the user has multiple currencies. | [optional]
 **currency** | **string**| The currency id or internal name. Either this or &#x60;type&#x60; should be informed if an &#x60;amount&#x60; was given and the user has multiple currencies. | [optional]
 **custom_fields** | [**string[]**](../Model/string.md)| Custom field values. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by : (colon). For example, &#x60;customFields&#x3D;field1:value1,field2:value2&#x60;. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, profileFields&#x3D;field1:valueA|valueB. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, &#x60;customFields&#x3D;rank:bronze|silver,birthDate:2000-01-01|2001-12-31&#x60; would match results whose custom field with internal name &#x60;rank&#x60; is either bronze or silver, and whose &#x60;birthDate&#x60; is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like &#x60;customFields&#x3D;birthDate:|2001-12-31&#x60;. | [optional]

### Return type

[**\Cyclos\Api\Model\DataForEasyInvoice**](../Model/DataForEasyInvoice.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEasyInvoiceQrCode**
> string getEasyInvoiceQrCode($to, $amount, $currency, $description, $type, $custom_fields, $size)

Returns the QR-code image for the given easy invoice's parameters

The generated image could be scanned (e.g by the mobile application) to create a payment ready to be confirmed. The `easyInvoice` channel will be used to perform this operation, i.e the access and perform payment configurations of that channel will be applied.

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

$apiInstance = new Cyclos\Api\Functions\EasyInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$to = "to_example"; // string | The user which will receive the easy invoice. Unlike other cases of user reference, in this case `self` cannot be used, because the URL may be shared with others, hence, `self` makes no sense.
$amount = amount_example; // float | The easy invoice amount. If provided and the user has multiple currencies, either `type` or `currency` is required.
$currency = "currency_example"; // string | The currency id or internal name. Either this or `type` should be informed if an `amount` was given and the user has multiple currencies.
$description = "description_example"; // string | The payment description
$type = "type_example"; // string | The payment type id or qualified internal name (in the form `fromAccountType.paymentType`). Either this or `currency` should be informed if an `amount` was given and the user has multiple currencies.
$custom_fields = array("custom_fields_example"); // string[] | Custom field values. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by : (colon). For example, `customFields=field1:value1,field2:value2`. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, profileFields=field1:valueA|valueB. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, `customFields=rank:bronze|silver,birthDate:2000-01-01|2001-12-31` would match results whose custom field with internal name `rank` is either bronze or silver, and whose `birthDate` is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like `customFields=birthDate:|2001-12-31`.
$size = new \Cyclos\Api\Model\ImageSizeEnum(); // \Cyclos\Api\Model\ImageSizeEnum | 

try {
    $result = $apiInstance->getEasyInvoiceQrCode($to, $amount, $currency, $description, $type, $custom_fields, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyInvoicesApi->getEasyInvoiceQrCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to** | **string**| The user which will receive the easy invoice. Unlike other cases of user reference, in this case &#x60;self&#x60; cannot be used, because the URL may be shared with others, hence, &#x60;self&#x60; makes no sense. |
 **amount** | **float**| The easy invoice amount. If provided and the user has multiple currencies, either &#x60;type&#x60; or &#x60;currency&#x60; is required. | [optional]
 **currency** | **string**| The currency id or internal name. Either this or &#x60;type&#x60; should be informed if an &#x60;amount&#x60; was given and the user has multiple currencies. | [optional]
 **description** | **string**| The payment description | [optional]
 **type** | **string**| The payment type id or qualified internal name (in the form &#x60;fromAccountType.paymentType&#x60;). Either this or &#x60;currency&#x60; should be informed if an &#x60;amount&#x60; was given and the user has multiple currencies. | [optional]
 **custom_fields** | [**string[]**](../Model/string.md)| Custom field values. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by : (colon). For example, &#x60;customFields&#x3D;field1:value1,field2:value2&#x60;. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, profileFields&#x3D;field1:valueA|valueB. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, &#x60;customFields&#x3D;rank:bronze|silver,birthDate:2000-01-01|2001-12-31&#x60; would match results whose custom field with internal name &#x60;rank&#x60; is either bronze or silver, and whose &#x60;birthDate&#x60; is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like &#x60;customFields&#x3D;birthDate:|2001-12-31&#x60;. | [optional]
 **size** | [**\Cyclos\Api\Model\ImageSizeEnum**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/png, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **performEasyInvoice**
> \Cyclos\Api\Model\Transaction performEasyInvoice($body, $confirmation_password, $fields)

Performs a direct payment from an easy invoice.

Performs a direct payment from the authenticated user to the owner specified on the body. The destination user should be informed in the `subject` parameter (the subject `system` is not allowed). The payment id is returned on the response, and a link to the transaction details is returned on the `Location` header. The `easyInvoice` channel will be used to perform this operation, i.e the access and perform payment configurations of that channel will be applied.

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

$apiInstance = new Cyclos\Api\Functions\EasyInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\PerformPayment(); // \Cyclos\Api\Model\PerformPayment | The perform payment parameters
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->performEasyInvoice($body, $confirmation_password, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyInvoicesApi->performEasyInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\PerformPayment**](../Model/PerformPayment.md)| The perform payment parameters |
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\Transaction**](../Model/Transaction.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **previewEasyInvoice**
> \Cyclos\Api\Model\PaymentPreview previewEasyInvoice($body, $fields)

Previews a direct payment from an easy invoice before performing it.

Previews a direct payment from the logged created from an easy invoice. The actual balance checking is not performed in the preview. The `easyInvoice` channel will be used to perform this operation, i.e the access and perform payment configurations of that channel will be applied.

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

$apiInstance = new Cyclos\Api\Functions\EasyInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\PerformPayment(); // \Cyclos\Api\Model\PerformPayment | The perform payment parameters
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->previewEasyInvoice($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyInvoicesApi->previewEasyInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\PerformPayment**](../Model/PerformPayment.md)| The perform payment parameters |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\PaymentPreview**](../Model/PaymentPreview.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

