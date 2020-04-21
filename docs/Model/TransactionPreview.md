# TransactionPreview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**confirmation_message** | **string** | If configured in the payment type, is a message to be shown to the user before confirming the transaction | [optional] 
**confirmation_password_input** | [**AllOfTransactionPreviewConfirmationPasswordInput**](AllOfTransactionPreviewConfirmationPasswordInput.md) | If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless). | [optional] 
**payment_type** | [**\Cyclos\Api\Model\TransferType**](TransferType.md) |  | [optional] 
**currency** | [**\Cyclos\Api\Model\Currency**](Currency.md) |  | [optional] 
**from_account** | [**\Cyclos\Api\Model\AccountWithOwner**](AccountWithOwner.md) |  | [optional] 
**from_operator** | [**AllOfTransactionPreviewFromOperator**](AllOfTransactionPreviewFromOperator.md) | The operator who is performing the payment. Only sent if the payment is made from an operator. | [optional] 
**total_amount** | **float** | The final amount charged to the payer including fees. | [optional] 
**custom_values** | [**\Cyclos\Api\Model\CustomFieldValue[]**](CustomFieldValue.md) | The list of custom field values, in a detailed view | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

