# UserDataForNew

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group** | [****](.md) | Details of the registration group. | [optional] 
**broker** | [****](.md) | When the user registration is requested with a broker, contains the broker details. | [optional] 
**address_configuration** | [**\Cyclos\Api\Model\AddressConfigurationForUserProfile**](AddressConfigurationForUserProfile.md) |  | [optional] 
**contact_info_configuration** | [**\Cyclos\Api\Model\ContactInfoConfigurationForUserProfile**](ContactInfoConfigurationForUserProfile.md) |  | [optional] 
**image_configuration** | [**\Cyclos\Api\Model\ImageConfigurationForUserProfile**](ImageConfigurationForUserProfile.md) |  | [optional] 
**user** | [****](.md) | The object that can be altered and posted back to register the user | [optional] 
**agreements** | [**\Cyclos\Api\Model\AgreementContent[]**](AgreementContent.md) | The agreements that needs to be accepted by the user to be able to register. Only returned for public registrations. | [optional] 
**security_questions** | [**\Cyclos\Api\Model\EntityReference[]**](EntityReference.md) | If enabled in the server, are the possible security questions the user can use to set the answer. | [optional] 
**nfc_token_types** | [**\Cyclos\Api\Model\EntityReference[]**](EntityReference.md) | The NFC token types the authenticated user can parsonalize tags for the user being registered | [optional] 
**captcha_type** | [****](.md) | The captcha provider used to requested a captcha for registration, or null if no captcha is needed. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

