# SendActivationCodeRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The device name. This name must be unique per user, in case it already exist then a suffix will be added in the form &#x60;_i&#x60; with &#x60;i&#x60; being a number. E.g if a device with name &#x27;my_device&#x27; already exist then the final name will be &#x27;my_device_1&#x27;. It&#x27;s ignored if authenticated with a PIN or if a valid &#x60;pinId&#x60; was given. | [optional] 
**pin_id** | **string** | Only if the device for which the activation is requested for already has a defined pin, then it must be specified here. This is necessary to get in sync when a device is activated after a pin was already defined. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

