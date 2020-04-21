# SendActivationCodeResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**device** | [**AllOfSendActivationCodeResultDevice**](AllOfSendActivationCodeResultDevice.md) | The pending device. The device&#x27;s name is the same name given in &#x60;GET /devices/send-activation-code&#x60; only if it was not already in use. Otherwise, it contains a new name generated from the selected one but adding a suffix. The name generated is of the form &#x60;name_i&#x60; with &#x60;i&#x60; a number and &#x60;name&#x60; the selected name.\&quot; | [optional] 
**sent_to** | **string** | The e-mail or the normalized mobile phone number that received the activation code. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

