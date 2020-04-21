# TokenNew

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **string** | Either id or identification of the user to initially assign the token to. If set the token initial status will be either &#x60;pending&#x60; or &#x60;active&#x60; (if &#x60;activateNow&#x60; is true). If the user is not set, the initial status will always be &#x60;unassigned&#x60;. | [optional] 
**value** | **string** | The token value to create. The token value is commonly used as the card number. | [optional] 
**activate_now** | **bool** | When set to true, the token will be initially active when &#x60;user&#x60; is also set. Has no effect if &#x60;user&#x60; is null. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

