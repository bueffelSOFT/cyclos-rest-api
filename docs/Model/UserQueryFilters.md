# UserQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ignore_profile_fields_in_list** | **bool** | When set to &#x60;true&#x60;, instead of returning users with corresponding profile fields set on list, will return them with &#x60;display&#x60; and &#x60;shortDisplay&#x60;. | [optional] 
**contacts_owner** | **string** | Indicates the (managed) user to exclude contacts when &#x60;excludecontacts&#x60; is set. Defaults to the logged user. | [optional] 
**exclude_contacts** | **bool** | When set to &#x60;true&#x60; will not return any user that is already a contact of the user indicated on &#x60;contactsOwner&#x60; (the logged user if not set). | [optional] 
**statuses** | [**\Cyclos\Api\Model\UserStatusEnum[]**](UserStatusEnum.md) |  | [optional] 
**roles** | [**\Cyclos\Api\Model\RoleEnum[]**](RoleEnum.md) |  | [optional] 
**order_by** | [**\Cyclos\Api\Model\UserOrderByEnum**](UserOrderByEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

