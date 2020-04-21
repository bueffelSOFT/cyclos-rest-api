# ContactInfoDataForEdit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_info** | [****](.md) | The additional contact information that is being edited. This value can be modified and sent back on &#x60;PUT /contactInfos/{id}&#x60;. | [optional] 
**edit** | **bool** | Indicates whether the current contact info can be edited by the currently authenticated used. | [optional] 
**remove** | **bool** | Indicates whether the current contact info can be removed by the currently authenticated used. | [optional] 
**image** | [**\Cyclos\Api\Model\Image**](Image.md) |  | [optional] 
**binary_values** | [****](.md) | Holds the current values for file / image custom fields as lists of &#x60;StoredFile&#x60;s / &#x60;Image&#x60;s. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

