# UserResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The user&#x27;s full name | [optional] 
**username** | **string** | The user&#x27;s login name | [optional] 
**email** | **string** | The user&#x27;s e-mail | [optional] 
**address** | [****](.md) | Address to be placed on map. Is only returned when the search result type is &#x60;map&#x60;. | [optional] 
**distance** | **double** | Only returned when there is a base location to calculate the distance from. The unit (kilometers or miles) depends on configuration. | [optional] 
**custom_values** | **map[string,string]** | Holds the values for custom fields, keyed by field internal name or id. The format of the value depends on the custom field type. Example: &#x60;{..., \&quot;customValues\&quot;: {\&quot;gender\&quot;: \&quot;male\&quot;, \&quot;birthDate\&quot;: \&quot;1980-10-27\&quot;}}&#x60; | [optional] 
**phone** | **string** | First phone number, used when phone is marked on products to be returned on user list | [optional] 
**account_number** | **string** | First account number, used when account number is marked on products to be returned on user list | [optional] 
**group** | [****](.md) | The user group. Only returned when the &#x60;includeGroup&#x60; parameter is set to &#x60;true&#x60; and the current user can see other users&#x27; groups. | [optional] 
**group_set** | [****](.md) | The user group. Only returned when the &#x60;includeGroupSet&#x60; parameter is set to &#x60;true&#x60; and the current user can see other users&#x27; group set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

