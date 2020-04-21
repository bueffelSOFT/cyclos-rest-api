# DataForUserPasswords

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**\Cyclos\Api\Model\User**](User.md) |  | [optional] 
**passwords** | [**\Cyclos\Api\Model\PasswordStatusAndActions[]**](PasswordStatusAndActions.md) | The status and possible actions for each password | [optional] 
**data_for_set_security_answer** | [**AllOfDataForUserPasswordsDataForSetSecurityAnswer**](AllOfDataForUserPasswordsDataForSetSecurityAnswer.md) | If the security answer is enabled in the configuration and the user has no security answer yet, contains data for setting it. Is not returned if not used or if the user already has an answer. | [optional] 
**confirmation_password_input** | [**AllOfDataForUserPasswordsConfirmationPasswordInput**](AllOfDataForUserPasswordsConfirmationPasswordInput.md) | If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

