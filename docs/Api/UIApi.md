# Cyclos\Api\UIApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataForUi**](UIApi.md#dataforui) | **GET** /ui/data-for-ui | Returns useful data required to properly display a user interface

# **dataForUi**
> \Cyclos\Api\Model\DataForUi dataForUi($fields, $kind, $cyclos_version, $header_if, $footer_if, $theme_if, $theme_by_components, $device_id, $pin_id)

Returns useful data required to properly display a user interface

The returned data contains settings and also content like header, footer and theme.

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

$apiInstance = new Cyclos\Api\Functions\UIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$kind = new \Cyclos\Api\Model\UiKind(); // \Cyclos\Api\Model\UiKind | Specifies the kind of user interface to get data for. If null then no data related to the UI will be returned.
$cyclos_version = "cyclos_version_example"; // string | The last known Cyclos version. Sometimes, data to be cached depends on the version of the Cyclos application, and this helps controlling such cases
$header_if = "header_if_example"; // string | Controls the header cache. If is a boolean value (`true` or `false`) will forcibly return or skip the content. Otherwise, it should be a string in the form `id|version`. In this case, the content will be returned only when changed. When blank will always return it.
$footer_if = "footer_if_example"; // string | Controls the footer cache. If is a boolean value (`true` or `false`) will forcibly return or skip the content. Otherwise, it should be a string in the form `id|version`. In this case, the content will be returned only when changed. When blank will always return it.
$theme_if = "theme_if_example"; // string | Controls the theme cache. If is a boolean value (`true` or `false`) will forcibly return or skip the content. Otherwise, it should be a string in the form `id|version`. In this case, the content will be returned only when changed. When blank will always return it.
$theme_by_components = true; // bool | Flag used to indicate how the theme must be returned (if returned): true means the theme components (base / advanced definitions and custom style) will be filled. Otherwise the final CSS (i. e the theme content). Only valid if the kind of the user interface is NOT `mobile`. For that kind the theme es always returned by its components.
$device_id = "device_id_example"; // string | Trusted device identification. If given and the device is active then a pending device confirmation will be created that will be validated after the user logs-in. If the validation passes then no confirmation password will be used only for that session.
$pin_id = "pin_id_example"; // string | Device PIN identification. If given then the information about whether it is active or not will be given in the returned `dataForLogin`.

try {
    $result = $apiInstance->dataForUi($fields, $kind, $cyclos_version, $header_if, $footer_if, $theme_if, $theme_by_components, $device_id, $pin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UIApi->dataForUi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **kind** | [**\Cyclos\Api\Model\UiKind**](../Model/.md)| Specifies the kind of user interface to get data for. If null then no data related to the UI will be returned. | [optional]
 **cyclos_version** | **string**| The last known Cyclos version. Sometimes, data to be cached depends on the version of the Cyclos application, and this helps controlling such cases | [optional]
 **header_if** | **string**| Controls the header cache. If is a boolean value (&#x60;true&#x60; or &#x60;false&#x60;) will forcibly return or skip the content. Otherwise, it should be a string in the form &#x60;id|version&#x60;. In this case, the content will be returned only when changed. When blank will always return it. | [optional]
 **footer_if** | **string**| Controls the footer cache. If is a boolean value (&#x60;true&#x60; or &#x60;false&#x60;) will forcibly return or skip the content. Otherwise, it should be a string in the form &#x60;id|version&#x60;. In this case, the content will be returned only when changed. When blank will always return it. | [optional]
 **theme_if** | **string**| Controls the theme cache. If is a boolean value (&#x60;true&#x60; or &#x60;false&#x60;) will forcibly return or skip the content. Otherwise, it should be a string in the form &#x60;id|version&#x60;. In this case, the content will be returned only when changed. When blank will always return it. | [optional]
 **theme_by_components** | **bool**| Flag used to indicate how the theme must be returned (if returned): true means the theme components (base / advanced definitions and custom style) will be filled. Otherwise the final CSS (i. e the theme content). Only valid if the kind of the user interface is NOT &#x60;mobile&#x60;. For that kind the theme es always returned by its components. | [optional]
 **device_id** | **string**| Trusted device identification. If given and the device is active then a pending device confirmation will be created that will be validated after the user logs-in. If the validation passes then no confirmation password will be used only for that session. | [optional]
 **pin_id** | **string**| Device PIN identification. If given then the information about whether it is active or not will be given in the returned &#x60;dataForLogin&#x60;. | [optional]

### Return type

[**\Cyclos\Api\Model\DataForUi**](../Model/DataForUi.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

