# ContactInfoConfigurationForUserProfile

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_info** | [**AllOfContactInfoConfigurationForUserProfileContactInfo**](AllOfContactInfoConfigurationForUserProfileContactInfo.md) | Contains the default values for a new additional contact | [optional] 
**custom_fields** | [**\Cyclos\Api\Model\CustomFieldDetailed[]**](CustomFieldDetailed.md) | The custom fields for additional contact informations | [optional] 
**edit** | **bool** | Can the authenticated user edit additional contacts? | [optional] 
**manage_privacy** | **bool** | Can the authenticated user manage the privacy of additional contacts? | [optional] 
**max_contact_infos** | **int** | The maximum number of additional contacts the user can own | [optional] 
**availability** | [**\Cyclos\Api\Model\AvailabilityEnum**](AvailabilityEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

