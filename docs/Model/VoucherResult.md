# VoucherResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**owner** | [****](.md) | The user a generated voucher was assigned to, if any. | [optional] 
**buyer** | [****](.md) | The voucher buyer. Is not returned when the voucher was generated or when searching for bought vouchers of a user. | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) | The date a voucher was generated or bought | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | The date a voucher expires | [optional] 
**redeem_by** | [****](.md) | The user who perform the redeem action, could be an admin, broker or operator of the redeemer. Is not returned when the voucher was not yet redeemed or if it is the same as the redeemer. | [optional] 
**redeemer** | [****](.md) | The voucher redeemer. Is not returned when the voucher was not yet redeemed or when searching for redeemed vouchers of a user. | [optional] 
**redeem_date** | [**\DateTime**](\DateTime.md) | The date a voucher was redeemed (if so) | [optional] 
**redeem_after_date** | [**\DateTime**](\DateTime.md) | The date after which the voucher can be redeemed. Is only returned if the voucher &#x60;status&#x60; is &#x60;open&#x60;. | [optional] 
**type** | [**\Cyclos\Api\Model\VoucherType**](VoucherType.md) |  | [optional] 
**redeem_on_week_days** | [**\Cyclos\Api\Model\WeekDayEnum[]**](WeekDayEnum.md) | The days of the week a voucher can be redeemed. Is only returned if the voucher &#x60;status&#x60; is &#x60;open&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

