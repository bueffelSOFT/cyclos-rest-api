# OperatorGroupView

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [****](.md) | The user which owns this operator group | [optional] 
**editable** | **bool** | Can the authenticated user edit / remove this operator group? | [optional] 
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
**brokering** | **bool** | Can operators of this group perform brokering operations? | [optional] 
**restrict_payments_to_users** | [**\Cyclos\Api\Model\User[]**](User.md) | When set, operators of this group will only be able to perform payments to one of this users | [optional] 
**operations** | [**\Cyclos\Api\Model\Operation[]**](Operation.md) | Custom operators that operators of this group will only be able to run | [optional] 
**records** | [**\Cyclos\Api\Model\RecordType[]**](RecordType.md) | Record types that operators of this group will only be able to access | [optional] 
**accounts** | [**\Cyclos\Api\Model\OperatorGroupAccountView[]**](OperatorGroupAccountView.md) | Settings for the access operators will have over owner accounts. | [optional] 
**payments** | [**\Cyclos\Api\Model\OperatorGroupPaymentView[]**](OperatorGroupPaymentView.md) | Settings for payments that can be performed by operators. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

