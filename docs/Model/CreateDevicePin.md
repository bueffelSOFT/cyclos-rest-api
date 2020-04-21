# CreateDevicePin

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The device pin&#x27;s name. This name will be shown when listing the pins of a user to identify the device for which this pin was defined. It&#x27;s ignored if already authenticated with a PIN or if a valid &#x60;deviceId&#x60; was given. | [optional] 
**pin** | **string** | The PIN value | [optional] 
**pin_confirmation** | **string** | The PIN confirmation value. Is ignored unless &#x60;checkConfirmation&#x60; is set to &#x60;true&#x60;. | [optional] 
**check_confirmation** | **bool** | Depending on the client, if a confirm pin field is shown to users, it might be useful to check the confirmation pin value on the server. This way, if there are other validation exceptions, they are all shown together. In this case, this flag should be set to &#x60;true&#x60; and the &#x60;pinConfirmation&#x60; should be passed in with the user input. Otherwise, if a confirm field is not shown then this flag can be left empty (or set to &#x60;false&#x60;), and the &#x60;pinConfirmation&#x60; will be ignored. | [optional] 
**device_id** | **string** | Trusted device identification. If given then the &#x60;name&#x60; will be ignored and the pin&#x27;s name will be copied from the device&#x27;s name. This is necessary to get in sync when a pin is defined for an already trusted device. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

