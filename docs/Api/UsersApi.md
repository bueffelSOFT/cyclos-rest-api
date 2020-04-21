# Cyclos\Api\UsersApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser**](UsersApi.md#createuser) | **POST** /users | Registers a new user
[**deletePendingUser**](UsersApi.md#deletependinguser) | **DELETE** /users/{user} | Permanently removes a pending user
[**getDataForEditFullProfile**](UsersApi.md#getdataforeditfullprofile) | **GET** /users/{user}/data-for-edit-profile | Returns data for editing the full profile of a user / operator
[**getDataForMapDirectory**](UsersApi.md#getdataformapdirectory) | **GET** /users/map/data-for-search | Get configuration data for searching the user directory (map).
[**getGroupsForUserRegistration**](UsersApi.md#getgroupsforuserregistration) | **GET** /users/groups-for-registration | Returns the groups the authenticated user or guest can register on
[**getUserDataForEdit**](UsersApi.md#getuserdataforedit) | **GET** /users/{user}/data-for-edit | Get configuration data to edit a user / operator profile
[**getUserDataForNew**](UsersApi.md#getuserdatafornew) | **GET** /users/data-for-new | Get configuration data for registering new users
[**getUserDataForSearch**](UsersApi.md#getuserdataforsearch) | **GET** /users/data-for-search | Get configuration data for searching users
[**saveUserFullProfile**](UsersApi.md#saveuserfullprofile) | **POST** /users/{user}/profile | Saves the full profile at once
[**searchMapDirectory**](UsersApi.md#searchmapdirectory) | **GET** /users/map | Search the user directory (map)
[**searchUsers**](UsersApi.md#searchusers) | **GET** /users | Search for users
[**updateUser**](UsersApi.md#updateuser) | **PUT** /users/{user} | Save a user / operator profile fields
[**validateEmailChange**](UsersApi.md#validateemailchange) | **POST** /users/validate/email-change/{key} | Validates an e-mail via a validation key
[**validateUserRegistration**](UsersApi.md#validateuserregistration) | **POST** /users/validate/registration/{key} | Validates an user registration via a key sent by e-mail
[**validateUserRegistrationField**](UsersApi.md#validateuserregistrationfield) | **GET** /users/validate/{group}/{field} | Validates the value of a single field for user registration
[**viewUser**](UsersApi.md#viewuser) | **GET** /users/{user} | View a user / operator details

# **createUser**
> \Cyclos\Api\Model\UserRegistrationResult createUser($body)

Registers a new user

Can either be a public registration, requiring no authorization, or a user registration by an administrator or broker. The public registration normally requires a CAPTCHA challenge to prevent bots. On user registration the following data is also created: * Address; * Mobile phone; * Landline phone; * Images.  After the registration those data are managed separately than the user profile data.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\UserNew(); // \Cyclos\Api\Model\UserNew | The user to be registered

try {
    $result = $apiInstance->createUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\UserNew**](../Model/UserNew.md)| The user to be registered |

### Return type

[**\Cyclos\Api\Model\UserRegistrationResult**](../Model/UserRegistrationResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePendingUser**
> deletePendingUser($user)

Permanently removes a pending user

This operation physically removes user pending registration validation, that is, the user `status` is `pending`. If the user registration was ever validated, this operation will fail.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.

try {
    $apiInstance->deletePendingUser($user);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deletePendingUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataForEditFullProfile**
> \Cyclos\Api\Model\DataForEditFullProfile getDataForEditFullProfile($user, $fields)

Returns data for editing the full profile of a user / operator

The returned data contains all profile-related elements of a user or operator - profile fields, phones, addresses, images and additional contact information. Operators cannot have addresses, images or additional contact information, so these will not be sent.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getDataForEditFullProfile($user, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getDataForEditFullProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\DataForEditFullProfile**](../Model/DataForEditFullProfile.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataForMapDirectory**
> \Cyclos\Api\Model\UserDataForMap getDataForMapDirectory($fields)

Get configuration data for searching the user directory (map).

Returns data with the current configuration regarding the user directory (map).

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getDataForMapDirectory($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getDataForMapDirectory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\UserDataForMap**](../Model/UserDataForMap.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsForUserRegistration**
> \Cyclos\Api\Model\GroupForRegistration[] getGroupsForUserRegistration($fields, $as_member)

Returns the groups the authenticated user or guest can register on

Returns the list of groups the authenticated user can use to perform a new user registration. If authenticated as guest, will return the groups currently set for public registration. When there is an authenticated administrator, broker or member, will be the configured groups for new users.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$as_member = true; // bool | Flag required only when the authenticated user is a member and a broker, in that case we need to distingish between both. If true then the groups returned will be those allowed as member, otherwise will return the goups allowed as broker.

try {
    $result = $apiInstance->getGroupsForUserRegistration($fields, $as_member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getGroupsForUserRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **as_member** | **bool**| Flag required only when the authenticated user is a member and a broker, in that case we need to distingish between both. If true then the groups returned will be those allowed as member, otherwise will return the goups allowed as broker. | [optional]

### Return type

[**\Cyclos\Api\Model\GroupForRegistration[]**](../Model/GroupForRegistration.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDataForEdit**
> \Cyclos\Api\Model\UserDataForEdit getUserDataForEdit($user, $fields)

Get configuration data to edit a user / operator profile

Returns data to edit a user / operator profile fields.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getUserDataForEdit($user, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserDataForEdit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\UserDataForEdit**](../Model/UserDataForEdit.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDataForNew**
> \Cyclos\Api\Model\UserDataForNew getUserDataForNew($group, $fields, $broker, $as_member)

Get configuration data for registering new users

Almost every aspect of a user profile is configurable in Cyclos, such as enabled basic profile fields, custom profile fields, address fields, phone configuration and so on. As such, if a front-end needs to be robust to such a dynamic nature, it should get this information in order to create a correct registration form.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | The intial group for the new user
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$broker = "broker_example"; // string | The broker for the new user. Only used if the authenticated user is an administrator.
$as_member = true; // bool | Flag required only when the authenticated user is a member and a broker, in that case we need to distingish between both. If true then the configuration data for registering new users as member will be returned, otherwise will return the configuration data for registering as broker.

try {
    $result = $apiInstance->getUserDataForNew($group, $fields, $broker, $as_member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserDataForNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| The intial group for the new user |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **broker** | **string**| The broker for the new user. Only used if the authenticated user is an administrator. | [optional]
 **as_member** | **bool**| Flag required only when the authenticated user is a member and a broker, in that case we need to distingish between both. If true then the configuration data for registering new users as member will be returned, otherwise will return the configuration data for registering as broker. | [optional]

### Return type

[**\Cyclos\Api\Model\UserDataForNew**](../Model/UserDataForNew.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDataForSearch**
> \Cyclos\Api\Model\UserDataForSearch getUserDataForSearch($fields, $broker)

Get configuration data for searching users

Returns data with the current configuration regarding the user search

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$broker = "broker_example"; // string | When set, will be data for searching assigned members of the given broker (id, identification method or `self`)

try {
    $result = $apiInstance->getUserDataForSearch($fields, $broker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserDataForSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **broker** | **string**| When set, will be data for searching assigned members of the given broker (id, identification method or &#x60;self&#x60;) | [optional]

### Return type

[**\Cyclos\Api\Model\UserDataForSearch**](../Model/UserDataForSearch.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveUserFullProfile**
> \Cyclos\Api\Model\FullProfileEditResult saveUserFullProfile($body, $user, $confirmation_password, $fields)

Saves the full profile at once

Saves in a single, transactional operation, the full user / operator profile: edition of the profile fields and creating / modifying / removing phones, addresses, additional contacts and images. Operators can never have addresses, additional contacts or images, so they don't apply to operators.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\FullProfileEdit(); // \Cyclos\Api\Model\FullProfileEdit | The full profile data
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->saveUserFullProfile($body, $user, $confirmation_password, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->saveUserFullProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\FullProfileEdit**](../Model/FullProfileEdit.md)| The full profile data |
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\FullProfileEditResult**](../Model/FullProfileEditResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchMapDirectory**
> \Cyclos\Api\Model\UserResult[] searchMapDirectory($fields, $activation_period, $address_result, $brokers, $contacts_owner, $creation_period, $exclude_contacts, $groups, $ignore_profile_fields_in_list, $include_group, $include_group_set, $keywords, $last_login_period, $latitude, $longitude, $main_broker_only, $max_distance, $order_by, $page, $page_size, $profile_fields, $roles, $skip_total_count, $statuses, $users_to_exclude, $users_to_include)

Search the user directory (map)

Returns a page of users in the map directory that match a given criteria

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$activation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user activation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$address_result = new \Cyclos\Api\Model\UserAddressResultEnum(); // \Cyclos\Api\Model\UserAddressResultEnum | 
$brokers = array("brokers_example"); // string[] | Either id or a principal (login name, e-mail, etc) for brokers
$contacts_owner = "contacts_owner_example"; // string | Indicates the (managed) user to exclude contacts when `excludecontacts` is set. Defaults to the logged user.
$creation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$exclude_contacts = true; // bool | When set to `true` will not return any user that is already a contact of the user indicated on `contactsOwner` (the logged user if not set).
$groups = array("groups_example"); // string[] | Either id or internal names of groups / group sets
$ignore_profile_fields_in_list = true; // bool | When set to `true`, instead of returning users with corresponding profile fields set on list, will return them with `display` and `shortDisplay`.
$include_group = true; // bool | When set to `true` and the logged user has permission to view user groups, will return the `group` property on users.
$include_group_set = true; // bool | When set to `true` and the logged user has permission to view user group sets, will return the `groupSet` property on users.
$keywords = "keywords_example"; // string | Textual search keywords. Sometimes, like in user search, the fields matched depends on what is configured on the products.
$last_login_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user last login date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$latitude = 1.2; // double | The reference latitude for distance searches
$longitude = 1.2; // double | The reference longitude for distance searches
$main_broker_only = true; // bool | When set to `true`, will match only users that have the brokers as set in the `brokers` parameter as main broker.
$max_distance = 1.2; // double | Maximum straight-line distance between the informed location and the resulting address. Is measured either in kilometers or miles, depending on the configuration. Only accepted if both `longitude` and `latitude` parameters are passed with the actual reference position.
$order_by = new \Cyclos\Api\Model\UserOrderByEnum(); // \Cyclos\Api\Model\UserOrderByEnum | 
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$profile_fields = array("profile_fields_example"); // string[] | User profile fields, both basic (full name, login name, phone, e-mail, etc) and custom fields, that are used for search. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by `:` (colon). For example, `profileFields=field1:value1,field2:value2`. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, `profileFields=field1:valueA|valueB`. The accepted fields depend on the products the authenticated user has. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, `profileFields=rank:bronze|silver,birthDate:2000-01-01|2001-12-31` would match results whose custom field with internal name 'rank' is either bronze or silver, and whose 'birthDate' is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like `profileFields=birthDate:|2001-12-31`. The basic profile fields have one of the following identifiers: - `name` or `fullName`: Full name; - `username`, `loginName` or `login`: Login name; - `email`: E-mail; - `phone`: Phone; - `accountNumber`, `account`: Account number; - `image`: Image (accepts a boolean value, indicating that either it is required that users either have images or not).  If address is an allowed profile field for search, specific address fields may be searched. The allowed ones are normally returned as the `addressFieldsInSearch` field in the corresponding result from a data-for-search request. The specific address fields are: - `address`: Searches on any address field (not a specific field); - `address.address`: Searches on the fields that represent the street address, which are `addressLine1`, `addressLine2`, `street`, `buildingNumber` and `complement`. Note that normally only a subset of them should be enabled in the configuration (either line 1 / 2 or street + number + complement); - `address.zip`: Searches for matching zip (postal) code; - `address.poBox`: Searches for matching postal box; - `address.neighborhood`: Searches by neighborhood; - `address.city`: Searches by city; - `address.region`: Searches by region (or state); - `address.country`: Searches by ISO 3166-1 alpha-2 country code. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: `profileFields=dynamic:a|b|c`. However, it is also possible to perform a keywords-like (full-text) search using the dynamic value label. In this case a single value, prefixed by single quotes should be used. For example: `profileFields=dynamic:'business`.
$roles = array(new \Cyclos\Api\Model\RoleEnum()); // \Cyclos\Api\Model\RoleEnum[] | 
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$statuses = array(new \Cyclos\Api\Model\UserStatusEnum()); // \Cyclos\Api\Model\UserStatusEnum[] | 
$users_to_exclude = array("users_to_exclude_example"); // string[] | Indicated the users to be excluded from the result
$users_to_include = array("users_to_include_example"); // string[] | Indicated the users to be included in the result.  Any other user not present in this list will be excluded from the result.

try {
    $result = $apiInstance->searchMapDirectory($fields, $activation_period, $address_result, $brokers, $contacts_owner, $creation_period, $exclude_contacts, $groups, $ignore_profile_fields_in_list, $include_group, $include_group_set, $keywords, $last_login_period, $latitude, $longitude, $main_broker_only, $max_distance, $order_by, $page, $page_size, $profile_fields, $roles, $skip_total_count, $statuses, $users_to_exclude, $users_to_include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->searchMapDirectory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **activation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user activation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **address_result** | [**\Cyclos\Api\Model\UserAddressResultEnum**](../Model/.md)|  | [optional]
 **brokers** | [**string[]**](../Model/string.md)| Either id or a principal (login name, e-mail, etc) for brokers | [optional]
 **contacts_owner** | **string**| Indicates the (managed) user to exclude contacts when &#x60;excludecontacts&#x60; is set. Defaults to the logged user. | [optional]
 **creation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **exclude_contacts** | **bool**| When set to &#x60;true&#x60; will not return any user that is already a contact of the user indicated on &#x60;contactsOwner&#x60; (the logged user if not set). | [optional]
 **groups** | [**string[]**](../Model/string.md)| Either id or internal names of groups / group sets | [optional]
 **ignore_profile_fields_in_list** | **bool**| When set to &#x60;true&#x60;, instead of returning users with corresponding profile fields set on list, will return them with &#x60;display&#x60; and &#x60;shortDisplay&#x60;. | [optional]
 **include_group** | **bool**| When set to &#x60;true&#x60; and the logged user has permission to view user groups, will return the &#x60;group&#x60; property on users. | [optional]
 **include_group_set** | **bool**| When set to &#x60;true&#x60; and the logged user has permission to view user group sets, will return the &#x60;groupSet&#x60; property on users. | [optional]
 **keywords** | **string**| Textual search keywords. Sometimes, like in user search, the fields matched depends on what is configured on the products. | [optional]
 **last_login_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user last login date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **latitude** | **double**| The reference latitude for distance searches | [optional]
 **longitude** | **double**| The reference longitude for distance searches | [optional]
 **main_broker_only** | **bool**| When set to &#x60;true&#x60;, will match only users that have the brokers as set in the &#x60;brokers&#x60; parameter as main broker. | [optional]
 **max_distance** | **double**| Maximum straight-line distance between the informed location and the resulting address. Is measured either in kilometers or miles, depending on the configuration. Only accepted if both &#x60;longitude&#x60; and &#x60;latitude&#x60; parameters are passed with the actual reference position. | [optional]
 **order_by** | [**\Cyclos\Api\Model\UserOrderByEnum**](../Model/.md)|  | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **profile_fields** | [**string[]**](../Model/string.md)| User profile fields, both basic (full name, login name, phone, e-mail, etc) and custom fields, that are used for search. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by &#x60;:&#x60; (colon). For example, &#x60;profileFields&#x3D;field1:value1,field2:value2&#x60;. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, &#x60;profileFields&#x3D;field1:valueA|valueB&#x60;. The accepted fields depend on the products the authenticated user has. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, &#x60;profileFields&#x3D;rank:bronze|silver,birthDate:2000-01-01|2001-12-31&#x60; would match results whose custom field with internal name &#x27;rank&#x27; is either bronze or silver, and whose &#x27;birthDate&#x27; is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like &#x60;profileFields&#x3D;birthDate:|2001-12-31&#x60;. The basic profile fields have one of the following identifiers: - &#x60;name&#x60; or &#x60;fullName&#x60;: Full name; - &#x60;username&#x60;, &#x60;loginName&#x60; or &#x60;login&#x60;: Login name; - &#x60;email&#x60;: E-mail; - &#x60;phone&#x60;: Phone; - &#x60;accountNumber&#x60;, &#x60;account&#x60;: Account number; - &#x60;image&#x60;: Image (accepts a boolean value, indicating that either it is required that users either have images or not).  If address is an allowed profile field for search, specific address fields may be searched. The allowed ones are normally returned as the &#x60;addressFieldsInSearch&#x60; field in the corresponding result from a data-for-search request. The specific address fields are: - &#x60;address&#x60;: Searches on any address field (not a specific field); - &#x60;address.address&#x60;: Searches on the fields that represent the street address, which are &#x60;addressLine1&#x60;, &#x60;addressLine2&#x60;, &#x60;street&#x60;, &#x60;buildingNumber&#x60; and &#x60;complement&#x60;. Note that normally only a subset of them should be enabled in the configuration (either line 1 / 2 or street + number + complement); - &#x60;address.zip&#x60;: Searches for matching zip (postal) code; - &#x60;address.poBox&#x60;: Searches for matching postal box; - &#x60;address.neighborhood&#x60;: Searches by neighborhood; - &#x60;address.city&#x60;: Searches by city; - &#x60;address.region&#x60;: Searches by region (or state); - &#x60;address.country&#x60;: Searches by ISO 3166-1 alpha-2 country code. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: &#x60;profileFields&#x3D;dynamic:a|b|c&#x60;. However, it is also possible to perform a keywords-like (full-text) search using the dynamic value label. In this case a single value, prefixed by single quotes should be used. For example: &#x60;profileFields&#x3D;dynamic:&#x27;business&#x60;. | [optional]
 **roles** | [**\Cyclos\Api\Model\RoleEnum[]**](../Model/\Cyclos\Api\Model\RoleEnum.md)|  | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **statuses** | [**\Cyclos\Api\Model\UserStatusEnum[]**](../Model/\Cyclos\Api\Model\UserStatusEnum.md)|  | [optional]
 **users_to_exclude** | [**string[]**](../Model/string.md)| Indicated the users to be excluded from the result | [optional]
 **users_to_include** | [**string[]**](../Model/string.md)| Indicated the users to be included in the result.  Any other user not present in this list will be excluded from the result. | [optional]

### Return type

[**\Cyclos\Api\Model\UserResult[]**](../Model/UserResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsers**
> \Cyclos\Api\Model\UserResult[] searchUsers($fields, $activation_period, $address_result, $brokers, $contacts_owner, $creation_period, $exclude_contacts, $groups, $ignore_profile_fields_in_list, $include_group, $include_group_set, $keywords, $last_login_period, $latitude, $longitude, $main_broker_only, $max_distance, $order_by, $page, $page_size, $profile_fields, $roles, $skip_total_count, $statuses, $users_to_exclude, $users_to_include)

Search for users

Returns a page of users that match a given criteria. The fields returned depend on the products, in the profile fields of other users setting. Only fields (both basic or custom) marked to be returned on user list are returned. If no fields are set to be returned, or if the `ignoreProfileFieldsInList` flag is true in the given query then the resulting objects will have the `display` and `shortDisplay` filled in.  However, those fields are not returned when another profile field is returned, preventing duplicated data to be returned.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$activation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user activation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$address_result = new \Cyclos\Api\Model\UserAddressResultEnum(); // \Cyclos\Api\Model\UserAddressResultEnum | 
$brokers = array("brokers_example"); // string[] | Either id or a principal (login name, e-mail, etc) for brokers
$contacts_owner = "contacts_owner_example"; // string | Indicates the (managed) user to exclude contacts when `excludecontacts` is set. Defaults to the logged user.
$creation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$exclude_contacts = true; // bool | When set to `true` will not return any user that is already a contact of the user indicated on `contactsOwner` (the logged user if not set).
$groups = array("groups_example"); // string[] | Either id or internal names of groups / group sets
$ignore_profile_fields_in_list = true; // bool | When set to `true`, instead of returning users with corresponding profile fields set on list, will return them with `display` and `shortDisplay`.
$include_group = true; // bool | When set to `true` and the logged user has permission to view user groups, will return the `group` property on users.
$include_group_set = true; // bool | When set to `true` and the logged user has permission to view user group sets, will return the `groupSet` property on users.
$keywords = "keywords_example"; // string | Textual search keywords. Sometimes, like in user search, the fields matched depends on what is configured on the products.
$last_login_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user last login date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$latitude = 1.2; // double | The reference latitude for distance searches
$longitude = 1.2; // double | The reference longitude for distance searches
$main_broker_only = true; // bool | When set to `true`, will match only users that have the brokers as set in the `brokers` parameter as main broker.
$max_distance = 1.2; // double | Maximum straight-line distance between the informed location and the resulting address. Is measured either in kilometers or miles, depending on the configuration. Only accepted if both `longitude` and `latitude` parameters are passed with the actual reference position.
$order_by = new \Cyclos\Api\Model\UserOrderByEnum(); // \Cyclos\Api\Model\UserOrderByEnum | 
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$profile_fields = array("profile_fields_example"); // string[] | User profile fields, both basic (full name, login name, phone, e-mail, etc) and custom fields, that are used for search. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by `:` (colon). For example, `profileFields=field1:value1,field2:value2`. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, `profileFields=field1:valueA|valueB`. The accepted fields depend on the products the authenticated user has. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, `profileFields=rank:bronze|silver,birthDate:2000-01-01|2001-12-31` would match results whose custom field with internal name 'rank' is either bronze or silver, and whose 'birthDate' is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like `profileFields=birthDate:|2001-12-31`. The basic profile fields have one of the following identifiers: - `name` or `fullName`: Full name; - `username`, `loginName` or `login`: Login name; - `email`: E-mail; - `phone`: Phone; - `accountNumber`, `account`: Account number; - `image`: Image (accepts a boolean value, indicating that either it is required that users either have images or not).  If address is an allowed profile field for search, specific address fields may be searched. The allowed ones are normally returned as the `addressFieldsInSearch` field in the corresponding result from a data-for-search request. The specific address fields are: - `address`: Searches on any address field (not a specific field); - `address.address`: Searches on the fields that represent the street address, which are `addressLine1`, `addressLine2`, `street`, `buildingNumber` and `complement`. Note that normally only a subset of them should be enabled in the configuration (either line 1 / 2 or street + number + complement); - `address.zip`: Searches for matching zip (postal) code; - `address.poBox`: Searches for matching postal box; - `address.neighborhood`: Searches by neighborhood; - `address.city`: Searches by city; - `address.region`: Searches by region (or state); - `address.country`: Searches by ISO 3166-1 alpha-2 country code. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: `profileFields=dynamic:a|b|c`. However, it is also possible to perform a keywords-like (full-text) search using the dynamic value label. In this case a single value, prefixed by single quotes should be used. For example: `profileFields=dynamic:'business`.
$roles = array(new \Cyclos\Api\Model\RoleEnum()); // \Cyclos\Api\Model\RoleEnum[] | 
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$statuses = array(new \Cyclos\Api\Model\UserStatusEnum()); // \Cyclos\Api\Model\UserStatusEnum[] | 
$users_to_exclude = array("users_to_exclude_example"); // string[] | Indicated the users to be excluded from the result
$users_to_include = array("users_to_include_example"); // string[] | Indicated the users to be included in the result.  Any other user not present in this list will be excluded from the result.

try {
    $result = $apiInstance->searchUsers($fields, $activation_period, $address_result, $brokers, $contacts_owner, $creation_period, $exclude_contacts, $groups, $ignore_profile_fields_in_list, $include_group, $include_group_set, $keywords, $last_login_period, $latitude, $longitude, $main_broker_only, $max_distance, $order_by, $page, $page_size, $profile_fields, $roles, $skip_total_count, $statuses, $users_to_exclude, $users_to_include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->searchUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **activation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user activation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **address_result** | [**\Cyclos\Api\Model\UserAddressResultEnum**](../Model/.md)|  | [optional]
 **brokers** | [**string[]**](../Model/string.md)| Either id or a principal (login name, e-mail, etc) for brokers | [optional]
 **contacts_owner** | **string**| Indicates the (managed) user to exclude contacts when &#x60;excludecontacts&#x60; is set. Defaults to the logged user. | [optional]
 **creation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **exclude_contacts** | **bool**| When set to &#x60;true&#x60; will not return any user that is already a contact of the user indicated on &#x60;contactsOwner&#x60; (the logged user if not set). | [optional]
 **groups** | [**string[]**](../Model/string.md)| Either id or internal names of groups / group sets | [optional]
 **ignore_profile_fields_in_list** | **bool**| When set to &#x60;true&#x60;, instead of returning users with corresponding profile fields set on list, will return them with &#x60;display&#x60; and &#x60;shortDisplay&#x60;. | [optional]
 **include_group** | **bool**| When set to &#x60;true&#x60; and the logged user has permission to view user groups, will return the &#x60;group&#x60; property on users. | [optional]
 **include_group_set** | **bool**| When set to &#x60;true&#x60; and the logged user has permission to view user group sets, will return the &#x60;groupSet&#x60; property on users. | [optional]
 **keywords** | **string**| Textual search keywords. Sometimes, like in user search, the fields matched depends on what is configured on the products. | [optional]
 **last_login_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user last login date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **latitude** | **double**| The reference latitude for distance searches | [optional]
 **longitude** | **double**| The reference longitude for distance searches | [optional]
 **main_broker_only** | **bool**| When set to &#x60;true&#x60;, will match only users that have the brokers as set in the &#x60;brokers&#x60; parameter as main broker. | [optional]
 **max_distance** | **double**| Maximum straight-line distance between the informed location and the resulting address. Is measured either in kilometers or miles, depending on the configuration. Only accepted if both &#x60;longitude&#x60; and &#x60;latitude&#x60; parameters are passed with the actual reference position. | [optional]
 **order_by** | [**\Cyclos\Api\Model\UserOrderByEnum**](../Model/.md)|  | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **profile_fields** | [**string[]**](../Model/string.md)| User profile fields, both basic (full name, login name, phone, e-mail, etc) and custom fields, that are used for search. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by &#x60;:&#x60; (colon). For example, &#x60;profileFields&#x3D;field1:value1,field2:value2&#x60;. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, &#x60;profileFields&#x3D;field1:valueA|valueB&#x60;. The accepted fields depend on the products the authenticated user has. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, &#x60;profileFields&#x3D;rank:bronze|silver,birthDate:2000-01-01|2001-12-31&#x60; would match results whose custom field with internal name &#x27;rank&#x27; is either bronze or silver, and whose &#x27;birthDate&#x27; is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like &#x60;profileFields&#x3D;birthDate:|2001-12-31&#x60;. The basic profile fields have one of the following identifiers: - &#x60;name&#x60; or &#x60;fullName&#x60;: Full name; - &#x60;username&#x60;, &#x60;loginName&#x60; or &#x60;login&#x60;: Login name; - &#x60;email&#x60;: E-mail; - &#x60;phone&#x60;: Phone; - &#x60;accountNumber&#x60;, &#x60;account&#x60;: Account number; - &#x60;image&#x60;: Image (accepts a boolean value, indicating that either it is required that users either have images or not).  If address is an allowed profile field for search, specific address fields may be searched. The allowed ones are normally returned as the &#x60;addressFieldsInSearch&#x60; field in the corresponding result from a data-for-search request. The specific address fields are: - &#x60;address&#x60;: Searches on any address field (not a specific field); - &#x60;address.address&#x60;: Searches on the fields that represent the street address, which are &#x60;addressLine1&#x60;, &#x60;addressLine2&#x60;, &#x60;street&#x60;, &#x60;buildingNumber&#x60; and &#x60;complement&#x60;. Note that normally only a subset of them should be enabled in the configuration (either line 1 / 2 or street + number + complement); - &#x60;address.zip&#x60;: Searches for matching zip (postal) code; - &#x60;address.poBox&#x60;: Searches for matching postal box; - &#x60;address.neighborhood&#x60;: Searches by neighborhood; - &#x60;address.city&#x60;: Searches by city; - &#x60;address.region&#x60;: Searches by region (or state); - &#x60;address.country&#x60;: Searches by ISO 3166-1 alpha-2 country code. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: &#x60;profileFields&#x3D;dynamic:a|b|c&#x60;. However, it is also possible to perform a keywords-like (full-text) search using the dynamic value label. In this case a single value, prefixed by single quotes should be used. For example: &#x60;profileFields&#x3D;dynamic:&#x27;business&#x60;. | [optional]
 **roles** | [**\Cyclos\Api\Model\RoleEnum[]**](../Model/\Cyclos\Api\Model\RoleEnum.md)|  | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **statuses** | [**\Cyclos\Api\Model\UserStatusEnum[]**](../Model/\Cyclos\Api\Model\UserStatusEnum.md)|  | [optional]
 **users_to_exclude** | [**string[]**](../Model/string.md)| Indicated the users to be excluded from the result | [optional]
 **users_to_include** | [**string[]**](../Model/string.md)| Indicated the users to be included in the result.  Any other user not present in this list will be excluded from the result. | [optional]

### Return type

[**\Cyclos\Api\Model\UserResult[]**](../Model/UserResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> updateUser($body, $user, $confirmation_password)

Save a user / operator profile fields

Saves the user / operator profile felds. Only the basic fields (full name, login name, e-mail) and custom fields can be saved with this operation. Addresses, phones and images must be managed either via the full profile (`GET /users/{user}/data-for-edit-profile` / `PUT /users/{user}/profile`) or through their own paths.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\UserEdit(); // \Cyclos\Api\Model\UserEdit | The user / operator to be saved
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.

try {
    $apiInstance->updateUser($body, $user, $confirmation_password);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\UserEdit**](../Model/UserEdit.md)| The user / operator to be saved |
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateEmailChange**
> string validateEmailChange($key)

Validates an e-mail via a validation key

Use `POST /validate/email-change/{key}`   When the user e-mail is changed, and the configuration enables the validation, an e-mail is sent to the new user e-mail, with a link to verify it. In this case, only after verifying the new e-mail it is effectively set as the new e-mail. This operation effectively verifies the new e-mail.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The validation key sent via e-mail

try {
    $result = $apiInstance->validateEmailChange($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->validateEmailChange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The validation key sent via e-mail |

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateUserRegistration**
> \Cyclos\Api\Model\UserRegistrationResult validateUserRegistration($key, $fields)

Validates an user registration via a key sent by e-mail

Use `POST /validate/registration/{key}`   When a user is registered, and the configuration enables the validation, an e-mail is sent to user e-mail, with a link to verify it. In this case, only after verifying the e-mail the user is activated. This operation effectively verifies the e-mail and performs the user activation. However, depending on the settings, the initial user status might be blocked or inactive.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The validation key sent via e-mail
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->validateUserRegistration($key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->validateUserRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The validation key sent via e-mail |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\UserRegistrationResult**](../Model/UserRegistrationResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateUserRegistrationField**
> string validateUserRegistrationField($group, $field, $value, $as_member)

Validates the value of a single field for user registration

Validates the value of a field which will be used for registering a user, returning either `204 No Content` if the field is valid or `200` with the error description if the field is invalid. Notice that the result is the validation error. If a `422` status code is returned it means that either the given `field` is invalid or the given `value` is empty.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | The internal name or id of the group in which the user is being registered
$field = "field_example"; // string | One of: `name` (full name), `username` (login name), `email`, `mobilePhone`, `landLinePhone` or the internal name of a custom field.
$value = "value_example"; // string | The value to be validated
$as_member = true; // bool | Flag required only when the authenticated user is a member and a broker, in that case we need to distingish between both. If true then the groups returned will be those allowed as member, otherwise will return the goups allowed as broker.

try {
    $result = $apiInstance->validateUserRegistrationField($group, $field, $value, $as_member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->validateUserRegistrationField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| The internal name or id of the group in which the user is being registered |
 **field** | **string**| One of: &#x60;name&#x60; (full name), &#x60;username&#x60; (login name), &#x60;email&#x60;, &#x60;mobilePhone&#x60;, &#x60;landLinePhone&#x60; or the internal name of a custom field. |
 **value** | **string**| The value to be validated |
 **as_member** | **bool**| Flag required only when the authenticated user is a member and a broker, in that case we need to distingish between both. If true then the groups returned will be those allowed as member, otherwise will return the goups allowed as broker. | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewUser**
> \Cyclos\Api\Model\UserView viewUser($user, $fields)

View a user / operator details

Returns the profile information of either a user or operator.

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

$apiInstance = new Cyclos\Api\Functions\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->viewUser($user, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->viewUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\UserView**](../Model/UserView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

