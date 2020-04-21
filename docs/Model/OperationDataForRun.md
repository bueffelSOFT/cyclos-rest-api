# OperationDataForRun

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**result_information_text** | **string** | A message to be displayed to the user when displaying the page results. Only returned if &#x60;resultType&#x60; is &#x60;resultPage&#x60;. | [optional] 
**custom_submit_label** | **string** | A label to be shown on the submit button. When not returned, a generic &#x27;Submit&#x27; should be displayed. | [optional] 
**form_parameters** | [**\Cyclos\Api\Model\CustomFieldDetailed[]**](CustomFieldDetailed.md) | The custom fields which are used in a form as parameters for the operation execution. | [optional] 
**confirmation_password_input** | [****](.md) | If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless). | [optional] 
**search_automatically** | **bool** | Should the operation be immediately executed by the third party client software when first presenting the form to the user  (when &#x60;true&#x60;) or only when the user clicks submit (when &#x60;false&#x60;)? Only returned if &#x60;resultType&#x60; is &#x60;resultPage&#x60;. | [optional] 
**row_location** | **string** | The location to which the client should be redirected when selecting a row in the results table. Only returned if &#x60;resultType&#x60; is &#x60;resultPage&#x60; and &#x60;rowAction&#x60; is &#x60;location&#x60;. | [optional] 
**row_operation** | [****](.md) | The custom operation that should be executed when clicking a row. Only returned if &#x60;resultType&#x60; is &#x60;resultPage&#x60; and &#x60;rowAction&#x60; is &#x60;operation&#x60;. | [optional] 
**row_url** | **string** | The URL the client should be redirected when clicking a row. Only returned if &#x60;resultType&#x60; is &#x60;resultPage&#x60; and &#x60;rowAction&#x60; is &#x60;url&#x60;. | [optional] 
**row_parameters** | **string[]** | The names of parameters belonging to each custom operation result that should be passed as parameter to the custom operation or URL which is executed when selecting a row in the table. Only returned if &#x60;resultType&#x60; is &#x60;resultPage&#x60;. | [optional] 
**row_action** | [**\Cyclos\Api\Model\OperationRowActionEnum**](OperationRowActionEnum.md) |  | [optional] 
**user** | [****](.md) | The user for whom this custom operation will be executed. Returned if &#x60;scope&#x60; is either &#x60;user&#x60;, &#x60;advertisement&#x60;, &#x60;contact&#x60; (the contact owner), &#x60;contactInfo&#x60; or &#x60;record&#x60; (for user records). | [optional] 
**ad** | [****](.md) | The advertisement for which this custom operation will be executed. Only returned if &#x60;scope&#x60; is  &#x60;advertisement&#x60; | [optional] 
**contact** | [****](.md) | The contact for whom this custom operation will be executed. Only returned if &#x60;scope&#x60; is  &#x60;contact&#x60; | [optional] 
**contact_info** | [****](.md) | The additional contact for which this custom operation will be executed. Only returned if &#x60;scope&#x60; is  &#x60;contactInfo&#x60; | [optional] 
**record** | [****](.md) | The record for which this custom operation will be executed. Only returned if &#x60;scope&#x60; is  &#x60;record&#x60; | [optional] 
**record_type** | [****](.md) | The record type of the record for which this custom operation will be executed. Only returned if &#x60;scope&#x60; is  &#x60;record&#x60; | [optional] 
**transfer** | [****](.md) | The transfer for which this custom operation will be executed. Only returned if &#x60;scope&#x60; is  &#x60;transfer&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

