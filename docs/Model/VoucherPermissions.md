# VoucherPermissions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**configuration** | [**\Cyclos\Api\Model\VoucherConfiguration**](VoucherConfiguration.md) |  | [optional] 
**buy** | **bool** | Whether the logged user can buy vouchers of types belonging to this configuration | [optional] 
**redeem** | **bool** | Whether the logged user can redeem vouchers of types belonging to this configuration | [optional] 
**cancel** | **bool** | Whether the logged user can cancel vouchers of types belonging to this configuration. Only if the authenticated user is an admin. Otherwise &#x60;false&#x60;. | [optional] 
**change_expiration_date** | **bool** | Whether the logged user can change the expiration date of vouchers of types belonging to this configuration. Only if the authenticated user is an admin. Otherwise &#x60;false&#x60;. | [optional] 
**refund** | **bool** | Whether the logged user can refund vouchers of types belonging to this configuration. | [optional] 
**generate** | **bool** | Whether the logged user can generate vouchers of types belonging to this configuration. Only if the authenticated user is an admin. Otherwise &#x60;false&#x60;. | [optional] 
**view** | **bool** | Whether the logged user can view vouchers of types belonging to this configuration. Only if the authenticated user is an admin. Otherwise &#x60;false&#x60;. | [optional] 
**view_bought** | **bool** | Whether the logged user can view vouchers bought of types belonging to this configuration. Only if the authenticated user is a member or broker. Otherwise &#x60;false&#x60;. | [optional] 
**view_redeemed** | **bool** | Whether the logged user can view vouchers redeemed of types belonging to this configuration. Only if the authenticated user is a member or broker. Otherwise &#x60;false&#x60;. | [optional] 
**enabled** | **bool** | Whether the logged user has enabled the types belonging to this configuration. Only if the authenticated user is a member. Otherwise &#x60;false&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

