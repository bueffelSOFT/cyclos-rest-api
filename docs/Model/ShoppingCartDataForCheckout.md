# ShoppingCartDataForCheckout

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cart** | [**AllOfShoppingCartDataForCheckoutCart**](AllOfShoppingCartDataForCheckoutCart.md) | The cart containing the currency and items. | [optional] 
**payment_types** | [**\Cyclos\Api\Model\TransferType[]**](TransferType.md) | Contains the allowed payment types. | [optional] 
**delivery_methods** | [**\Cyclos\Api\Model\DeliveryMethod[]**](DeliveryMethod.md) | The list of delivery method commons to all of the products added to the shopping cart ordered by name. | [optional] 
**address_configuration** | [**\Cyclos\Api\Model\AddressConfiguration**](AddressConfiguration.md) |  | [optional] 
**confirmation_password_input** | [**AllOfShoppingCartDataForCheckoutConfirmationPasswordInput**](AllOfShoppingCartDataForCheckoutConfirmationPasswordInput.md) | If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless). | [optional] 
**addresses** | [**\Cyclos\Api\Model\Address[]**](Address.md) | The addresses the logged user (i.e the buyer) has. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

