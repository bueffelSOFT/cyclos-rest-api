# DocumentQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**range** | [****](.md) | The range for returned documents. When not specified, defaults to &#x60;shared&#x60;. | [optional] 
**categories** | **string[]** | The shared document categories | [optional] 
**enabled** | **bool** | Only used if the logged user can manage documents. When set, filters documents by their &#x60;enabled&#x60; status, either &#x60;true&#x60; or &#x60;false&#x60;. | [optional] 
**groups** | **string[]** | Either the ids or internal names of individual document owners&#x27; group | [optional] 
**brokers** | **string[]** | Either the ids or identification methods of individual document owners&#x27; brokers | [optional] 
**user** | **string** | Either the id or identifier of the document owner | [optional] 
**keywords** | **string** | Used to filter documents containing that keywords in the the name or description (case insensitive) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

