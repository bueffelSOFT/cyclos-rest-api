# ContactListDataForSearch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**\Cyclos\Api\Model\User**](User.md) |  | [optional] 
**custom_fields** | [**\Cyclos\Api\Model\CustomFieldDetailed[]**](CustomFieldDetailed.md) | The list of contact custom fields that are either to be used as search filter (if its internal name is present on &#x60;fieldsInSearch&#x60;) and / or in the result list (if its internal name is present on &#x60;fieldsInList&#x60;) | [optional] 
**fields_in_search** | **string[]** | The internal names of the contact custom fields that should be used as search filters (separated fields, not keywords) | [optional] 
**fields_in_list** | **string[]** | The internal names of the contact custom fields that will be returned together with each record, and should be shown in the result list | [optional] 
**query** | [**AllOfContactListDataForSearchQuery**](AllOfContactListDataForSearchQuery.md) | Default query filters for searching records | [optional] 
**has_visible_fields** | **bool** | This flag can be used to know whether selecting a contact in the contact list should show direclty the user profile or a contact details page to show additional custom fields. | [optional] 
**has_editable_fields** | **bool** | This flag can be used to know whether the contact should be added directly to the user&#x27;s contact list or a page should be shown for the user to fill in the contact custom fields. | [optional] 
**address_fields_in_search** | [**\Cyclos\Api\Model\AddressQueryFieldEnum[]**](AddressQueryFieldEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

