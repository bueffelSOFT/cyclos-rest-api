# AccountBalanceLimitsQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | [**\Cyclos\Api\Model\BalanceLimitKind**](BalanceLimitKind.md) |  | [optional] 
**currency** | **string** | Either id or internal name of the currency | [optional] 
**account_type** | **string** | Either id or internal name of the account type | [optional] 
**groups** | **string[]** | Either the ids or internal names of user group | [optional] 
**broker** | **string** | DEPRECATED: Use &#x60;brokers&#x60; instead. Will be removed in 4.14. Either the ids or identification methods of users&#x27; broker | [optional] 
**brokers** | **string[]** | Either the ids or identification methods of users&#x27; broker | [optional] 
**user** | **string** | Either the id or identifier of the account owner | [optional] 
**by** | **string** | Either the id or identifier of the user that performed the change | [optional] 
**custom_limit** | **bool** | When set, returns only accounts that have a custom (if true) or have default (false) lower limit. | [optional] 
**custom_limit_range** | **float[]** | The minimum / maximum customized limit. Is only used when &#x60;customLimit&#x60; is set to true. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**custom_upper_limit** | **bool** | When set, returns only accounts that have a custom (if true) or have default (false) upper limit. | [optional] 
**custom_upper_limit_range** | **float[]** | The minimum / maximum customized upper limit. Is only used when &#x60;customUpperLimit&#x60; is set to true. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

