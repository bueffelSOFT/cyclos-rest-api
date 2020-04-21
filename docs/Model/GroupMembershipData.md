# GroupMembershipData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**\Cyclos\Api\Model\User**](User.md) |  | [optional] 
**status** | [**\Cyclos\Api\Model\UserStatusEnum**](UserStatusEnum.md) |  | [optional] 
**group** | [**\Cyclos\Api\Model\Group**](Group.md) |  | [optional] 
**group_sets** | [**\Cyclos\Api\Model\EntityReference[]**](EntityReference.md) | List of group sets which can be referenced on groups on either &#x60;possibleNewGroups&#x60; or &#x60;history.group&#x60;. Not sent for operators. | [optional] 
**possible_new_groups** | [**\Cyclos\Api\Model\Group[]**](Group.md) | If the authenticated user can change the user / operator to a new group, contains the list of groups that can be assigned. | [optional] 
**history** | [**\Cyclos\Api\Model\GroupMembershipLog[]**](GroupMembershipLog.md) | Contains the history entries for all group changes | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

