# DataForEditFullProfile

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_configuration** | [**\Cyclos\Api\Model\UserDataForEdit**](UserDataForEdit.md) |  | [optional] 
**user** | [**\Cyclos\Api\Model\UserEdit**](UserEdit.md) |  | [optional] 
**display** | **string** | DEPRECATED. Use &#x60;userConfiguration.details.display&#x60; instead.  Contains the formatting of the user according to the configuration. Is only returned if no profile fields are marked to return in user list. | [optional] 
**short_display** | **string** | DEPRECATED. Use &#x60;userConfiguration.details.shortDisplay&#x60; instead.  Contains the short formatting of the user according to the configuration. Is only returned if no profile fields are marked to return in user list | [optional] 
**phone_configuration** | [**\Cyclos\Api\Model\PhoneConfigurationForUserProfile**](PhoneConfigurationForUserProfile.md) |  | [optional] 
**land_line_phones** | [**\Cyclos\Api\Model\PhoneEditWithId[]**](PhoneEditWithId.md) | The existing land-line phones that can be modified and posted back | [optional] 
**mobile_phones** | [**\Cyclos\Api\Model\PhoneEditWithId[]**](PhoneEditWithId.md) | The existing mobile phones that can be modified and posted back | [optional] 
**address_configuration** | [**\Cyclos\Api\Model\AddressConfigurationForUserProfile**](AddressConfigurationForUserProfile.md) |  | [optional] 
**addresses** | [**\Cyclos\Api\Model\AddressEditWithId[]**](AddressEditWithId.md) | The existing addresses that can be modified and posted back | [optional] 
**contact_info_configuration** | [**\Cyclos\Api\Model\ContactInfoConfigurationForUserProfile**](ContactInfoConfigurationForUserProfile.md) |  | [optional] 
**contact_infos** | [**\Cyclos\Api\Model\ContactInfoEditWithId[]**](ContactInfoEditWithId.md) | The existing additional contacts that can be modified and posted back | [optional] 
**contact_info_binary_values** | [**map[string,\Cyclos\Api\Model\ContactInfoBinaryValuesForUserProfile]**](ContactInfoBinaryValuesForUserProfile.md) | Values for images and binary custom fields for additional contacts | [optional] 
**image_configuration** | [**\Cyclos\Api\Model\ImageConfigurationForUserProfile**](ImageConfigurationForUserProfile.md) |  | [optional] 
**images** | [**\Cyclos\Api\Model\Image[]**](Image.md) | All current user images | [optional] 
**confirmation_password_input** | [**AllOfDataForEditFullProfileConfirmationPasswordInput**](AllOfDataForEditFullProfileConfirmationPasswordInput.md) | If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

