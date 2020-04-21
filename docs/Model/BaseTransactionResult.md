# BaseTransactionResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | [****](.md) | The transaction kind. For example, if the front end has distinct views for a regular payment, scheduled payment and so on, this information is useful to determine the actual view. | [optional] 
**transaction_number** | **string** | The transaction number identifying this balance transfer. The currency configuration has the definition on whether transaction numbers are enabled and which format they have. | [optional] 
**authorization_status** | [**\Cyclos\Api\Model\TransactionAuthorizationStatusEnum**](TransactionAuthorizationStatusEnum.md) |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The transfer date and time | [optional] 
**amount** | **float** | The transaction amount. | [optional] 
**type** | [**\Cyclos\Api\Model\TransferType**](TransferType.md) |  | [optional] 
**currency** | **string** | Either internal name or id of the transaction currency. | [optional] 
**description** | **string** | The transaction description. Is optional. | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | Only returned if the &#x60;kind&#x60; is either &#x60;paymentRequest&#x60;, &#x60;externalPayment&#x60; or &#x60;ticket&#x60;. The deadline for the payment to be processed.  In case of &#x60;externalPayment&#x60; if no user is registered with either e-mail or mobile phone matching, it is canceled. The same is done in case of &#x60;ticket&#x60; if it is not accepted by any user. | [optional] 
**scheduled_payment_status** | [****](.md) | The scheduled payment status. Only returned if &#x60;kind&#x60; is &#x60;scheduledPayment&#x60;. | [optional] 
**installment_count** | **int** | The total number of installments. Only returned if &#x60;kind&#x60; is &#x60;scheduledPayment&#x60;. | [optional] 
**processed_installments** | **int** | The number of processed installments. Only returned if &#x60;kind&#x60; is &#x60;scheduledPayment&#x60;. | [optional] 
**first_installment** | [****](.md) | A reference to the first installment of this scheduled payment. Only returned if &#x60;kind&#x60; is &#x60;scheduledPayment&#x60;. | [optional] 
**first_open_installment** | [****](.md) | A reference to the first installment which is still open. Only returned if &#x60;kind&#x60; is &#x60;scheduledPayment&#x60;. | [optional] 
**recurring_payment_status** | [****](.md) | The recurring payment status. Only returned if &#x60;kind&#x60; is &#x60;recurringPayment&#x60;. | [optional] 
**occurrences_count** | **int** | The total number of occurrences to process. When null will be processed until manually canceled. Only returned if &#x60;kind&#x60; is &#x60;recurringPayment&#x60;. | [optional] 
**next_occurrence_date** | [**\DateTime**](\DateTime.md) | When the next recurring payment occurrence will be processed. Only returned if &#x60;kind&#x60; is &#x60;recurringPayment&#x60;. | [optional] 
**last_occurrence_number** | **int** | The number of the last processed occurrence | [optional] 
**external_payment_status** | [****](.md) | The external payment status. Only returned if &#x60;kind&#x60; is &#x60;externalPayment&#x60;. | [optional] 
**to_principal_type** | [****](.md) | The principal type an external payment was sent to. Only returned if &#x60;kind&#x60; is &#x60;externalPayment&#x60;. | [optional] 
**to_principal_value** | **string** | The principal to which an external payment was sent to. Only returned if &#x60;kind&#x60; is &#x60;externalPayment&#x60;. | [optional] 
**payment_request_status** | [****](.md) | The payment request status. Only returned if &#x60;kind&#x60; is &#x60;paymentRequest&#x60;. | [optional] 
**ticket_status** | [****](.md) | The ticket status. Only returned if &#x60;kind&#x60; is &#x60;ticket&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

