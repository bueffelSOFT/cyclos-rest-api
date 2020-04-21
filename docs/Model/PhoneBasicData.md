# PhoneBasicData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** | The 2-letter country code used by default for numbers. Unless an international number is specified (using the &#x60;+&#x60; prefix), the phone number is assumed to belong to this country. | [optional] 
**always_show_international_number** | **bool** | Indicates the it is configured to always format numbers using the international format. If set to false, numbers will be formatted in the national format. | [optional] 
**example** | **string** | An example phone number. Can be either a land-line or mobile phone number example, depending on this phone kind phone | [optional] 
**extension_enabled** | **bool** | Only returned for land line phones. Indicates whether the extension is enabled. | [optional] 
**sms_enabled** | **bool** | Only returned for mobile phones. Indicates whether outbound SMS is enabled in Cyclos | [optional] 
**enable_privacy** | **bool** | Indicates whether privacy can be used for this phone | [optional] 
**manage_privacy** | **bool** | Can the authenticated user manage the privacy of this phone? | [optional] 
**manually_verify** | **bool** | Can the authenticated user manully verify a mobile phone? | [optional] 
**confirmation_password_input** | [**AllOfPhoneBasicDataConfirmationPasswordInput**](AllOfPhoneBasicDataConfirmationPasswordInput.md) | If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless). | [optional] 
**type** | [**\Cyclos\Api\Model\PhoneKind**](PhoneKind.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

