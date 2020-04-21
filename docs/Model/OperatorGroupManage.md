# OperatorGroupManage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The operator group name | [optional] 
**description** | **string** | Optional description of the group | [optional] 
**edit_own_profile** | **bool** | Can operators of this group edit their own profile? | [optional] 
**chargeback_payments** | **bool** | Can operators of this group chargeback payments received by the owner? | [optional] 
**messages** | **bool** | Can operators of this group access the message box of the owner? | [optional] 
**notifications** | **bool** | Can operators of this group own notifications? | [optional] 
**receive_payments** | **bool** | Can operators of this group receive payments? | [optional] 
**redeem_vouchers** | **bool** | Can operators of this group redeem vouchers? | [optional] 
**request_payments** | **bool** | Can operators of this group request payments? | [optional] 
**view_advertisements** | **bool** | Can operators of this group view advertisements? | [optional] 
**manage_advertisements** | **bool** | Can operators of this group manage advertisements of the owner? | [optional] 
**enable_token** | **bool** | Can operators of this group have tokens (cards)? | [optional] 
**cancel_token** | **bool** | Can operators of this group cancel their own tokens (cards)? | [optional] 
**block_token** | **bool** | Can operators of this group block their own tokens (cards)? | [optional] 
**unblock_token** | **bool** | Can operators of this group unblock their own tokens (cards)? | [optional] 
**brokering** | **bool** | Can operators of this group perform brokering operations? This includes full brokering operatations the user is allowed, including user registration, accounts access, payments as user, etc. | [optional] 
**restrict_payments_to_users** | **string[]** | When set, operators of this group will only be able to perform payments to one of this users | [optional] 
**operations** | **string[]** | Ids / internal names of custom operators that operators of this group will only be able to run | [optional] 
**records** | **string[]** | Ids / internal names of record types that operators of this group will only be able to access | [optional] 
**accounts** | [**map[string,\Cyclos\Api\Model\OperatorGroupAccount]**](OperatorGroupAccount.md) | Defines how operators access the owner accounts, and defines restrictions on payment notifications. The key is the account type id or internal name. | [optional] 
**payments** | [**map[string,\Cyclos\Api\Model\OperatorGroupPayment]**](OperatorGroupPayment.md) | Defines which payment types can be used by operators to perform payments or authorize payments performed by other operators. Also defines the maximum daily amount that can be paid per operator. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

