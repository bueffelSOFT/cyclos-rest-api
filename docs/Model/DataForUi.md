# DataForUi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cyclos_version** | **string** | The version of the Cyclos server. It will of the form x.y[.z] | [optional] 
**current_client_time** | [**\DateTime**](\DateTime.md) | The current time in the the user&#x27;s time zone. | [optional] 
**auth** | [**AllOfDataForUiAuth**](AllOfDataForUiAuth.md) | The logged user authentication. Not returned for guests. | [optional] 
**data_for_login** | [**AllOfDataForUiDataForLogin**](AllOfDataForUiDataForLogin.md) | The data used for logging the user in. Not returned for logged users. | [optional] 
**public_registration_groups** | [**\Cyclos\Api\Model\GroupForRegistration[]**](GroupForRegistration.md) | Groups that can be used for a public registration. Not returned for logged users. | [optional] 
**map_data** | [**AllOfDataForUiMapData**](AllOfDataForUiMapData.md) | Configuration data for map usage. Is null when maps are not used. | [optional] 
**decimal_separator** | **string** | The character used to specify the decimal point | [optional] 
**grouping_separator** | **string** | The character used to separate thousands. | [optional] 
**date_format** | **string** | The pattern string used to format dates. The following are the letters used in each supported pattern: * dd: The day of the month; * MM: The month ranging from 1 to 12; * yyyy: The full year number. | [optional] 
**time_format** | **string** | The pattern string used to format time. The following are the letters used in each supported pattern: * hh: The hour of the morning or afternoon (12-hour clock); * HH: The hour of the day (24-hour clock); * mm: The minute within the hour; * a: Marker to idicate whether the hour (hh) is before or after noon. | [optional] 
**time_zone_id** | **string** | The time zone ID set in the configuration (e.g &#x60;Europe/Amsterdam&#x60;) | [optional] 
**distance_unit** | [**\Cyclos\Api\Model\DistanceUnitEnum**](DistanceUnitEnum.md) |  | [optional] 
**root_url** | **string** | The main URL set in the configuration | [optional] 
**country** | **string** | The ISO 3166-1 alpha-2 country code, as set in the configuration | [optional] 
**max_image_width** | **int** | Maximum width (in pixels) for uploaded images | [optional] 
**max_image_height** | **int** | Maximum height (in pixels) for uploaded images | [optional] 
**max_upload_size** | **int** | Maximum size (in bytes) for uploaded files | [optional] 
**jpeg_quality** | **int** | Quality for JPEG image types (higher means better quality) | [optional] 
**language** | [**AllOfDataForUiLanguage**](AllOfDataForUiLanguage.md) | The language set in the configuration | [optional] 
**allowed_locales** | [**\Cyclos\Api\Model\UserLocale[]**](UserLocale.md) | The locales the user can select, for example to change the language. | [optional] 
**resource_cache_key** | **string** | A new key is generated after each server restart | [optional] 
**apple_store_url** | **string** | The mobile app url in the Apple store. | [optional] 
**play_store_url** | **string** | The mobile app url in the Play store. | [optional] 
**theme** | [**AllOfDataForUiTheme**](AllOfDataForUiTheme.md) | The theme content (i.e the CSS or its components according). Only returned when changed or if the corresponding &#x60;themeIf&#x60; parameter was not specified. The returned theme will be the following according to the UI kind:  - &#x60;main&#x60;: If there is a logged user then the theme for   users associated to the configuration. Otherwise the theme for guests;  - &#x60;mobile&#x60;: only returned for guest; - &#x60;pay&#x60;: The theme defined for the ticket / easy   invoice confirmation application interface (it&#x27;s the same for logged   users and guests). | [optional] 
**header** | [**AllOfDataForUiHeader**](AllOfDataForUiHeader.md) | The header content. Only returned when changed or if the corresponding &#x60;headerIf&#x60; parameter was not specified. For all cases the content returned will be the same for logged users an for guests.  The returned header will be the following according to the UI kind:  - &#x60;main&#x60;: The header configured for the main web interface; - &#x60;mobile&#x60;: The header configured for the mobile application. Only returned for guests; - &#x60;pay&#x60;: The header defined for the ticket / easy invoice confirmation interface. | [optional] 
**footer** | [**AllOfDataForUiFooter**](AllOfDataForUiFooter.md) | The footer content. Only returned when changed or if the corresponding &#x60;footerIf&#x60; parameter was not specified. For all cases the content returned will be the same for logged users an for guests.  The returned footer will be the following according to the UI kind:  - &#x60;main&#x60;: The footer configured for the main web interface; - &#x60;mobile&#x60;: The footer configured for the mobile application. Only returned for guests; - &#x60;pay&#x60;: The footer defined for the ticket / easy invoice confirmation interface. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

