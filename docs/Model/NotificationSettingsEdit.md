# NotificationSettingsEdit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notifications** | [**\Cyclos\Api\Model\NotificationKindMediums[]**](NotificationKindMediums.md) | Per notification kind, indicates the mediums it is sent. It is guaranteed that all and only the allowed kinds are sent. | [optional] 
**forward_messages** | **bool** | Indicates whether to forward received internal messages to the user&#x27;s e-mail. Only applicable for users, not administrators. | [optional] 
**user_accounts** | [**map[string,\Cyclos\Api\Model\AccountNotificationSettings]**](AccountNotificationSettings.md) | Contains the settings for each user account. Only applicable for users, not administrators. The key is the account type id or internal name. | [optional] 
**payments** | **string[]** | The qualified internal names (accountType.paymentType) or ids of payment types to be notified for notifications of kind &#x60;adminPaymentPerformed&#x60;. Only applicable for administrators, not users. | [optional] 
**authorizable_payments** | **string[]** | The qualified internal names (accountType.paymentType) or ids of payment types to be notified for notifications of kind &#x60;adminPaymentAwaitingAuthorization&#x60;. Only applicable for administrators, not users. | [optional] 
**external_payments_failed** | **string[]** | The qualified internal names (accountType.paymentType) or ids of payment types to be notified for notifications of kind &#x60;adminExternalPaymentPerformedFailed&#x60;. Only applicable for administrators, not users. | [optional] 
**external_payments_expired** | **string[]** | The qualified internal names (accountType.paymentType) or ids of payment types to be notified for notifications of kind &#x60;adminExternalPaymentExpired&#x60;. Only applicable for administrators, not users. | [optional] 
**voucher_configurations** | **string[]** | The internal names or ids of voucher configurations to be notified for notifications of kinds &#x60;adminGeneratedVouchersAboutToExpire&#x60; and &#x60;adminGeneratedVouchersExpired&#x60;. Only applicable for administrators, not users. | [optional] 
**voucher_configurations_buying** | **string[]** | The internal names or ids of voucher configurations to be notified for notifications of kind &#x60;adminVoucherBuyingAboutToExpire&#x60;. Only applicable for administrators, not users. | [optional] 
**user_groups** | **string[]** | The internal names or ids of groups to be notified for notifications of kind &#x60;adminUserRegistration&#x60;. Only applicable for administrators, not users. | [optional] 
**system_alerts** | [**\Cyclos\Api\Model\SystemAlertTypeEnum[]**](SystemAlertTypeEnum.md) | The kinds of system alerts to be notified for notifications of kind &#x60;adminSystemAlert&#x60;. Only applicable for administrators, not users. | [optional] 
**user_alerts** | [**\Cyclos\Api\Model\UserAlertTypeEnum[]**](UserAlertTypeEnum.md) | The kinds of user alerts to be notified for notifications of kind &#x60;adminUserAlert&#x60;. Only applicable for administrators, not users. | [optional] 
**forward_message_categories** | **string[]** | The internal names or ids of message categories to which new messages to system will be forwarded to the administrator e-mail. Not tied to any notification kind. Only applicable for administrators, not users. | [optional] 
**version** | **int** | The version stamp for the current object, used for optimistic locking. When saving, the same version as previously received needs to be passed back. If no one else has saved the object, the version will match and the object will be updated. However, if someone other has saved the object, the version will no longer match, and an error will be raised. This is used to prevent multiple users (or processes) from updating the same object and unwilingly overridding the property values, leading to data loss. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

