# PasswordInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**has_active_password** | **bool** | Only returned when there is an authenticated user (not for login). Describes whether the user has created a password of this type. If not, a proper message can be shown to the user indicating that this password needs to be created. | [optional] 
**has_active_device** | **bool** | Only returned when there is an authenticated user (not for login). Describes whether the user has at least one trusted device. If not, and the device confirmation is required a proper message can be shown to the user indicating that the user must activate a device as trusted. | [optional] 
**confirmation_password_once_per_session** | **bool** | Only returned when there is an authenticated user (not for login). Determines whether this password, when used as confirmation, should be requested only once until the user logs out. | [optional] 
**min_length** | **int** | For text passwords, the minimum password length | [optional] 
**max_length** | **int** | For text passwords, the maximum password length | [optional] 
**number_of_buttons** | **int** | Only for &#x60;virtualKeyboard&#x60;, is the number of buttons to be displayed | [optional] 
**buttons_per_row** | **int** | Only for &#x60;virtualKeyboard&#x60;, is the number of buttons that should be displayed on each row | [optional] 
**buttons** | [**string[][]**](array.md) | Only for &#x60;virtualKeyboard&#x60;, contains the sequences of buttons that should be displayed for the user. The explanation for the value that should be sent on virtual keyboard mode is shown above, in the description of this type. | [optional] 
**input_method** | [****](.md) | The explanation for the value that should be sent for &#x60;virtualKeyboard&#x60; cases is given above, in the description of this type. | [optional] 
**mode** | [**\Cyclos\Api\Model\PasswordModeEnum**](PasswordModeEnum.md) |  | [optional] 
**device_availability** | [****](.md) | Whether the confirmation with a trusted device is not used, optional or required. | [optional] 
**pin_availability** | [****](.md) | Whether the confirmation with a device PIN is not used, optional or required. | [optional] 
**pin_input** | [****](.md) | The device PIN min length. Only if &#x60;pinAvailability&#x60; is not &#x60;disabled&#x60; | [optional] 
**otp_send_mediums** | [**\Cyclos\Api\Model\SendMediumEnum[]**](SendMediumEnum.md) | Only for &#x60;otp&#x60;, the available mediums for the password to be sent | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

