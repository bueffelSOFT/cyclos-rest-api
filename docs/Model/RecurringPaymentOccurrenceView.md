# RecurringPaymentOccurrenceView

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** | The occurrence number. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The occurrence date. | [optional] 
**amount** | **float** | The installment amount | [optional] 
**by** | [****](.md) | The user that performed an status change. For example, who manually paid, settled or canceled an open installment | [optional] 
**transfer_id** | **string** | Only if the occurrence was processed, contains the internal identifier of the generated transfer. | [optional] 
**transaction_number** | **string** | Only if the occurrence was processed, contains the transaction number of the generated transfer. | [optional] 
**transfer_date** | [**\DateTime**](\DateTime.md) | The date the occurrence was processed. It might happen that the occurrence has first failed, then later processed | [optional] 
**status** | [**\Cyclos\Api\Model\RecurringPaymentOccurrenceStatusEnum**](RecurringPaymentOccurrenceStatusEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

