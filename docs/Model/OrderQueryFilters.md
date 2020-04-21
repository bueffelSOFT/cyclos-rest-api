# OrderQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**related_user** | **string** | Either id or an identification, such as login name, e-mail, etc, for the seller or buyer according whether we are searching for purchases or sales. The allowed identification methods are those the authenticated user can use on keywords search. | [optional] 
**number** | **string** | The generated order number according to the webshop settings. | [optional] 
**creation_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum order creation date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**sales** | **bool** | Are we searching for sales or purchases? If not specified it&#x27;s assumed purchases (i.e &#x60;false&#x60;) | [optional] 
**statuses** | [**\Cyclos\Api\Model\OrderStatusEnum[]**](OrderStatusEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

