# PerformPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**installments_count** | **int** | Represents the number of installments. When not specified, assumes a single installment. Used only if &#x60;scheduling&#x60; is &#x60;scheduled&#x60;. Can be used together with &#x60;installmentsCount&#x60; as an alternative to providing individual &#x60;installments&#x60; definitions. | [optional] 
**first_installment_date** | [**\DateTime**](\DateTime.md) | Represents the first installment date. When not specified, assumes the first installment is processed instantly. Used only if &#x60;scheduling&#x60; is &#x60;scheduled&#x60;. Can be used together with &#x60;installmentsCount&#x60; as an alternative to providing individual &#x60;installments&#x60; definitions. | [optional] 
**installments** | [**\Cyclos\Api\Model\PerformScheduledPaymentInstallment[]**](PerformScheduledPaymentInstallment.md) | An array containing individual installments definitions, allowing full control over generated installments. Used only if &#x60;scheduling&#x60; is &#x60;scheduled&#x60;. | [optional] 
**occurrences_count** | **int** | Represents the number of occurrences in a recurring payment. When not provided, the payment will be repeated until it is manually canceled. Used only if &#x60;scheduling&#x60; is &#x60;recurring&#x60;. | [optional] 
**first_occurrence_date** | [**\DateTime**](\DateTime.md) | Represents the first occurrence date for a recurring payment. If none is given, it is assumed that the first occurrence is immediate. Used only if &#x60;scheduling&#x60; is &#x60;recurring&#x60;. | [optional] 
**occurrence_interval** | [****](.md) | Defines the interval between payment occurrences. If none is given, it is assumed 1 month between occurrences. Used only if &#x60;scheduling&#x60; is &#x60;recurring&#x60;. | [optional] 
**nfc_challence** | **string** | If this payment is performed with a NFC token, must be the challenge (as returned by the server) encrypted by the NFC chip, encoded in HEX form (2 hex chars per byte). | [optional] 
**scheduling** | [**\Cyclos\Api\Model\PaymentSchedulingEnum**](PaymentSchedulingEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

