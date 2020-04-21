# AdView

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**categories** | [**\Cyclos\Api\Model\AdCategoryWithParent[]**](AdCategoryWithParent.md) | Either internal name or id of categories this advertisement belongs to. In most cases an advertisement will have a single category, but this depends on the Cyclos configuration. | [optional] 
**custom_values** | [**\Cyclos\Api\Model\CustomFieldValue[]**](CustomFieldValue.md) | The list of custom field values this advertisement has | [optional] 
**currency** | [**\Cyclos\Api\Model\Currency**](Currency.md) |  | [optional] 
**promotional_price** | **float** | The promotional price, to be applied on the promotional period is active | [optional] 
**promotional_period** | [****](.md) | The promotional period, the one when &#x60;promotionalPrice&#x60; is valid | [optional] 
**promotional_period_active** | **bool** | Indicates whether the promotional period is active at the moment this data is returned | [optional] 
**can_manage** | **bool** | Use &#x60;canEdit&#x60; or &#x60;canRemove&#x60; instead.   Indicates if the authenticated user manage this advertisement | [optional] 
**can_edit** | **bool** | Indicates if the authenticated user can edit this advertisement | [optional] 
**can_remove** | **bool** | Indicates if the authenticated user can remove this advertisement. The owner of the ad with manage permissions can remove the advertisement regardless the ad status. | [optional] 
**can_buy** | **bool** | Indicates if the authenticated user can buy this webshop ad. | [optional] 
**can_ask** | **bool** | Indicates if the authenticated user can ask questions about this advertisement. | [optional] 
**can_hide** | **bool** | Indicates if the authenticated user can hide this advertisement. | [optional] 
**can_unhide** | **bool** | Indicates if the authenticated user can unhide this advertisement. | [optional] 
**can_set_as_draft** | **bool** | Indicates if the authenticated user can set as draft an already authorized (published) advertisement. | [optional] 
**can_request_authorization** | **bool** | Indicates if the authenticated user can request for authorization for this advertisement. | [optional] 
**can_approve** | **bool** | Indicates if the authenticated user can authorize this advertisement (user managers only). | [optional] 
**can_reject** | **bool** | Indicates if the authenticated user can reject this advertisement (user managers only). | [optional] 
**questions_enabled** | **bool** | Indicates if the questions are anabled for the given advertisement. | [optional] 
**last_authorization_comments** | **string** | The last comments set by a manager when rejecting or set as draft this advertisement. Only send if the advertisement requires authorization and the authenticated user can view the comments. | [optional] 
**additional_images** | [**\Cyclos\Api\Model\Image[]**](Image.md) | Holds the images other than the primary image, which is returned in the &#x60;image&#x60; field | [optional] 
**user_addresses** | [**\Cyclos\Api\Model\Address[]**](Address.md) | The addresses (belonging to the advertisement&#x27;s owner) where this  advertisement is available. | [optional] 
**ad_addresses** | [**\Cyclos\Api\Model\Address[]**](Address.md) | The custom addresses where this advertisement is available. | [optional] 
**questions** | [**\Cyclos\Api\Model\AdQuestionView[]**](AdQuestionView.md) | The list of questions this advertisement has. | [optional] 
**allow_decimal** | **bool** | if true then this webshop ad can be ordered specifying the quantity as a decimal number. | [optional] 
**delivery_methods** | [**\Cyclos\Api\Model\DeliveryMethod[]**](DeliveryMethod.md) | The available delivery methods for this webshop ad. | [optional] 
**product_number** | **string** | The product number according to the webshop settings. | [optional] 
**operations** | [**\Cyclos\Api\Model\Operation[]**](Operation.md) | List of runnable custom operations. | [optional] 
**hide_price** | **bool** | Indicates whether show or not this advertisement price to guests | [optional] 
**hide_owner** | **bool** | Indicates whether show or not this advertisement owner to guests | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

