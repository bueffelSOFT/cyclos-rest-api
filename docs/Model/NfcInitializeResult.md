# NfcInitializeResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tag_key** | **string** | The PICC Master Key that should be used to seal the NFC tag, encoded as hex. | [optional] 
**application_key** | **string** | The Application Master Key that should be used on the application entry of the NFC tag, encoded as hex. | [optional] 
**operational_key** | **string** | The Application Key used to operate with the tag, encoded as hex. Used when making a payment or to assign an already initialized tag to a user. | [optional] 
**token_label** | **string** | The same label given by the client at initialization or the label generated according the the pattern defined. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

