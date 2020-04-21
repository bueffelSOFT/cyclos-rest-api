# Cyclos\Api\POSApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateReceivePaymentInstallments**](POSApi.md#calculatereceivepaymentinstallments) | **GET** /pos/installments | Calculates the default installments for a scheduled payment
[**dataForReceivePayment**](POSApi.md#dataforreceivepayment) | **GET** /pos/data-for-pos | Returns configuration data for receiving a payment (POS)
[**previewReceivePayment**](POSApi.md#previewreceivepayment) | **POST** /pos/preview | Previews a POS payment before receiving it
[**receivePayment**](POSApi.md#receivepayment) | **POST** /pos | Receives a payment (POS)
[**receivePaymentCreateDeviceConfirmation**](POSApi.md#receivepaymentcreatedeviceconfirmation) | **POST** /pos/device-confirmations | Creates a pending device confirmation for a pos payment.
[**receivePaymentDeleteDeviceConfirmation**](POSApi.md#receivepaymentdeletedeviceconfirmation) | **DELETE** /pos/device-confirmations/{id} | Deletes a device confirmation for a POS payer.
[**receivePaymentDeviceConfirmationQrCode**](POSApi.md#receivepaymentdeviceconfirmationqrcode) | **GET** /pos/device-confirmations/{id}/qr-code | Returns the QR-code image for the given device confirmation only if it was not yet approved / rejected
[**receivePaymentOtp**](POSApi.md#receivepaymentotp) | **POST** /pos/otp | Generates a new One-Time-Password (OTP) for a pos payment
[**receivePaymentViewDeviceConfirmation**](POSApi.md#receivepaymentviewdeviceconfirmation) | **GET** /pos/device-confirmations/{id} | Shows the details of a device confirmation for a POS payer.

# **calculateReceivePaymentInstallments**
> \Cyclos\Api\Model\PerformScheduledPaymentInstallment[] calculateReceivePaymentInstallments($from, $count, $amount, $fields, $currency, $type, $first_date)

Calculates the default installments for a scheduled payment

Used to calculate installments for a scheduled payment. Will return an installment every month. When later receiving the payment, these can be (optionally) customized (such as changing some due dates or amounts) and used on the payment installments.

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

$apiInstance = new Cyclos\Api\Functions\POSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | The payment origin
$count = 56; // int | The number of installments
$amount = amount_example; // float | The total scheduled payment amount
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$currency = "currency_example"; // string | The payment currency. Used when no `type` is not provided, to narrow the possible payment types by currency.
$type = "type_example"; // string | The payment type id or qualified internal name (in the form  `fromAccountType.paymentType`). If not provided, will use the first possible type (possibly narrowed by the `currency` parameter). However, if more than one type is available, a validation error will be raised.
$first_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The due date of the first installment. If none is provided, it is assumed that the first installment is paid immediately, and others will be with regular 1 month interval

try {
    $result = $apiInstance->calculateReceivePaymentInstallments($from, $count, $amount, $fields, $currency, $type, $first_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling POSApi->calculateReceivePaymentInstallments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| The payment origin |
 **count** | **int**| The number of installments |
 **amount** | **float**| The total scheduled payment amount |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **currency** | **string**| The payment currency. Used when no &#x60;type&#x60; is not provided, to narrow the possible payment types by currency. | [optional]
 **type** | **string**| The payment type id or qualified internal name (in the form  &#x60;fromAccountType.paymentType&#x60;). If not provided, will use the first possible type (possibly narrowed by the &#x60;currency&#x60; parameter). However, if more than one type is available, a validation error will be raised. | [optional]
 **first_date** | **\DateTime**| The due date of the first installment. If none is provided, it is assumed that the first installment is paid immediately, and others will be with regular 1 month interval | [optional]

### Return type

[**\Cyclos\Api\Model\PerformScheduledPaymentInstallment[]**](../Model/PerformScheduledPaymentInstallment.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataForReceivePayment**
> \Cyclos\Api\Model\DataForTransaction dataForReceivePayment($fields, $from, $type)

Returns configuration data for receiving a payment (POS)

Returns configuration data for receiving a payment in POS operation

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

$apiInstance = new Cyclos\Api\Functions\POSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$from = "from_example"; // string | Identification of the payer user
$type = "type_example"; // string | The payment type id or qualified internal name (in the form `fromAccountType.paymentType`). If no payment type is provided, the possible types will be returned, so the payer can choose.

try {
    $result = $apiInstance->dataForReceivePayment($fields, $from, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling POSApi->dataForReceivePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **from** | **string**| Identification of the payer user | [optional]
 **type** | **string**| The payment type id or qualified internal name (in the form &#x60;fromAccountType.paymentType&#x60;). If no payment type is provided, the possible types will be returned, so the payer can choose. | [optional]

### Return type

[**\Cyclos\Api\Model\DataForTransaction**](../Model/DataForTransaction.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **previewReceivePayment**
> \Cyclos\Api\Model\PaymentPreview previewReceivePayment($body, $fields)

Previews a POS payment before receiving it

Previews a payment or scheduled payment. The actual balance checking is not performed in the preview.

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

$apiInstance = new Cyclos\Api\Functions\POSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\PerformPayment(); // \Cyclos\Api\Model\PerformPayment | The receive payment parameters
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->previewReceivePayment($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling POSApi->previewReceivePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\PerformPayment**](../Model/PerformPayment.md)| The receive payment parameters |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\PaymentPreview**](../Model/PaymentPreview.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **receivePayment**
> \Cyclos\Api\Model\Transaction receivePayment($body, $confirmation_password, $fields)

Receives a payment (POS)

Receives either a direct or scheduled payment in a POS operation for the authenticated user. The payer user should be informed in the `subject` parameter. The payment id is returned on the response, and a link to the transaction details is returned on the `Location` header.

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

$apiInstance = new Cyclos\Api\Functions\POSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\PerformPayment(); // \Cyclos\Api\Model\PerformPayment | The receive payment parameters
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->receivePayment($body, $confirmation_password, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling POSApi->receivePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\PerformPayment**](../Model/PerformPayment.md)| The receive payment parameters |
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

# **receivePaymentCreateDeviceConfirmation**
> string receivePaymentCreateDeviceConfirmation($body)

Creates a pending device confirmation for a pos payment.

Creates a device confirmation to confirm a pos payment. The confirmation will have a QR code that can be read (e.g with the Mobile App) to be approved / rejected by the payer. The confirmation belongs to the payer, not the authenticated user. The entire payment object must be sent on the request body. This is the same object which is sent both either preview or actually receive the payment.

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

$apiInstance = new Cyclos\Api\Functions\POSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\PerformPayment(); // \Cyclos\Api\Model\PerformPayment | The receive payment parameters

try {
    $result = $apiInstance->receivePaymentCreateDeviceConfirmation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling POSApi->receivePaymentCreateDeviceConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\PerformPayment**](../Model/PerformPayment.md)| The receive payment parameters |

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **receivePaymentDeleteDeviceConfirmation**
> receivePaymentDeleteDeviceConfirmation($id, $payer, $currency, $type)

Deletes a device confirmation for a POS payer.

Deletes a device confirmation for the payer of pos payment. The confirmation belongs to the payer, not the authenticated user. The entire payment object must be sent on the request body. This is the same object which is sent both either preview or actually receive the payment.

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

$apiInstance = new Cyclos\Api\Functions\POSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$payer = "payer_example"; // string | A user identification value, such as id, username, e-mail, phone, etc. Id is always allowed, others depend on Cyclos configuration. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, `'1234567890`;
$currency = "currency_example"; // string | The currency id or internal name. Only used when not specifying a payment type. In this case, will narrow the search for the payment type.
$type = "type_example"; // string | The payment type, either the id or qualified internal name (in the form `fromAccountType.paymentType`). If no payment type is specified, if a single one is possible, it will be used. If a currency is specified, it will be taken into account in order to find the payment type. If, however, there would be multiple possibilities, a validation error is returned.

try {
    $apiInstance->receivePaymentDeleteDeviceConfirmation($id, $payer, $currency, $type);
} catch (Exception $e) {
    echo 'Exception when calling POSApi->receivePaymentDeleteDeviceConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **payer** | **string**| A user identification value, such as id, username, e-mail, phone, etc. Id is always allowed, others depend on Cyclos configuration. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, &#x60;&#x27;1234567890&#x60;; |
 **currency** | **string**| The currency id or internal name. Only used when not specifying a payment type. In this case, will narrow the search for the payment type. | [optional]
 **type** | **string**| The payment type, either the id or qualified internal name (in the form &#x60;fromAccountType.paymentType&#x60;). If no payment type is specified, if a single one is possible, it will be used. If a currency is specified, it will be taken into account in order to find the payment type. If, however, there would be multiple possibilities, a validation error is returned. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **receivePaymentDeviceConfirmationQrCode**
> string receivePaymentDeviceConfirmationQrCode($id, $payer, $size)

Returns the QR-code image for the given device confirmation only if it was not yet approved / rejected

This request will return the image contents as expected but our api  documentation page (or any other usage of an &lt;img&gt; tag), created  using swagger-ui, generates a second request to include the image in the page. This new (GET) request won't send the authentication parameters and  as this path requires authentication the image will be shown as broken. Optionally, to solve the problem described above and to allow authenticate the user when using sessions, a `sessionToken` or `accessClientToken`  query parameter could be specified.

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

$apiInstance = new Cyclos\Api\Functions\POSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$payer = "payer_example"; // string | The payer, either a user principal (id, login name,  etc) or the word `system` when the payment is to be performed to / from a system account. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, `'1234567890`.
$size = new \Cyclos\Api\Model\ImageSizeEnum(); // \Cyclos\Api\Model\ImageSizeEnum | 

try {
    $result = $apiInstance->receivePaymentDeviceConfirmationQrCode($id, $payer, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling POSApi->receivePaymentDeviceConfirmationQrCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **payer** | **string**| The payer, either a user principal (id, login name,  etc) or the word &#x60;system&#x60; when the payment is to be performed to / from a system account. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, &#x60;&#x27;1234567890&#x60;. |
 **size** | [**\Cyclos\Api\Model\ImageSizeEnum**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/png, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **receivePaymentOtp**
> receivePaymentOtp($body, $medium)

Generates a new One-Time-Password (OTP) for a pos payment

Sends a new OTP for the customer of the POS for a payment. The OTP belongs to the payer, not the authenticated user. The entire payment object must be sent on the request body. This is the same object which is sent both either preview or actually receive the payment.

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

$apiInstance = new Cyclos\Api\Functions\POSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\PerformPayment(); // \Cyclos\Api\Model\PerformPayment | The receive payment parameters
$medium = new \Cyclos\Api\Model\SendMediumEnum(); // \Cyclos\Api\Model\SendMediumEnum | The medium the user wants to receive the otp

try {
    $apiInstance->receivePaymentOtp($body, $medium);
} catch (Exception $e) {
    echo 'Exception when calling POSApi->receivePaymentOtp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\PerformPayment**](../Model/PerformPayment.md)| The receive payment parameters |
 **medium** | [**\Cyclos\Api\Model\SendMediumEnum**](../Model/.md)| The medium the user wants to receive the otp |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **receivePaymentViewDeviceConfirmation**
> \Cyclos\Api\Model\DeviceConfirmationView receivePaymentViewDeviceConfirmation($id, $payer, $currency, $type)

Shows the details of a device confirmation for a POS payer.

Shows the details of a device confirmation for POS payer. The confirmation belongs to the payer but must had been created by the authenticated user. The entire payment object must be sent on the request body. This is the same object which is sent both either preview or actually receive the payment

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

$apiInstance = new Cyclos\Api\Functions\POSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$payer = "payer_example"; // string | A user identification value, such as id, username, e-mail, phone, etc. Id is always allowed, others depend on Cyclos configuration. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, `'1234567890`;
$currency = "currency_example"; // string | The currency id or internal name. Only used when not specifying a payment type. In this case, will narrow the search for the payment type.
$type = "type_example"; // string | The payment type, either the id or qualified internal name (in the form `fromAccountType.paymentType`). If no payment type is specified, if a single one is possible, it will be used. If a currency is specified, it will be taken into account in order to find the payment type. If, however, there would be multiple possibilities, a validation error is returned.

try {
    $result = $apiInstance->receivePaymentViewDeviceConfirmation($id, $payer, $currency, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling POSApi->receivePaymentViewDeviceConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **payer** | **string**| A user identification value, such as id, username, e-mail, phone, etc. Id is always allowed, others depend on Cyclos configuration. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, &#x60;&#x27;1234567890&#x60;; |
 **currency** | **string**| The currency id or internal name. Only used when not specifying a payment type. In this case, will narrow the search for the payment type. | [optional]
 **type** | **string**| The payment type, either the id or qualified internal name (in the form &#x60;fromAccountType.paymentType&#x60;). If no payment type is specified, if a single one is possible, it will be used. If a currency is specified, it will be taken into account in order to find the payment type. If, however, there would be multiple possibilities, a validation error is returned. | [optional]

### Return type

[**\Cyclos\Api\Model\DeviceConfirmationView**](../Model/DeviceConfirmationView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

