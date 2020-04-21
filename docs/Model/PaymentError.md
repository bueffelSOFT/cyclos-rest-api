# PaymentError

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | [****](.md) | Currency reference. Only if &#x60;code&#x60; is &#x60;dailyAmountExceeded&#x60;, &#x60;weeklyAmountExceeded&#x60; or &#x60;monthlyAmountExceeded&#x60; | [optional] 
**max_amount** | **float** | The maximum amount. Only if &#x60;code&#x60; is &#x60;dailyAmountExceeded&#x60;, &#x60;weeklyAmountExceeded&#x60; or &#x60;monthlyAmountExceeded&#x60; | [optional] 
**max_payments** | **int** | The maximum payments count. Only if &#x60;code&#x60; is &#x60;dailyPaymentsExceeded&#x60;, &#x60;weeklyPaymentsExceeded&#x60; or &#x60;monthlyPaymentsExceeded&#x60; | [optional] 
**pos_error** | [****](.md) | The POS error details. Only if &#x60;code&#x60; is &#x60;pos&#x60; | [optional] 
**code** | [**\Cyclos\Api\Model\PaymentErrorCode**](PaymentErrorCode.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

