# DataForMobileUser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_complete_results** | **int** | Number of search results for user autocomplete component | [optional] 
**hide_users_search_menu** | **bool** | Indicates if the user search menu should be hidden. | [optional] 
**auth** | [**\Cyclos\Api\Model\Auth**](Auth.md) |  | [optional] 
**name_of_user** | **string** | The name of the current user (if any) | [optional] 
**mobile_help** | [****](.md) | The help content for mobile mode | [optional] 
**pos_help** | [****](.md) | The help content for mobile mode | [optional] 
**pages** | [**\Cyclos\Api\Model\MobilePage[]**](MobilePage.md) | The visible mobile pages | [optional] 
**operations** | [**\Cyclos\Api\Model\Operation[]**](Operation.md) | The custom operations the user can run | [optional] 
**can_receive_from_nfc_tag** | **bool** | Indicates whether there is at least one NFC tag the user can use to receive payments | [optional] 
**can_activate_as_trusted_device** | **bool** | Indicates whether there is an allowed medium to activate the device as trusted | [optional] 
**personalize_other_users** | **bool** | Indicates if the current user can personalize NFC tags for other users (as member) | [optional] 
**mobile_camera_on_payment** | **bool** | Indicates whether the scan QR code option should be displayed for payments | [optional] 
**principals_allowing_qr_code** | [**\Cyclos\Api\Model\Principal[]**](Principal.md) | Indicates the possible principals which are allowed to be used in QR code generation | [optional] 
**scan_qr** | **bool** | Indicates whether the scan QR code option (global) should be displayed by checking if the user can approve a ticket, or has a QR/Barcode for make payments, or has an easy invoice channel enabled | [optional] 
**enable_bluetooth_printer** | **bool** | Whether the bluetooth printer is enabled or not | [optional] 
**shopping_cart_web_shop_count** | **int** | The total number of webshop ads present in the shopping cart | [optional] 
**notifications_status** | [****](.md) | Status of user notifications, like new received or unread notifications | [optional] 
**allowed_operations** | [**\Cyclos\Api\Model\MobileOperationEnum[]**](MobileOperationEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

