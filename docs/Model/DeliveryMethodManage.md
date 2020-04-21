# DeliveryMethodManage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether this delivery method is enabled for new sales. | [optional] 
**name** | **string** | The visible name for this delivery method. | [optional] 
**description** | **string** | A description on how this delivery method works. | [optional] 
**charge_type** | [**\Cyclos\Api\Model\DeliveryMethodChargeTypeEnum**](DeliveryMethodChargeTypeEnum.md) |  | [optional] 
**delivery_time** | [**AllOfDeliveryMethodManageDeliveryTime**](AllOfDeliveryMethodManageDeliveryTime.md) | The maximum time interval expected for the products to be delivered. | [optional] 
**charge_amount** | **float** | The delivery price. Only makes sense if &#x60;chargeType&#x60; is &#x60;fixed&#x60;. | [optional] 
**charge_currency** | **string** | Either id or internal name of the price currency. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

