# MarketplacePermissions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**my_simple** | [**\Cyclos\Api\Model\MyMarketplacePermissions**](MyMarketplacePermissions.md) |  | [optional] 
**my_webshop** | [**\Cyclos\Api\Model\MyMarketplacePermissions**](MyMarketplacePermissions.md) |  | [optional] 
**user_simple** | [**\Cyclos\Api\Model\UserBaseAdPermissions**](UserBaseAdPermissions.md) |  | [optional] 
**user_webshop** | [**\Cyclos\Api\Model\UserBaseAdPermissions**](UserBaseAdPermissions.md) |  | [optional] 
**interests** | **bool** | Are ad interests enabled? Only returned if there is an authenticated user. | [optional] 
**questions** | **bool** | Are questions enabled? Only returned if there is an authenticated user. | [optional] 
**search** | **bool** | Use &#x60;userSimple.view&#x60; or &#x60;userWebshop.view&#x60; instead   Can search for simple and webshop advertisements? | [optional] 
**own_advertisements** | **bool** | Use &#x60;mySimple.enable&#x60; instead   Can own simple advertisements? Only returned if there is an authenticated user. | [optional] 
**manage_own_advertisements** | **bool** | Use &#x60;mySimple.manage&#x60; instead   Can manage own simple advertisements? Only returned if there is an authenticated user. | [optional] 
**purchase** | **bool** | Use &#x60;userWebshop.purchase&#x60; instead   Can buy webwop ads? Only returned if there is an authenticated user. | [optional] 
**view_advertisements** | **bool** | Use &#x60;userSimple.view&#x60; instead   Can view simple advertisements? Only returned if there is an authenticated user. | [optional] 
**view_webshop** | **bool** | Use &#x60;userWebshop.view&#x60; instead   Can view webshop advertisements? Only returned if there is an authenticated user. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

