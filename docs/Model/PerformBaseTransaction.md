# PerformBaseTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | The transaction amount | [optional] 
**description** | **string** | The (optional) transaction description | [optional] 
**currency** | **string** | The currency id or internal name. Only used when not specifying a payment type. In this case, will narrow the search for the payment type. | [optional] 
**type** | **string** | The payment type, either the id or qualified internal name (in the form &#x60;fromAccountType.paymentType&#x60;). If no payment type is specified, if a single one is possible, it will be used. If a currency is specified, it will be taken into account in order to find the payment type. If, however, there would be multiple possibilities, a validation error is returned. | [optional] 
**custom_values** | **map[string,string]** | Holds the custom field values, keyed by field internal name or id. The format of the value depends on the custom field type. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

