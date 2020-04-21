# ShoppingCartItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**price_when_added** | **float** | The current product price at the moment of add it to the shopping cart.  Be carefull, this could not be the same price finally charged at  check-out (e.g because the promotional period has finished).  It could be used to show a warning message to the client indicating  the price has changed if it is different from the current price of the &#x60;product&#x60;. | [optional] 
**price** | **float** | The regular price. | [optional] 
**promotional_price** | **float** | The promotional price (aka the current price). if it is present then  that is the current price that would be charged at check-out.  Otherwise would be the &#x60;price&#x60;.  Only present if it is defined and the promotional period has not  yet finished. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

