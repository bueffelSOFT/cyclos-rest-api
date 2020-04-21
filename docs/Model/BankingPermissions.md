# BankingPermissions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts** | [**\Cyclos\Api\Model\AccountPermissions[]**](AccountPermissions.md) | Permissions over each owned account | [optional] 
**payments** | [**AllOfBankingPermissionsPayments**](AllOfBankingPermissionsPayments.md) | Payments permissions | [optional] 
**authorizations** | [**AllOfBankingPermissionsAuthorizations**](AllOfBankingPermissionsAuthorizations.md) | Transaction authorization permissions | [optional] 
**scheduled_payments** | [**AllOfBankingPermissionsScheduledPayments**](AllOfBankingPermissionsScheduledPayments.md) | Scheduled payments permissions | [optional] 
**recurring_payments** | [**AllOfBankingPermissionsRecurringPayments**](AllOfBankingPermissionsRecurringPayments.md) | Recurring payments permissions | [optional] 
**external_payments** | [**AllOfBankingPermissionsExternalPayments**](AllOfBankingPermissionsExternalPayments.md) | External payments permissions | [optional] 
**payment_requests** | [**AllOfBankingPermissionsPaymentRequests**](AllOfBankingPermissionsPaymentRequests.md) | Payment requests permissions | [optional] 
**tickets** | [**AllOfBankingPermissionsTickets**](AllOfBankingPermissionsTickets.md) | Tickets permissions | [optional] 
**search_general_transfers** | **bool** | Can the authenticated admin / broker perform a general transfers search (all visible transfers, regardless of the user / account)? | [optional] 
**search_users_with_balances** | **bool** | Can the authenticated admin / broker search managed users together with their account balances? | [optional] 
**search_general_balance_limits** | **bool** | Can the authenticated admin / broker perform a general account balance limit search, for all visible accounts? | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

