# OperatorGroupBasicData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**AllOfOperatorGroupBasicDataUser**](AllOfOperatorGroupBasicDataUser.md) | Details of the user that is the owner of the operator group | [optional] 
**can_chargeback_payments** | **bool** | Can the permission to chargeback payments be granted? | [optional] 
**can_receive_payments** | **bool** | Can the permission to receive payments be granted? | [optional] 
**can_request_payments** | **bool** | Can the permission to request payments be granted? | [optional] 
**can_redeem_vouchers** | **bool** | Can the permission to redeem vouchers be granted? | [optional] 
**can_view_advertisements** | **bool** | Can the permission to view advertisements be granted? | [optional] 
**can_manage_advertisements** | **bool** | Can the permission to manage advertisements be granted? | [optional] 
**can_block_token** | **bool** | Can the permission to block tokens (cards) be granted? | [optional] 
**can_cancel_token** | **bool** | Can the permission to cancel tokens (cards) be granted? | [optional] 
**can_enable_token** | **bool** | Can the permission to enable tokens (cards) be granted? | [optional] 
**can_unblock_token** | **bool** | Can the permission to unblock tokens (cards) be granted? | [optional] 
**broker** | **bool** | Indicates whether the owner user is a broker. If so, can delegate brokering operations to operators. | [optional] 
**can_have_messages** | **bool** | Can the permission over messages be granted? | [optional] 
**can_have_notifications** | **bool** | Can the permission over notificationsto be granted? | [optional] 
**operations** | [**\Cyclos\Api\Model\Operation[]**](Operation.md) | Custom operations that can be granted | [optional] 
**record_types** | [**\Cyclos\Api\Model\RecordType[]**](RecordType.md) | Record types that can be granted | [optional] 
**account_types** | [**\Cyclos\Api\Model\AccountType[]**](AccountType.md) | Account types details for the account settings | [optional] 
**payment_types** | [**\Cyclos\Api\Model\TransferTypeWithCurrency[]**](TransferTypeWithCurrency.md) | Payment types details for the payment settings | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

