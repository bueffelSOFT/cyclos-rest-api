# UserStatusData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**\Cyclos\Api\Model\User**](User.md) |  | [optional] 
**status** | [**\Cyclos\Api\Model\UserStatusEnum**](UserStatusEnum.md) |  | [optional] 
**possible_new_statuses** | [**\Cyclos\Api\Model\UserStatusEnum[]**](UserStatusEnum.md) | If the authenticated user can manage the given user&#x27;s status, contains the list of statuses that can be assigned. | [optional] 
**history** | [**\Cyclos\Api\Model\UserStatusLog[]**](UserStatusLog.md) | Contains the history entries for all status changes | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

