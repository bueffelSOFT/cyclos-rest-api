# ContactListQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keywords** | **string** | Textual search keywords. Sometimes, like in user search, the fields matched depends on what is configured on the products. | [optional] 
**custom_fields** | **string[]** | Concat custom field values used as filters. Is a comma-separated array, where each part consists in two parts: the internal name (or custom field id) of the field, and a value, both separated by : (colon).  For example, &#x60;customFields&#x3D;field1:value1,field2:value2&#x60;. Sometimes multiple values are accepted. In this case, the multiple values are separated by pipes. For example, customFields&#x3D;field1:valueA|valueB. Enumerated fields accept multiple values, while numeric and date fields also accept ranges, which are two values, pipe-separated. For example, &#x60;customFields&#x3D;tradeType:offer|search,extraDate:2000-01-01|2001-12-31&#x60; would match results whose custom field with internal name &#x60;tradeType&#x60; is either &#x60;offer&#x60; or &#x60;search&#x60;, and whose &#x60;extraDate&#x60; is between January 1, 2000 and December 31, 2001. To specify a single bound in ranges (like birth dates before December 31, 2001), use a pipe in one of the values, like &#x60;customValues&#x3D;extraDate:|2001-12-31&#x60;. | [optional] 
**order_by** | [**\Cyclos\Api\Model\ContactOrderByEnum**](ContactOrderByEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

