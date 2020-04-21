# ForbiddenError

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**password_type** | [**AllOfForbiddenErrorPasswordType**](AllOfForbiddenErrorPasswordType.md) | The password type of the failed password. Only sent if &#x60;code&#x60; is one of: - &#x60;invalidPassword&#x60; - &#x60;expiredPassword&#x60; - &#x60;temporarilyBlocked&#x60; - &#x60;indefinitelyBlocked&#x60; | [optional] 
**max_device_activation_reached** | **bool** | The maximum attemps for a device activation was reached. The authenticated user is blocked. Only sent if &#x60;code&#x60; is &#x60;invalidDeviceActivationCode&#x60; | [optional] 
**code** | [**\Cyclos\Api\Model\ForbiddenErrorCode**](ForbiddenErrorCode.md) |  | [optional] 
**invalid_device_confirmation** | [**AllOfForbiddenErrorInvalidDeviceConfirmation**](AllOfForbiddenErrorInvalidDeviceConfirmation.md) | The result associated to an invalid device confrmation. Only sent if &#x60;code&#x60; is &#x60;invalidDeviceConfirmation&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

