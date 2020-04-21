# UnauthorizedError

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**missing_secondary_password** | [**AllOfUnauthorizedErrorMissingSecondaryPassword**](AllOfUnauthorizedErrorMissingSecondaryPassword.md) | May only returned when &#x60;code&#x60; is &#x60;login&#x60; and there is a login confirmation with password defined for the channel. | [optional] 
**secondary_device_allowed** | **bool** | Whether confirmations with device are allowed or not.   May only returned when &#x60;code&#x60; is &#x60;login&#x60; and there is a login confirmation defined for the channel. | [optional] 
**code** | [**\Cyclos\Api\Model\UnauthorizedErrorCode**](UnauthorizedErrorCode.md) |  | [optional] 
**user_status** | [**AllOfUnauthorizedErrorUserStatus**](AllOfUnauthorizedErrorUserStatus.md) | May only returned when &#x60;code&#x60; is &#x60;login&#x60;. | [optional] 
**password_status** | [**AllOfUnauthorizedErrorPasswordStatus**](AllOfUnauthorizedErrorPasswordStatus.md) | May only returned when &#x60;code&#x60; is &#x60;login&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

