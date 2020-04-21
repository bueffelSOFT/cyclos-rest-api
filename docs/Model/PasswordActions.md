# PasswordActions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**change** | **bool** | Manually change the password. | [optional] 
**change_generated** | **bool** | Manually generate another value for a generated password. Can only be  done for the authenticated user himself. | [optional] 
**generate** | **bool** | Generate the password value for the first time. Can only be done for the authenticated user himself. | [optional] 
**allow_generation** | **bool** | Granted only for those generated passwords that have a setting to  require administration authorization and have the status  &#x60;neverCreated&#x60;. Can only be done by administrators with permissions to enable/disable  the password. | [optional] 
**disable** | **bool** | Disables a password, making it unusable until being enabled again. | [optional] 
**enable** | **bool** | Enables a disabled password, either manually disabled or by exceeding the wrong tries, depending on the password type configuration. | [optional] 
**reset_generated** | **bool** | Resets a generated password, making it go back to the  &#x60;pending&#x60; state. The user will then be able to generate a new value for it. | [optional] 
**reset_and_send** | **bool** | Resets a manual password to a generated value and send it to the user. Can also be used to reset and send the main channel&#x27;s access password if it is generated. The new password is initially expired, so the user needs to change it on first login. | [optional] 
**unblock** | **bool** | Unblocks a password which has been blocked by exceeding the wrong tries | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

