# Cyclos\Api\TransfersApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chargebackTransfer**](TransfersApi.md#chargebacktransfer) | **POST** /transfers/{key}/chargeback | Perform the chargeback of a transfer
[**getTransferDataForSearch**](TransfersApi.md#gettransferdataforsearch) | **GET** /transfers/data-for-search | Returns configuration data for searching transfers over multiple accounts.
[**searchTransfers**](TransfersApi.md#searchtransfers) | **GET** /transfers | Searches for transfers over multiple accounts.
[**viewTransfer**](TransfersApi.md#viewtransfer) | **GET** /transfers/{key} | Returns details about a transfer

# **chargebackTransfer**
> string chargebackTransfer($key, $confirmation_password)

Perform the chargeback of a transfer

The chargeback generates a new transaction with `kind` = `chargeback`. A new transfer is generated with the same from / to, and negative amount. This will effectively return the amount to the original account. Only top-level transfers can be charged back. For example, a transfer used to charge a fee cannot be charged back. Also, the hability to chargeback a transfer depends on permissions and configuration like the maximum allowed time for the chargeback.

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

$apiInstance = new Cyclos\Api\Functions\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Either the id or transaction number
$confirmation_password = "confirmation_password_example"; // string | The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel.

try {
    $result = $apiInstance->chargebackTransfer($key, $confirmation_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->chargebackTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Either the id or transaction number |
 **confirmation_password** | **string**| The password used to confirm this action, if needed. The actual password type, if any, depends on the Cyclos configuration for the current channel. | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransferDataForSearch**
> \Cyclos\Api\Model\TransferDataForSearch getTransferDataForSearch($fields)

Returns configuration data for searching transfers over multiple accounts.

Returns configuration data for searching transfers over multiple accounts.

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

$apiInstance = new Cyclos\Api\Functions\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getTransferDataForSearch($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->getTransferDataForSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\TransferDataForSearch**](../Model/TransferDataForSearch.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTransfers**
> \Cyclos\Api\Model\TransferResult[] searchTransfers($fields, $access_clients, $amount_range, $broker, $brokers, $by, $channels, $charged_back, $currencies, $currency, $date_period, $excluded_ids, $from_account_type, $from_account_types, $from_current_access_client, $groups, $include_generated_by_access_client, $kinds, $order_by, $page, $page_size, $skip_total_count, $statuses, $to_account_type, $to_account_types, $transaction_number, $transfer_filters, $transfer_kinds, $transfer_types, $user)

Searches for transfers over multiple accounts.

Searches for transfers over multiple accounts. Only transfers which can really be seen are returned. So, admins can search over any visible member / system accounts. Brokers can search over their managed members or themselves, and regular members can only search own transfers.

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

$apiInstance = new Cyclos\Api\Functions\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$access_clients = array("access_clients_example"); // string[] | References to access clients (id or token) used to perform / receive the transfer.
$amount_range = array(3.4); // float[] | The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$broker = "broker_example"; // string | DEPRECATED: Use `brokers` instead. Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator.
$brokers = array("brokers_example"); // string[] | Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator.
$by = "by_example"; // string | Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator.
$channels = array("channels_example"); // string[] | Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator.
$charged_back = true; // bool | When set to either `true` will only return transfers that were charged-back. When set to `false`, will only return transfers that were not charged-back. When left blank will not filter by this creterion.
$currencies = array("currencies_example"); // string[] | Either ids or internal names of the currency
$currency = "currency_example"; // string | DEPRECATED: Use `currencies` instead. Either id or internal name of the currency
$date_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$excluded_ids = array("excluded_ids_example"); // string[] | List of transfers ids to be excluded from the result.
$from_account_type = "from_account_type_example"; // string | DEPRECATED: Use `fromAccountTypes` instead. Either ids or internal names of the origin account type
$from_account_types = array("from_account_types_example"); // string[] | Either ids or internal names of the origin account type
$from_current_access_client = true; // bool | Flag indicating whether to include only transfers by the current access client.
$groups = array("groups_example"); // string[] | Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator.
$include_generated_by_access_client = true; // bool | Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a `ticket` or `paymentRequest` was processed then a new transfer will be generated.
$kinds = array(new \Cyclos\Api\Model\TransferKind()); // \Cyclos\Api\Model\TransferKind[] | The kind of transfers to return
$order_by = new \Cyclos\Api\Model\TransOrderByEnum(); // \Cyclos\Api\Model\TransOrderByEnum | 
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$statuses = array("statuses_example"); // string[] | Transfer statuses used as search criteria. Each array element should be either the identifier or the status qualified internal name, composed by flow internal name, a dot, and the status internal name. For example, `loan.open` would be a valid internal name.
$to_account_type = "to_account_type_example"; // string | DEPRECATED: Use `toAccountTypes` instead. Either ids or internal names of the destination account type
$to_account_types = array("to_account_types_example"); // string[] | Either ids or internal names of the destination account type
$transaction_number = "transaction_number_example"; // string | The transaction number of the matching transfer
$transfer_filters = array("transfer_filters_example"); // string[] | Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format `accountType.transferFilter`.
$transfer_kinds = array(new \Cyclos\Api\Model\TransferKind()); // \Cyclos\Api\Model\TransferKind[] | DEPRECATED: Use `kinds` instead
$transfer_types = array("transfer_types_example"); // string[] | Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format `accountType.transferType`.
$user = "user_example"; // string | Reference a user that should have either received / performed the transfer.

try {
    $result = $apiInstance->searchTransfers($fields, $access_clients, $amount_range, $broker, $brokers, $by, $channels, $charged_back, $currencies, $currency, $date_period, $excluded_ids, $from_account_type, $from_account_types, $from_current_access_client, $groups, $include_generated_by_access_client, $kinds, $order_by, $page, $page_size, $skip_total_count, $statuses, $to_account_type, $to_account_types, $transaction_number, $transfer_filters, $transfer_kinds, $transfer_types, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->searchTransfers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **access_clients** | [**string[]**](../Model/string.md)| References to access clients (id or token) used to perform / receive the transfer. | [optional]
 **amount_range** | [**float[]**](../Model/float.md)| The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **broker** | **string**| DEPRECATED: Use &#x60;brokers&#x60; instead. Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional]
 **brokers** | [**string[]**](../Model/string.md)| Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional]
 **by** | **string**| Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator. | [optional]
 **channels** | [**string[]**](../Model/string.md)| Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional]
 **charged_back** | **bool**| When set to either &#x60;true&#x60; will only return transfers that were charged-back. When set to &#x60;false&#x60;, will only return transfers that were not charged-back. When left blank will not filter by this creterion. | [optional]
 **currencies** | [**string[]**](../Model/string.md)| Either ids or internal names of the currency | [optional]
 **currency** | **string**| DEPRECATED: Use &#x60;currencies&#x60; instead. Either id or internal name of the currency | [optional]
 **date_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **excluded_ids** | [**string[]**](../Model/string.md)| List of transfers ids to be excluded from the result. | [optional]
 **from_account_type** | **string**| DEPRECATED: Use &#x60;fromAccountTypes&#x60; instead. Either ids or internal names of the origin account type | [optional]
 **from_account_types** | [**string[]**](../Model/string.md)| Either ids or internal names of the origin account type | [optional]
 **from_current_access_client** | **bool**| Flag indicating whether to include only transfers by the current access client. | [optional]
 **groups** | [**string[]**](../Model/string.md)| Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional]
 **include_generated_by_access_client** | **bool**| Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a &#x60;ticket&#x60; or &#x60;paymentRequest&#x60; was processed then a new transfer will be generated. | [optional]
 **kinds** | [**\Cyclos\Api\Model\TransferKind[]**](../Model/\Cyclos\Api\Model\TransferKind.md)| The kind of transfers to return | [optional]
 **order_by** | [**\Cyclos\Api\Model\TransOrderByEnum**](../Model/.md)|  | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **statuses** | [**string[]**](../Model/string.md)| Transfer statuses used as search criteria. Each array element should be either the identifier or the status qualified internal name, composed by flow internal name, a dot, and the status internal name. For example, &#x60;loan.open&#x60; would be a valid internal name. | [optional]
 **to_account_type** | **string**| DEPRECATED: Use &#x60;toAccountTypes&#x60; instead. Either ids or internal names of the destination account type | [optional]
 **to_account_types** | [**string[]**](../Model/string.md)| Either ids or internal names of the destination account type | [optional]
 **transaction_number** | **string**| The transaction number of the matching transfer | [optional]
 **transfer_filters** | [**string[]**](../Model/string.md)| Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format &#x60;accountType.transferFilter&#x60;. | [optional]
 **transfer_kinds** | [**\Cyclos\Api\Model\TransferKind[]**](../Model/\Cyclos\Api\Model\TransferKind.md)| DEPRECATED: Use &#x60;kinds&#x60; instead | [optional]
 **transfer_types** | [**string[]**](../Model/string.md)| Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format &#x60;accountType.transferType&#x60;. | [optional]
 **user** | **string**| Reference a user that should have either received / performed the transfer. | [optional]

### Return type

[**\Cyclos\Api\Model\TransferResult[]**](../Model/TransferResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewTransfer**
> \Cyclos\Api\Model\TransferView viewTransfer($key, $fields)

Returns details about a transfer

Returns details about a transfer.

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

$apiInstance = new Cyclos\Api\Functions\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Either the id or transaction number
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->viewTransfer($key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->viewTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Either the id or transaction number |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\TransferView**](../Model/TransferView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

