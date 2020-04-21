# TransactionTypeData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | [**\Cyclos\Api\Model\Currency**](Currency.md) |  | [optional] 
**fixed_amount** | **float** | The only allowed amount if the payment type uses a fixed amount | [optional] 
**allows_recurring_payments** | **bool** | Can payments of this type be made recurring? | [optional] 
**max_installments** | **int** | The maximum allowed installments. If it is zero, no kind of scheduled payments is allowed. If it is 1, a single future date can be used. | [optional] 
**requires_description** | **bool** | Use &#x60;descriptionAvailability&#x60; instead   The transaction description can be either required, or optional, depending on this setting. | [optional] 
**default_expiration_date** | [**\DateTime**](\DateTime.md) | The default expiration date, according to the configuration. Only for payment requests. | [optional] 
**hide_expiration_date** | **bool** | Whether the expiration date should be hidden from users, Only for payment requests. | [optional] 
**custom_fields** | [**\Cyclos\Api\Model\CustomFieldDetailed[]**](CustomFieldDetailed.md) | The custom fields related to this payment type | [optional] 
**a_rate** | **float** | The balance aging counter used for this payment. Only for payments. | [optional] 
**d_rate** | **float** | The balance maturity used for this payment. Only for payments. | [optional] 
**d_rate_creation_value** | **float** | The initial value for the balance maturity on this payment type. Only for payments. | [optional] 
**limited_awaiting_authorization** | **bool** | Only for payments. | [optional] 
**no_negatives_maturity_policy** | **bool** | Only for payments. | [optional] 
**max_amount_by_maturity_policy** | **float** | The maximum amount that can be performed when &#x60;maturityPolicy&#x60; is &#x60;history&#x60;. It corresponds to the maturity table entry indicated by &#x60;maturityTableWinnerId&#x60;. Only for payments. | [optional] 
**maturity_table_winner_id** | **string** | When &#x60;maturityPolicy&#x60; is &#x60;history&#x60;, contains the id of the maturity table entry that granted. Only for payments. | [optional] 
**description_availability** | [**\Cyclos\Api\Model\AvailabilityEnum**](AvailabilityEnum.md) |  | [optional] 
**maturity_policy** | [****](.md) | Only for payments. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

