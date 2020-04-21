# ScheduledPaymentInstallmentPreview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** | The installment number | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | The installment due date | [optional] 
**total_amount** | **float** | The final total installment amount | [optional] 
**main_amount** | **float** | Depending on the configured fees, it could happen that the main amount is deducted from fees amount. This reflects the new main amount. If no fees deduct, it will be the same as &#x60;totalAmount&#x60;. | [optional] 
**fees** | [**\Cyclos\Api\Model\TransferFeePreview[]**](TransferFeePreview.md) | Only returned for direct payments. Contains the fees that would be paid by the payer if the payment is confirmed. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

