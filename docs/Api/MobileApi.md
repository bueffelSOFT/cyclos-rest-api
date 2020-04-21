# Cyclos\Api\MobileApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataForMobileGuest**](MobileApi.md#dataformobileguest) | **GET** /mobile/data-for-guest | Returns data the mobile application uses while in guest mode
[**dataForMobileUser**](MobileApi.md#dataformobileuser) | **GET** /mobile/data-for-user | Returns data the mobile application uses in either user or POS mode
[**mobilePageContent**](MobileApi.md#mobilepagecontent) | **GET** /mobile/page/{id} | Returns the content of a mobile page

# **dataForMobileGuest**
> \Cyclos\Api\Model\DataForMobileGuest dataForMobileGuest($fields, $cyclos_version, $header_if, $footer_if, $theme_if, $translations_if, $device_id, $pin_id)

Returns data the mobile application uses while in guest mode

The data returned can be controlled with a cache key. Each data type has a parameter, such as `headerIf`, which returns the data only if it has changed since the last request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\MobileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$cyclos_version = "cyclos_version_example"; // string | The last known Cyclos version. Sometimes, data to be cached depends on the version of the Cyclos application, and this helps controlling such cases
$header_if = "header_if_example"; // string | Controls the header cache. If is a boolean value (`true` or `false`) will forcibly return or skip the content. Otherwise, it should be a string in the form `id|version`. In this case, the content will be returned only when changed. When blank will always return it.
$footer_if = "footer_if_example"; // string | Controls the footer cache. If is a boolean value (`true` or `false`) will forcibly return or skip the content. Otherwise, it should be a string in the form `id|version`. In this case, the content will be returned only when changed. When blank will always return it.
$theme_if = "theme_if_example"; // string | Controls the theme cache. If is a boolean value (`true` or `false`) will forcibly return or skip the content. Otherwise, it should be a string in the form `id|version`. In this case, the content will be returned only when changed. When blank will always return it.
$translations_if = "translations_if_example"; // string | Controls the translations cache. If is a boolean value (`true` or `false`) will forcibly return or skip the content. Otherwise, it should be a string in the form `id|version`. In this case, the content will be returned only when changed. When blank will always return it.
$device_id = "device_id_example"; // string | Trusted device identification. If given and the device is active then a pending device confirmation will be created that will be validated  after the user logs-in. If the validation passes then no confirmation password will be used only for that session.
$pin_id = "pin_id_example"; // string | Device PIN identification. If given then the information about whether it is active or not will be given in the returned `dataForLogin`.

try {
    $result = $apiInstance->dataForMobileGuest($fields, $cyclos_version, $header_if, $footer_if, $theme_if, $translations_if, $device_id, $pin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileApi->dataForMobileGuest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **cyclos_version** | **string**| The last known Cyclos version. Sometimes, data to be cached depends on the version of the Cyclos application, and this helps controlling such cases | [optional]
 **header_if** | **string**| Controls the header cache. If is a boolean value (&#x60;true&#x60; or &#x60;false&#x60;) will forcibly return or skip the content. Otherwise, it should be a string in the form &#x60;id|version&#x60;. In this case, the content will be returned only when changed. When blank will always return it. | [optional]
 **footer_if** | **string**| Controls the footer cache. If is a boolean value (&#x60;true&#x60; or &#x60;false&#x60;) will forcibly return or skip the content. Otherwise, it should be a string in the form &#x60;id|version&#x60;. In this case, the content will be returned only when changed. When blank will always return it. | [optional]
 **theme_if** | **string**| Controls the theme cache. If is a boolean value (&#x60;true&#x60; or &#x60;false&#x60;) will forcibly return or skip the content. Otherwise, it should be a string in the form &#x60;id|version&#x60;. In this case, the content will be returned only when changed. When blank will always return it. | [optional]
 **translations_if** | **string**| Controls the translations cache. If is a boolean value (&#x60;true&#x60; or &#x60;false&#x60;) will forcibly return or skip the content. Otherwise, it should be a string in the form &#x60;id|version&#x60;. In this case, the content will be returned only when changed. When blank will always return it. | [optional]
 **device_id** | **string**| Trusted device identification. If given and the device is active then a pending device confirmation will be created that will be validated  after the user logs-in. If the validation passes then no confirmation password will be used only for that session. | [optional]
 **pin_id** | **string**| Device PIN identification. If given then the information about whether it is active or not will be given in the returned &#x60;dataForLogin&#x60;. | [optional]

### Return type

[**\Cyclos\Api\Model\DataForMobileGuest**](../Model/DataForMobileGuest.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataForMobileUser**
> \Cyclos\Api\Model\DataForMobileUser dataForMobileUser($fields, $cyclos_version, $theme_if, $translations_if, $mobile_help_if, $pos_help_if)

Returns data the mobile application uses in either user or POS mode

The data returned can be controlled with a cache key. Each data type has a parameter, such as `helpIf`, which returns the data only if it has changed since the last request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\MobileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$cyclos_version = "cyclos_version_example"; // string | The last known Cyclos version. Sometimes, data to be cached depends on the version of the Cyclos application, and this helps controlling such cases
$theme_if = "theme_if_example"; // string | Controls the theme cache. If is a boolean value (`true` or `false`) will forcibly return or skip the content. Otherwise, it should be a string in the form `id|version`. In this case, the content will be returned only when changed. When blank will always return it.
$translations_if = "translations_if_example"; // string | Controls the translations cache. If is a boolean value (`true` or `false`) will forcibly return or skip the content. Otherwise, it should be a string in the form `id|version`. In this case, the content will be returned only when changed. When blank will always return it.
$mobile_help_if = "mobile_help_if_example"; // string | Controls the mobile help cache. If is a boolean value (`true` or `false`) will forcibly return or skip the content. Otherwise, it should be a string in the form `id|version`. In this case, the content will be returned only when changed. When blank will always return it. Only taken into account when not accessing as access client (not in POS mode).
$pos_help_if = "pos_help_if_example"; // string | Controls the POS help cache. If is a boolean value (`true` or `false`) will forcibly return or skip the content. Otherwise, it should be a string in the form `id|version`. In this case, the content will be returned only when changed. When blank will always return it. Only taken into account when accessing as access client (POS mode).

try {
    $result = $apiInstance->dataForMobileUser($fields, $cyclos_version, $theme_if, $translations_if, $mobile_help_if, $pos_help_if);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileApi->dataForMobileUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **cyclos_version** | **string**| The last known Cyclos version. Sometimes, data to be cached depends on the version of the Cyclos application, and this helps controlling such cases | [optional]
 **theme_if** | **string**| Controls the theme cache. If is a boolean value (&#x60;true&#x60; or &#x60;false&#x60;) will forcibly return or skip the content. Otherwise, it should be a string in the form &#x60;id|version&#x60;. In this case, the content will be returned only when changed. When blank will always return it. | [optional]
 **translations_if** | **string**| Controls the translations cache. If is a boolean value (&#x60;true&#x60; or &#x60;false&#x60;) will forcibly return or skip the content. Otherwise, it should be a string in the form &#x60;id|version&#x60;. In this case, the content will be returned only when changed. When blank will always return it. | [optional]
 **mobile_help_if** | **string**| Controls the mobile help cache. If is a boolean value (&#x60;true&#x60; or &#x60;false&#x60;) will forcibly return or skip the content. Otherwise, it should be a string in the form &#x60;id|version&#x60;. In this case, the content will be returned only when changed. When blank will always return it. Only taken into account when not accessing as access client (not in POS mode). | [optional]
 **pos_help_if** | **string**| Controls the POS help cache. If is a boolean value (&#x60;true&#x60; or &#x60;false&#x60;) will forcibly return or skip the content. Otherwise, it should be a string in the form &#x60;id|version&#x60;. In this case, the content will be returned only when changed. When blank will always return it. Only taken into account when accessing as access client (POS mode). | [optional]

### Return type

[**\Cyclos\Api\Model\DataForMobileUser**](../Model/DataForMobileUser.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mobilePageContent**
> string mobilePageContent($id)

Returns the content of a mobile page

Returns the content of a mobile page, either by id or internal name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: accessClient
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Access-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Client-Token', 'Bearer');// Configure HTTP basic authorization: basic
$config = Cyclos\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: session
$config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKey('Session-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cyclos\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Session-Token', 'Bearer');

$apiInstance = new Cyclos\Api\Functions\MobileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The mobile page id

try {
    $result = $apiInstance->mobilePageContent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileApi->mobilePageContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The mobile page id |

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/html, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

