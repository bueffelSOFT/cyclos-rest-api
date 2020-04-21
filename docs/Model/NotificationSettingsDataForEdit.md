# NotificationSettingsDataForEdit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settings** | [****](.md) | The object that can be modified and &#x60;POST&#x60;ed back to &#x60;/{user}/notification-settings&#x60; to save the notifications. | [optional] 
**payments** | [**\Cyclos\Api\Model\TransferType[]**](TransferType.md) | The visible regular payment types. Only applicable for administrators, not users (members / brokers). | [optional] 
**authorizable_payments** | [**\Cyclos\Api\Model\TransferType[]**](TransferType.md) | The visible regular payment types that require authorization. Only applicable for administrators, not users (members / brokers). | [optional] 
**external_payments** | [**\Cyclos\Api\Model\TransferType[]**](TransferType.md) | The visible payment types that allow external payments. Only applicable for administrators, not users (members / brokers). | [optional] 
**voucher_configurations** | [**\Cyclos\Api\Model\EntityReference[]**](EntityReference.md) | The visible voucher configurations. Only applicable for administrators, not users (members / brokers). | [optional] 
**user_accounts** | [**\Cyclos\Api\Model\AccountType[]**](AccountType.md) | The available accounts types for user payment notifications | [optional] 
**user_groups** | [**\Cyclos\Api\Model\Group[]**](Group.md) | The visible user groups. Only applicable for administrators, not users (members / brokers). | [optional] 
**message_categories** | [**\Cyclos\Api\Model\EntityReference[]**](EntityReference.md) | The visible message categories. Only applicable for administrators, not users (members / brokers). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

