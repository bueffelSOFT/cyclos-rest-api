# Cyclos\Api\BalanceLimitsApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountBalanceLimits**](BalanceLimitsApi.md#getaccountbalancelimits) | **GET** /{user}/accounts/{accountType}/limits | Returns data for the limits of a given account
[**getAccountBalanceLimitsData**](BalanceLimitsApi.md#getaccountbalancelimitsdata) | **GET** /accounts/data-for-limits | Returns data for a general search of account balance limits.
[**getDataForUserBalanceLimits**](BalanceLimitsApi.md#getdataforuserbalancelimits) | **GET** /{user}/accounts/data-for-limits | Returns data regarding the limits of all accounts of a given user.
[**searchAccountBalanceLimits**](BalanceLimitsApi.md#searchaccountbalancelimits) | **GET** /accounts/limits | Searches for account balance limits.
[**setAccountBalanceLimits**](BalanceLimitsApi.md#setaccountbalancelimits) | **PUT** /{user}/accounts/{accountType}/limits | Sets the limits for a given user account.

# **getAccountBalanceLimits**
> \Cyclos\Api\Model\AccountBalanceLimitsData getAccountBalanceLimits($user, $account_type, $fields)

Returns data for the limits of a given account

Returns the data needed to edit the limits of the given account, plus the history of limit changes.

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

$apiInstance = new Cyclos\Api\Functions\BalanceLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$account_type = "account_type_example"; // string | The account type internal name or id
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getAccountBalanceLimits($user, $account_type, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceLimitsApi->getAccountBalanceLimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **account_type** | **string**| The account type internal name or id |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\AccountBalanceLimitsData**](../Model/AccountBalanceLimitsData.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountBalanceLimitsData**
> \Cyclos\Api\Model\DataForBalanceLimitsSearch getAccountBalanceLimitsData($fields)

Returns data for a general search of account balance limits.

Returns data for a general search of account balance limits.

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

$apiInstance = new Cyclos\Api\Functions\BalanceLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getAccountBalanceLimitsData($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceLimitsApi->getAccountBalanceLimitsData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\DataForBalanceLimitsSearch**](../Model/DataForBalanceLimitsSearch.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataForUserBalanceLimits**
> \Cyclos\Api\Model\UserAccountBalanceLimitsListData getDataForUserBalanceLimits($user, $fields)

Returns data regarding the limits of all accounts of a given user.

Returns data regarding the limits of all accounts of a given user.

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

$apiInstance = new Cyclos\Api\Functions\BalanceLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getDataForUserBalanceLimits($user, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceLimitsApi->getDataForUserBalanceLimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\UserAccountBalanceLimitsListData**](../Model/UserAccountBalanceLimitsListData.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAccountBalanceLimits**
> \Cyclos\Api\Model\GeneralAccountBalanceLimitsResult[] searchAccountBalanceLimits($fields, $account_type, $broker, $brokers, $by, $currency, $custom_limit, $custom_limit_range, $custom_upper_limit, $custom_upper_limit_range, $groups, $kind, $page, $page_size, $skip_total_count, $user)

Searches for account balance limits.

Searches for account balance limits, according to the given filters.

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

$apiInstance = new Cyclos\Api\Functions\BalanceLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$account_type = "account_type_example"; // string | Either id or internal name of the account type
$broker = "broker_example"; // string | DEPRECATED: Use `brokers` instead. Will be removed in 4.14. Either the ids or identification methods of users' broker
$brokers = array("brokers_example"); // string[] | Either the ids or identification methods of users' broker
$by = "by_example"; // string | Either the id or identifier of the user that performed the change
$currency = "currency_example"; // string | Either id or internal name of the currency
$custom_limit = true; // bool | When set, returns only accounts that have a custom (if true) or have default (false) lower limit.
$custom_limit_range = array(3.4); // float[] | The minimum / maximum customized limit. Is only used when `customLimit` is set to true. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$custom_upper_limit = true; // bool | When set, returns only accounts that have a custom (if true) or have default (false) upper limit.
$custom_upper_limit_range = array(3.4); // float[] | The minimum / maximum customized upper limit. Is only used when `customUpperLimit` is set to true. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$groups = array("groups_example"); // string[] | Either the ids or internal names of user group
$kind = new \Cyclos\Api\Model\BalanceLimitKind(); // \Cyclos\Api\Model\BalanceLimitKind | 
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$user = "user_example"; // string | Either the id or identifier of the account owner

try {
    $result = $apiInstance->searchAccountBalanceLimits($fields, $account_type, $broker, $brokers, $by, $currency, $custom_limit, $custom_limit_range, $custom_upper_limit, $custom_upper_limit_range, $groups, $kind, $page, $page_size, $skip_total_count, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceLimitsApi->searchAccountBalanceLimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **account_type** | **string**| Either id or internal name of the account type | [optional]
 **broker** | **string**| DEPRECATED: Use &#x60;brokers&#x60; instead. Will be removed in 4.14. Either the ids or identification methods of users&#x27; broker | [optional]
 **brokers** | [**string[]**](../Model/string.md)| Either the ids or identification methods of users&#x27; broker | [optional]
 **by** | **string**| Either the id or identifier of the user that performed the change | [optional]
 **currency** | **string**| Either id or internal name of the currency | [optional]
 **custom_limit** | **bool**| When set, returns only accounts that have a custom (if true) or have default (false) lower limit. | [optional]
 **custom_limit_range** | [**float[]**](../Model/float.md)| The minimum / maximum customized limit. Is only used when &#x60;customLimit&#x60; is set to true. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **custom_upper_limit** | **bool**| When set, returns only accounts that have a custom (if true) or have default (false) upper limit. | [optional]
 **custom_upper_limit_range** | [**float[]**](../Model/float.md)| The minimum / maximum customized upper limit. Is only used when &#x60;customUpperLimit&#x60; is set to true. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **groups** | [**string[]**](../Model/string.md)| Either the ids or internal names of user group | [optional]
 **kind** | [**\Cyclos\Api\Model\BalanceLimitKind**](../Model/.md)|  | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **user** | **string**| Either the id or identifier of the account owner | [optional]

### Return type

[**\Cyclos\Api\Model\GeneralAccountBalanceLimitsResult[]**](../Model/GeneralAccountBalanceLimitsResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAccountBalanceLimits**
> setAccountBalanceLimits($user, $account_type, $body, $confirmation_password)

Sets the limits for a given user account.

Saves the account limits. The lower limit may be customized or default, while the upper limit may also be set to unlimited.

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

$apiInstance = new Cyclos\Api\Functions\BalanceLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$account_type = "account_type_example"; // string | The account type internal name or id
$body = new \Cyclos\Api\Model\SetAccountBalanceLimits(); // \Cyclos\Api\Model\SetAccountBalanceLimits | The new account balance limits
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.

try {
    $apiInstance->setAccountBalanceLimits($user, $account_type, $body, $confirmation_password);
} catch (Exception $e) {
    echo 'Exception when calling BalanceLimitsApi->setAccountBalanceLimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **account_type** | **string**| The account type internal name or id |
 **body** | [**\Cyclos\Api\Model\SetAccountBalanceLimits**](../Model/SetAccountBalanceLimits.md)| The new account balance limits | [optional]
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

