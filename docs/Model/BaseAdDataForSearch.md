# BaseAdDataForSearch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**categories** | [**\Cyclos\Api\Model\AdCategoryWithChildren[]**](AdCategoryWithChildren.md) | The advertisement categories each with its children, forming a tree | [optional] 
**custom_fields** | [**\Cyclos\Api\Model\CustomFieldDetailed[]**](CustomFieldDetailed.md) | The list of custom fields that are either to be used as search filter (if its internal name is present on either  &#x60;fieldsInBasicSearch&#x60; or &#x60;fieldsInAdvancedSearch&#x60;) and / or in the result list (if its internal name is present on &#x60;fieldsInList&#x60;). | [optional] 
**fields_in_basic_search** | **string[]** | The internal names of the custom fields that should be used as search filters in the basic section (separated fields, not keywords) | [optional] 
**fields_in_advanced_search** | **string[]** | The internal names of the custom fields that should be used as search filters in the advanced section (separated fields, not keywords) | [optional] 
**fields_in_list** | **string[]** | The internal names of the custom fields that will be returned together with each advertisement, and should be shown in the result list. This feature is planned, but not yet available. | [optional] 
**basic_profile_fields** | [**\Cyclos\Api\Model\BasicProfileFieldInput[]**](BasicProfileFieldInput.md) | The list of basic user profile fields that can be used as search filters. Only returned if searching user advertisements. | [optional] 
**custom_profile_fields** | [**\Cyclos\Api\Model\CustomFieldDetailed[]**](CustomFieldDetailed.md) | The list of custom user profile fields that can be used as search filters. Only returned if searching user advertisements. | [optional] 
**currencies** | [**\Cyclos\Api\Model\Currency[]**](Currency.md) | The currencies the authenticated user may use to filter by price | [optional] 
**search_by_distance_data** | [**\Cyclos\Api\Model\SearchByDistanceData**](SearchByDistanceData.md) |  | [optional] 
**categories_display** | [**AllOfBaseAdDataForSearchCategoriesDisplay**](AllOfBaseAdDataForSearchCategoriesDisplay.md) | The category view configured for the logged user. | [optional] 
**visible_kinds** | [**\Cyclos\Api\Model\AdKind[]**](AdKind.md) | The advertisement kinds that can be searched by the authenticated user | [optional] 
**address_fields_in_search** | [**\Cyclos\Api\Model\AddressQueryFieldEnum[]**](AddressQueryFieldEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

