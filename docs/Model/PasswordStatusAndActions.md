# PasswordStatusAndActions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\Cyclos\Api\Model\PasswordTypeWithDescription**](PasswordTypeWithDescription.md) |  | [optional] 
**require_old_password_for_change** | **bool** | Indicates whether the &#x60;change&#x60; action, if enabled, requires the old password to be sent. This is the case when changing the password of the logged user, and the current password was ever set and is not currently expired / reset. | [optional] 
**permissions** | [****](.md) | The permissions over actions the authenticated user can perform on this password | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

