# SendPaymentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expiration_date** | [**\DateTime**](\DateTime.md) | The payment request expiration date. Required, unless the expiration date is configured in the payment type to be hidden from users. | [optional] 
**first_installment_is_immediate** | **bool** | Indicates whether the first installment should be immediately processed once the scheduled payment is accepted. Used only if &#x60;scheduling&#x60; is &#x60;scheduled&#x60;. When not explicitly set to &#x60;false&#x60; will process the first installment immediately. | [optional] 
**installments_count** | **int** | Represents the number of installments. When not specified, assumes a single installment. Used only if &#x60;scheduling&#x60; is &#x60;scheduled&#x60;. | [optional] 
**scheduling** | [**\Cyclos\Api\Model\PaymentRequestSchedulingEnum**](PaymentRequestSchedulingEnum.md) |  | [optional] 
**occurrences_count** | **int** | Represents the number of occurrences. When not specified, assumes a the payment will continue until be manually canceled. Used only if &#x60;scheduling&#x60; is &#x60;enum:PaymentRequestSchedulingEnum.recurring&#x60;. | [optional] 
**first_occurrence_is_immediate** | **bool** | Indicates whether the first occurrence should be immediately processed once the recurring payment is accepted. Used only if &#x60;scheduling&#x60; is &#x60;enum:PaymentRequestSchedulingEnum.recurring&#x60;. When not explicitly set to &#x60;false&#x60; will process the first occurrence immediately. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

