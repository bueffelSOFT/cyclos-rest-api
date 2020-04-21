# Cyclos\Api\AccountsApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountBalanceHistory**](AccountsApi.md#getaccountbalancehistory) | **GET** /{owner}/accounts/{accountType}/balances-history | Returns the account balances over time
[**getAccountHistoryDataByOwnerAndType**](AccountsApi.md#getaccounthistorydatabyownerandtype) | **GET** /{owner}/accounts/{accountType}/data-for-history | Returns data for searching an account history by owner and type
[**getAccountStatusByOwnerAndType**](AccountsApi.md#getaccountstatusbyownerandtype) | **GET** /{owner}/accounts/{accountType} | Returns the status of an account by owner and type
[**getUserBalancesData**](AccountsApi.md#getuserbalancesdata) | **GET** /accounts/data-for-user-balances | Returns data for searching users together with their balances
[**getUserBalancesSummary**](AccountsApi.md#getuserbalancessummary) | **GET** /accounts/{accountType}/user-balances/summary | Returns summarized information for the user balances search
[**listAccountsByOwner**](AccountsApi.md#listaccountsbyowner) | **GET** /{owner}/accounts | Lists accounts of the given owner with their statuses
[**searchAccountHistory**](AccountsApi.md#searchaccounthistory) | **GET** /{owner}/accounts/{accountType}/history | Search an account history
[**searchUsersWithBalances**](AccountsApi.md#searchuserswithbalances) | **GET** /accounts/{accountType}/user-balances | Searches for users together with balance information

# **getAccountBalanceHistory**
> \Cyclos\Api\Model\AccountBalanceHistoryResult getAccountBalanceHistory($owner, $account_type, $fields, $date_period, $interval_unit, $interval_count)

Returns the account balances over time

Receives a period and an interval, returning the balance over each corresponding date. The maximum number of data points is 60, so it is possible to get the balances per day over 2 months. For larger periods, use weeks or months. When no period is given, assumes the beginning of current year or the account creation date, whichever is newer. When no interval is given, one is assumed. Also returns status of the given account

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

$apiInstance = new Cyclos\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = "owner_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user; - `system` for the system owner.
$account_type = "account_type_example"; // string | The account type internal name or id
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$date_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$interval_unit = new \Cyclos\Api\Model\TimeFieldEnum(); // \Cyclos\Api\Model\TimeFieldEnum | The time unit for the data point interval
$interval_count = 56; // int | A data point every X units. For example, it is possible to request the balance every 3 days. Defaults to 1.

try {
    $result = $apiInstance->getAccountBalanceHistory($owner, $account_type, $fields, $date_period, $interval_unit, $interval_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountBalanceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the system owner. |
 **account_type** | **string**| The account type internal name or id |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **date_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **interval_unit** | [**\Cyclos\Api\Model\TimeFieldEnum**](../Model/.md)| The time unit for the data point interval | [optional]
 **interval_count** | **int**| A data point every X units. For example, it is possible to request the balance every 3 days. Defaults to 1. | [optional]

### Return type

[**\Cyclos\Api\Model\AccountBalanceHistoryResult**](../Model/AccountBalanceHistoryResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountHistoryDataByOwnerAndType**
> \Cyclos\Api\Model\DataForAccountHistory getAccountHistoryDataByOwnerAndType($owner, $account_type, $fields)

Returns data for searching an account history by owner and type

Returns configuration data for searching entries in a specific account history, as well as status information for that account information.

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

$apiInstance = new Cyclos\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = "owner_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user; - `system` for the system owner.
$account_type = "account_type_example"; // string | The account type internal name or id
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getAccountHistoryDataByOwnerAndType($owner, $account_type, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountHistoryDataByOwnerAndType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the system owner. |
 **account_type** | **string**| The account type internal name or id |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\DataForAccountHistory**](../Model/DataForAccountHistory.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountStatusByOwnerAndType**
> \Cyclos\Api\Model\AccountWithHistoryStatus getAccountStatusByOwnerAndType($owner, $account_type, $fields, $access_clients, $amount_range, $broker, $brokers, $by, $channels, $charged_back, $custom_fields, $date_period, $direction, $excluded_ids, $from_current_access_client, $groups, $include_generated_by_access_client, $kinds, $page, $page_size, $skip_total_count, $statuses, $transaction_number, $transfer_filters, $transfer_kinds, $transfer_types, $user)

Returns the status of an account by owner and type

Returns the account status for a specific account. The account type may be either the identifier or internal name. The status will contain both instant status information, that is, the same fields as `AccountStatus`, plus status that depend on the input parameters, such as those defined in `AccountWithHistoryStatus`. The actual data inside the result depend on the configuration, in the `Account status indicators` option, which is used to limit the amount of data returned.

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

$apiInstance = new Cyclos\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = "owner_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user; - `system` for the system owner.
$account_type = "account_type_example"; // string | The account type internal name or id
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$access_clients = array("access_clients_example"); // string[] | References to access clients (id or token) used to perform / receive the transfer.
$amount_range = array(3.4); // float[] | The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$broker = "broker_example"; // string | DEPRECATED: Use `brokers` instead. Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator.
$brokers = array("brokers_example"); // string[] | Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator.
$by = "by_example"; // string | Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator.
$channels = array("channels_example"); // string[] | Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator.
$charged_back = true; // bool | When set to either `true` will only return transfers that were charged-back. When set to `false`, will only return transfers that were not charged-back. When left blank will not filter by this creterion.
$custom_fields = array("custom_fields_example"); // string[] | Transaction custom field values used as filters. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by : (colon).  For example, `customFields=field1:value1,field2:value2`. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, customFields=field1:valueA|valueB. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, `customFields=rank:bronze|silver,documentDate:2000-01-01|2001-12-31` would match results whose custom field with internal name `rank` is either `bronze` or `silver`, and whose `documentDate` is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like `customFields=documentDate:|2001-12-31`. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the  corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: `customFields=dynamic:a|b|c`. However, it is also possible to perform a partial-match search using the dynamic value label. In this case a single value, prefixed or enclosed by single quotes should be used. For example: `customFields=dynamic:'business` or `customFields=dynamic:'business'`.
$date_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$direction = new \Cyclos\Api\Model\TransferDirectionEnum(); // \Cyclos\Api\Model\TransferDirectionEnum | 
$excluded_ids = array("excluded_ids_example"); // string[] | List of transfers ids to be excluded from the result.
$from_current_access_client = true; // bool | Flag indicating whether to include only transfers by the current access client.
$groups = array("groups_example"); // string[] | Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator.
$include_generated_by_access_client = true; // bool | Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a `ticket` or `paymentRequest` was processed then a new transfer will be generated.
$kinds = array(new \Cyclos\Api\Model\TransferKind()); // \Cyclos\Api\Model\TransferKind[] | The kind of transfers to return
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$statuses = array("statuses_example"); // string[] | Transfer statuses used as search criteria. Each array element should be either the identifier or the status qualified internal name, composed by flow internal name, a dot, and the status internal name. For example, `loan.open` would be a valid internal name.
$transaction_number = "transaction_number_example"; // string | The transaction number of the matching transfer
$transfer_filters = array("transfer_filters_example"); // string[] | Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format `accountType.transferFilter`.
$transfer_kinds = array(new \Cyclos\Api\Model\TransferKind()); // \Cyclos\Api\Model\TransferKind[] | DEPRECATED: Use `kinds` instead
$transfer_types = array("transfer_types_example"); // string[] | Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format `accountType.transferType`.
$user = "user_example"; // string | Reference a user that should have either received / performed the transfer.

try {
    $result = $apiInstance->getAccountStatusByOwnerAndType($owner, $account_type, $fields, $access_clients, $amount_range, $broker, $brokers, $by, $channels, $charged_back, $custom_fields, $date_period, $direction, $excluded_ids, $from_current_access_client, $groups, $include_generated_by_access_client, $kinds, $page, $page_size, $skip_total_count, $statuses, $transaction_number, $transfer_filters, $transfer_kinds, $transfer_types, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountStatusByOwnerAndType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the system owner. |
 **account_type** | **string**| The account type internal name or id |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **access_clients** | [**string[]**](../Model/string.md)| References to access clients (id or token) used to perform / receive the transfer. | [optional]
 **amount_range** | [**float[]**](../Model/float.md)| The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **broker** | **string**| DEPRECATED: Use &#x60;brokers&#x60; instead. Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional]
 **brokers** | [**string[]**](../Model/string.md)| Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional]
 **by** | **string**| Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator. | [optional]
 **channels** | [**string[]**](../Model/string.md)| Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional]
 **charged_back** | **bool**| When set to either &#x60;true&#x60; will only return transfers that were charged-back. When set to &#x60;false&#x60;, will only return transfers that were not charged-back. When left blank will not filter by this creterion. | [optional]
 **custom_fields** | [**string[]**](../Model/string.md)| Transaction custom field values used as filters. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by : (colon).  For example, &#x60;customFields&#x3D;field1:value1,field2:value2&#x60;. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, customFields&#x3D;field1:valueA|valueB. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, &#x60;customFields&#x3D;rank:bronze|silver,documentDate:2000-01-01|2001-12-31&#x60; would match results whose custom field with internal name &#x60;rank&#x60; is either &#x60;bronze&#x60; or &#x60;silver&#x60;, and whose &#x60;documentDate&#x60; is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like &#x60;customFields&#x3D;documentDate:|2001-12-31&#x60;. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the  corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: &#x60;customFields&#x3D;dynamic:a|b|c&#x60;. However, it is also possible to perform a partial-match search using the dynamic value label. In this case a single value, prefixed or enclosed by single quotes should be used. For example: &#x60;customFields&#x3D;dynamic:&#x27;business&#x60; or &#x60;customFields&#x3D;dynamic:&#x27;business&#x27;&#x60;. | [optional]
 **date_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **direction** | [**\Cyclos\Api\Model\TransferDirectionEnum**](../Model/.md)|  | [optional]
 **excluded_ids** | [**string[]**](../Model/string.md)| List of transfers ids to be excluded from the result. | [optional]
 **from_current_access_client** | **bool**| Flag indicating whether to include only transfers by the current access client. | [optional]
 **groups** | [**string[]**](../Model/string.md)| Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional]
 **include_generated_by_access_client** | **bool**| Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a &#x60;ticket&#x60; or &#x60;paymentRequest&#x60; was processed then a new transfer will be generated. | [optional]
 **kinds** | [**\Cyclos\Api\Model\TransferKind[]**](../Model/\Cyclos\Api\Model\TransferKind.md)| The kind of transfers to return | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **statuses** | [**string[]**](../Model/string.md)| Transfer statuses used as search criteria. Each array element should be either the identifier or the status qualified internal name, composed by flow internal name, a dot, and the status internal name. For example, &#x60;loan.open&#x60; would be a valid internal name. | [optional]
 **transaction_number** | **string**| The transaction number of the matching transfer | [optional]
 **transfer_filters** | [**string[]**](../Model/string.md)| Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format &#x60;accountType.transferFilter&#x60;. | [optional]
 **transfer_kinds** | [**\Cyclos\Api\Model\TransferKind[]**](../Model/\Cyclos\Api\Model\TransferKind.md)| DEPRECATED: Use &#x60;kinds&#x60; instead | [optional]
 **transfer_types** | [**string[]**](../Model/string.md)| Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format &#x60;accountType.transferType&#x60;. | [optional]
 **user** | **string**| Reference a user that should have either received / performed the transfer. | [optional]

### Return type

[**\Cyclos\Api\Model\AccountWithHistoryStatus**](../Model/AccountWithHistoryStatus.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserBalancesData**
> \Cyclos\Api\Model\DataForUserBalancesSearch getUserBalancesData($fields)

Returns data for searching users together with their balances

Returns configuration data for searching users together with their balances. The account types are returned, and the account type needs to be passed in the other `user-balances` operations.

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

$apiInstance = new Cyclos\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getUserBalancesData($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getUserBalancesData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\DataForUserBalancesSearch**](../Model/DataForUserBalancesSearch.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserBalancesSummary**
> \Cyclos\Api\Model\UsersWithBalanceSummary getUserBalancesSummary($account_type, $fields, $activation_period, $address_result, $balance_range, $brokers, $creation_period, $groups, $include_group, $include_group_set, $keywords, $last_incoming_transfer_period, $last_login_period, $last_outgoing_transfer_period, $latitude, $longitude, $main_broker_only, $max_distance, $medium_balance_range, $negative_since_period, $page, $page_size, $profile_fields, $skip_total_count, $users_to_exclude, $users_to_include)

Returns summarized information for the user balances search

Returns summaries for each balance level (if ranges are defined in either account type or filter), as well as the total summary.

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

$apiInstance = new Cyclos\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_type = "account_type_example"; // string | The account type
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$activation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user activation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$address_result = new \Cyclos\Api\Model\UserAddressResultEnum(); // \Cyclos\Api\Model\UserAddressResultEnum | 
$balance_range = array(56); // int[] | The minimum and / or maximum balance for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$brokers = array("brokers_example"); // string[] | Either id or a principal (login name, e-mail, etc) for brokers
$creation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$groups = array("groups_example"); // string[] | Either id or internal names of groups / group sets
$include_group = true; // bool | When set to `true` and the logged user has permission to view user groups, will return the `group` property on users.
$include_group_set = true; // bool | When set to `true` and the logged user has permission to view user group sets, will return the `groupSet` property on users.
$keywords = "keywords_example"; // string | Textual search keywords. Sometimes, like in user search, the fields matched depends on what is configured on the products.
$last_incoming_transfer_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum date of the last incoming transfer for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$last_login_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user last login date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$last_outgoing_transfer_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum date of the last outgoing transfer for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$latitude = 1.2; // double | The reference latitude for distance searches
$longitude = 1.2; // double | The reference longitude for distance searches
$main_broker_only = true; // bool | When set to `true`, will match only users that have the brokers as set in the `brokers` parameter as main broker.
$max_distance = 1.2; // double | Maximum straight-line distance between the informed location and the resulting address. Is measured either in kilometers or miles, depending on the configuration. Only accepted if both `longitude` and `latitude` parameters are passed with the actual reference position.
$medium_balance_range = array(56); // int[] | An array with 2 elements, describing the lower and upper medium balance bounds. If not specified, the range defined in the account type will be used. If that one is also not defined, there will be no definitions for balance levels. Both bounds need to be set as 2 element in the array, or it won't be considered.
$negative_since_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum negative-since date for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$profile_fields = array("profile_fields_example"); // string[] | User profile fields, both basic (full name, login name, phone, e-mail, etc) and custom fields, that are used for search. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by `:` (colon). For example, `profileFields=field1:value1,field2:value2`. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, `profileFields=field1:valueA|valueB`. The accepted fields depend on the products the authenticated user has. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, `profileFields=rank:bronze|silver,birthDate:2000-01-01|2001-12-31` would match results whose custom field with internal name 'rank' is either bronze or silver, and whose 'birthDate' is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like `profileFields=birthDate:|2001-12-31`. The basic profile fields have one of the following identifiers: - `name` or `fullName`: Full name; - `username`, `loginName` or `login`: Login name; - `email`: E-mail; - `phone`: Phone; - `accountNumber`, `account`: Account number; - `image`: Image (accepts a boolean value, indicating that either it is required that users either have images or not).  If address is an allowed profile field for search, specific address fields may be searched. The allowed ones are normally returned as the `addressFieldsInSearch` field in the corresponding result from a data-for-search request. The specific address fields are: - `address`: Searches on any address field (not a specific field); - `address.address`: Searches on the fields that represent the street address, which are `addressLine1`, `addressLine2`, `street`, `buildingNumber` and `complement`. Note that normally only a subset of them should be enabled in the configuration (either line 1 / 2 or street + number + complement); - `address.zip`: Searches for matching zip (postal) code; - `address.poBox`: Searches for matching postal box; - `address.neighborhood`: Searches by neighborhood; - `address.city`: Searches by city; - `address.region`: Searches by region (or state); - `address.country`: Searches by ISO 3166-1 alpha-2 country code. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: `profileFields=dynamic:a|b|c`. However, it is also possible to perform a keywords-like (full-text) search using the dynamic value label. In this case a single value, prefixed by single quotes should be used. For example: `profileFields=dynamic:'business`.
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$users_to_exclude = array("users_to_exclude_example"); // string[] | Indicated the users to be excluded from the result
$users_to_include = array("users_to_include_example"); // string[] | Indicated the users to be included in the result.  Any other user not present in this list will be excluded from the result.

try {
    $result = $apiInstance->getUserBalancesSummary($account_type, $fields, $activation_period, $address_result, $balance_range, $brokers, $creation_period, $groups, $include_group, $include_group_set, $keywords, $last_incoming_transfer_period, $last_login_period, $last_outgoing_transfer_period, $latitude, $longitude, $main_broker_only, $max_distance, $medium_balance_range, $negative_since_period, $page, $page_size, $profile_fields, $skip_total_count, $users_to_exclude, $users_to_include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getUserBalancesSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_type** | **string**| The account type |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **activation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user activation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **address_result** | [**\Cyclos\Api\Model\UserAddressResultEnum**](../Model/.md)|  | [optional]
 **balance_range** | [**int[]**](../Model/int.md)| The minimum and / or maximum balance for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **brokers** | [**string[]**](../Model/string.md)| Either id or a principal (login name, e-mail, etc) for brokers | [optional]
 **creation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **groups** | [**string[]**](../Model/string.md)| Either id or internal names of groups / group sets | [optional]
 **include_group** | **bool**| When set to &#x60;true&#x60; and the logged user has permission to view user groups, will return the &#x60;group&#x60; property on users. | [optional]
 **include_group_set** | **bool**| When set to &#x60;true&#x60; and the logged user has permission to view user group sets, will return the &#x60;groupSet&#x60; property on users. | [optional]
 **keywords** | **string**| Textual search keywords. Sometimes, like in user search, the fields matched depends on what is configured on the products. | [optional]
 **last_incoming_transfer_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum date of the last incoming transfer for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **last_login_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user last login date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **last_outgoing_transfer_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum date of the last outgoing transfer for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **latitude** | **double**| The reference latitude for distance searches | [optional]
 **longitude** | **double**| The reference longitude for distance searches | [optional]
 **main_broker_only** | **bool**| When set to &#x60;true&#x60;, will match only users that have the brokers as set in the &#x60;brokers&#x60; parameter as main broker. | [optional]
 **max_distance** | **double**| Maximum straight-line distance between the informed location and the resulting address. Is measured either in kilometers or miles, depending on the configuration. Only accepted if both &#x60;longitude&#x60; and &#x60;latitude&#x60; parameters are passed with the actual reference position. | [optional]
 **medium_balance_range** | [**int[]**](../Model/int.md)| An array with 2 elements, describing the lower and upper medium balance bounds. If not specified, the range defined in the account type will be used. If that one is also not defined, there will be no definitions for balance levels. Both bounds need to be set as 2 element in the array, or it won&#x27;t be considered. | [optional]
 **negative_since_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum negative-since date for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **profile_fields** | [**string[]**](../Model/string.md)| User profile fields, both basic (full name, login name, phone, e-mail, etc) and custom fields, that are used for search. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by &#x60;:&#x60; (colon). For example, &#x60;profileFields&#x3D;field1:value1,field2:value2&#x60;. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, &#x60;profileFields&#x3D;field1:valueA|valueB&#x60;. The accepted fields depend on the products the authenticated user has. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, &#x60;profileFields&#x3D;rank:bronze|silver,birthDate:2000-01-01|2001-12-31&#x60; would match results whose custom field with internal name &#x27;rank&#x27; is either bronze or silver, and whose &#x27;birthDate&#x27; is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like &#x60;profileFields&#x3D;birthDate:|2001-12-31&#x60;. The basic profile fields have one of the following identifiers: - &#x60;name&#x60; or &#x60;fullName&#x60;: Full name; - &#x60;username&#x60;, &#x60;loginName&#x60; or &#x60;login&#x60;: Login name; - &#x60;email&#x60;: E-mail; - &#x60;phone&#x60;: Phone; - &#x60;accountNumber&#x60;, &#x60;account&#x60;: Account number; - &#x60;image&#x60;: Image (accepts a boolean value, indicating that either it is required that users either have images or not).  If address is an allowed profile field for search, specific address fields may be searched. The allowed ones are normally returned as the &#x60;addressFieldsInSearch&#x60; field in the corresponding result from a data-for-search request. The specific address fields are: - &#x60;address&#x60;: Searches on any address field (not a specific field); - &#x60;address.address&#x60;: Searches on the fields that represent the street address, which are &#x60;addressLine1&#x60;, &#x60;addressLine2&#x60;, &#x60;street&#x60;, &#x60;buildingNumber&#x60; and &#x60;complement&#x60;. Note that normally only a subset of them should be enabled in the configuration (either line 1 / 2 or street + number + complement); - &#x60;address.zip&#x60;: Searches for matching zip (postal) code; - &#x60;address.poBox&#x60;: Searches for matching postal box; - &#x60;address.neighborhood&#x60;: Searches by neighborhood; - &#x60;address.city&#x60;: Searches by city; - &#x60;address.region&#x60;: Searches by region (or state); - &#x60;address.country&#x60;: Searches by ISO 3166-1 alpha-2 country code. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: &#x60;profileFields&#x3D;dynamic:a|b|c&#x60;. However, it is also possible to perform a keywords-like (full-text) search using the dynamic value label. In this case a single value, prefixed by single quotes should be used. For example: &#x60;profileFields&#x3D;dynamic:&#x27;business&#x60;. | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **users_to_exclude** | [**string[]**](../Model/string.md)| Indicated the users to be excluded from the result | [optional]
 **users_to_include** | [**string[]**](../Model/string.md)| Indicated the users to be included in the result.  Any other user not present in this list will be excluded from the result. | [optional]

### Return type

[**\Cyclos\Api\Model\UsersWithBalanceSummary**](../Model/UsersWithBalanceSummary.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccountsByOwner**
> \Cyclos\Api\Model\AccountWithStatus[] listAccountsByOwner($owner, $fields)

Lists accounts of the given owner with their statuses

Lists all visible accounts of the given user, or system accounts if the owner 'system' is used. Each account has status information, like the current balance, avaliable balance and so on. However, the returned data depend on the configuration, in the `Account status indicators` option, which is used to limit the amount of data returned.

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

$apiInstance = new Cyclos\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = "owner_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user; - `system` for the system owner.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->listAccountsByOwner($owner, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listAccountsByOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the system owner. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\AccountWithStatus[]**](../Model/AccountWithStatus.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAccountHistory**
> \Cyclos\Api\Model\AccountHistoryResult[] searchAccountHistory($owner, $account_type, $fields, $access_clients, $amount_range, $broker, $brokers, $by, $channels, $charged_back, $custom_fields, $date_period, $direction, $excluded_ids, $from_current_access_client, $groups, $include_generated_by_access_client, $kinds, $order_by, $page, $page_size, $skip_total_count, $statuses, $transaction_number, $transfer_filters, $transfer_kinds, $transfer_types, $user)

Search an account history

Returns a page of account history entries for a specific account, according to the given criteria

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

$apiInstance = new Cyclos\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = "owner_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user; - `system` for the system owner.
$account_type = "account_type_example"; // string | The account type internal name or id
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$access_clients = array("access_clients_example"); // string[] | References to access clients (id or token) used to perform / receive the transfer.
$amount_range = array(3.4); // float[] | The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$broker = "broker_example"; // string | DEPRECATED: Use `brokers` instead. Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator.
$brokers = array("brokers_example"); // string[] | Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator.
$by = "by_example"; // string | Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator.
$channels = array("channels_example"); // string[] | Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator.
$charged_back = true; // bool | When set to either `true` will only return transfers that were charged-back. When set to `false`, will only return transfers that were not charged-back. When left blank will not filter by this creterion.
$custom_fields = array("custom_fields_example"); // string[] | Transaction custom field values used as filters. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by : (colon).  For example, `customFields=field1:value1,field2:value2`. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, customFields=field1:valueA|valueB. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, `customFields=rank:bronze|silver,documentDate:2000-01-01|2001-12-31` would match results whose custom field with internal name `rank` is either `bronze` or `silver`, and whose `documentDate` is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like `customFields=documentDate:|2001-12-31`. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the  corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: `customFields=dynamic:a|b|c`. However, it is also possible to perform a partial-match search using the dynamic value label. In this case a single value, prefixed or enclosed by single quotes should be used. For example: `customFields=dynamic:'business` or `customFields=dynamic:'business'`.
$date_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$direction = new \Cyclos\Api\Model\TransferDirectionEnum(); // \Cyclos\Api\Model\TransferDirectionEnum | 
$excluded_ids = array("excluded_ids_example"); // string[] | List of transfers ids to be excluded from the result.
$from_current_access_client = true; // bool | Flag indicating whether to include only transfers by the current access client.
$groups = array("groups_example"); // string[] | Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator.
$include_generated_by_access_client = true; // bool | Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a `ticket` or `paymentRequest` was processed then a new transfer will be generated.
$kinds = array(new \Cyclos\Api\Model\TransferKind()); // \Cyclos\Api\Model\TransferKind[] | The kind of transfers to return
$order_by = new \Cyclos\Api\Model\TransOrderByEnum(); // \Cyclos\Api\Model\TransOrderByEnum | 
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$statuses = array("statuses_example"); // string[] | Transfer statuses used as search criteria. Each array element should be either the identifier or the status qualified internal name, composed by flow internal name, a dot, and the status internal name. For example, `loan.open` would be a valid internal name.
$transaction_number = "transaction_number_example"; // string | The transaction number of the matching transfer
$transfer_filters = array("transfer_filters_example"); // string[] | Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format `accountType.transferFilter`.
$transfer_kinds = array(new \Cyclos\Api\Model\TransferKind()); // \Cyclos\Api\Model\TransferKind[] | DEPRECATED: Use `kinds` instead
$transfer_types = array("transfer_types_example"); // string[] | Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format `accountType.transferType`.
$user = "user_example"; // string | Reference a user that should have either received / performed the transfer.

try {
    $result = $apiInstance->searchAccountHistory($owner, $account_type, $fields, $access_clients, $amount_range, $broker, $brokers, $by, $channels, $charged_back, $custom_fields, $date_period, $direction, $excluded_ids, $from_current_access_client, $groups, $include_generated_by_access_client, $kinds, $order_by, $page, $page_size, $skip_total_count, $statuses, $transaction_number, $transfer_filters, $transfer_kinds, $transfer_types, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->searchAccountHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the system owner. |
 **account_type** | **string**| The account type internal name or id |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **access_clients** | [**string[]**](../Model/string.md)| References to access clients (id or token) used to perform / receive the transfer. | [optional]
 **amount_range** | [**float[]**](../Model/float.md)| The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **broker** | **string**| DEPRECATED: Use &#x60;brokers&#x60; instead. Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional]
 **brokers** | [**string[]**](../Model/string.md)| Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional]
 **by** | **string**| Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator. | [optional]
 **channels** | [**string[]**](../Model/string.md)| Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional]
 **charged_back** | **bool**| When set to either &#x60;true&#x60; will only return transfers that were charged-back. When set to &#x60;false&#x60;, will only return transfers that were not charged-back. When left blank will not filter by this creterion. | [optional]
 **custom_fields** | [**string[]**](../Model/string.md)| Transaction custom field values used as filters. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by : (colon).  For example, &#x60;customFields&#x3D;field1:value1,field2:value2&#x60;. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, customFields&#x3D;field1:valueA|valueB. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, &#x60;customFields&#x3D;rank:bronze|silver,documentDate:2000-01-01|2001-12-31&#x60; would match results whose custom field with internal name &#x60;rank&#x60; is either &#x60;bronze&#x60; or &#x60;silver&#x60;, and whose &#x60;documentDate&#x60; is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like &#x60;customFields&#x3D;documentDate:|2001-12-31&#x60;. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the  corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: &#x60;customFields&#x3D;dynamic:a|b|c&#x60;. However, it is also possible to perform a partial-match search using the dynamic value label. In this case a single value, prefixed or enclosed by single quotes should be used. For example: &#x60;customFields&#x3D;dynamic:&#x27;business&#x60; or &#x60;customFields&#x3D;dynamic:&#x27;business&#x27;&#x60;. | [optional]
 **date_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **direction** | [**\Cyclos\Api\Model\TransferDirectionEnum**](../Model/.md)|  | [optional]
 **excluded_ids** | [**string[]**](../Model/string.md)| List of transfers ids to be excluded from the result. | [optional]
 **from_current_access_client** | **bool**| Flag indicating whether to include only transfers by the current access client. | [optional]
 **groups** | [**string[]**](../Model/string.md)| Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional]
 **include_generated_by_access_client** | **bool**| Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a &#x60;ticket&#x60; or &#x60;paymentRequest&#x60; was processed then a new transfer will be generated. | [optional]
 **kinds** | [**\Cyclos\Api\Model\TransferKind[]**](../Model/\Cyclos\Api\Model\TransferKind.md)| The kind of transfers to return | [optional]
 **order_by** | [**\Cyclos\Api\Model\TransOrderByEnum**](../Model/.md)|  | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **statuses** | [**string[]**](../Model/string.md)| Transfer statuses used as search criteria. Each array element should be either the identifier or the status qualified internal name, composed by flow internal name, a dot, and the status internal name. For example, &#x60;loan.open&#x60; would be a valid internal name. | [optional]
 **transaction_number** | **string**| The transaction number of the matching transfer | [optional]
 **transfer_filters** | [**string[]**](../Model/string.md)| Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format &#x60;accountType.transferFilter&#x60;. | [optional]
 **transfer_kinds** | [**\Cyclos\Api\Model\TransferKind[]**](../Model/\Cyclos\Api\Model\TransferKind.md)| DEPRECATED: Use &#x60;kinds&#x60; instead | [optional]
 **transfer_types** | [**string[]**](../Model/string.md)| Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format &#x60;accountType.transferType&#x60;. | [optional]
 **user** | **string**| Reference a user that should have either received / performed the transfer. | [optional]

### Return type

[**\Cyclos\Api\Model\AccountHistoryResult[]**](../Model/AccountHistoryResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsersWithBalances**
> \Cyclos\Api\Model\UserWithBalanceResult[] searchUsersWithBalances($account_type, $fields, $activation_period, $address_result, $balance_range, $brokers, $creation_period, $groups, $include_group, $include_group_set, $keywords, $last_incoming_transfer_period, $last_login_period, $last_outgoing_transfer_period, $latitude, $longitude, $main_broker_only, $max_distance, $medium_balance_range, $negative_since_period, $order_by, $page, $page_size, $profile_fields, $skip_total_count, $users_to_exclude, $users_to_include)

Searches for users together with balance information

Returns the users, together with their balances

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

$apiInstance = new Cyclos\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_type = "account_type_example"; // string | The account type
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$activation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user activation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$address_result = new \Cyclos\Api\Model\UserAddressResultEnum(); // \Cyclos\Api\Model\UserAddressResultEnum | 
$balance_range = array(56); // int[] | The minimum and / or maximum balance for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$brokers = array("brokers_example"); // string[] | Either id or a principal (login name, e-mail, etc) for brokers
$creation_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$groups = array("groups_example"); // string[] | Either id or internal names of groups / group sets
$include_group = true; // bool | When set to `true` and the logged user has permission to view user groups, will return the `group` property on users.
$include_group_set = true; // bool | When set to `true` and the logged user has permission to view user group sets, will return the `groupSet` property on users.
$keywords = "keywords_example"; // string | Textual search keywords. Sometimes, like in user search, the fields matched depends on what is configured on the products.
$last_incoming_transfer_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum date of the last incoming transfer for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$last_login_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum user last login date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$last_outgoing_transfer_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum date of the last outgoing transfer for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$latitude = 1.2; // double | The reference latitude for distance searches
$longitude = 1.2; // double | The reference longitude for distance searches
$main_broker_only = true; // bool | When set to `true`, will match only users that have the brokers as set in the `brokers` parameter as main broker.
$max_distance = 1.2; // double | Maximum straight-line distance between the informed location and the resulting address. Is measured either in kilometers or miles, depending on the configuration. Only accepted if both `longitude` and `latitude` parameters are passed with the actual reference position.
$medium_balance_range = array(56); // int[] | An array with 2 elements, describing the lower and upper medium balance bounds. If not specified, the range defined in the account type will be used. If that one is also not defined, there will be no definitions for balance levels. Both bounds need to be set as 2 element in the array, or it won't be considered.
$negative_since_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum negative-since date for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$order_by = new \Cyclos\Api\Model\UsersWithBalanceOrderByEnum(); // \Cyclos\Api\Model\UsersWithBalanceOrderByEnum | 
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$profile_fields = array("profile_fields_example"); // string[] | User profile fields, both basic (full name, login name, phone, e-mail, etc) and custom fields, that are used for search. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by `:` (colon). For example, `profileFields=field1:value1,field2:value2`. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, `profileFields=field1:valueA|valueB`. The accepted fields depend on the products the authenticated user has. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, `profileFields=rank:bronze|silver,birthDate:2000-01-01|2001-12-31` would match results whose custom field with internal name 'rank' is either bronze or silver, and whose 'birthDate' is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like `profileFields=birthDate:|2001-12-31`. The basic profile fields have one of the following identifiers: - `name` or `fullName`: Full name; - `username`, `loginName` or `login`: Login name; - `email`: E-mail; - `phone`: Phone; - `accountNumber`, `account`: Account number; - `image`: Image (accepts a boolean value, indicating that either it is required that users either have images or not).  If address is an allowed profile field for search, specific address fields may be searched. The allowed ones are normally returned as the `addressFieldsInSearch` field in the corresponding result from a data-for-search request. The specific address fields are: - `address`: Searches on any address field (not a specific field); - `address.address`: Searches on the fields that represent the street address, which are `addressLine1`, `addressLine2`, `street`, `buildingNumber` and `complement`. Note that normally only a subset of them should be enabled in the configuration (either line 1 / 2 or street + number + complement); - `address.zip`: Searches for matching zip (postal) code; - `address.poBox`: Searches for matching postal box; - `address.neighborhood`: Searches by neighborhood; - `address.city`: Searches by city; - `address.region`: Searches by region (or state); - `address.country`: Searches by ISO 3166-1 alpha-2 country code. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: `profileFields=dynamic:a|b|c`. However, it is also possible to perform a keywords-like (full-text) search using the dynamic value label. In this case a single value, prefixed by single quotes should be used. For example: `profileFields=dynamic:'business`.
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$users_to_exclude = array("users_to_exclude_example"); // string[] | Indicated the users to be excluded from the result
$users_to_include = array("users_to_include_example"); // string[] | Indicated the users to be included in the result.  Any other user not present in this list will be excluded from the result.

try {
    $result = $apiInstance->searchUsersWithBalances($account_type, $fields, $activation_period, $address_result, $balance_range, $brokers, $creation_period, $groups, $include_group, $include_group_set, $keywords, $last_incoming_transfer_period, $last_login_period, $last_outgoing_transfer_period, $latitude, $longitude, $main_broker_only, $max_distance, $medium_balance_range, $negative_since_period, $order_by, $page, $page_size, $profile_fields, $skip_total_count, $users_to_exclude, $users_to_include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->searchUsersWithBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_type** | **string**| The account type |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **activation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user activation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **address_result** | [**\Cyclos\Api\Model\UserAddressResultEnum**](../Model/.md)|  | [optional]
 **balance_range** | [**int[]**](../Model/int.md)| The minimum and / or maximum balance for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **brokers** | [**string[]**](../Model/string.md)| Either id or a principal (login name, e-mail, etc) for brokers | [optional]
 **creation_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **groups** | [**string[]**](../Model/string.md)| Either id or internal names of groups / group sets | [optional]
 **include_group** | **bool**| When set to &#x60;true&#x60; and the logged user has permission to view user groups, will return the &#x60;group&#x60; property on users. | [optional]
 **include_group_set** | **bool**| When set to &#x60;true&#x60; and the logged user has permission to view user group sets, will return the &#x60;groupSet&#x60; property on users. | [optional]
 **keywords** | **string**| Textual search keywords. Sometimes, like in user search, the fields matched depends on what is configured on the products. | [optional]
 **last_incoming_transfer_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum date of the last incoming transfer for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **last_login_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum user last login date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **last_outgoing_transfer_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum date of the last outgoing transfer for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **latitude** | **double**| The reference latitude for distance searches | [optional]
 **longitude** | **double**| The reference longitude for distance searches | [optional]
 **main_broker_only** | **bool**| When set to &#x60;true&#x60;, will match only users that have the brokers as set in the &#x60;brokers&#x60; parameter as main broker. | [optional]
 **max_distance** | **double**| Maximum straight-line distance between the informed location and the resulting address. Is measured either in kilometers or miles, depending on the configuration. Only accepted if both &#x60;longitude&#x60; and &#x60;latitude&#x60; parameters are passed with the actual reference position. | [optional]
 **medium_balance_range** | [**int[]**](../Model/int.md)| An array with 2 elements, describing the lower and upper medium balance bounds. If not specified, the range defined in the account type will be used. If that one is also not defined, there will be no definitions for balance levels. Both bounds need to be set as 2 element in the array, or it won&#x27;t be considered. | [optional]
 **negative_since_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum negative-since date for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **order_by** | [**\Cyclos\Api\Model\UsersWithBalanceOrderByEnum**](../Model/.md)|  | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **profile_fields** | [**string[]**](../Model/string.md)| User profile fields, both basic (full name, login name, phone, e-mail, etc) and custom fields, that are used for search. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by &#x60;:&#x60; (colon). For example, &#x60;profileFields&#x3D;field1:value1,field2:value2&#x60;. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, &#x60;profileFields&#x3D;field1:valueA|valueB&#x60;. The accepted fields depend on the products the authenticated user has. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, &#x60;profileFields&#x3D;rank:bronze|silver,birthDate:2000-01-01|2001-12-31&#x60; would match results whose custom field with internal name &#x27;rank&#x27; is either bronze or silver, and whose &#x27;birthDate&#x27; is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like &#x60;profileFields&#x3D;birthDate:|2001-12-31&#x60;. The basic profile fields have one of the following identifiers: - &#x60;name&#x60; or &#x60;fullName&#x60;: Full name; - &#x60;username&#x60;, &#x60;loginName&#x60; or &#x60;login&#x60;: Login name; - &#x60;email&#x60;: E-mail; - &#x60;phone&#x60;: Phone; - &#x60;accountNumber&#x60;, &#x60;account&#x60;: Account number; - &#x60;image&#x60;: Image (accepts a boolean value, indicating that either it is required that users either have images or not).  If address is an allowed profile field for search, specific address fields may be searched. The allowed ones are normally returned as the &#x60;addressFieldsInSearch&#x60; field in the corresponding result from a data-for-search request. The specific address fields are: - &#x60;address&#x60;: Searches on any address field (not a specific field); - &#x60;address.address&#x60;: Searches on the fields that represent the street address, which are &#x60;addressLine1&#x60;, &#x60;addressLine2&#x60;, &#x60;street&#x60;, &#x60;buildingNumber&#x60; and &#x60;complement&#x60;. Note that normally only a subset of them should be enabled in the configuration (either line 1 / 2 or street + number + complement); - &#x60;address.zip&#x60;: Searches for matching zip (postal) code; - &#x60;address.poBox&#x60;: Searches for matching postal box; - &#x60;address.neighborhood&#x60;: Searches by neighborhood; - &#x60;address.city&#x60;: Searches by city; - &#x60;address.region&#x60;: Searches by region (or state); - &#x60;address.country&#x60;: Searches by ISO 3166-1 alpha-2 country code. A note for dynamic custom fields: If a script is used to generate possible values for search, the list will be returned in the corresponding data, and it is sent as a pipe-separated list of values (not labels). For example: &#x60;profileFields&#x3D;dynamic:a|b|c&#x60;. However, it is also possible to perform a keywords-like (full-text) search using the dynamic value label. In this case a single value, prefixed by single quotes should be used. For example: &#x60;profileFields&#x3D;dynamic:&#x27;business&#x60;. | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **users_to_exclude** | [**string[]**](../Model/string.md)| Indicated the users to be excluded from the result | [optional]
 **users_to_include** | [**string[]**](../Model/string.md)| Indicated the users to be included in the result.  Any other user not present in this list will be excluded from the result. | [optional]

### Return type

[**\Cyclos\Api\Model\UserWithBalanceResult[]**](../Model/UserWithBalanceResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

