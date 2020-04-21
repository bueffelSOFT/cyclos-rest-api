# MobileBaseData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cyclos_version** | **string** | The version of the Cyclos server | [optional] 
**current_client_time** | [**\DateTime**](\DateTime.md) | The current client time according to the server | [optional] 
**locale** | **string** | The current locale | [optional] 
**allowed_locales** | [**\Cyclos\Api\Model\UserLocale[]**](UserLocale.md) | The locales the user can select for example to change the language. | [optional] 
**root_url** | **string** | The main URL set in the configuration | [optional] 
**theme** | [**AllOfMobileBaseDataTheme**](AllOfMobileBaseDataTheme.md) | The mobile theme. Only returned when changed. | [optional] 
**translations** | [**AllOfMobileBaseDataTranslations**](AllOfMobileBaseDataTranslations.md) | The mobile translations. Only returned when changed. | [optional] 
**max_image_width** | **int** | Maximum width (in pixels) for uploaded images | [optional] 
**max_image_height** | **int** | Maximum height (in pixels) for uploaded images | [optional] 
**max_upload_size** | **int** | Maximum size (in bytes) for uploaded files | [optional] 
**jpeg_quality** | **int** | Quality for JPEG image types (higher means better quality) | [optional] 
**map_browser_api_key** | **string** | The Google Maps browser API key | [optional] 
**number_format** | [**\Cyclos\Api\Model\NumberFormatEnum**](NumberFormatEnum.md) |  | [optional] 
**date_format** | [**\Cyclos\Api\Model\DateFormatEnum**](DateFormatEnum.md) |  | [optional] 
**time_format** | [**\Cyclos\Api\Model\TimeFormatEnum**](TimeFormatEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

