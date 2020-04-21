# RecordView

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\Cyclos\Api\Model\RecordTypeDetailed**](RecordTypeDetailed.md) |  | [optional] 
**user** | [****](.md) | The user which owns this record, only returned if &#x60;kind&#x60; is &#x60;user&#x60; | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) | The record creation date | [optional] 
**created_by** | [**\Cyclos\Api\Model\User**](User.md) |  | [optional] 
**last_modification_date** | [**\DateTime**](\DateTime.md) | The record last modification date | [optional] 
**last_modified_by** | [**\Cyclos\Api\Model\User**](User.md) |  | [optional] 
**custom_values** | [**\Cyclos\Api\Model\RecordCustomFieldValue[]**](RecordCustomFieldValue.md) | The list of custom field values this record has | [optional] 
**edit** | **bool** | Can the authenticated user edit this record? | [optional] 
**remove** | **bool** | Can the authenticated user remove this record? | [optional] 
**operations** | [**\Cyclos\Api\Model\Operation[]**](Operation.md) | List of runnable custom operations. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

