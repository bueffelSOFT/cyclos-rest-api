# UserNew

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group** | **string** | The initial user group | [optional] 
**broker** | **string** | Either the identifier or other identification value (login name, e-mail, etc) of the broker for the new user. Only allowed if logged-in as administrator with permission. | [optional] 
**mobile_phones** | [**\Cyclos\Api\Model\PhoneNew[]**](PhoneNew.md) | Mobile phones to be registered together with the user | [optional] 
**land_line_phones** | [**\Cyclos\Api\Model\PhoneNew[]**](PhoneNew.md) | Land-line phones to be registered together with the user | [optional] 
**passwords** | [**\Cyclos\Api\Model\PasswordRegistration[]**](PasswordRegistration.md) | The initial passwords of the user | [optional] 
**skip_activation_email** | **bool** | When set to true, the activation e-mail is not sent to the registered user. Can only be used when an administrator / broker is registering a user, and ignored on public registrations (the e-mail is always sent on public registrations). | [optional] 
**addresses** | [**\Cyclos\Api\Model\AddressNew[]**](AddressNew.md) | Addresses to be registered together with the user | [optional] 
**contact_infos** | [**\Cyclos\Api\Model\ContactInfoNew[]**](ContactInfoNew.md) | Additional contacts to be registered together with the user | [optional] 
**images** | **string[]** | The ids of previously uploaded user temporary images to be initially used as profile images | [optional] 
**captcha** | **object** | The captcha response is required on public registrations, and ignored when administrators / brokers register another user. | [optional] 
**accept_agreement** | **bool** | When there are agreements that need to be accepted for registration, this property must be passed with the value true | [optional] 
**as_member** | **bool** | Flag required only when the authenticated user is a broker, in that case we need to distingish between registering as member or broker. If true then the new user will be registered without a brokering relationship. Otherwise the authenticated user will be set as the broker of the new user. | [optional] 
**security_question** | **string** | If the server is configured to use security question, is the &#x60;internalName&#x60; of the question present in the result of &#x60;data-for-new&#x60;, in the &#x60;securityQuestions&#x60; property. Is optional and only used in public registration. | [optional] 
**security_answer** | **string** | If a &#x60;securityQuestion&#x60; is informed, this is the answer. Required in this case. Only used in public registration. | [optional] 
**nfc_token** | **object** | If not null then the given NFC token parameters will be used to personalize a tag for the user. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

