# PaymentPreview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**main_amount** | **float** | This reflects the new transaction amount. Depending on the configured fees, it could happen that the fee amount is deducted from transaction amount. If no fees deduct, it will be the same as transaction amount.  E.g: payment from A to B by 100 units with two fees: 10 units deducted from payment amount and other of 15 not deducted. Then the &#x60;totalAmount&#x60; will be 115, 90 for the &#x60;mainAmount&#x60;, 10 for the first fee and 15 for  the other fee. | [optional] 
**fees** | [**\Cyclos\Api\Model\TransferFeePreview[]**](TransferFeePreview.md) | Only returned for direct payments. Contains the fees that would be paid by the payer if the payment is confirmed. | [optional] 
**installments** | [**\Cyclos\Api\Model\ScheduledPaymentInstallmentPreview[]**](ScheduledPaymentInstallmentPreview.md) | Only returned for scheduled payments. Contains the previews of each installment, if the payment is confirmed. | [optional] 
**payment** | [****](.md) | Depending on the configuration, some script might alter the payment object, for example, filling in custom fields. This object can be used to show the actual data to the user, and to be posted again to the &#x60;POST /{owner}/payments/&#x60; path. | [optional] 
**a_rate** | **float** | The balance aging counter used for this payment | [optional] 
**d_rate** | **float** | The balance maturity used for this payment | [optional] 
**previous_d_rate** | **float** | The number of days until the present balance reaches its maturity | [optional] 
**transfer_d_rate** | **float** | The maturity used for this payment | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

