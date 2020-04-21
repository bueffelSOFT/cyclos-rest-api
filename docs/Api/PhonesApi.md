# Cyclos\Api\PhonesApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPhone**](PhonesApi.md#createphone) | **POST** /{user}/phones | Creates a new phone for the given user
[**deletePhone**](PhonesApi.md#deletephone) | **DELETE** /phones/{id} | Removes a phone
[**disablePhoneForSms**](PhonesApi.md#disablephoneforsms) | **POST** /phones/{id}/disable-for-sms | Marks a phone as disabled to receive SMS notifications and operate in the SMS channel
[**enablePhoneForSms**](PhonesApi.md#enablephoneforsms) | **POST** /phones/{id}/enable-for-sms | Marks a phone as enabled to receive SMS notifications and operate in the SMS channel
[**getPasswordInputForDisablePhoneForSms**](PhonesApi.md#getpasswordinputfordisablephoneforsms) | **GET** /phones/{id}/password-for-disable-sms | Returns a confirmation &#x60;PasswordInput&#x60; for disabling SMS of a phone, if any
[**getPasswordInputForRemovePhone**](PhonesApi.md#getpasswordinputforremovephone) | **GET** /phones/{id}/password-for-remove | Returns a confirmation &#x60;PasswordInput&#x60; for removing a phone, if any
[**getPhoneDataForEdit**](PhonesApi.md#getphonedataforedit) | **GET** /phones/{id}/data-for-edit | Returns data to edit an existing phone
[**getPhoneDataForNew**](PhonesApi.md#getphonedatafornew) | **GET** /{user}/phones/data-for-new | Returns data to create a new phone
[**getUserPhonesListData**](PhonesApi.md#getuserphoneslistdata) | **GET** /{user}/phones/list-data | Returns data for listing a user&#x27;s phones
[**listPhonesByUser**](PhonesApi.md#listphonesbyuser) | **GET** /{user}/phones | Lists all (visible) user phones
[**sendPhoneVerificationCode**](PhonesApi.md#sendphoneverificationcode) | **POST** /phones/{id}/send-verification-code | Sends the verification code for a user to verify the mobile phone
[**updatePhone**](PhonesApi.md#updatephone) | **PUT** /phones/{id} | Updates an existing phone
[**verifyPhone**](PhonesApi.md#verifyphone) | **POST** /phones/{id}/verify | Marks a phone as verified if the code matches
[**viewPhone**](PhonesApi.md#viewphone) | **GET** /phones/{id} | Returns details of a specific phone

# **createPhone**
> string createPhone($body, $user, $confirmation_password)

Creates a new phone for the given user

Creates a new phone for the given user

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\PhoneNew(); // \Cyclos\Api\Model\PhoneNew | The phone to be created
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.

try {
    $result = $apiInstance->createPhone($body, $user, $confirmation_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->createPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\PhoneNew**](../Model/PhoneNew.md)| The phone to be created |
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePhone**
> deletePhone($id, $confirmation_password)

Removes a phone

Removes a phone

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.

try {
    $apiInstance->deletePhone($id, $confirmation_password);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->deletePhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disablePhoneForSms**
> disablePhoneForSms($id, $confirmation_password)

Marks a phone as disabled to receive SMS notifications and operate in the SMS channel

Marks a phone as disabled to receive SMS notifications and operate in. If the confirmation password is enabled, it must be passed in. Only allowed if is a verified mobile phone not already enabled for SMS. Only the phone owner can verify phones with this method. Administrators / brokers can directly mark a phone number as verified when saving it.

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.

try {
    $apiInstance->disablePhoneForSms($id, $confirmation_password);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->disablePhoneForSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enablePhoneForSms**
> enablePhoneForSms($id)

Marks a phone as enabled to receive SMS notifications and operate in the SMS channel

Marks a phone as enabled to receive SMS notifications and operate in. Only allowed if is a verified mobile phone not already enabled for SMS. Only the phone owner can verify phones with this method. Administrators / brokers can directly mark a phone number as verified when saving it.

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification

try {
    $apiInstance->enablePhoneForSms($id);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->enablePhoneForSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPasswordInputForDisablePhoneForSms**
> \Cyclos\Api\Model\PasswordInput getPasswordInputForDisablePhoneForSms($id, $fields)

Returns a confirmation `PasswordInput` for disabling SMS of a phone, if any

If a confirmation password is required to disable a phone from sending / receiving SMS, clients should invoke this operation prior to effectively disabling SMS, which will return the data regarding the confirmation password.

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getPasswordInputForDisablePhoneForSms($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->getPasswordInputForDisablePhoneForSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\PasswordInput**](../Model/PasswordInput.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPasswordInputForRemovePhone**
> \Cyclos\Api\Model\PasswordInput getPasswordInputForRemovePhone($id, $fields)

Returns a confirmation `PasswordInput` for removing a phone, if any

If a confirmation password is required to remove a phone, clients should invoke this operation prior to effectively removing the phone, which will return the data regarding the confirmation password.

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getPasswordInputForRemovePhone($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->getPasswordInputForRemovePhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\PasswordInput**](../Model/PasswordInput.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPhoneDataForEdit**
> \Cyclos\Api\Model\PhoneDataForEdit getPhoneDataForEdit($id, $fields)

Returns data to edit an existing phone

Returns configuration data for editing a phone, plus the current `PhoneEdit` object that can be altered and sent back

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getPhoneDataForEdit($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->getPhoneDataForEdit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\PhoneDataForEdit**](../Model/PhoneDataForEdit.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPhoneDataForNew**
> \Cyclos\Api\Model\PhoneDataForNew getPhoneDataForNew($user, $type, $fields)

Returns data to create a new phone

Returns configuration data for creating a phone for the given user

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$type = new \Cyclos\Api\Model\PhoneKind(); // \Cyclos\Api\Model\PhoneKind | 
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getPhoneDataForNew($user, $type, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->getPhoneDataForNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **type** | [**\Cyclos\Api\Model\PhoneKind**](../Model/.md)|  |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\PhoneDataForNew**](../Model/PhoneDataForNew.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserPhonesListData**
> \Cyclos\Api\Model\UserPhonesListData getUserPhonesListData($user, $fields)

Returns data for listing a user's phones

Returns data containing the (visible) user phones, plus additional data related to phones.

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getUserPhonesListData($user, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->getUserPhonesListData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\UserPhonesListData**](../Model/UserPhonesListData.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPhonesByUser**
> \Cyclos\Api\Model\PhoneResult[] listPhonesByUser($user, $fields)

Lists all (visible) user phones

Returns a list with all phones of the given user that the currently authenticated user can see.

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->listPhonesByUser($user, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->listPhonesByUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\PhoneResult[]**](../Model/PhoneResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendPhoneVerificationCode**
> string sendPhoneVerificationCode($id)

Sends the verification code for a user to verify the mobile phone

Sends an SMS text with a verification code the user can use to verify his mobile phone. Only verified phones can be used for receiving SMS notifications or to operate in the SMS operations channel. Only the phone owner can verify phones with this method. Administrators / brokers can directly mark a phone number as verified.

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification

try {
    $result = $apiInstance->sendPhoneVerificationCode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->sendPhoneVerificationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePhone**
> updatePhone($body, $id, $confirmation_password)

Updates an existing phone

Updates an existing phone

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\PhoneEdit(); // \Cyclos\Api\Model\PhoneEdit | The phone to be edited
$id = "id_example"; // string | The object identification
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.

try {
    $apiInstance->updatePhone($body, $id, $confirmation_password);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->updatePhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\PhoneEdit**](../Model/PhoneEdit.md)| The phone to be edited |
 **id** | **string**| The object identification |
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyPhone**
> \Cyclos\Api\Model\CodeVerificationStatusEnum verifyPhone($id, $code)

Marks a phone as verified if the code matches

Verifies a mobile phone by submitting the code received by SMS. Only verified phones can be enabled for receiving SMS notifications or to operate in the SMS operations channel. Only the phone owner can verify phones with this method. Administrators / brokers can directly mark a phone number as verified when saving the phone.

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$code = "code_example"; // string | The verification code received by SMS

try {
    $result = $apiInstance->verifyPhone($id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->verifyPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **code** | **string**| The verification code received by SMS |

### Return type

[**\Cyclos\Api\Model\CodeVerificationStatusEnum**](../Model/CodeVerificationStatusEnum.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewPhone**
> \Cyclos\Api\Model\PhoneView viewPhone($id, $fields)

Returns details of a specific phone

Returns information about a phone, located by id

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

$apiInstance = new Cyclos\Api\Functions\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->viewPhone($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->viewPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\PhoneView**](../Model/PhoneView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

