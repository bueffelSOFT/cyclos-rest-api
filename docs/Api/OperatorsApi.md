# Cyclos\Api\OperatorsApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGeneralOperatorsDataForSearch**](OperatorsApi.md#getgeneraloperatorsdataforsearch) | **GET** /operators/data-for-search | Get configuration data for searching operators of any managed user
[**getOperatorDataForNew**](OperatorsApi.md#getoperatordatafornew) | **GET** /{user}/operators/data-for-new | Get configuration data for registering a new operator
[**getUserOperatorsDataForSearch**](OperatorsApi.md#getuseroperatorsdataforsearch) | **GET** /{user}/operators/data-for-search | Get configuration data for searching operators of the given user
[**registerOperator**](OperatorsApi.md#registeroperator) | **POST** /{user}/operators | Registers a new operator
[**searchGeneralOperators**](OperatorsApi.md#searchgeneraloperators) | **GET** /operators | Search the visible operators (of any managed user)
[**searchUserOperators**](OperatorsApi.md#searchuseroperators) | **GET** /{user}/operators | Search the operators of a given user

# **getGeneralOperatorsDataForSearch**
> \Cyclos\Api\Model\GeneralOperatorsDataForSearch getGeneralOperatorsDataForSearch($fields)

Get configuration data for searching operators of any managed user

Returns data with the current configuration regarding the search of operators of managed users. This is meant to be used by either administrators or brokers

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

$apiInstance = new Cyclos\Api\Functions\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getGeneralOperatorsDataForSearch($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getGeneralOperatorsDataForSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\GeneralOperatorsDataForSearch**](../Model/GeneralOperatorsDataForSearch.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOperatorDataForNew**
> \Cyclos\Api\Model\OperatorDataForNew getOperatorDataForNew($user, $fields, $group)

Get configuration data for registering a new operator

Contains all configuration needed for registering an operator, such as the enabled profile fields and the password(s).

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

$apiInstance = new Cyclos\Api\Functions\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$group = "group_example"; // string | The operator group. If no group is set, will return the list of operator groups for this owner. If a group is pre-set, will return only that group.

try {
    $result = $apiInstance->getOperatorDataForNew($user, $fields, $group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getOperatorDataForNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **group** | **string**| The operator group. If no group is set, will return the list of operator groups for this owner. If a group is pre-set, will return only that group. | [optional]

### Return type

[**\Cyclos\Api\Model\OperatorDataForNew**](../Model/OperatorDataForNew.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserOperatorsDataForSearch**
> \Cyclos\Api\Model\UserOperatorsDataForSearch getUserOperatorsDataForSearch($user, $fields)

Get configuration data for searching operators of the given user

Returns data with the current configuration regarding the operators of the given user

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

$apiInstance = new Cyclos\Api\Functions\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getUserOperatorsDataForSearch($user, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getUserOperatorsDataForSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\UserOperatorsDataForSearch**](../Model/UserOperatorsDataForSearch.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerOperator**
> \Cyclos\Api\Model\UserRegistrationResult registerOperator($body, $user)

Registers a new operator

Registers an operator, together with his password and phones.

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

$apiInstance = new Cyclos\Api\Functions\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\OperatorNew(); // \Cyclos\Api\Model\OperatorNew | The operator to be registered
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.

try {
    $result = $apiInstance->registerOperator($body, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->registerOperator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\OperatorNew**](../Model/OperatorNew.md)| The operator to be registered |
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |

### Return type

[**\Cyclos\Api\Model\UserRegistrationResult**](../Model/UserRegistrationResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchGeneralOperators**
> \Cyclos\Api\Model\OperatorResult[] searchGeneralOperators($fields, $page, $page_size, $user_groups, $broker, $creation_period, $statuses)

Search the visible operators (of any managed user)

Returns a page of operators that match a given criteria. To view an operator profile, use `GET /users/{operator}`.

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

$apiInstance = new Cyclos\Api\Functions\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40.
$user_groups = array("user_groups_example"); // string[] | Either id or internal names of user groups / group sets
$broker = "broker_example"; // string | Either id or a principal (login name, e-mail, etc) of the user broker
$creation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$statuses = array(new \Cyclos\Api\Model\UserStatusEnum()); // \Cyclos\Api\Model\UserStatusEnum[] | 

try {
    $result = $apiInstance->searchGeneralOperators($fields, $page, $page_size, $user_groups, $broker, $creation_period, $statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->searchGeneralOperators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. | [optional]
 **user_groups** | [**string[]**](../Model/string.md)| Either id or internal names of user groups / group sets | [optional]
 **broker** | **string**| Either id or a principal (login name, e-mail, etc) of the user broker | [optional]
 **creation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **statuses** | [**\Cyclos\Api\Model\UserStatusEnum[]**](../Model/\Cyclos\Api\Model\UserStatusEnum.md)|  | [optional]

### Return type

[**\Cyclos\Api\Model\OperatorResult[]**](../Model/OperatorResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUserOperators**
> \Cyclos\Api\Model\OperatorResult[] searchUserOperators($user, $fields, $creation_period, $ignore_profile_fields_in_list, $operator_groups, $page, $page_size, $skip_total_count, $statuses)

Search the operators of a given user

Returns a page of operators that match a given criteria. To view an operator profile, use `GET /users/{operator}`.

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

$apiInstance = new Cyclos\Api\Functions\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$creation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$ignore_profile_fields_in_list = true; // bool | When set to `true`, instead of returning users with corresponding profile fields set on list, will return them with `display` and `shortDisplay`.
$operator_groups = array("operator_groups_example"); // string[] | An array of operator group ids
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$statuses = array(new \Cyclos\Api\Model\UserStatusEnum()); // \Cyclos\Api\Model\UserStatusEnum[] | 

try {
    $result = $apiInstance->searchUserOperators($user, $fields, $creation_period, $ignore_profile_fields_in_list, $operator_groups, $page, $page_size, $skip_total_count, $statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->searchUserOperators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **creation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **ignore_profile_fields_in_list** | **bool**| When set to &#x60;true&#x60;, instead of returning users with corresponding profile fields set on list, will return them with &#x60;display&#x60; and &#x60;shortDisplay&#x60;. | [optional]
 **operator_groups** | [**string[]**](../Model/string.md)| An array of operator group ids | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **statuses** | [**\Cyclos\Api\Model\UserStatusEnum[]**](../Model/\Cyclos\Api\Model\UserStatusEnum.md)|  | [optional]

### Return type

[**\Cyclos\Api\Model\OperatorResult[]**](../Model/OperatorResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

