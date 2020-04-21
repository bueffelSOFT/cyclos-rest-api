# UserProfilePermissions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**edit_profile** | **bool** | Can edit the user profile? | [optional] 
**manage_addresses** | **bool** | Can manage addresses? | [optional] 
**manage_addresses_privacy** | **bool** | Can manage the addresses privacy? | [optional] 
**manage_phones** | **bool** | Can manage phones? | [optional] 
**manage_phones_privacy** | **bool** | Can manage the phones privacy? | [optional] 
**manage_images** | **bool** | Can manage profile images? | [optional] 
**manage_contact_infos** | **bool** | Can manage additional contact informations? | [optional] 
**can_create_address** | **bool** | Will be true if the authenticated user can manage addresses and the user for which we are viewing its profile has not reached the maximum allowed addresses. Only if &#x60;manageAddresses&#x60; is true. | [optional] 
**can_create_land_line** | **bool** | Will be true if the authenticated user can manage phones and the user for whom we are viewing its profile has not reached the maximum allowed landline phones. Only if &#x60;managePhones&#x60; is true. | [optional] 
**can_create_mobile** | **bool** | Will be true if the authenticated user can manage phones and the user for whom we are viewing its profile has not reached the maximum allowed mobile phones. Only if &#x60;managePhones&#x60; is true. | [optional] 
**can_create_image** | **bool** | Will be true if the authenticated user can manage images and the user for whom we are viewing its profile has not reached the maximum allowed profile images. Only if &#x60;manageImages&#x60; is true. | [optional] 
**can_create_contact_info** | **bool** | Will be true if the authenticated user can manage additional contact informations and the user for whom we are viewing its profile has not reached the maximum allowed additional contact informations. Only if &#x60;manageContactInfos&#x60; is true. | [optional] 
**max_addresses** | **int** | The maximum number of addresses the user can own. Only if &#x60;manageAddresses&#x60; is true | [optional] 
**max_mobiles** | **int** | The maximum number of mobile phones the user can own. Only if &#x60;managePhones&#x60; is true. | [optional] 
**max_land_lines** | **int** | The maximum number of land-line phones the user can own. Only if &#x60;managePhones&#x60; is true. | [optional] 
**max_images** | **int** | The maximum number of profile images  the user can own. Only if &#x60;manageImages&#x60; is true. | [optional] 
**max_contact_infos** | **int** | The maximum number of additional contacts the user can own.  Only if &#x60;manageContactInfos&#x60; is true. | [optional] 
**address_availability** | [**AllOfUserProfilePermissionsAddressAvailability**](AllOfUserProfilePermissionsAddressAvailability.md) | The availability for addresses. Only if &#x60;manageAddresses&#x60; is true | [optional] 
**mobile_availability** | [**AllOfUserProfilePermissionsMobileAvailability**](AllOfUserProfilePermissionsMobileAvailability.md) | The availability for mobile phones Only if &#x60;managePhones&#x60; is true | [optional] 
**land_line_availability** | [**AllOfUserProfilePermissionsLandLineAvailability**](AllOfUserProfilePermissionsLandLineAvailability.md) | The availability for land-line phones Only if &#x60;managePhones&#x60; is true | [optional] 
**profile_image_availability** | [**AllOfUserProfilePermissionsProfileImageAvailability**](AllOfUserProfilePermissionsProfileImageAvailability.md) | The availability for profile images Only if &#x60;manageImages&#x60; is true | [optional] 
**contact_info_availability** | [**AllOfUserProfilePermissionsContactInfoAvailability**](AllOfUserProfilePermissionsContactInfoAvailability.md) | The availability for additional contacts Only if &#x60;manageContactInfos&#x60; is true | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

