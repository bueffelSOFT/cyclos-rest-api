# DataForLogin

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_password_type** | [**AllOfDataForLoginAccessPasswordType**](AllOfDataForLoginAccessPasswordType.md) | The password type used for login access | [optional] 
**principal_types** | [**\Cyclos\Api\Model\PrincipalTypeInput[]**](PrincipalTypeInput.md) | The identification methods accepted for login | [optional] 
**default_principal_type** | **string** | The internal name of the identification method that is marked as default for the current channel configuration. This is optional, and if there is no default, all possible identification methods will be attempted for login. | [optional] 
**extra_forgot_password_principal_types** | [**\Cyclos\Api\Model\PrincipalTypeInput[]**](PrincipalTypeInput.md) | The additional identification methods also accepted for the forgotten password request. | [optional] 
**login_password_input** | [**AllOfDataForLoginLoginPasswordInput**](AllOfDataForLoginLoginPasswordInput.md) | Contains data for the password used on login | [optional] 
**pin_active** | **bool** | Whether the given pin, when requesting the data, can be used for login or not. Only if a &#x60;pinId&#x60; was given when requesting the data, and the &#x60;loginPasswordInput.pinAvailability&#x60; is not &#x60;disabled&#x60;. | [optional] 
**device_confirmation** | [**AllOfDataForLoginDeviceConfirmation**](AllOfDataForLoginDeviceConfirmation.md) | The pending device confirmation used to confirm a trusted session. Only returned if a trusted device identification was given when requesting the data and it exists and is active. | [optional] 
**forgot_password_captcha_provider** | [**AllOfDataForLoginForgotPasswordCaptchaProvider**](AllOfDataForLoginForgotPasswordCaptchaProvider.md) | If the forgot password request requires a captcha, will be the provider used to request one. Otherwise will be null. | [optional] 
**forgot_password_mediums** | [**\Cyclos\Api\Model\SendMediumEnum[]**](SendMediumEnum.md) | If the forgot password request is enabled, returns the mediums the user can choose to receive the confirmation key or code. If nothing is returned, forgot password is not enabled. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

