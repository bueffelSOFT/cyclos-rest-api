# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display** | **string** | The descriptive text for this transaction, according to the transaction type and currency configuration in Cyclos | [optional] 
**transaction_number** | **string** | The transaction number identifying this balance transfer. The currency configuration has the definition on whether transaction numbers are enabled and which format they have. | [optional] 
**ticket_number** | **string** | A 32-length alphanumeric ticket identifier. Only returned if kind is &#x60;ticket&#x60;. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The transfer date and time | [optional] 
**amount** | **float** | The transfer amount. May be positive or negative. | [optional] 
**from_kind** | [****](.md) | The from account kind | [optional] 
**from_user** | [****](.md) | The user that performed this transaction. Is only returned if &#x60;fromKind&#x60; is &#x60;user&#x60;. | [optional] 
**to_kind** | [****](.md) | The to account kind | [optional] 
**to_user** | [****](.md) | The user that performed this transaction. Is only returned if &#x60;toKind&#x60; is &#x60;user&#x60;. | [optional] 
**type** | [**\Cyclos\Api\Model\TransferType**](TransferType.md) |  | [optional] 
**currency** | [****](.md) | The transaction currency. Is only returned if this object is not embedded in a &#x60;TransferView&#x60;. | [optional] 
**description** | **string** | The transaction description. Is optional. | [optional] 
**kind** | [****](.md) | The transaction kind. For example, if the front end has distinct views for a regular payment, scheduled payment and so on, this information is useful to determine the actual view. | [optional] 
**authorization_status** | [**\Cyclos\Api\Model\TransactionAuthorizationStatusEnum**](TransactionAuthorizationStatusEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

