# BuyVoucherError

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | [****](.md) | Currency reference. Only if &#x60;code&#x60; is &#x60;maxAmountForPeriod&#x60; or &#x60;maxTotalOpenAmount&#x60; | [optional] 
**amount_left_for_buying** | **float** | Indicates the maximum amount the user can buy this time without exceeding the maximum. Only if &#x60;code&#x60; is &#x60;maxAmountForPeriod&#x60;. | [optional] 
**date_allowed_again** | [**\DateTime**](\DateTime.md) | Indicates the date this user will be able to buy vouchers again for this type. Only if &#x60;code&#x60; is &#x60;maxAmountForPeriod&#x60;. | [optional] 
**current_open_amount** | **float** | Indicates the current total amount that is open. Only if &#x60;code&#x60; is &#x60;maxOpenAmount&#x60; or &#x60;maxTotalOpenAmount&#x60;. | [optional] 
**max_open_amount** | **float** | Indicates the maximum total open amount. Only if &#x60;code&#x60; is &#x60;maxOpenAmount&#x60; or &#x60;maxTotalOpenAmount&#x60;. | [optional] 
**payment_error** | [****](.md) | The &#x60;PaymentError&#x60; generated when the voucher payment was being created. Only if &#x60;code&#x60; is &#x60;payment&#x60;. | [optional] 
**code** | [**\Cyclos\Api\Model\BuyVoucherErrorCode**](BuyVoucherErrorCode.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

