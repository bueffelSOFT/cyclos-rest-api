# Cyclos\Api\TokensApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activatePendingToken**](TokensApi.md#activatependingtoken) | **POST** /tokens/{id}/activate | Activates a token.
[**activateToken**](TokensApi.md#activatetoken) | **POST** /{user}/tokens/{type} | Activates a pending / unassigned token.
[**assignToken**](TokensApi.md#assigntoken) | **POST** /tokens/{id}/assign/{user} | Assigns a token to a given user.
[**blockToken**](TokensApi.md#blocktoken) | **POST** /tokens/{id}/block | Blocks a token.
[**cancelToken**](TokensApi.md#canceltoken) | **POST** /tokens/{id}/cancel | Permanently cancels a token.
[**createToken**](TokensApi.md#createtoken) | **POST** /tokens/{type}/new | Creates a new token of the given type.
[**getGeneralTokensDataForSearch**](TokensApi.md#getgeneraltokensdataforsearch) | **GET** /general-tokens/{type}/data-for-search | Returns data for searching tokens of a specific type.
[**getTokenDataForNew**](TokensApi.md#gettokendatafornew) | **GET** /tokens/{type}/data-for-new | Returns data to create a new token for the given type.
[**getUserTokens**](TokensApi.md#getusertokens) | **GET** /{user}/tokens/{type} | Returns the tokens of a type and user
[**listUserTokenTypes**](TokensApi.md#listusertokentypes) | **GET** /{user}/token-types | Returns the permissions over token types of the given user.
[**searchGeneralTokens**](TokensApi.md#searchgeneraltokens) | **GET** /general-tokens/{type} | Searches for tokens of a specific type, regardless of the user.
[**setTokenActivationDeadline**](TokensApi.md#settokenactivationdeadline) | **POST** /tokens/{id}/set-activation-deadline | Sets the activation deadline date of a specific token.
[**setTokenExpiryDate**](TokensApi.md#settokenexpirydate) | **POST** /tokens/{id}/set-expiry-date | Sets the expiry date of a specific token.
[**unblockToken**](TokensApi.md#unblocktoken) | **POST** /tokens/{id}/unblock | Unlocks a token.
[**viewToken**](TokensApi.md#viewtoken) | **GET** /tokens/{id} | Returns details of a specific token

# **activatePendingToken**
> activatePendingToken($id)

Activates a token.

Activates a token, which must be assigned to a user managed by the authenticated user. The token status must be `pending`.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification

try {
    $apiInstance->activatePendingToken($id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->activatePendingToken: ', $e->getMessage(), PHP_EOL;
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

# **activateToken**
> string activateToken($user, $type, $body)

Activates a pending / unassigned token.

If the token status is `unassigned`, the token will be assigned to the given user, and activated. Otherwise, if the token status is `pending`, just activates the token, checking that the user matches. In both cases the token status is set to `active`.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$type = "type_example"; // string | Either the identifier or internal name of the token type
$body = "body_example"; // string | The token value to activate

try {
    $result = $apiInstance->activateToken($user, $type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->activateToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **type** | **string**| Either the identifier or internal name of the token type |
 **body** | [**string**](../Model/string.md)| The token value to activate | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignToken**
> assignToken($id, $user)

Assigns a token to a given user.

Assigns a token to a given user. The token status must be `unassigned`. After assigning, the token status will be `pending`.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.

try {
    $apiInstance->assignToken($id, $user);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->assignToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blockToken**
> blockToken($id)

Blocks a token.

Blocks a token, which remains blocked until being unblocked again. The token status must be `active`.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification

try {
    $apiInstance->blockToken($id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->blockToken: ', $e->getMessage(), PHP_EOL;
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

# **cancelToken**
> cancelToken($id)

Permanently cancels a token.

Permanently cancels a token. The token status must be any but `canceled`.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification

try {
    $apiInstance->cancelToken($id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->cancelToken: ', $e->getMessage(), PHP_EOL;
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

# **createToken**
> string createToken($body, $type)

Creates a new token of the given type.

Creates a new token of the given type. If a user is specified, the token will be initially assigned to that user, and the initial status will be `pending`.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\TokenNew(); // \Cyclos\Api\Model\TokenNew | Details of the token to be created
$type = "type_example"; // string | Either the identifier or internal name of the token type

try {
    $result = $apiInstance->createToken($body, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->createToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\TokenNew**](../Model/TokenNew.md)| Details of the token to be created |
 **type** | **string**| Either the identifier or internal name of the token type |

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGeneralTokensDataForSearch**
> \Cyclos\Api\Model\TokenDataForSearch getGeneralTokensDataForSearch($type, $fields)

Returns data for searching tokens of a specific type.

Returns data for searching tokens of a specific type, regardless of the user.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Either the identifier or internal name of the token type
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getGeneralTokensDataForSearch($type, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getGeneralTokensDataForSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Either the identifier or internal name of the token type |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\TokenDataForSearch**](../Model/TokenDataForSearch.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenDataForNew**
> \Cyclos\Api\Model\TokenDataForNew getTokenDataForNew($type, $fields, $user)

Returns data to create a new token for the given type.

Returns data to create a new token for the given type.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Either the identifier or internal name of the token type
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$user = "user_example"; // string | Either id or identification of the user to have the token initially assigned

try {
    $result = $apiInstance->getTokenDataForNew($type, $fields, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getTokenDataForNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Either the identifier or internal name of the token type |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **user** | **string**| Either id or identification of the user to have the token initially assigned | [optional]

### Return type

[**\Cyclos\Api\Model\TokenDataForNew**](../Model/TokenDataForNew.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserTokens**
> \Cyclos\Api\Model\UserTokensListData getUserTokens($user, $type, $fields)

Returns the tokens of a type and user

Returns data containing the tokens of a given type and user, along with the tokens themselves. If the authenticated user is the requested user, will only return tokens whose `status` are either `active` or `blocked`.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$type = "type_example"; // string | Either the identifier or internal name of the token type
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getUserTokens($user, $type, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getUserTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **type** | **string**| Either the identifier or internal name of the token type |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\UserTokensListData**](../Model/UserTokensListData.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUserTokenTypes**
> \Cyclos\Api\Model\TokenPermissions[] listUserTokenTypes($user, $fields)

Returns the permissions over token types of the given user.

Returns the permissions the authenticated user can perform over the tokens of the given user.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->listUserTokenTypes($user, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->listUserTokenTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\TokenPermissions[]**](../Model/TokenPermissions.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchGeneralTokens**
> \Cyclos\Api\Model\TokenResult[] searchGeneralTokens($type, $fields, $activation_period, $brokers, $expiry_period, $groups, $page, $page_size, $skip_total_count, $statuses, $user, $value)

Searches for tokens of a specific type, regardless of the user.

Returns tokens matching the search criteria, for a specific type.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Either the identifier or internal name of the token type
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$activation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum token activation date.
$brokers = array("brokers_example"); // string[] | Either id or a principal (login name, e-mail, etc) for brokers
$expiry_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum token expiry date.
$groups = array("groups_example"); // string[] | Either id or internal names of groups / group sets
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$statuses = array(new \Cyclos\Api\Model\TokenStatusEnum()); // \Cyclos\Api\Model\TokenStatusEnum[] | The desired token statuses
$user = "user_example"; // string | Either id or a principal (login name, e-mail, etc) for the token owner user
$value = "value_example"; // string | The token value

try {
    $result = $apiInstance->searchGeneralTokens($type, $fields, $activation_period, $brokers, $expiry_period, $groups, $page, $page_size, $skip_total_count, $statuses, $user, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->searchGeneralTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Either the identifier or internal name of the token type |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **activation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum token activation date. | [optional]
 **brokers** | [**string[]**](../Model/string.md)| Either id or a principal (login name, e-mail, etc) for brokers | [optional]
 **expiry_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum token expiry date. | [optional]
 **groups** | [**string[]**](../Model/string.md)| Either id or internal names of groups / group sets | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **statuses** | [**\Cyclos\Api\Model\TokenStatusEnum[]**](../Model/\Cyclos\Api\Model\TokenStatusEnum.md)| The desired token statuses | [optional]
 **user** | **string**| Either id or a principal (login name, e-mail, etc) for the token owner user | [optional]
 **value** | **string**| The token value | [optional]

### Return type

[**\Cyclos\Api\Model\TokenResult[]**](../Model/TokenResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setTokenActivationDeadline**
> setTokenActivationDeadline($id, $date)

Sets the activation deadline date of a specific token.

Updates the token activation deadline date. The token status must be `pending` or `activationExpired`.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The new activation deadline date. If not specified, there will be no deadline.

try {
    $apiInstance->setTokenActivationDeadline($id, $date);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->setTokenActivationDeadline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **date** | **\DateTime**| The new activation deadline date. If not specified, there will be no deadline. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setTokenExpiryDate**
> setTokenExpiryDate($id, $date)

Sets the expiry date of a specific token.

Updates the token expiry date. The token status must be either `active`, `blocked` or `expired`.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The new expiry date. If not specified, the token will never expire.

try {
    $apiInstance->setTokenExpiryDate($id, $date);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->setTokenExpiryDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **date** | **\DateTime**| The new expiry date. If not specified, the token will never expire. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unblockToken**
> unblockToken($id)

Unlocks a token.

Unlocks a token, returning its status to `active`. The token status must be `blocked`.

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification

try {
    $apiInstance->unblockToken($id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->unblockToken: ', $e->getMessage(), PHP_EOL;
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

# **viewToken**
> \Cyclos\Api\Model\TokenView viewToken($id, $fields)

Returns details of a specific token

Returns information about a token, located by either id or number

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

$apiInstance = new Cyclos\Api\Functions\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->viewToken($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->viewToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\TokenView**](../Model/TokenView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

