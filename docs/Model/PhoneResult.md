# PhoneResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**verified** | **bool** | Indicates whether this phone is verified. Is only returned if &#x60;kind&#x60; is &#x60;mobile&#x60; and the authenticated user manages the owner of this phone. | [optional] 
**enabled_for_sms** | **bool** | Indicates whether this phone is verified and enabled for SMS. Is only returned if &#x60;kind&#x60; is &#x60;mobile&#x60; and the authenticated user manages the owner of this phone. | [optional] 
**hidden** | **bool** | Indicates whether this phone is hidden for other users. It always returns false if the authenticated user doesn&#x27;t manage the owner of this phone. | [optional] 
**verification_code_send_date** | [**\DateTime**](\DateTime.md) | The date the verification code was sent, if any. Is only returned if &#x60;kind&#x60; is &#x60;mobile&#x60; and the authenticated user manages the owner of this phone. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

