# AdDetailed

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The advertisement description content, formatted as HTML | [optional] 
**owner** | [**\Cyclos\Api\Model\User**](User.md) |  | [optional] 
**publication_period** | [**\Cyclos\Api\Model\DatePeriod**](DatePeriod.md) |  | [optional] 
**price** | **float** | The regular price. | [optional] 
**stock_quantity** | **float** | The stock disponibility. Only if &#x60;unlimitedStock&#x60; is false and the  &#x27;Stock type&#x27; was not marked as &#x27;Not available&#x27; (through the web  interface). | [optional] 
**unlimited_stock** | **bool** | If true then it means there is always disponibility of the webshop ad. | [optional] 
**max_allowed_in_cart** | **float** | The maximum quantity that can be specified in the shopping cart. | [optional] 
**min_allowed_in_cart** | **float** | The minimum quantity that can be specified in the shopping cart. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

