# UserDataForEdit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | [****](.md) | Additional details to the user being edited | [optional] 
**user** | [****](.md) | The object that can be altered and posted back to save the user / operator | [optional] 
**role** | [**\Cyclos\Api\Model\RoleEnum**](RoleEnum.md) |  | [optional] 
**email_pending_validation** | **string** | The new e-mail address, which is still pending validation. Is only returned when e-mail validation is enabled for edit profile, and the user has changed the e-mail address. | [optional] 
**binary_values** | [****](.md) | Holds the current values for file / image custom fields as lists of &#x60;StoredFile&#x60;s / &#x60;Image&#x60;s. | [optional] 
**confirmation_password_input** | [****](.md) | If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

