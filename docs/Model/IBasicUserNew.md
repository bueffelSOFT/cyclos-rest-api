# IBasicUserNew

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mobile_phones** | [**\Cyclos\Api\Model\PhoneNew[]**](PhoneNew.md) | Mobile phones to be registered together with the user | [optional] 
**land_line_phones** | [**\Cyclos\Api\Model\PhoneNew[]**](PhoneNew.md) | Land-line phones to be registered together with the user | [optional] 
**passwords** | [**\Cyclos\Api\Model\PasswordRegistration[]**](PasswordRegistration.md) | The initial passwords of the user | [optional] 
**skip_activation_email** | **bool** | When set to true, the activation e-mail is not sent to the registered user. Can only be used when an administrator / broker is registering a user, and ignored on public registrations (the e-mail is always sent on public registrations). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

