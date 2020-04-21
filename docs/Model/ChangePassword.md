# ChangePassword

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**old_password** | **string** | The current password value. Required when the user is changing his own password. Not used when admins / brokers are changing the password of a user they manage. | [optional] 
**new_password** | **string** | The new password value. Required. | [optional] 
**check_confirmation** | **bool** | Depending on the client, if a confirm password field is shown to users, it might be useful to check the confirmation password value on the server. This way, if there are other validation exceptions, they are all shown together. In this case, this field should be set to &#x60;true&#x60; and the &#x60;confirmationValue&#x60; should be passed in with the user input. However, in cases where clients just want to register a user with a password non interactively (like in a bulk registration), passing the password value twice is not desirable. In such cases, this field can be left empty (or set to &#x60;false&#x60;), and the &#x60;newPasswordConfirmation&#x60; will be ignored. | [optional] 
**new_password_confirmation** | **string** | The new password confirmation value. Is ignored unless &#x60;checkConfirmation&#x60; is set to &#x60;true&#x60;. | [optional] 
**force_change** | **bool** | Indicates whether the new password needs to be changed on the next login. Only used when admins / brokers are changing the password of a user they manage. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

