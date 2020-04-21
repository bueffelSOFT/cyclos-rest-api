# ScheduledPaymentInstallmentView

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**by** | [****](.md) | The user that performed an status change. For example, who manually paid, settled or canceled an open installment | [optional] 
**transfer_id** | **string** | Only if the installment was processed, contains the internal identifier of the generated transfer. | [optional] 
**transaction_number** | **string** | Only if the installment was processed, contains the transaction number of the generated transfer. | [optional] 
**transfer_date** | [**\DateTime**](\DateTime.md) | The date the transfer was processed. | [optional] 
**can_process** | **bool** | Can the authenticated user process this installment? | [optional] 
**can_settle** | **bool** | Can the authenticated user settle this installment? | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

