# UserDataForSearch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**broker** | [****](.md) | When a &#x60;broker&#x60; parameter was set when getting the data, contains the details of the broker | [optional] 
**fields_in_list** | **string[]** | The internal names of either basic or custom profile fields that are configured to be shown on the list. This actually defines the fields that will be loaded on the result. It is possible that no fields are configured to be returned on list. In this case, the result objects will have the &#x27;display&#x27; property loaded with what is configured to be the user formatting field(s). | [optional] 
**groups_for_registration** | [**\Cyclos\Api\Model\Group[]**](Group.md) | Possible groups an administrator or broker can use to register users | [optional] 
**query** | [****](.md) | Default query filters to search users | [optional] 
**statuses** | [**\Cyclos\Api\Model\UserStatusEnum[]**](UserStatusEnum.md) | The possible user statuses the authenticated user can use to filter the search. Only administrators or brokers over their members can filter by status (also depends on permissions) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

