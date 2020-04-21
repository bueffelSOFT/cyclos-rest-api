# Transfer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display** | **string** | The descriptive text for this transfer, according to the transfer type and currency configuration in Cyclos | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The transfer date and time | [optional] 
**amount** | **float** | The transfer amount. May be positive or negative. | [optional] 
**type** | [****](.md) | The transfer type | [optional] 
**currency** | [**\Cyclos\Api\Model\Currency**](Currency.md) |  | [optional] 
**from** | [****](.md) | The account that sent the balance | [optional] 
**to** | [****](.md) | The account that received the balance | [optional] 
**transaction_number** | **string** | The transaction number identifying this balance transfer. The currency configuration has the definition on whether transaction numbers are enabled and which format they have. | [optional] 
**statuses** | [**\Cyclos\Api\Model\TransferStatus[]**](TransferStatus.md) | Contains the current status for each status flow this transfer has | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

