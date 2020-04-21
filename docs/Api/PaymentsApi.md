# Cyclos\Api\PaymentsApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculatePerformPaymentInstallments**](PaymentsApi.md#calculateperformpaymentinstallments) | **GET** /{owner}/payments/installments | Calculates the default installments for a scheduled payment
[**dataForPerformPayment**](PaymentsApi.md#dataforperformpayment) | **GET** /{owner}/payments/data-for-perform | Returns configuration data for performing a payment
[**performPayment**](PaymentsApi.md#performpayment) | **POST** /{owner}/payments | Performs a payment from the given owner
[**previewPayment**](PaymentsApi.md#previewpayment) | **POST** /{owner}/payments/preview | Previews a payment before performing it

# **calculatePerformPaymentInstallments**
> \Cyclos\Api\Model\PerformScheduledPaymentInstallment[] calculatePerformPaymentInstallments($owner, $to, $count, $amount, $fields, $currency, $type, $first_date)

Calculates the default installments for a scheduled payment

Used to calculate installments for a scheduled payment. Will return an installment every month. When later performing the payment, these can be (optionally) customized (such as changing some due dates or amounts) and used on the payment installments.

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

$apiInstance = new Cyclos\Api\Functions\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = "owner_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user; - `system` for the system owner.
$to = "to_example"; // string | The payment destination
$count = 56; // int | The number of installments
$amount = amount_example; // float | The total scheduled payment amount
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$currency = "currency_example"; // string | The payment currency. Used when no `type` is not provided, to narrow the possible payment types by currency.
$type = "type_example"; // string | The payment type id or qualified internal name (in the form  `fromAccountType.paymentType`). If not provided, will use the first possible type (possibly narrowed by the `currency` parameter). However, if more than one type is available, a validation error will be raised.
$first_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The due date of the first installment. If none is provided, it is assumed that the first installment is paid immediately, and others will be with regular 1 month interval

try {
    $result = $apiInstance->calculatePerformPaymentInstallments($owner, $to, $count, $amount, $fields, $currency, $type, $first_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->calculatePerformPaymentInstallments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the system owner. |
 **to** | **string**| The payment destination |
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

# **dataForPerformPayment**
> \Cyclos\Api\Model\DataForTransaction dataForPerformPayment($owner, $fields, $to, $type)

Returns configuration data for performing a payment

Returns configuration data for performing a payment

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

$apiInstance = new Cyclos\Api\Functions\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = "owner_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user; - `system` for the system owner.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$to = "to_example"; // string | The payment destination. Either the string `system` for a payment to system or a user identification.
$type = "type_example"; // string | The payment type id or qualified internal name (in the form `fromAccountType.paymentType`). If no payment type is provided, the possible types will be returned, so the payer can choose.

try {
    $result = $apiInstance->dataForPerformPayment($owner, $fields, $to, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->dataForPerformPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the system owner. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **to** | **string**| The payment destination. Either the string &#x60;system&#x60; for a payment to system or a user identification. | [optional]
 **type** | **string**| The payment type id or qualified internal name (in the form &#x60;fromAccountType.paymentType&#x60;). If no payment type is provided, the possible types will be returned, so the payer can choose. | [optional]

### Return type

[**\Cyclos\Api\Model\DataForTransaction**](../Model/DataForTransaction.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **performPayment**
> \Cyclos\Api\Model\Transaction performPayment($body, $owner, $confirmation_password, $fields)

Performs a payment from the given owner

Performs either a direct, scheduled or recurring payment from the owner indicated on the path to the owner specified on the body. The destination user should be informed in the `subject` parameter. If the `subject` is `system`, it will be a payment to a system account. The payment id is returned on the response, and a link to the transaction details is returned on the `Location` header.

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

$apiInstance = new Cyclos\Api\Functions\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\PerformPayment(); // \Cyclos\Api\Model\PerformPayment | The perform payment parameters
$owner = "owner_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user; - `system` for the system owner.
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->performPayment($body, $owner, $confirmation_password, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->performPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\PerformPayment**](../Model/PerformPayment.md)| The perform payment parameters |
 **owner** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the system owner. |
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

# **previewPayment**
> \Cyclos\Api\Model\PaymentPreview previewPayment($body, $owner, $fields)

Previews a payment before performing it

Previews a payment, scheduled or recurring payment. The actual balance checking is not performed in the preview.

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

$apiInstance = new Cyclos\Api\Functions\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\PerformPayment(); // \Cyclos\Api\Model\PerformPayment | The perform payment parameters
$owner = "owner_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user; - `system` for the system owner.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->previewPayment($body, $owner, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->previewPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\PerformPayment**](../Model/PerformPayment.md)| The perform payment parameters |
 **owner** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the system owner. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\PaymentPreview**](../Model/PaymentPreview.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

