# RecordDataForEdit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**edit** | **bool** | Can the authenticated user edit records of this type? | [optional] 
**remove** | **bool** | Can the authenticated user remove records of this type? | [optional] 
**editable_fields** | **string[]** | The internal names of fields that can be edited | [optional] 
**record** | [****](.md) | The record that is being edited. This value can be modified and sent back to &#x60;PUT /records/{id}&#x60; | [optional] 
**binary_values** | [****](.md) | Holds the current values for file / image custom fields as lists of &#x60;StoredFile&#x60;s / &#x60;Image&#x60;s. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

