# BaseTransferQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charged_back** | **bool** | When set to either &#x60;true&#x60; will only return transfers that were charged-back. When set to &#x60;false&#x60;, will only return transfers that were not charged-back. When left blank will not filter by this creterion. | [optional] 
**statuses** | **string[]** | Transfer statuses used as search criteria. Each array element should be either the identifier or the status qualified internal name, composed by flow internal name, a dot, and the status internal name. For example, &#x60;loan.open&#x60; would be a valid internal name. | [optional] 
**kinds** | [**\Cyclos\Api\Model\TransferKind[]**](TransferKind.md) | The kind of transfers to return | [optional] 
**transfer_kinds** | [**\Cyclos\Api\Model\TransferKind[]**](TransferKind.md) | DEPRECATED: Use &#x60;kinds&#x60; instead | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

