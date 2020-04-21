# Cyclos\Api\TransactionsApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactionsDataForSearch**](TransactionsApi.md#gettransactionsdataforsearch) | **GET** /{owner}/transactions/data-for-search | Returns data for searching transactions of an account owner
[**getTransactionsOverviewDataForSearch**](TransactionsApi.md#gettransactionsoverviewdataforsearch) | **GET** /transactions/data-for-search | Returns data for searching transactions regardless of a owner
[**searchTransactions**](TransactionsApi.md#searchtransactions) | **GET** /{owner}/transactions | Searches transactions of an account owner
[**searchTransactionsOverview**](TransactionsApi.md#searchtransactionsoverview) | **GET** /transactions | Searches transactions regardless of a owner
[**viewTransaction**](TransactionsApi.md#viewtransaction) | **GET** /transactions/{key} | Returns details about a transaction

# **getTransactionsDataForSearch**
> \Cyclos\Api\Model\TransactionDataForSearch getTransactionsDataForSearch($owner, $fields)

Returns data for searching transactions of an account owner

Returns data which can be used to filter a transaction search

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

$apiInstance = new Cyclos\Api\Functions\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = "owner_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user; - `system` for the system owner.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getTransactionsDataForSearch($owner, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsDataForSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the system owner. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\TransactionDataForSearch**](../Model/TransactionDataForSearch.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsOverviewDataForSearch**
> \Cyclos\Api\Model\TransactionOverviewDataForSearch getTransactionsOverviewDataForSearch($fields, $pending_my_authorization)

Returns data for searching transactions regardless of a owner

Returns data which can be used to filter a transaction search

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

$apiInstance = new Cyclos\Api\Functions\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$pending_my_authorization = true; // bool | When set to true will search for transactions which are currently pending authorization, and the authenticated user can authorize.

try {
    $result = $apiInstance->getTransactionsOverviewDataForSearch($fields, $pending_my_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsOverviewDataForSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **pending_my_authorization** | **bool**| When set to true will search for transactions which are currently pending authorization, and the authenticated user can authorize. | [optional]

### Return type

[**\Cyclos\Api\Model\TransactionOverviewDataForSearch**](../Model/TransactionOverviewDataForSearch.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTransactions**
> \Cyclos\Api\Model\TransactionResult[] searchTransactions($owner, $fields, $access_clients, $account_types, $amount_range, $authorization_performed_by, $authorization_statuses, $authorized, $broker, $brokers, $by, $channels, $date_period, $direction, $excluded_ids, $external_payment_statuses, $from_current_access_client, $groups, $include_generated_by_access_client, $kinds, $order_by, $page, $page_size, $payment_request_expiration, $payment_request_statuses, $recurring_payment_statuses, $scheduled_payment_statuses, $skip_total_count, $ticket_statuses, $transaction_number, $transfer_filters, $transfer_types, $user)

Searches transactions of an account owner

Returns the transactions of a given account owner that match the specified criteria. Each result will will be relative to this owner. The amount may be positive or negative, depending on whether this owner has performed or received the transaction.

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

$apiInstance = new Cyclos\Api\Functions\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = "owner_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user; - `system` for the system owner.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$access_clients = array("access_clients_example"); // string[] | References to access clients (id or token) used to perform / receive the transfer.
$account_types = array("account_types_example"); // string[] | The account types
$amount_range = array(3.4); // float[] | The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$authorization_performed_by = "authorization_performed_by_example"; // string | Id or other identifier (login name, email, etc) of the user that performed an authorization action (authorize, deny or cancel).
$authorization_statuses = array(new \Cyclos\Api\Model\TransactionAuthorizationStatusEnum()); // \Cyclos\Api\Model\TransactionAuthorizationStatusEnum[] | Authorization statuses used as search criteria. When set, only kinds that can go through authorization are returned (`payment`, `order`, `recurringPayment` or `scheduledPayment`).
$authorized = true; // bool | When set, will only return transactions that went through the authorization process (if true) or that never went through it (when false). In either case, only kinds that can go through authorization are returned (`payment`, `order`, `recurringPayment` or `scheduledPayment`).
$broker = "broker_example"; // string | DEPRECATED: Use `brokers` instead. Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator.
$brokers = array("brokers_example"); // string[] | Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator.
$by = "by_example"; // string | Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator.
$channels = array("channels_example"); // string[] | Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator.
$date_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$direction = new \Cyclos\Api\Model\TransferDirectionEnum(); // \Cyclos\Api\Model\TransferDirectionEnum | 
$excluded_ids = array("excluded_ids_example"); // string[] | List of transfers ids to be excluded from the result.
$external_payment_statuses = array(new \Cyclos\Api\Model\ExternalPaymentStatusEnum()); // \Cyclos\Api\Model\ExternalPaymentStatusEnum[] | Statuses used as search criteria applied only to transactions of kind `externalPayment`.
$from_current_access_client = true; // bool | Flag indicating whether to include only transfers by the current access client.
$groups = array("groups_example"); // string[] | Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator.
$include_generated_by_access_client = true; // bool | Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a `ticket` or `paymentRequest` was processed then a new transfer will be generated.
$kinds = array(new \Cyclos\Api\Model\TransactionKind()); // \Cyclos\Api\Model\TransactionKind[] | 
$order_by = new \Cyclos\Api\Model\TransOrderByEnum(); // \Cyclos\Api\Model\TransOrderByEnum | 
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$payment_request_expiration = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum date for payment request expiration. Only affects payment requests. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$payment_request_statuses = array(new \Cyclos\Api\Model\PaymentRequestStatusEnum()); // \Cyclos\Api\Model\PaymentRequestStatusEnum[] | Statuses used as search criteria applied only to transactions of kind `paymentRequest`.
$recurring_payment_statuses = array(new \Cyclos\Api\Model\RecurringPaymentStatusEnum()); // \Cyclos\Api\Model\RecurringPaymentStatusEnum[] | Statuses used as search criteria applied only to transactions of kind `recurringPayment`. If this filter is not empty then pending recurring payments will be excluded from the result. Pending recurring payments does not have a status.
$scheduled_payment_statuses = array(new \Cyclos\Api\Model\ScheduledPaymentStatusEnum()); // \Cyclos\Api\Model\ScheduledPaymentStatusEnum[] | Statuses used as search criteria applied only to transactions of kind `scheduledPayment`. If this filter is not empty then pending scheduled payments will be excluded from the result. Pending scheduled payments does not have a status.
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$ticket_statuses = array(new \Cyclos\Api\Model\TicketStatusEnum()); // \Cyclos\Api\Model\TicketStatusEnum[] | Statuses used as search criteria applied only to transactions of kind `ticket`.
$transaction_number = "transaction_number_example"; // string | The transaction number of the matching transfer
$transfer_filters = array("transfer_filters_example"); // string[] | Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format `accountType.transferFilter`.
$transfer_types = array("transfer_types_example"); // string[] | Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format `accountType.transferType`.
$user = "user_example"; // string | Reference a user that should have either received / performed the transfer.

try {
    $result = $apiInstance->searchTransactions($owner, $fields, $access_clients, $account_types, $amount_range, $authorization_performed_by, $authorization_statuses, $authorized, $broker, $brokers, $by, $channels, $date_period, $direction, $excluded_ids, $external_payment_statuses, $from_current_access_client, $groups, $include_generated_by_access_client, $kinds, $order_by, $page, $page_size, $payment_request_expiration, $payment_request_statuses, $recurring_payment_statuses, $scheduled_payment_statuses, $skip_total_count, $ticket_statuses, $transaction_number, $transfer_filters, $transfer_types, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->searchTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the system owner. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **access_clients** | [**string[]**](../Model/string.md)| References to access clients (id or token) used to perform / receive the transfer. | [optional]
 **account_types** | [**string[]**](../Model/string.md)| The account types | [optional]
 **amount_range** | [**float[]**](../Model/float.md)| The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **authorization_performed_by** | **string**| Id or other identifier (login name, email, etc) of the user that performed an authorization action (authorize, deny or cancel). | [optional]
 **authorization_statuses** | [**\Cyclos\Api\Model\TransactionAuthorizationStatusEnum[]**](../Model/\Cyclos\Api\Model\TransactionAuthorizationStatusEnum.md)| Authorization statuses used as search criteria. When set, only kinds that can go through authorization are returned (&#x60;payment&#x60;, &#x60;order&#x60;, &#x60;recurringPayment&#x60; or &#x60;scheduledPayment&#x60;). | [optional]
 **authorized** | **bool**| When set, will only return transactions that went through the authorization process (if true) or that never went through it (when false). In either case, only kinds that can go through authorization are returned (&#x60;payment&#x60;, &#x60;order&#x60;, &#x60;recurringPayment&#x60; or &#x60;scheduledPayment&#x60;). | [optional]
 **broker** | **string**| DEPRECATED: Use &#x60;brokers&#x60; instead. Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional]
 **brokers** | [**string[]**](../Model/string.md)| Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional]
 **by** | **string**| Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator. | [optional]
 **channels** | [**string[]**](../Model/string.md)| Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional]
 **date_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **direction** | [**\Cyclos\Api\Model\TransferDirectionEnum**](../Model/.md)|  | [optional]
 **excluded_ids** | [**string[]**](../Model/string.md)| List of transfers ids to be excluded from the result. | [optional]
 **external_payment_statuses** | [**\Cyclos\Api\Model\ExternalPaymentStatusEnum[]**](../Model/\Cyclos\Api\Model\ExternalPaymentStatusEnum.md)| Statuses used as search criteria applied only to transactions of kind &#x60;externalPayment&#x60;. | [optional]
 **from_current_access_client** | **bool**| Flag indicating whether to include only transfers by the current access client. | [optional]
 **groups** | [**string[]**](../Model/string.md)| Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional]
 **include_generated_by_access_client** | **bool**| Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a &#x60;ticket&#x60; or &#x60;paymentRequest&#x60; was processed then a new transfer will be generated. | [optional]
 **kinds** | [**\Cyclos\Api\Model\TransactionKind[]**](../Model/\Cyclos\Api\Model\TransactionKind.md)|  | [optional]
 **order_by** | [**\Cyclos\Api\Model\TransOrderByEnum**](../Model/.md)|  | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **payment_request_expiration** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum date for payment request expiration. Only affects payment requests. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **payment_request_statuses** | [**\Cyclos\Api\Model\PaymentRequestStatusEnum[]**](../Model/\Cyclos\Api\Model\PaymentRequestStatusEnum.md)| Statuses used as search criteria applied only to transactions of kind &#x60;paymentRequest&#x60;. | [optional]
 **recurring_payment_statuses** | [**\Cyclos\Api\Model\RecurringPaymentStatusEnum[]**](../Model/\Cyclos\Api\Model\RecurringPaymentStatusEnum.md)| Statuses used as search criteria applied only to transactions of kind &#x60;recurringPayment&#x60;. If this filter is not empty then pending recurring payments will be excluded from the result. Pending recurring payments does not have a status. | [optional]
 **scheduled_payment_statuses** | [**\Cyclos\Api\Model\ScheduledPaymentStatusEnum[]**](../Model/\Cyclos\Api\Model\ScheduledPaymentStatusEnum.md)| Statuses used as search criteria applied only to transactions of kind &#x60;scheduledPayment&#x60;. If this filter is not empty then pending scheduled payments will be excluded from the result. Pending scheduled payments does not have a status. | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **ticket_statuses** | [**\Cyclos\Api\Model\TicketStatusEnum[]**](../Model/\Cyclos\Api\Model\TicketStatusEnum.md)| Statuses used as search criteria applied only to transactions of kind &#x60;ticket&#x60;. | [optional]
 **transaction_number** | **string**| The transaction number of the matching transfer | [optional]
 **transfer_filters** | [**string[]**](../Model/string.md)| Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format &#x60;accountType.transferFilter&#x60;. | [optional]
 **transfer_types** | [**string[]**](../Model/string.md)| Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format &#x60;accountType.transferType&#x60;. | [optional]
 **user** | **string**| Reference a user that should have either received / performed the transfer. | [optional]

### Return type

[**\Cyclos\Api\Model\TransactionResult[]**](../Model/TransactionResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTransactionsOverview**
> \Cyclos\Api\Model\TransactionOverviewResult[] searchTransactionsOverview($fields, $access_clients, $amount_range, $authorization_performed_by, $authorization_statuses, $authorized, $broker, $brokers, $by, $channels, $currencies, $date_period, $excluded_ids, $external_payment_statuses, $from_account_types, $from_current_access_client, $groups, $include_generated_by_access_client, $kinds, $order_by, $page, $page_size, $payment_request_expiration, $payment_request_statuses, $pending_my_authorization, $recurring_payment_statuses, $scheduled_payment_statuses, $skip_total_count, $ticket_statuses, $to_account_types, $transaction_number, $transfer_filters, $transfer_types, $user)

Searches transactions regardless of a owner

Searches transactions regardless of a owner that match the specified criteria.

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

$apiInstance = new Cyclos\Api\Functions\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$access_clients = array("access_clients_example"); // string[] | References to access clients (id or token) used to perform / receive the transfer.
$amount_range = array(3.4); // float[] | The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$authorization_performed_by = "authorization_performed_by_example"; // string | Id or other identifier (login name, email, etc) of the user that performed an authorization action (authorize, deny or cancel).
$authorization_statuses = array(new \Cyclos\Api\Model\TransactionAuthorizationStatusEnum()); // \Cyclos\Api\Model\TransactionAuthorizationStatusEnum[] | Authorization statuses used as search criteria. When set, only kinds that can go through authorization are returned (`payment`, `order`, `recurringPayment` or `scheduledPayment`).
$authorized = true; // bool | When set, will only return transactions that went through the authorization process (if true) or that never went through it (when false). In either case, only kinds that can go through authorization are returned (`payment`, `order`, `recurringPayment` or `scheduledPayment`).
$broker = "broker_example"; // string | DEPRECATED: Use `brokers` instead. Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator.
$brokers = array("brokers_example"); // string[] | Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator.
$by = "by_example"; // string | Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator.
$channels = array("channels_example"); // string[] | Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator.
$currencies = array("currencies_example"); // string[] | The currencies internal names or ids.
$date_period = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$excluded_ids = array("excluded_ids_example"); // string[] | List of transfers ids to be excluded from the result.
$external_payment_statuses = array(new \Cyclos\Api\Model\ExternalPaymentStatusEnum()); // \Cyclos\Api\Model\ExternalPaymentStatusEnum[] | Statuses used as search criteria applied only to transactions of kind `externalPayment`.
$from_account_types = array("from_account_types_example"); // string[] | The source account types internal names or ids.
$from_current_access_client = true; // bool | Flag indicating whether to include only transfers by the current access client.
$groups = array("groups_example"); // string[] | Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator.
$include_generated_by_access_client = true; // bool | Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a `ticket` or `paymentRequest` was processed then a new transfer will be generated.
$kinds = array(new \Cyclos\Api\Model\TransactionKind()); // \Cyclos\Api\Model\TransactionKind[] | 
$order_by = new \Cyclos\Api\Model\TransOrderByEnum(); // \Cyclos\Api\Model\TransOrderByEnum | 
$page = 56; // int | The page number (zero-based) of the search. The default value is zero.
$page_size = 56; // int | The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting.
$payment_request_expiration = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | The minimum / maximum date for payment request expiration. Only affects payment requests. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
$payment_request_statuses = array(new \Cyclos\Api\Model\PaymentRequestStatusEnum()); // \Cyclos\Api\Model\PaymentRequestStatusEnum[] | Statuses used as search criteria applied only to transactions of kind `paymentRequest`.
$pending_my_authorization = true; // bool | When set to true will only return transactions (`payment`, `recurringPayment` or `scheduledPayment`) in pending authorization state that the logged user can authorize
$recurring_payment_statuses = array(new \Cyclos\Api\Model\RecurringPaymentStatusEnum()); // \Cyclos\Api\Model\RecurringPaymentStatusEnum[] | Statuses used as search criteria applied only to transactions of kind `recurringPayment`. If this filter is not empty then pending recurring payments will be excluded from the result. Pending recurring payments does not have a status.
$scheduled_payment_statuses = array(new \Cyclos\Api\Model\ScheduledPaymentStatusEnum()); // \Cyclos\Api\Model\ScheduledPaymentStatusEnum[] | Statuses used as search criteria applied only to transactions of kind `scheduledPayment`. If this filter is not empty then pending scheduled payments will be excluded from the result. Pending scheduled payments does not have a status.
$skip_total_count = true; // bool | When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn't need it, setting this to true can increase performance a bit.
$ticket_statuses = array(new \Cyclos\Api\Model\TicketStatusEnum()); // \Cyclos\Api\Model\TicketStatusEnum[] | Statuses used as search criteria applied only to transactions of kind `ticket`.
$to_account_types = array("to_account_types_example"); // string[] | The source account types internal names or ids.
$transaction_number = "transaction_number_example"; // string | The transaction number of the matching transfer
$transfer_filters = array("transfer_filters_example"); // string[] | Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format `accountType.transferFilter`.
$transfer_types = array("transfer_types_example"); // string[] | Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format `accountType.transferType`.
$user = "user_example"; // string | Reference a user that should have either received / performed the transfer.

try {
    $result = $apiInstance->searchTransactionsOverview($fields, $access_clients, $amount_range, $authorization_performed_by, $authorization_statuses, $authorized, $broker, $brokers, $by, $channels, $currencies, $date_period, $excluded_ids, $external_payment_statuses, $from_account_types, $from_current_access_client, $groups, $include_generated_by_access_client, $kinds, $order_by, $page, $page_size, $payment_request_expiration, $payment_request_statuses, $pending_my_authorization, $recurring_payment_statuses, $scheduled_payment_statuses, $skip_total_count, $ticket_statuses, $to_account_types, $transaction_number, $transfer_filters, $transfer_types, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->searchTransactionsOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **access_clients** | [**string[]**](../Model/string.md)| References to access clients (id or token) used to perform / receive the transfer. | [optional]
 **amount_range** | [**float[]**](../Model/float.md)| The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **authorization_performed_by** | **string**| Id or other identifier (login name, email, etc) of the user that performed an authorization action (authorize, deny or cancel). | [optional]
 **authorization_statuses** | [**\Cyclos\Api\Model\TransactionAuthorizationStatusEnum[]**](../Model/\Cyclos\Api\Model\TransactionAuthorizationStatusEnum.md)| Authorization statuses used as search criteria. When set, only kinds that can go through authorization are returned (&#x60;payment&#x60;, &#x60;order&#x60;, &#x60;recurringPayment&#x60; or &#x60;scheduledPayment&#x60;). | [optional]
 **authorized** | **bool**| When set, will only return transactions that went through the authorization process (if true) or that never went through it (when false). In either case, only kinds that can go through authorization are returned (&#x60;payment&#x60;, &#x60;order&#x60;, &#x60;recurringPayment&#x60; or &#x60;scheduledPayment&#x60;). | [optional]
 **broker** | **string**| DEPRECATED: Use &#x60;brokers&#x60; instead. Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional]
 **brokers** | [**string[]**](../Model/string.md)| Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional]
 **by** | **string**| Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator. | [optional]
 **channels** | [**string[]**](../Model/string.md)| Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional]
 **currencies** | [**string[]**](../Model/string.md)| The currencies internal names or ids. | [optional]
 **date_period** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **excluded_ids** | [**string[]**](../Model/string.md)| List of transfers ids to be excluded from the result. | [optional]
 **external_payment_statuses** | [**\Cyclos\Api\Model\ExternalPaymentStatusEnum[]**](../Model/\Cyclos\Api\Model\ExternalPaymentStatusEnum.md)| Statuses used as search criteria applied only to transactions of kind &#x60;externalPayment&#x60;. | [optional]
 **from_account_types** | [**string[]**](../Model/string.md)| The source account types internal names or ids. | [optional]
 **from_current_access_client** | **bool**| Flag indicating whether to include only transfers by the current access client. | [optional]
 **groups** | [**string[]**](../Model/string.md)| Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional]
 **include_generated_by_access_client** | **bool**| Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a &#x60;ticket&#x60; or &#x60;paymentRequest&#x60; was processed then a new transfer will be generated. | [optional]
 **kinds** | [**\Cyclos\Api\Model\TransactionKind[]**](../Model/\Cyclos\Api\Model\TransactionKind.md)|  | [optional]
 **order_by** | [**\Cyclos\Api\Model\TransOrderByEnum**](../Model/.md)|  | [optional]
 **page** | **int**| The page number (zero-based) of the search. The default value is zero. | [optional]
 **page_size** | **int**| The maximum number of records that will be returned on the search. The default value is 40. The maximum number of returned results is configured in Cyclos, and even if more than that is requested, it will be limited by that setting. | [optional]
 **payment_request_expiration** | [**\DateTime[]**](../Model/\DateTime.md)| The minimum / maximum date for payment request expiration. Only affects payment requests. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional]
 **payment_request_statuses** | [**\Cyclos\Api\Model\PaymentRequestStatusEnum[]**](../Model/\Cyclos\Api\Model\PaymentRequestStatusEnum.md)| Statuses used as search criteria applied only to transactions of kind &#x60;paymentRequest&#x60;. | [optional]
 **pending_my_authorization** | **bool**| When set to true will only return transactions (&#x60;payment&#x60;, &#x60;recurringPayment&#x60; or &#x60;scheduledPayment&#x60;) in pending authorization state that the logged user can authorize | [optional]
 **recurring_payment_statuses** | [**\Cyclos\Api\Model\RecurringPaymentStatusEnum[]**](../Model/\Cyclos\Api\Model\RecurringPaymentStatusEnum.md)| Statuses used as search criteria applied only to transactions of kind &#x60;recurringPayment&#x60;. If this filter is not empty then pending recurring payments will be excluded from the result. Pending recurring payments does not have a status. | [optional]
 **scheduled_payment_statuses** | [**\Cyclos\Api\Model\ScheduledPaymentStatusEnum[]**](../Model/\Cyclos\Api\Model\ScheduledPaymentStatusEnum.md)| Statuses used as search criteria applied only to transactions of kind &#x60;scheduledPayment&#x60;. If this filter is not empty then pending scheduled payments will be excluded from the result. Pending scheduled payments does not have a status. | [optional]
 **skip_total_count** | **bool**| When set to true the result will not include the total record count, only the information on whether there are more records. Depending on the server-side configuration, this can be always true. Otherwise, if the server allows total count, and the client doesn&#x27;t need it, setting this to true can increase performance a bit. | [optional]
 **ticket_statuses** | [**\Cyclos\Api\Model\TicketStatusEnum[]**](../Model/\Cyclos\Api\Model\TicketStatusEnum.md)| Statuses used as search criteria applied only to transactions of kind &#x60;ticket&#x60;. | [optional]
 **to_account_types** | [**string[]**](../Model/string.md)| The source account types internal names or ids. | [optional]
 **transaction_number** | **string**| The transaction number of the matching transfer | [optional]
 **transfer_filters** | [**string[]**](../Model/string.md)| Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format &#x60;accountType.transferFilter&#x60;. | [optional]
 **transfer_types** | [**string[]**](../Model/string.md)| Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format &#x60;accountType.transferType&#x60;. | [optional]
 **user** | **string**| Reference a user that should have either received / performed the transfer. | [optional]

### Return type

[**\Cyclos\Api\Model\TransactionOverviewResult[]**](../Model/TransactionOverviewResult.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewTransaction**
> \Cyclos\Api\Model\TransactionView viewTransaction($key, $fields)

Returns details about a transaction

Returns details about a transaction.

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

$apiInstance = new Cyclos\Api\Functions\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Either the id or transaction number
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->viewTransaction($key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->viewTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Either the id or transaction number |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\TransactionView**](../Model/TransactionView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

