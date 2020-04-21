# FullProfileEdit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**AllOfFullProfileEditUser**](AllOfFullProfileEditUser.md) | The basic fields. If null, the fields are not modified | [optional] 
**create_land_line_phones** | [**\Cyclos\Api\Model\PhoneNew[]**](PhoneNew.md) | Land-line phones to be created. If not sent / empty, no land-line phones are created. | [optional] 
**create_mobile_phones** | [**\Cyclos\Api\Model\PhoneNew[]**](PhoneNew.md) | Mobile phones to be created. If not sent / empty, no mobile phones are created. | [optional] 
**modify_land_line_phones** | [**\Cyclos\Api\Model\PhoneEditWithId[]**](PhoneEditWithId.md) | Land-line phones to be modified. If not sent / empty, no land-line phones are modified | [optional] 
**modify_mobile_phones** | [**\Cyclos\Api\Model\PhoneEditWithId[]**](PhoneEditWithId.md) | Mobile phones to be modified. If not sent / empty, no mobile phones are modified. | [optional] 
**remove_phones** | **string[]** | Phones (both land-line and mobile) to be removed. If not sent / empty, no phones are removed. | [optional] 
**create_addresses** | [**\Cyclos\Api\Model\AddressNew[]**](AddressNew.md) | Addresses to be created. If not sent / empty, no addresses are created. | [optional] 
**modify_addresses** | [**\Cyclos\Api\Model\AddressEditWithId[]**](AddressEditWithId.md) | Addresses to be modified. If not sent / empty, no addresses are modified. | [optional] 
**remove_addresses** | **string[]** | Addresses to be removed. If not sent / empty, no addresses are removed. | [optional] 
**create_contact_infos** | [**\Cyclos\Api\Model\ContactInfoNew[]**](ContactInfoNew.md) | Additional contacts to be created. If not sent / empty, no additional contacts are created. | [optional] 
**modify_contact_infos** | [**\Cyclos\Api\Model\ContactInfoEditWithId[]**](ContactInfoEditWithId.md) | Additional contacts to be modified. If not sent / empty, no additional contacts are modified. | [optional] 
**remove_contact_infos** | **string[]** | Additional contacts to be removed. If not sent / empty, no additional contacts are removed. | [optional] 
**add_images** | **string[]** | Identifiers of previously uploaded temporary images to be added as profile images. If not sent / empty, no images are added. | [optional] 
**remove_images** | **string[]** | Identifiers of existing profile images to be removed. If not sent / empty, no images are removed. | [optional] 
**reorder_images** | **string[]** | Identifiers of either existing or added profile images in the order they should be listed. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

