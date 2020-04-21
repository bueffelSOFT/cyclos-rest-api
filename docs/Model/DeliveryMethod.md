# DeliveryMethod

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether this delivery method is enabled for new sales. | [optional] 
**description** | **string** | A description on how this delivery method works. | [optional] 
**charge_type** | [**\Cyclos\Api\Model\DeliveryMethodChargeTypeEnum**](DeliveryMethodChargeTypeEnum.md) |  | [optional] 
**delivery_time** | [****](.md) | The maximum time interval expected for the products to be delivered. | [optional] 
**charge_amount** | **float** | The amount to be charged. Only makes sense if &#x60;chargeType&#x60; is &#x60;fixed&#x60;. | [optional] 
**charge_currency** | [****](.md) | The delivery price currency. Only makes sense if &#x60;chargeType&#x60; is &#x60;fixed&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

