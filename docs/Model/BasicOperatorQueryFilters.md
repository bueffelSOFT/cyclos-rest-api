# BasicOperatorQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creation_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**statuses** | [**\Cyclos\Api\Model\UserStatusEnum[]**](UserStatusEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

