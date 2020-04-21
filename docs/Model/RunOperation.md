# RunOperation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**form_parameters** | **map[string,string]** | Holds the form field values, keyed by field internal name or id. The format of the value depends on the custom field type. | [optional] 
**confirmation_password** | **string** | If the custom operation requires confirmation password, the &#x60;OperationDataForRun.confirmationPasswordInput&#x60; will contain the data for inputting the confirmation password. When such value is present, the password value should be provided in this property. | [optional] 
**page** | **int** | When running a custom operation with &#x60;resultType&#x60; &#x3D; &#x60;resultPage&#x60;, determines the current page offset. Whether this is implemented depends on the script code itself. | [optional] 
**page_size** | **int** | When running a custom operation with &#x60;resultType&#x60; &#x3D; &#x60;resultPage&#x60;, determines the number of results per page. Whether this is implemented depends on the script code itself. | [optional] 
**page_context** | [**AllOfRunOperationPageContext**](AllOfRunOperationPageContext.md) | Only when running a custom operation with &#x60;resultType&#x60; &#x3D; &#x60;resultPage&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

