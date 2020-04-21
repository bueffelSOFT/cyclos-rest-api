# UserOperatorsDataForSearch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**\Cyclos\Api\Model\User**](User.md) |  | [optional] 
**can_create_new** | **bool** | Indicates whether the authenticated user can create more operators for the specified user. | [optional] 
**groups** | [**\Cyclos\Api\Model\EntityReference[]**](EntityReference.md) | The operator groups this user owns | [optional] 
**fields_in_list** | **string[]** | The internal names of either basic or custom profile fields that are configured to be shown on the list. This actually defines the fields that will be loaded on the result. It is possible that no fields are configured to be returned on list. In this case, the result objects will have the &#x27;display&#x27; property loaded with what is configured to be the user formatting field(s). | [optional] 
**basic_fields** | [**\Cyclos\Api\Model\BasicProfileFieldInput[]**](BasicProfileFieldInput.md) | The basic profile fields in the result list | [optional] 
**custom_fields** | [**\Cyclos\Api\Model\CustomFieldDetailed[]**](CustomFieldDetailed.md) | The custom profile fields in the result list | [optional] 
**query** | [**AllOfUserOperatorsDataForSearchQuery**](AllOfUserOperatorsDataForSearchQuery.md) | Default query filters to search a user&#x27;s operators | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

