# BaseTransQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum transfer date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**transfer_filters** | **string[]** | Reference to the transfer filters, which filters transfers by type. May be either the internal id or qualified transfer filter internal name, in the format &#x60;accountType.transferFilter&#x60;. | [optional] 
**transfer_types** | **string[]** | Reference to the transfer types for filter. May be either the internal id or qualified transfer type internal name, in the format &#x60;accountType.transferType&#x60;. | [optional] 
**transaction_number** | **string** | The transaction number of the matching transfer | [optional] 
**user** | **string** | Reference a user that should have either received / performed the transfer. | [optional] 
**groups** | **string[]** | Reference to the user group used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional] 
**by** | **string** | Reference to the user that was authenticated when the transfer was performed. Is only taken into account if authenticated as administrator. | [optional] 
**broker** | **string** | DEPRECATED: Use &#x60;brokers&#x60; instead.  Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional] 
**brokers** | **string[]** | Reference to the broker of users involved in transfers. Is only taken into account if authenticated as administrator. | [optional] 
**channels** | **string[]** | Reference to the channel used to perform / receive the transfer. Only taken into account if authenticated as administrator. | [optional] 
**excluded_ids** | **string[]** | List of transfers ids to be excluded from the result. | [optional] 
**access_clients** | **string[]** | References to access clients (id or token) used to perform / receive the transfer. | [optional] 
**include_generated_by_access_client** | **bool** | Flag indicating whether to include or not the generated transfer. Only valid if there is at least one access client specified. For example if a &#x60;ticket&#x60; or &#x60;paymentRequest&#x60; was processed then a new transfer will be generated. | [optional] 
**from_current_access_client** | **bool** | Flag indicating whether to include only transfers by the current access client. | [optional] 
**amount_range** | **float[]** | The minimum / maximum amount. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**order_by** | [**\Cyclos\Api\Model\TransOrderByEnum**](TransOrderByEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

