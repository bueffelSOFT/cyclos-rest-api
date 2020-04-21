# DeviceDataForSend

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email to send the code if the selected medium is &#x60;email&#x60;. | [optional] 
**phones** | [**\Cyclos\Api\Model\Phone[]**](Phone.md) | The available mobile phones to send the code. Verified and unverified phones will be included in this list. After a successful activation if the phone was not yet verified then it will automatically be marked as verified. | [optional] 
**mediums** | [**\Cyclos\Api\Model\SendMediumEnum[]**](SendMediumEnum.md) | The available mediums for the activation code to be sent. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

