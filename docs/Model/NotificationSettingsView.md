# NotificationSettingsView

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notifications** | [**\Cyclos\Api\Model\NotificationKindMediums[]**](NotificationKindMediums.md) | Per notification kind, indicates the mediums it is sent. It is guaranteed that all and only the allowed kinds are sent. | [optional] 
**user_accounts** | [**\Cyclos\Api\Model\AccountNotificationSettingsView[]**](AccountNotificationSettingsView.md) | Contains the settings for each user account. Only applicable for users (members / brokers), not administrators. | [optional] 
**payments** | [**\Cyclos\Api\Model\TransferType[]**](TransferType.md) | The payment types to be notified for notifications of kind &#x60;adminPaymentPerformed&#x60;. Only applicable for administrators, not users (members / brokers). | [optional] 
**authorizable_payments** | [**\Cyclos\Api\Model\TransferType[]**](TransferType.md) | The payment types to be notified for notifications of kind &#x60;adminPaymentAwaitingAuthorization&#x60;. Only applicable for administrators, not users (members / brokers). | [optional] 
**external_payments_failed** | [**\Cyclos\Api\Model\TransferType[]**](TransferType.md) | The payment types to be notified for notifications of kind &#x60;adminExternalPaymentPerformedFailed&#x60;. Only applicable for administrators, not users (members / brokers). | [optional] 
**external_payments_expired** | [**\Cyclos\Api\Model\TransferType[]**](TransferType.md) | The payment types to be notified for notifications of kind &#x60;adminExternalPaymentExpired&#x60;. Only applicable for administrators, not users (members / brokers). | [optional] 
**voucher_configurations** | [**\Cyclos\Api\Model\EntityReference[]**](EntityReference.md) | The voucher configurations to be notified for notifications of kinds &#x60;adminGeneratedVouchersAboutToExpire&#x60; and &#x60;adminGeneratedVouchersExpired&#x60;. Only applicable for administrators, not users (members / brokers). | [optional] 
**voucher_configurations_buying** | [**\Cyclos\Api\Model\EntityReference[]**](EntityReference.md) | The voucher configurations to be notified for notifications of kind &#x60;adminVoucherBuyingAboutToExpire&#x60;. Only applicable for administrators, not users (members / brokers). | [optional] 
**user_groups** | [**\Cyclos\Api\Model\Group[]**](Group.md) | The groups to be notified for notifications of kind &#x60;adminUserRegistration&#x60;. Only applicable for administrators, not users (members / brokers). | [optional] 
**system_alerts** | [**\Cyclos\Api\Model\SystemAlertTypeEnum[]**](SystemAlertTypeEnum.md) | The kinds of system alerts to be notified for notifications of kind &#x60;adminSystemAlert&#x60;. Only applicable for administrators, not users (members / brokers). | [optional] 
**user_alerts** | [**\Cyclos\Api\Model\UserAlertTypeEnum[]**](UserAlertTypeEnum.md) | The kinds of user alerts to be notified for notifications of kind &#x60;adminUserAlert&#x60;. Only applicable for administrators, not users (members / brokers). | [optional] 
**forward_message_categories** | [**\Cyclos\Api\Model\EntityReference[]**](EntityReference.md) | The message categories to which new messages to system will be forwarded to the administrator e-mail. Not tied to any notification kind. Only applicable for administrators, not users (members / brokers). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

