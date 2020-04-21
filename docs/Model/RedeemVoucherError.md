# RedeemVoucherError

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redeem_after_date** | [**\DateTime**](\DateTime.md) | Indicates the date after which this voucher can be redeemed. Only if &#x60;code&#x60; is &#x60;notAllowedYet&#x60;. | [optional] 
**payment_error** | [****](.md) | The &#x60;PaymentError&#x60; generated when the voucher payment was being created. Only if &#x60;code&#x60; is &#x60;payment&#x60;. | [optional] 
**code** | [**\Cyclos\Api\Model\RedeemVoucherErrorCode**](RedeemVoucherErrorCode.md) |  | [optional] 
**voucher_status** | [****](.md) | Only if &#x60;code&#x60; is &#x60;notAllowedForVoucher&#x60; | [optional] 
**allowed_days** | [**\Cyclos\Api\Model\WeekDayEnum[]**](WeekDayEnum.md) | Only if &#x60;code&#x60; is &#x60;notAllowedToday&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

