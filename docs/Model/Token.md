# Token

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **string** | The token value only if not NFC. Otherwise is the token label. | [optional] 
**activation_date** | [**\DateTime**](\DateTime.md) | When the owner user activated the token. | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) | The creation date. | [optional] 
**expiry_date** | [**\DateTime**](\DateTime.md) | The expiration date. Only if the corresponding token type defines an expiration period. | [optional] 
**status** | [**\Cyclos\Api\Model\TokenStatusEnum**](TokenStatusEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

