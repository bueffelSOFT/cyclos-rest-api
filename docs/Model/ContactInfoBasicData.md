# ContactInfoBasicData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_fields** | [**\Cyclos\Api\Model\CustomFieldDetailed[]**](CustomFieldDetailed.md) | The additional contact information custom fields | [optional] 
**addresses** | [**\Cyclos\Api\Model\Address[]**](Address.md) | The available user addresses, which can be referenced by id | [optional] 
**phone_configuration** | [**\Cyclos\Api\Model\PhoneConfiguration**](PhoneConfiguration.md) |  | [optional] 
**confirmation_password_input** | [**AllOfContactInfoBasicDataConfirmationPasswordInput**](AllOfContactInfoBasicDataConfirmationPasswordInput.md) | If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

