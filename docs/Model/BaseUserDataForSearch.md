# BaseUserDataForSearch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_keywords** | **bool** | Indicates whether using keywords is allowed | [optional] 
**fields_in_search** | **string[]** | The internal names of either basic or custom profile fields which can be used as search filters (separated fields, not keywords). | [optional] 
**basic_fields** | [**\Cyclos\Api\Model\BasicProfileFieldInput[]**](BasicProfileFieldInput.md) | The list of basic profile fields that can be used either as search filters (if the internal names are present in the &#x60;fieldsInSearch&#x60; property) or on the result list (if the internal names are present in the &#x60;fieldsInList&#x60; property). | [optional] 
**custom_fields** | [**\Cyclos\Api\Model\CustomFieldDetailed[]**](CustomFieldDetailed.md) | The list of custom profile fields that can be used either as search filters (if the internal names are present in the &#x60;fieldsInSearch&#x60; property) or on the result list (if the internal names are present in the &#x60;fieldsInList&#x60; property) | [optional] 
**groups** | [**\Cyclos\Api\Model\Group[]**](Group.md) | The groups the authenticated user can use to filter users. Admins can always filter by groups, while users depend on a permission, which can be to only view group sets, only groups or none. | [optional] 
**search_by_distance_data** | [**\Cyclos\Api\Model\SearchByDistanceData**](SearchByDistanceData.md) |  | [optional] 
**address_fields_in_search** | [**\Cyclos\Api\Model\AddressQueryFieldEnum[]**](AddressQueryFieldEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

