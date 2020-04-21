# Operation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**icon** | **string** | The character that represents the icon in the Cyclos font | [optional] 
**label** | **string** | A representative label about the operation | [optional] 
**information_text** | **string** | A message to be displayed to the user when displaying the parameters form. Only returned in contexts where the operation can be executed. | [optional] 
**confirmation_text** | **string** | A message to be shown to the user in order to confirm the operation execution. Only returned in contexts where the operation can be executed. | [optional] 
**require_confirmation_password** | **bool** | Indicates whether this operation requires confirmation password. Only returned in contexts where the operation can be executed. | [optional] 
**has_file_upload** | **bool** | Indicates whether this operation accepts a file upload as input. Only returned in contexts where the operation can be executed. | [optional] 
**allow_export** | **bool** | Does this operation allows exporting the results as CSV? Only returned if &#x60;resultType&#x60; is &#x60;resultPage&#x60;. Only returned in contexts where the operation can be executed. | [optional] 
**allow_print** | **bool** | Does this operation allows printing the results as PDF? Only returned if &#x60;resultType&#x60; is &#x60;resultPage&#x60;. Only returned in contexts where the operation can be executed. | [optional] 
**missing_optional_parameters** | **string[]** | The optional custom fields without a value. The front-end could opt-in to rely on the &#x60;showFormForMissingOptionalParameters&#x60; flag to determine whether to show or not an input form if there&#x27;s a missing poptional form field. Only returned in contexts where the operation can be executed. | [optional] 
**missing_required_parameters** | **string[]** | The required custom fields without a value. This means the operation will fail with a validation error if the parameters present in this list are not given when run it. Only returned in contexts where the operation can be executed. | [optional] 
**show_form_for_missing_optional_parameters** | **bool** | Indicates whether a form to enter the missing optional parameters must be shown. Only returned if the &#x60;missingOptionalParameters&#x60; list is not empty and &#x60;scope&#x60; is  &#x60;internal&#x60;. Only returned in contexts where the operation can be executed. | [optional] 
**can_run_directly** | **bool** | Use the other flags instead. This flag was decomposed in several others to allow better control at the moment of run a custom operation. For example, if your front-end asks for the confirmation password in a popup instead of in its own page and  the only thing you need to run the operation is that (i.e thereare no missing parameters, no file upload, etc)  then you could show the popup to collect the password and then run the custom operation directly in the same page on which you are.   Indicates whether this operation can be executed directly, without showing a form page. More specifically, this flag is true if:  - There are no confirmation text nor informational text - File upload is not allowed - Confirmation password is not required - All required parameters were set - All optional parametes were set or, if not, the option to show the form in case of missing parameters is false.  Only returned in contexts where the operation can be executed. | [optional] 
**scope** | [**\Cyclos\Api\Model\OperationScopeEnum**](OperationScopeEnum.md) |  | [optional] 
**result_type** | [****](.md) | The type of data returned after the operation is executed. Only returned in contexts where the operation can be executed. | [optional] 
**admin_menu** | [****](.md) | In which administration menu the operation shows up. Only returned in contexts where the operation can be executed. | [optional] 
**user_menu** | [****](.md) | In which user menu the operation shows up. Only returned in contexts where the operation can be executed. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

