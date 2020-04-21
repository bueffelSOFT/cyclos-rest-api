# OrderView

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buyer** | [****](.md) | The buyer of the order. | [optional] 
**seller** | [****](.md) | The seller of the order. | [optional] 
**delivery_address** | [**\Cyclos\Api\Model\Address**](Address.md) |  | [optional] 
**delivery_method_name** | **string** | The delivery method name. | [optional] 
**delivery_price** | **float** | The delivery method price. | [optional] 
**delivery_time** | [**\Cyclos\Api\Model\TimeInterval**](TimeInterval.md) |  | [optional] 
**payment_type** | [**\Cyclos\Api\Model\TransferType**](TransferType.md) |  | [optional] 
**items** | [**\Cyclos\Api\Model\OrderItem[]**](OrderItem.md) | The order items | [optional] 
**remarks** | **string** | The current order remarks (i.e those for check-out, accept or reject). | [optional] 
**sale** | **bool** | Is it a sale (initiated by the seller)? | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

