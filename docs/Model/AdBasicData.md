# AdBasicData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_fields** | [**\Cyclos\Api\Model\CustomFieldDetailed[]**](CustomFieldDetailed.md) | The possible editable advertisement custom fields | [optional] 
**requires_authorization** | **bool** | Indicates whether advertisements require an authorization from the administration in order to be published for other users to see | [optional] 
**can_create_new** | **bool** | Indicates whether the user can create a new advertisement (if not reached max setting) | [optional] 
**max_categories_per_ad** | **int** | Indicates if user can select single or multiples categories per advertisement | [optional] 
**max_images** | **int** | Indicates the maximum amount of images the user can upload for an advertisement | [optional] 
**categories** | [**\Cyclos\Api\Model\AdCategoryWithChildren[]**](AdCategoryWithChildren.md) | The advertisement categories each with its children, forming a tree | [optional] 
**addresses** | [**\Cyclos\Api\Model\Address[]**](Address.md) | The addresses of the advertisement owner, so specific ones can be linked to the advertisement. | [optional] 
**currencies** | [**\Cyclos\Api\Model\Currency[]**](Currency.md) | The currencies the authenticated user may use to specify the advertisement price | [optional] 
**kind** | [**AllOfAdBasicDataKind**](AllOfAdBasicDataKind.md) | The advertisement kind this data is related to. | [optional] 
**owner** | [**AllOfAdBasicDataOwner**](AllOfAdBasicDataOwner.md) | The owner of the advertisement. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

