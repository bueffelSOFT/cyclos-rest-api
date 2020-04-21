# AdNew

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**submit_for_authorization** | **bool** | Only useful when authorization is required (&#x60;AdDataForNew&#x60;/&#x60;AdDataForEdit&#x60;.&#x60;requiresAuthorization&#x60; flag is &#x60;true&#x60;). Indicates whether the advertisement will be initially submitted for authorization (status &#x3D; &#x60;pending&#x60;) or kept in the &#x60;draft&#x60; status. | [optional] 
**hidden** | **bool** | Only useful when authorization is not required (&#x60;AdDataForNew&#x60;/&#x60;AdDataForEdit&#x60;.&#x60;requiresAuthorization&#x60; flag is &#x60;false&#x60;). Indicates whether the initial status for the advertisement should be &#x60;hidden&#x60; (when &#x60;true&#x60;) or &#x60;active&#x60; (when &#x60;false&#x60;). | [optional] 
**images** | **string[]** | The ids of previously uploaded user temporary images to be initially used as advertisement images | [optional] 
**kind** | [****](.md) | The advertisement kind to be created. Currently only &#x60;simple&#x60; advertisements can be managed through this API. The default is &#x60;simple&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

