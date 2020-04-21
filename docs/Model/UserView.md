# UserView

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The user&#x27;s full name | [optional] 
**username** | **string** | The user&#x27;s login name | [optional] 
**email** | **string** | The user&#x27;s e-mail | [optional] 
**email_pending_validation** | **string** | Returned for managers / own user when the user has changed his e-mail but hasn&#x27;t yet validated the new e-mail. The e-mail change validation is a configuration in Cyclos. | [optional] 
**enabled_profile_fields** | **string[]** | The internal names of profile fields enabled for this user. For example, the user might have no phones, but it might be because he is not allowed to have phones or because there are currently no phones. Same for addresses, images and optional profile fields. | [optional] 
**custom_values** | [**\Cyclos\Api\Model\UserCustomFieldValue[]**](UserCustomFieldValue.md) | The list of custom field values this user has | [optional] 
**group** | [****](.md) | Reference to the user group. Is only returned if the authenticated user has permission to see groups. | [optional] 
**group_set** | [****](.md) | Reference to the user group set. Is only returned if the authenticated user has permission to see group sets and the user group is in a group set. | [optional] 
**status** | [****](.md) | The user status. Only returned if the authenticated user has permission to view the user status. | [optional] 
**additional_images** | [**\Cyclos\Api\Model\Image[]**](Image.md) | Holds the images other than the primary image, which is returned in the &#x60;image&#x60; field | [optional] 
**addresses** | [**\Cyclos\Api\Model\AddressView[]**](AddressView.md) | Visible addresses | [optional] 
**phones** | [**\Cyclos\Api\Model\PhoneView[]**](PhoneView.md) | Visible phones | [optional] 
**contact_infos** | [**\Cyclos\Api\Model\ContactInfoDetailed[]**](ContactInfoDetailed.md) | Visible additional contact information | [optional] 
**contact** | [****](.md) | When this user is in the contact list of the currently logged user, returns data about the contact relation. When not returned, this user is no in the logged user&#x27;s contact list. | [optional] 
**registration_date** | [**\DateTime**](\DateTime.md) | The date the user was registered. Only returned if the logged user manages the given used. | [optional] 
**activation_date** | [**\DateTime**](\DateTime.md) | The date the user was made active the first time. Only returned if the logged user manages the given used. | [optional] 
**online** | **bool** | Indicates whether the given user is logged-in to the system. Only returned if the logged user manages the given used. | [optional] 
**last_login** | [**\DateTime**](\DateTime.md) | The last time the user logged in, or null if never logged in. Only returned if the logged user manages the given used. | [optional] 
**first_login** | [**\DateTime**](\DateTime.md) | The first time the user logged in, or null if never logged in. Only returned if the logged user manages the given used. | [optional] 
**permissions** | [****](.md) | Permissions the authenticated has over this user | [optional] 
**brokers** | [**\Cyclos\Api\Model\BrokerView[]**](BrokerView.md) | Visible brokers | [optional] 
**role** | [**\Cyclos\Api\Model\RoleEnum**](RoleEnum.md) |  | [optional] 
**relationship** | [**\Cyclos\Api\Model\UserRelationshipEnum**](UserRelationshipEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

