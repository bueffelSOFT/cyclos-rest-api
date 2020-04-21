# Cyclos\Api\AuthApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeForgottenPassword**](AuthApi.md#changeforgottenpassword) | **POST** /auth/forgotten-password | Changes the a forgotten password after have completed the request
[**disconnectCurrentClient**](AuthApi.md#disconnectcurrentclient) | **DELETE** /auth/access-client | Disconnect the current access client
[**forgottenPasswordRequest**](AuthApi.md#forgottenpasswordrequest) | **POST** /auth/forgotten-password/request | Requests a forgotten password, notifying the user with instructions to reset it
[**getCurrentAuth**](AuthApi.md#getcurrentauth) | **GET** /auth | Returns data about the currently authenticated user
[**getDataForChangeForgottenPassword**](AuthApi.md#getdataforchangeforgottenpassword) | **GET** /auth/forgotten-password/data-for-change | Returns configuration data used to change a forgotten password after the initial request
[**getDataForLogin**](AuthApi.md#getdataforlogin) | **GET** /auth/data-for-login | Returns data containing the configuration for logging-in
[**getSecondaryPasswordInput**](AuthApi.md#getsecondarypasswordinput) | **GET** /auth/session/secondary-password | Returns the data for a secondary access password input
[**login**](AuthApi.md#login) | **POST** /auth/session | Logs-in the currently authenticated user
[**logout**](AuthApi.md#logout) | **DELETE** /auth/session | Log-out the current session
[**newOtp**](AuthApi.md#newotp) | **POST** /auth/otp | Generates a new One-Time-Password (OTP) for the authenticated user
[**replaceSession**](AuthApi.md#replacesession) | **POST** /auth/session/replace/{sessionToken} | Replaces a session token previously obtained
[**validateSecondaryPassword**](AuthApi.md#validatesecondarypassword) | **POST** /auth/session/secondary-password | Validates the current pending session

# **changeForgottenPassword**
> changeForgottenPassword($body)

Changes the a forgotten password after have completed the request

Changes the password (if manual), or sends a new one by e-mail (if generated) after the forgotten password reset process is completed.

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

$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\ChangeForgottenPassword(); // \Cyclos\Api\Model\ChangeForgottenPassword | The parameters for changing the password

try {
    $apiInstance->changeForgottenPassword($body);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->changeForgottenPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\ChangeForgottenPassword**](../Model/ChangeForgottenPassword.md)| The parameters for changing the password |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disconnectCurrentClient**
> disconnectCurrentClient($confirmation_password)

Disconnect the current access client

Changes the status of the access client used for authentication, disconnecting it. To be reused, it has to be activated again.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.

try {
    $apiInstance->disconnectCurrentClient($confirmation_password);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->disconnectCurrentClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forgottenPasswordRequest**
> forgottenPasswordRequest($body)

Requests a forgotten password, notifying the user with instructions to reset it

Sends an e-mail (in the future SMS will be supported) with instructions on how to reset the password, in case it was forgotten. In order to work, the Cyclos configuration options, both to show the forgotten password link and to enable for users need to be set.

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

$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\ForgottenPasswordRequest(); // \Cyclos\Api\Model\ForgottenPasswordRequest | The parameters for requesting a forgotten password reset

try {
    $apiInstance->forgottenPasswordRequest($body);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->forgottenPasswordRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\ForgottenPasswordRequest**](../Model/ForgottenPasswordRequest.md)| The parameters for requesting a forgotten password reset |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentAuth**
> \Cyclos\Api\Model\Auth getCurrentAuth($fields)

Returns data about the currently authenticated user

Returns the logged user information.

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

$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getCurrentAuth($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getCurrentAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\Auth**](../Model/Auth.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataForChangeForgottenPassword**
> \Cyclos\Api\Model\DataForChangeForgottenPassword getDataForChangeForgottenPassword($key, $fields)

Returns configuration data used to change a forgotten password after the initial request

After the user has requested a forgotten password reset, using the `POST /auth/forgotten-password/request` path, the link on the received e-mail will contain a key which can be used to actually change the password. This key must be passed to this operation in order to request input on the new password, and maybe confirm the security question, depending on the Cyclos configuration.

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

$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The validation key which was sent by e-mail to the user
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getDataForChangeForgottenPassword($key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getDataForChangeForgottenPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The validation key which was sent by e-mail to the user |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\DataForChangeForgottenPassword**](../Model/DataForChangeForgottenPassword.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataForLogin**
> \Cyclos\Api\Model\DataForLogin getDataForLogin($fields, $device_id, $pin_id)

Returns data containing the configuration for logging-in

Contains data useful for login, such as the allowed user identification methods, the password type and data for the forgot password request.

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

$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$device_id = "device_id_example"; // string | Trusted device identification. If given and the device is active then a pending device confirmation will be created that will be validated after the user logs-in. If the validation passes then no confirmation password will be used only for that session.
$pin_id = "pin_id_example"; // string | Device PIN identification. If given then the information about whether it is active or not will be given in the returned `dataForLogin`.

try {
    $result = $apiInstance->getDataForLogin($fields, $device_id, $pin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getDataForLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **device_id** | **string**| Trusted device identification. If given and the device is active then a pending device confirmation will be created that will be validated after the user logs-in. If the validation passes then no confirmation password will be used only for that session. | [optional]
 **pin_id** | **string**| Device PIN identification. If given then the information about whether it is active or not will be given in the returned &#x60;dataForLogin&#x60;. | [optional]

### Return type

[**\Cyclos\Api\Model\DataForLogin**](../Model/DataForLogin.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSecondaryPasswordInput**
> \Cyclos\Api\Model\PasswordInput getSecondaryPasswordInput()

Returns the data for a secondary access password input

Returns the data for a secondary access password input. Only if there is a secondary access password configured for the channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSecondaryPasswordInput();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getSecondaryPasswordInput: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cyclos\Api\Model\PasswordInput**](../Model/PasswordInput.md)

### Authorization

[session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **login**
> \Cyclos\Api\Model\Auth login($fields, $cookie, $timeout_in_seconds, $device_confirmation_id, $device_id, $hmac)

Logs-in the currently authenticated user

Logs-in the currently authenticated user, returning the session token. This token can then be used on subsequent requests. After finishing the session, the user can then logout by sending an HTTP DELETE to /auth.

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


$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$cookie = true; // bool | If true then the server adds the `Session-Token` cookie to the response containing only the second half of the session token. The returned `sessionToken` field will contain the first half.
$timeout_in_seconds = 56; // int | The timeout in seconds for the created session. If this value is not given or it is greater than that for the channel then the timeout for the channel will be used.
$device_confirmation_id = "device_confirmation_id_example"; // string | The id of the confirmation (returned in the DataForLogin)
$device_id = "device_id_example"; // string | The id of the device used to confirm the session as trusted.
$hmac = "hmac_example"; // string | The HMAC-SHA256 calculated for the QR-code of the confirmation using the secret key stored in the device.

try {
    $result = $apiInstance->login($fields, $cookie, $timeout_in_seconds, $device_confirmation_id, $device_id, $hmac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **cookie** | **bool**| If true then the server adds the &#x60;Session-Token&#x60; cookie to the response containing only the second half of the session token. The returned &#x60;sessionToken&#x60; field will contain the first half. | [optional]
 **timeout_in_seconds** | **int**| The timeout in seconds for the created session. If this value is not given or it is greater than that for the channel then the timeout for the channel will be used. | [optional]
 **device_confirmation_id** | **string**| The id of the confirmation (returned in the DataForLogin) | [optional]
 **device_id** | **string**| The id of the device used to confirm the session as trusted. | [optional]
 **hmac** | **string**| The HMAC-SHA256 calculated for the QR-code of the confirmation using the secret key stored in the device. | [optional]

### Return type

[**\Cyclos\Api\Model\Auth**](../Model/Auth.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logout**
> logout($cookie)

Log-out the current session

Invalidates the session used for authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cookie = true; // bool | If true then the server adds the `Session-Token` cookie to the response containing only the second half of the session token. The returned `sessionToken` field will contain the first half.

try {
    $apiInstance->logout($cookie);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->logout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cookie** | **bool**| If true then the server adds the &#x60;Session-Token&#x60; cookie to the response containing only the second half of the session token. The returned &#x60;sessionToken&#x60; field will contain the first half. | [optional]

### Return type

void (empty response body)

### Authorization

[session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newOtp**
> string[] newOtp($medium, $otp_channel)

Generates a new One-Time-Password (OTP) for the authenticated user

Sends a new OTP for the authenticated user. Used when the confirmation password of a specific action is required and `PasswordInput.mode` is `otp`.

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

$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$medium = new \Cyclos\Api\Model\SendMediumEnum(); // \Cyclos\Api\Model\SendMediumEnum | The medium the user wants to receive the OTP
$otp_channel = "otp_channel_example"; // string | The channel name in which the OTP will be used to confirm the operation. Please do not confuse with the parameter used to specify the channel through the client is connecting with Cyclos. The configuration for the given channel will be used to validate the request. E.g. when confirming an easy invoice / ticket through a custom front using a channel other than `easyInvoice` / `ticket` then the channel `easyInvoice` / `ticket` must be set at the moment of requesting an OTP.

try {
    $result = $apiInstance->newOtp($medium, $otp_channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->newOtp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **medium** | [**\Cyclos\Api\Model\SendMediumEnum**](../Model/.md)| The medium the user wants to receive the OTP |
 **otp_channel** | **string**| The channel name in which the OTP will be used to confirm the operation. Please do not confuse with the parameter used to specify the channel through the client is connecting with Cyclos. The configuration for the given channel will be used to validate the request. E.g. when confirming an easy invoice / ticket through a custom front using a channel other than &#x60;easyInvoice&#x60; / &#x60;ticket&#x60; then the channel &#x60;easyInvoice&#x60; / &#x60;ticket&#x60; must be set at the moment of requesting an OTP. | [optional]

### Return type

**string[]**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceSession**
> string replaceSession($session_token, $cookie)

Replaces a session token previously obtained

This operation is intended to be used by custom frontends which log-in users externally. In those cases, the full session token is obtained. This operation replaces that session token, assuming it could be compromised by being sent through other mediums (e-mail, etc) by a new session token. The given session token is validated and removed, and a new session is created. Also accepts the `cookie` parameter with the same meaning as the `login` / `logout` operations.  This operation can only be invoked as guest.

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

$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_token = "session_token_example"; // string | The full session token obtained externally
$cookie = true; // bool | If true then the server adds the `Session-Token` cookie to the response containing only the second half of the session token. The returned `sessionToken` field will contain the first half.

try {
    $result = $apiInstance->replaceSession($session_token, $cookie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->replaceSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_token** | **string**| The full session token obtained externally |
 **cookie** | **bool**| If true then the server adds the &#x60;Session-Token&#x60; cookie to the response containing only the second half of the session token. The returned &#x60;sessionToken&#x60; field will contain the first half. | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateSecondaryPassword**
> validateSecondaryPassword($body)

Validates the current pending session

Validates a pending session using the secondary access password (if any) configured for the current channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | The secondary access password

try {
    $apiInstance->validateSecondaryPassword($body);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->validateSecondaryPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| The secondary access password |

### Return type

void (empty response body)

### Authorization

[session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

