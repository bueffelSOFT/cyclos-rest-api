# BasicUserManage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The user&#x27;s full name | [optional] 
**username** | **string** | The user&#x27;s login name | [optional] 
**email** | **string** | The user&#x27;s e-mail | [optional] 
**custom_values** | **map[string,string]** | Holds the custom field values, keyed by field internal name or id. The format of the value depends on the custom field type. In order to lookup the custom fields, use either the &#x60;GET /users/data-for-new&#x60; (when creating) or &#x60;GET /users/{user}/data-for-edit&#x60; (when modifying) a user, and lookup each field by either internal name. Example: &#x60;{..., \&quot;customValues\&quot;: {\&quot;gender\&quot;: \&quot;male\&quot;, \&quot;birthDate\&quot;: \&quot;1980-10-27\&quot;}}&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

