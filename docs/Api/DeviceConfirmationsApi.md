# Cyclos\Api\DeviceConfirmationsApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveDeviceConfirmation**](DeviceConfirmationsApi.md#approvedeviceconfirmation) | **POST** /device-confirmations/{id}/approve | Approves a pending device confirmation.
[**createDeviceConfirmation**](DeviceConfirmationsApi.md#createdeviceconfirmation) | **POST** /device-confirmations | Creates a pending device confirmation for the authenticated user.
[**dataForDeviceConfirmationApproval**](DeviceConfirmationsApi.md#datafordeviceconfirmationapproval) | **GET** /device-confirmations/data-for-approval | Return data for approve / reject device confirmations.
[**deleteDeviceConfirmation**](DeviceConfirmationsApi.md#deletedeviceconfirmation) | **DELETE** /device-confirmations/{id} | Deletes a device confirmation for the authenticated user.
[**getDeviceConfirmationQrCode**](DeviceConfirmationsApi.md#getdeviceconfirmationqrcode) | **GET** /device-confirmations/{id}/qr-code | Returns the QR-code image for the given confirmation only if not already approved / rejected.
[**rejectDeviceConfirmation**](DeviceConfirmationsApi.md#rejectdeviceconfirmation) | **POST** /device-confirmations/{id}/reject | Rejects a pending device confirmation.
[**viewDeviceConfirmation**](DeviceConfirmationsApi.md#viewdeviceconfirmation) | **GET** /device-confirmations/{id} | Shows the details of a device confirmation for the authenticated user.

# **approveDeviceConfirmation**
> approveDeviceConfirmation($body, $id)

Approves a pending device confirmation.

Approves a pending confirmation with a device only if not already approved / rejected. This operation can be executed as guest or as a logged user, if guest, the final user used to approve will be the device owner. For successful approval, the user who creates the confirmation (for a pending operation in other channel) must be the same as the user who owns the device. Moreover, to ensure the user is approving the same operation he previously requested, a HMAC-SHA256 must be calculated for the QR code using a secret key only valid for the device being used to confirm. Finally, when the operation requiring confirmation is executed, Cyclos will recalculate the QR code from the operation actual parameters and it must match the QR of the confirmation.

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

$apiInstance = new Cyclos\Api\Functions\DeviceConfirmationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\DeviceConfirmationActionParams(); // \Cyclos\Api\Model\DeviceConfirmationActionParams | The parameters for approving the confirmation.
$id = "id_example"; // string | The object identification

try {
    $apiInstance->approveDeviceConfirmation($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling DeviceConfirmationsApi->approveDeviceConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\DeviceConfirmationActionParams**](../Model/DeviceConfirmationActionParams.md)| The parameters for approving the confirmation. |
 **id** | **string**| The object identification |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDeviceConfirmation**
> string createDeviceConfirmation($body)

Creates a pending device confirmation for the authenticated user.

Creates a device confirmation for an operation that must be confirmed. The confirmation will have a QR code that can be read (e.g with the Mobile App) to be approved / rejected by the device owner.

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

$apiInstance = new Cyclos\Api\Functions\DeviceConfirmationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\CreateDeviceConfirmation(); // \Cyclos\Api\Model\CreateDeviceConfirmation | The parameters for creating the confirmation.

try {
    $result = $apiInstance->createDeviceConfirmation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceConfirmationsApi->createDeviceConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\CreateDeviceConfirmation**](../Model/CreateDeviceConfirmation.md)| The parameters for creating the confirmation. |

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataForDeviceConfirmationApproval**
> \Cyclos\Api\Model\DataForDeviceConfirmationApproval dataForDeviceConfirmationApproval()

Return data for approve / reject device confirmations.

Can be invoked by guests to know if authentication is required for approve / reject pending device confirmations.

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

$apiInstance = new Cyclos\Api\Functions\DeviceConfirmationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dataForDeviceConfirmationApproval();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceConfirmationsApi->dataForDeviceConfirmationApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cyclos\Api\Model\DataForDeviceConfirmationApproval**](../Model/DataForDeviceConfirmationApproval.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeviceConfirmation**
> deleteDeviceConfirmation($id)

Deletes a device confirmation for the authenticated user.

Deletes a device confirmation for the authenticated user.

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

$apiInstance = new Cyclos\Api\Functions\DeviceConfirmationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification

try {
    $apiInstance->deleteDeviceConfirmation($id);
} catch (Exception $e) {
    echo 'Exception when calling DeviceConfirmationsApi->deleteDeviceConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceConfirmationQrCode**
> string getDeviceConfirmationQrCode($id, $size)

Returns the QR-code image for the given confirmation only if not already approved / rejected.

Returns the QR-code image for the given confirmation only if not already approved / rejected. The QR content is a URL of the form: cyclos://confirmation?id=confirmation_id&description=i18n_confirmation_type&fields=Label1:Value1|Label2:Value2... This request will return the image contents as expected but our api documentation page  (or any other usage of an &lt;img&gt; tag), created using swagger-ui, generates a second request to include the  image in the page. This new (GET) request won't send the authentication parameters and as this path requires  authentication the image will be shown as broken. Optionally, to solve the problem described above and to allow authenticate the user when using sessions, a `sessionToken` or `accessClientToken`  query parameter could be specified.

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

$apiInstance = new Cyclos\Api\Functions\DeviceConfirmationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$size = new \Cyclos\Api\Model\ImageSizeEnum(); // \Cyclos\Api\Model\ImageSizeEnum | 

try {
    $result = $apiInstance->getDeviceConfirmationQrCode($id, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceConfirmationsApi->getDeviceConfirmationQrCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **size** | [**\Cyclos\Api\Model\ImageSizeEnum**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/png, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rejectDeviceConfirmation**
> rejectDeviceConfirmation($body, $id)

Rejects a pending device confirmation.

Rejects a confirmation with a device only if not already approved / rejected. This operation can be executed as guest or as a logged user, if guest, the final user used to reject will be the device owner. For successful rejection, the user who creates the confirmation (for a pending operation in other channel) must be the same as the user who owns the device. Moreover, to ensure the user is rejecting the same operation he previously requested, a HMAC-SHA256 must be calculated for the QR code using a secret key only valid for the device being used to reject.

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

$apiInstance = new Cyclos\Api\Functions\DeviceConfirmationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cyclos\Api\Model\DeviceConfirmationActionParams(); // \Cyclos\Api\Model\DeviceConfirmationActionParams | The parameters for approving the confirmation.
$id = "id_example"; // string | The object identification

try {
    $apiInstance->rejectDeviceConfirmation($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling DeviceConfirmationsApi->rejectDeviceConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cyclos\Api\Model\DeviceConfirmationActionParams**](../Model/DeviceConfirmationActionParams.md)| The parameters for approving the confirmation. |
 **id** | **string**| The object identification |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewDeviceConfirmation**
> \Cyclos\Api\Model\DeviceConfirmationView viewDeviceConfirmation($id)

Shows the details of a device confirmation for the authenticated user.

Shows the details of a device confirmation for the authenticated user.

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

$apiInstance = new Cyclos\Api\Functions\DeviceConfirmationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification

try {
    $result = $apiInstance->viewDeviceConfirmation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceConfirmationsApi->viewDeviceConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |

### Return type

[**\Cyclos\Api\Model\DeviceConfirmationView**](../Model/DeviceConfirmationView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

