# Cyclos\Api\NFCApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelNfc**](NFCApi.md#cancelnfc) | **POST** /nfc/cancel | Cancels a NFC tag
[**createDeviceConfirmationForPersonalizeNfc**](NFCApi.md#createdeviceconfirmationforpersonalizenfc) | **POST** /nfc/personalize/device-confirmations | Creates a pending device confirmation for personalizing a NFC tag.
[**deleteDeviceConfirmationForPersonalizeNfc**](NFCApi.md#deletedeviceconfirmationforpersonalizenfc) | **DELETE** /nfc/personalize/device-confirmations/{id} | Deletes a device confirmation that was created to confirm the personalize nfc-tag operation.
[**getDeviceConfirmationQrCodeForPersonalizeNfc**](NFCApi.md#getdeviceconfirmationqrcodeforpersonalizenfc) | **GET** /nfc/personalize/device-confirmations/{id}/qr-code | Returns the QR-code image for the given device confirmation only if it was not yet approved / rejected
[**getNfcDataForInitialize**](NFCApi.md#getnfcdataforinitialize) | **GET** /nfc/data-for-initialize | Returns data for NFC tag initialization. Optionally the user can personalize the tag too.
[**getNfcDataForPersonalize**](NFCApi.md#getnfcdataforpersonalize) | **GET** /nfc/data-for-personalize | Returns data for perfornalizing an initialized NFC tag for a user
[**getNfcToken**](NFCApi.md#getnfctoken) | **GET** /nfc/{tokenType}/{value} | Retrieve the NFC token detailed data
[**getOtpForPersonalizeNfc**](NFCApi.md#getotpforpersonalizenfc) | **POST** /nfc/personalize/otp | Generates a new One-Time-Password (OTP) for personalizing a NFC tag
[**initializeNfc**](NFCApi.md#initializenfc) | **POST** /nfc/initialize | Initializes a NFC tag
[**nfcExternalAuth**](NFCApi.md#nfcexternalauth) | **POST** /nfc/external-auth | NFC external authentication
[**personalizeNfc**](NFCApi.md#personalizenfc) | **POST** /nfc/personalize | Personalizes a NFC tag
[**viewDeviceConfirmationForPersonalizeNfc**](NFCApi.md#viewdeviceconfirmationforpersonalizenfc) | **GET** /nfc/personalize/device-confirmations/{id} | Shows the details of a device confirmation that was created to confirm the personalize nfc-tag operation.

# **cancelNfc**
> cancelNfc($body)

Cancels a NFC tag

Cancels a NFC token. Must be authenticated as a manager (administrator / broker) of the token owner, and have the correct permission.

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\NfcTokenParameter(); // \Cyclos\Api\Model\NfcTokenParameter | The parameters for canceling.

try {
    $apiInstance->cancelNfc($body);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->cancelNfc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\NfcTokenParameter**](../Model/NfcTokenParameter.md)| The parameters for canceling. |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDeviceConfirmationForPersonalizeNfc**
> string createDeviceConfirmationForPersonalizeNfc($body)

Creates a pending device confirmation for personalizing a NFC tag.

Creates a device confirmation for the customer which will own the NFC tag. The confirmation must be approved by the NFC tag owner, not the authenticated user, i.e the confirmation QR-code must be read (e.g with the Mobile App) by the customer. After the confirmation being processed the authenticated user will be notified.

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\NfcPersonalizeDataParameter(); // \Cyclos\Api\Model\NfcPersonalizeDataParameter | The parameters identifying the token and the user

try {
    $result = $apiInstance->createDeviceConfirmationForPersonalizeNfc($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->createDeviceConfirmationForPersonalizeNfc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\NfcPersonalizeDataParameter**](../Model/NfcPersonalizeDataParameter.md)| The parameters identifying the token and the user |

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeviceConfirmationForPersonalizeNfc**
> deleteDeviceConfirmationForPersonalizeNfc($id, $user, $type)

Deletes a device confirmation that was created to confirm the personalize nfc-tag operation.

Deletes a device confirmation for the user which will own the NFC tag. The confirmation belongs to that user, not the authenticated user. The same parameters used for the creation must be sent for this operation too.

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$user = "user_example"; // string | The principal (id, login name,  etc) of the user who will own the tag. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, `'1234567890`.
$type = "type_example"; // string | Either the identifier or internal name of fhe NFC token type

try {
    $apiInstance->deleteDeviceConfirmationForPersonalizeNfc($id, $user, $type);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->deleteDeviceConfirmationForPersonalizeNfc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **user** | **string**| The principal (id, login name,  etc) of the user who will own the tag. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, &#x60;&#x27;1234567890&#x60;. |
 **type** | **string**| Either the identifier or internal name of fhe NFC token type |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceConfirmationQrCodeForPersonalizeNfc**
> string getDeviceConfirmationQrCodeForPersonalizeNfc($id, $user, $type, $size)

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$user = "user_example"; // string | The principal (id, login name,  etc) of the user who will own the tag. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, `'1234567890`.
$type = "type_example"; // string | Either the identifier or internal name of fhe NFC token type
$size = new \Cyclos\Api\Model\ImageSizeEnum(); // \Cyclos\Api\Model\ImageSizeEnum | 

try {
    $result = $apiInstance->getDeviceConfirmationQrCodeForPersonalizeNfc($id, $user, $type, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->getDeviceConfirmationQrCodeForPersonalizeNfc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **user** | **string**| The principal (id, login name,  etc) of the user who will own the tag. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, &#x60;&#x27;1234567890&#x60;. |
 **type** | **string**| Either the identifier or internal name of fhe NFC token type |
 **size** | [**\Cyclos\Api\Model\ImageSizeEnum**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/png, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNfcDataForInitialize**
> \Cyclos\Api\Model\NfcDataForInitialize getNfcDataForInitialize($fields)

Returns data for NFC tag initialization. Optionally the user can personalize the tag too.

Returns data with the NFC token types the authenticated user can use to initialize NFC tags.

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getNfcDataForInitialize($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->getNfcDataForInitialize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\NfcDataForInitialize**](../Model/NfcDataForInitialize.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNfcDataForPersonalize**
> \Cyclos\Api\Model\NfcDataForPersonalize getNfcDataForPersonalize($token_type, $user, $fields)

Returns data for perfornalizing an initialized NFC tag for a user

Returns data for personalizing a NFC tag for a given user.

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_type = "token_type_example"; // string | The token type reference (id or internal name) of the token principal type, which is stored on the NFC card being personalized.
$user = "user_example"; // string | The user reference (id or an identification method) of the user to whom the NFC tag will be personalized. When authenticated as a manager of that user (administrator or broker) no confirmation password will be required for the personalization. However, if the authenticated user is not a manager, the user will be required a confirmation password.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getNfcDataForPersonalize($token_type, $user, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->getNfcDataForPersonalize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_type** | **string**| The token type reference (id or internal name) of the token principal type, which is stored on the NFC card being personalized. |
 **user** | **string**| The user reference (id or an identification method) of the user to whom the NFC tag will be personalized. When authenticated as a manager of that user (administrator or broker) no confirmation password will be required for the personalization. However, if the authenticated user is not a manager, the user will be required a confirmation password. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\NfcDataForPersonalize**](../Model/NfcDataForPersonalize.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNfcToken**
> \Cyclos\Api\Model\TokenDetailed getNfcToken($token_type, $value)

Retrieve the NFC token detailed data

Returns the token's data and the user owner of the token (i.e the assigned user, if any)

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_type = "token_type_example"; // string | The internal name or id of the token type
$value = "value_example"; // string | The token value

try {
    $result = $apiInstance->getNfcToken($token_type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->getNfcToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_type** | **string**| The internal name or id of the token type |
 **value** | **string**| The token value |

### Return type

[**\Cyclos\Api\Model\TokenDetailed**](../Model/TokenDetailed.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOtpForPersonalizeNfc**
> getOtpForPersonalizeNfc($body, $medium)

Generates a new One-Time-Password (OTP) for personalizing a NFC tag

Sends a new OTP for the customer which will own the NFC tag. The OTP belongs to the NFC tag owner, not the authenticated user.

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\NfcPersonalizeDataParameter(); // \Cyclos\Api\Model\NfcPersonalizeDataParameter | The parameters identifying the token and the user
$medium = new \Cyclos\Api\Model\SendMediumEnum(); // \Cyclos\Api\Model\SendMediumEnum | The medium the user wants to receive the otp

try {
    $apiInstance->getOtpForPersonalizeNfc($body, $medium);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->getOtpForPersonalizeNfc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\NfcPersonalizeDataParameter**](../Model/NfcPersonalizeDataParameter.md)| The parameters identifying the token and the user |
 **medium** | [**\Cyclos\Api\Model\SendMediumEnum**](../Model/.md)| The medium the user wants to receive the otp |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initializeNfc**
> \Cyclos\Api\Model\NfcInitializeResult initializeNfc($body)

Initializes a NFC tag

Initializes a NFC tag, creating a new `token` in Cyclos. Returns the keys (PICC Master Key, Application Master Key and the Operational Key) to be stored on the NFC tag.

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\NfcInitializeParameter(); // \Cyclos\Api\Model\NfcInitializeParameter | The parameters for initializing the NFC tag. If the `user` value is left blank, the NFC tag will be only initialized, but not personalized (assigned to any user). If a user is given, the permission to personalize is required (besides the permission to initialize), and is a shortcut to initializing and later personalizing the tag. The initialization is a sensitive operation, as the result contains the plain keys that should be stored on the NFC tag. Hence, can only be performed by managers (with granted permission). Later on, other users (for example, businesses) will be able to personalize the NFC tag for customers.

try {
    $result = $apiInstance->initializeNfc($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->initializeNfc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\NfcInitializeParameter**](../Model/NfcInitializeParameter.md)| The parameters for initializing the NFC tag. If the &#x60;user&#x60; value is left blank, the NFC tag will be only initialized, but not personalized (assigned to any user). If a user is given, the permission to personalize is required (besides the permission to initialize), and is a shortcut to initializing and later personalizing the tag. The initialization is a sensitive operation, as the result contains the plain keys that should be stored on the NFC tag. Hence, can only be performed by managers (with granted permission). Later on, other users (for example, businesses) will be able to personalize the NFC tag for customers. |

### Return type

[**\Cyclos\Api\Model\NfcInitializeResult**](../Model/NfcInitializeResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nfcExternalAuth**
> \Cyclos\Api\Model\NfcExternalAuthenticateResult nfcExternalAuth($body)

NFC external authentication

The NFC tag will normally perform a mutual authentication, by first generating a challenge that must be encrypted by the external system with the device key. With this the external system is authenticated. Cyclos also returns a challenge that should be encrypted by the NFC tag. This challenge can later be passed in specific operations (for example, when performing a payment) for Cyclos to make sure the NFC tag is present on the operation.

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\NfcExternalAuthenticateParameter(); // \Cyclos\Api\Model\NfcExternalAuthenticateParameter | The parameters for the external authentication. If the `token` value is informed, it will be performed an external authentication with the token itself, using the Application Master Key (AMK). If the `token` is not informed, the authentication will be done using the PICC Master Key (PMK), which is useful, for example, when initializing the NFC tag.

try {
    $result = $apiInstance->nfcExternalAuth($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->nfcExternalAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\NfcExternalAuthenticateParameter**](../Model/NfcExternalAuthenticateParameter.md)| The parameters for the external authentication. If the &#x60;token&#x60; value is informed, it will be performed an external authentication with the token itself, using the Application Master Key (AMK). If the &#x60;token&#x60; is not informed, the authentication will be done using the PICC Master Key (PMK), which is useful, for example, when initializing the NFC tag. |

### Return type

[**\Cyclos\Api\Model\NfcExternalAuthenticateResult**](../Model/NfcExternalAuthenticateResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalizeNfc**
> personalizeNfc($body, $confirmation_password)

Personalizes a NFC tag

Personalization requires a NFC tag that was previously initialized, but is still unassigned. This operation doesn't store any key in the NFC tag itself, hence the plain keys are not returned. What is needed is an external authentication with the NFC tag, in order to ensure the card is physically present. The flow for personalizing a tag is: - `GET /nfc/data-for-personalize?user={user}`: Obtain the data for   personalizing NFC tags for this user. The most important information   is which the confirmation password will be required, if any; - `POST /nfc/external-auth`: With a challenge previously encrypted by the   NFC tag, invoke this operation. If the challenge matches the NFC token   in Cyclos, it will be encrypted and returned. Also a new challenge will   be returned, which should be then encrypted by the NFC tag for later   being sent back; - `POST /nfc/personalize`: With the encrypted challenge and the   confirmation password (if any), this operation will update the NFC   token in Cyclos, so it is now assigned to the specified user. From   this point on, the NFC tag is operational.

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\NfcPersonalizeParameter(); // \Cyclos\Api\Model\NfcPersonalizeParameter | The parameters for the initialization.
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.

try {
    $apiInstance->personalizeNfc($body, $confirmation_password);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->personalizeNfc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\NfcPersonalizeParameter**](../Model/NfcPersonalizeParameter.md)| The parameters for the initialization. |
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewDeviceConfirmationForPersonalizeNfc**
> \Cyclos\Api\Model\DeviceConfirmationView viewDeviceConfirmationForPersonalizeNfc($id, $user, $type)

Shows the details of a device confirmation that was created to confirm the personalize nfc-tag operation.

Shows a device confirmation for the user which will own the NFC tag. The confirmation belongs to that user, not the authenticated user. The same parameters used for the creation must be sent for this operation too.

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

$apiInstance = new Cyclos\Api\Functions\NFCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$user = "user_example"; // string | The principal (id, login name,  etc) of the user who will own the tag. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, `'1234567890`.
$type = "type_example"; // string | Either the identifier or internal name of fhe NFC token type

try {
    $result = $apiInstance->viewDeviceConfirmationForPersonalizeNfc($id, $user, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFCApi->viewDeviceConfirmationForPersonalizeNfc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **user** | **string**| The principal (id, login name,  etc) of the user who will own the tag. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, &#x60;&#x27;1234567890&#x60;. |
 **type** | **string**| Either the identifier or internal name of fhe NFC token type |

### Return type

[**\Cyclos\Api\Model\DeviceConfirmationView**](../Model/DeviceConfirmationView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

