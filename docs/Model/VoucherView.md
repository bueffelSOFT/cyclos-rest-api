# VoucherView

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The voucher title when it was created. | [optional] 
**description** | **string** | The voucher description when it was created. | [optional] 
**buy** | [****](.md) | The transaction which bought this voucher, if any and visible. | [optional] 
**redeem_date** | [**\DateTime**](\DateTime.md) | The date the voucher was redeemer, if any. | [optional] 
**redeem** | [****](.md) | The transaction which redeemed this voucher, if any and visible. | [optional] 
**can_cancel** | **bool** | This is redundant with &#x60;cancelAction&#x60;, is &#x60;false&#x60; if &#x60;cancelAction&#x60; is &#x60;null&#x60;, and &#x60;true&#x60; if &#x60;cancelAction&#x60; is not &#x60;null&#x60;.   Can the authenticated user cancel this voucher? | [optional] 
**can_change_expiration_date** | **bool** | Can the authenticated user change this voucher&#x27;s expiration date? | [optional] 
**show_configuration** | **bool** | Should the voucher configuration be shown to users? This flag is &#x60;true&#x60; when there are multiple available configurations. | [optional] 
**show_qr_code** | **bool** | Should the voucher token be shown as QR-code for users? | [optional] 
**redeem_after_date_reached** | **bool** | Should the voucher be available to be redeemed? | [optional] 
**creation_type** | [**\Cyclos\Api\Model\VoucherCreationTypeEnum**](VoucherCreationTypeEnum.md) |  | [optional] 
**cancel_action** | [**\Cyclos\Api\Model\VoucherCancelActionEnum**](VoucherCancelActionEnum.md) |  | [optional] 
**refund** | [****](.md) | The transaction which refunds this voucher, if any and visible. | [optional] 
**confirmation_password_input** | [****](.md) | If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

