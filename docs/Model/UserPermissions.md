# UserPermissions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile** | [**\Cyclos\Api\Model\UserProfilePermissions**](UserProfilePermissions.md) |  | [optional] 
**passwords** | [**\Cyclos\Api\Model\UserPasswordsPermissions**](UserPasswordsPermissions.md) |  | [optional] 
**validation** | [**\Cyclos\Api\Model\UserValidationPermissions**](UserValidationPermissions.md) |  | [optional] 
**contact** | [**\Cyclos\Api\Model\UserContactPermissions**](UserContactPermissions.md) |  | [optional] 
**brokering** | [**\Cyclos\Api\Model\UserBrokeringPermissions**](UserBrokeringPermissions.md) |  | [optional] 
**operators** | [**\Cyclos\Api\Model\UserOperatorsPermissions**](UserOperatorsPermissions.md) |  | [optional] 
**marketplace** | [**\Cyclos\Api\Model\UserMarketplacePermissions**](UserMarketplacePermissions.md) |  | [optional] 
**group** | [**\Cyclos\Api\Model\UserGroupPermissions**](UserGroupPermissions.md) |  | [optional] 
**status** | [**\Cyclos\Api\Model\UserStatusPermissions**](UserStatusPermissions.md) |  | [optional] 
**accounts** | [**\Cyclos\Api\Model\AccountWithCurrency[]**](AccountWithCurrency.md) | Accounts which can be viewed by the authenticated user | [optional] 
**balance_limits** | [**\Cyclos\Api\Model\UserBalanceLimitsPermissions**](UserBalanceLimitsPermissions.md) |  | [optional] 
**payment** | [**\Cyclos\Api\Model\UserPaymentPermissions**](UserPaymentPermissions.md) |  | [optional] 
**scheduled_payments** | [**\Cyclos\Api\Model\UserScheduledPaymentsPermissions**](UserScheduledPaymentsPermissions.md) |  | [optional] 
**recurring_payments** | [**\Cyclos\Api\Model\UserRecurringPaymentsPermissions**](UserRecurringPaymentsPermissions.md) |  | [optional] 
**payment_requests** | [**\Cyclos\Api\Model\UserPaymentRequestsPermissions**](UserPaymentRequestsPermissions.md) |  | [optional] 
**authorized_payments** | [**\Cyclos\Api\Model\UserAuthorizedPaymentsPermissions**](UserAuthorizedPaymentsPermissions.md) |  | [optional] 
**tickets** | [**\Cyclos\Api\Model\UserTicketsPermissions**](UserTicketsPermissions.md) |  | [optional] 
**external_payments** | [**\Cyclos\Api\Model\UserExternalPaymentsPermissions**](UserExternalPaymentsPermissions.md) |  | [optional] 
**records** | [**\Cyclos\Api\Model\OwnerRecordPermissions[]**](OwnerRecordPermissions.md) | Records types the authenticated user can view over the given user | [optional] 
**documents** | [**\Cyclos\Api\Model\UserDocumentsPermissions**](UserDocumentsPermissions.md) |  | [optional] 
**session** | [**\Cyclos\Api\Model\UserSessionPermissions**](UserSessionPermissions.md) |  | [optional] 
**operations** | [**\Cyclos\Api\Model\Operation[]**](Operation.md) | Custom operations the authenticated user can run over the given user | [optional] 
**tokens** | [**\Cyclos\Api\Model\TokenPermissions[]**](TokenPermissions.md) | Permissions over tokens of each visible type. | [optional] 
**personalize_nfc_tokens** | [**\Cyclos\Api\Model\TokenType[]**](TokenType.md) | DEPRECATED: Filter the &#x60;tokens&#x60; list with &#x60;type.physicalType &#x3D; &#x27;nfcTag&#x27;&#x60; and &#x60;activate &#x3D; true&#x60;.  NFC tokens the authenticated user can personalize for the given user | [optional] 
**vouchers** | [**\Cyclos\Api\Model\UserVouchersPermissions**](UserVouchersPermissions.md) |  | [optional] 
**notification_settings** | [**\Cyclos\Api\Model\UserNotificationSettingsPermissions**](UserNotificationSettingsPermissions.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

