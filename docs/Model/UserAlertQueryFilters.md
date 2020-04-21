# UserAlertQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum alert date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**types** | [**\Cyclos\Api\Model\UserAlertTypeEnum[]**](UserAlertTypeEnum.md) | The types of user alerts to search | [optional] 
**groups** | **string[]** | Either the ids or internal names of the alert user | [optional] 
**brokers** | **string[]** | Either the ids or identification methods the alert user&#x27;s brokers | [optional] 
**user** | **string** | Either the id or identifier of the alert user | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

