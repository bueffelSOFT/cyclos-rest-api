# UsersWithBalanceQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_type** | **string** | The account type | 
**balance_range** | **int[]** | The minimum and / or maximum balance for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**last_incoming_transfer_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum date of the last incoming transfer for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**last_outgoing_transfer_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum date of the last outgoing transfer for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**negative_since_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum negative-since date for users to be returned. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**medium_balance_range** | **int[]** | An array with 2 elements, describing the lower and upper medium balance bounds. If not specified, the range defined in the account type will be used. If that one is also not defined, there will be no definitions for balance levels. Both bounds need to be set as 2 element in the array, or it won&#x27;t be considered. | [optional] 
**order_by** | [**\Cyclos\Api\Model\UsersWithBalanceOrderByEnum**](UsersWithBalanceOrderByEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

