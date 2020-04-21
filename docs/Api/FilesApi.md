# Cyclos\Api\FilesApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRawFile**](FilesApi.md#deleterawfile) | **DELETE** /files/{id} | Removes a file by id
[**getRawFileContent**](FilesApi.md#getrawfilecontent) | **GET** /files/{id}/content | Returns the content of a raw file (temp or custom field value)
[**listTempFiles**](FilesApi.md#listtempfiles) | **GET** /files/temp | Lists temporary files related to the currently authenticated user or guest
[**uploadTempFile**](FilesApi.md#uploadtempfile) | **POST** /files/temp | Adds a new temporary file for the currently authenticated user or guest.
[**viewRawFile**](FilesApi.md#viewrawfile) | **GET** /files/{id} | Returns a file details by id

# **deleteRawFile**
> deleteRawFile($id)

Removes a file by id

Removes the file with id

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

$apiInstance = new Cyclos\Api\Functions\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification

try {
    $apiInstance->deleteRawFile($id);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteRawFile: ', $e->getMessage(), PHP_EOL;
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

# **getRawFileContent**
> string getRawFileContent($id)

Returns the content of a raw file (temp or custom field value)

Returns the content of either a temporary or a custom field value file

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

$apiInstance = new Cyclos\Api\Functions\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The file identifier

try {
    $result = $apiInstance->getRawFileContent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getRawFileContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The file identifier |

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTempFiles**
> \Cyclos\Api\Model\StoredFile[] listTempFiles($fields, $guest_key, $custom_field, $custom_field_kind)

Lists temporary files related to the currently authenticated user or guest

Returns all uploaded temporary files by the current user, or guest key. If the current request is as guest and no guest key is given, the IP  address is used to match files. Using a key is recommended, because clients that move between WiFi and mobile connection or if the client is in a network with multiple outbound IP addresses, files won't be correctly matched without a key.

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

$apiInstance = new Cyclos\Api\Functions\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$guest_key = "guest_key_example"; // string | This parameter is only taken into account if the current request is running as guest. It is the key passed by the client when uploading files. If no key is given, files are matched by remote address.
$custom_field = "custom_field_example"; // string | If the temp file will be used as the value of a custom field of type file then the corresponding custom field must be given (id or internal name). Otherwise this paremeter will be ignored.
$custom_field_kind = new \Cyclos\Api\Model\CustomFieldKind(); // \Cyclos\Api\Model\CustomFieldKind | If a custom field is given then its kind must be given too to allow find it.

try {
    $result = $apiInstance->listTempFiles($fields, $guest_key, $custom_field, $custom_field_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listTempFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **guest_key** | **string**| This parameter is only taken into account if the current request is running as guest. It is the key passed by the client when uploading files. If no key is given, files are matched by remote address. | [optional]
 **custom_field** | **string**| If the temp file will be used as the value of a custom field of type file then the corresponding custom field must be given (id or internal name). Otherwise this paremeter will be ignored. | [optional]
 **custom_field_kind** | [**\Cyclos\Api\Model\CustomFieldKind**](../Model/.md)| If a custom field is given then its kind must be given too to allow find it. | [optional]

### Return type

[**\Cyclos\Api\Model\StoredFile[]**](../Model/StoredFile.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadTempFile**
> string uploadTempFile($file, $name, $guest_key, $custom_field, $custom_field_kind)

Adds a new temporary file for the currently authenticated user or guest.

Uploads a new temporary file. The returned id can later be used as value of a custom field of type file.

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

$apiInstance = new Cyclos\Api\Functions\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "file_example"; // string | 
$name = "name_example"; // string | The name for the new file. If not informed will fall back to the original file name in the form data
$guest_key = "guest_key_example"; // string | This parameter is only taken into account if the current request is running as guest. It should be a reasonably unique key (for example, an UUID, device identifier or a reasonably large random string) which uniquely identifies the uploaded file as belonging to this \"session\". If no key is given, files uploaded as guest are matched by IP address. Using a key is recommended, because clients that move between WiFi and mobile connection or if the client is in a network with multiple outbound IP addresses, files won't be correctly matched without a key.
$custom_field = "custom_field_example"; // string | If the temp file will be used as the value of a custom field of type file then the corresponding custom field must be given (id or internal name). Otherwise this paremeter will be ignored.
$custom_field_kind = new \Cyclos\Api\Model\CustomFieldKind(); // \Cyclos\Api\Model\CustomFieldKind | If a custom field is given then its kind must be given too to allow find it.

try {
    $result = $apiInstance->uploadTempFile($file, $name, $guest_key, $custom_field, $custom_field_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->uploadTempFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  | [optional]
 **name** | **string**| The name for the new file. If not informed will fall back to the original file name in the form data | [optional]
 **guest_key** | **string**| This parameter is only taken into account if the current request is running as guest. It should be a reasonably unique key (for example, an UUID, device identifier or a reasonably large random string) which uniquely identifies the uploaded file as belonging to this \&quot;session\&quot;. If no key is given, files uploaded as guest are matched by IP address. Using a key is recommended, because clients that move between WiFi and mobile connection or if the client is in a network with multiple outbound IP addresses, files won&#x27;t be correctly matched without a key. | [optional]
 **custom_field** | **string**| If the temp file will be used as the value of a custom field of type file then the corresponding custom field must be given (id or internal name). Otherwise this paremeter will be ignored. | [optional]
 **custom_field_kind** | [**\Cyclos\Api\Model\CustomFieldKind**](../Model/.md)| If a custom field is given then its kind must be given too to allow find it. | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewRawFile**
> \Cyclos\Api\Model\StoredFile viewRawFile($id, $fields)

Returns a file details by id

Returns metadata about a file given its id

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

$apiInstance = new Cyclos\Api\Functions\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->viewRawFile($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->viewRawFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\StoredFile**](../Model/StoredFile.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

