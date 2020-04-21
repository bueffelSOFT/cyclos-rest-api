# VoucherDataForBuy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [****](.md) | The account from which the buy will be debited | [optional] 
**can_buy_multiple** | **bool** | If user can buy multiple vouchers at same time | [optional] 
**fixed_amount** | **float** | Returned if there is a fixed amount for bought vouchers. Is kept for backwards compatibility, because the &#x60;amountRange&#x60; is enough to return this information (when &#x60;min&#x60; and &#x60;max&#x60; are the same amount) | [optional] 
**amount_range** | [****](.md) | Returned if there is a minimum / maximum amount for buying | [optional] 
**minimum_time_to_redeem** | [****](.md) | Returned if there is a minimum time to be elapsed before bought vouchers can be redeemed | [optional] 
**types** | [**\Cyclos\Api\Model\VoucherTypeDetailed[]**](VoucherTypeDetailed.md) | The list of voucher types the authenticated user can buy to another user (or himself). Only if no type parameter is given. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

