# TokensPermissions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**my** | [**\Cyclos\Api\Model\TokenPermissions[]**](TokenPermissions.md) | Permissions over my own tokens type | [optional] 
**user** | [**\Cyclos\Api\Model\TokenPermissions[]**](TokenPermissions.md) | Permissions over tokens types of other users | [optional] 
**personalize_nfc_tokens_as_member** | [**\Cyclos\Api\Model\TokenType[]**](TokenType.md) | NFC token types the authenticated member can personalize to other members (example, a business personalizing cards for clients). | [optional] 
**nfc** | [**\Cyclos\Api\Model\NfcTokenPermissions[]**](NfcTokenPermissions.md) | DEPRECATED: Use either &#x60;my&#x60;, &#x60;user&#x60; or &#x60;personalizeNfcTokensAsMember&#x60;, filtering by &#x60;physicalType&#x60; to be &#x60;nfcTag&#x60;.  Permissions over each visible nfc token type | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

