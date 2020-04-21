# Cyclos\Api\ImagesApi

All URIs are relative to *http://kb1.cyclos-dev.info/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteImage**](ImagesApi.md#deleteimage) | **DELETE** /images/{idOrKey} | Removes an image by id or key
[**getAdImagesListData**](ImagesApi.md#getadimageslistdata) | **GET** /marketplace/{ad}/images/list-data | Returns the images of an advertisement, plus additional permissions and data.
[**getImageContent**](ImagesApi.md#getimagecontent) | **GET** /images/content/{idOrKey} | Returns an image content by id or key
[**getImageContentById**](ImagesApi.md#getimagecontentbyid) | **GET** /images/{id}/content | Returns an image content by id
[**getImageContentDeprecated**](ImagesApi.md#getimagecontentdeprecated) | **GET** /images/{kind}/{file} | Returns an image content
[**getUserImagesListData**](ImagesApi.md#getuserimageslistdata) | **GET** /{user}/images/list-data | Returns either &#x60;profile&#x60; or &#x60;custom&#x60; images for a given user, plus additional permissions and data
[**listAdImages**](ImagesApi.md#listadimages) | **GET** /marketplace/{ad}/images | Lists the images of an advertisement
[**listTempImages**](ImagesApi.md#listtempimages) | **GET** /images/temp | Lists temporary images related to the currently authenticated user or guest
[**listUserImages**](ImagesApi.md#listuserimages) | **GET** /{user}/images | Lists either &#x60;profile&#x60; or &#x60;custom&#x60; images for a given user.
[**reorderAdImages**](ImagesApi.md#reorderadimages) | **PUT** /marketplace/{ad}/images/order | Changes the order of the images of an advertisement.
[**reorderProfileImages**](ImagesApi.md#reorderprofileimages) | **PUT** /{user}/images/order | Changes the order of a user&#x27;s profile images
[**uploadAdImage**](ImagesApi.md#uploadadimage) | **POST** /marketplace/{ad}/images | Adds a new image for the given advertisement.
[**uploadContactInfoImage**](ImagesApi.md#uploadcontactinfoimage) | **POST** /contact-infos/{id}/image | Uploads a new image for the given additional contact information.
[**uploadContactInfoImageDeprecated**](ImagesApi.md#uploadcontactinfoimagedeprecated) | **POST** /contactInfos/{id}/image | This operation is deprecated, use &#x60;POST /contact-infos/{id}/image&#x60; instead.
[**uploadTempImage**](ImagesApi.md#uploadtempimage) | **POST** /images/temp | Adds a new temporary image for the currently authenticated user or guest.
[**uploadUserImage**](ImagesApi.md#uploaduserimage) | **POST** /{user}/images | Adds a new image for the given user. The image kind is either  &#x60;profile&#x60; or &#x60;custom&#x60;.
[**viewImage**](ImagesApi.md#viewimage) | **GET** /images/{idOrKey} | Returns an image details by id or key

# **deleteImage**
> deleteImage($id_or_key)

Removes an image by id or key

Removes the image with the given internal id or key. Any image kind can be removed using this operation, but the authenticated user needs the appropriate permission to do so.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_or_key = "id_or_key_example"; // string | The image id or file name

try {
    $apiInstance->deleteImage($id_or_key);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_or_key** | **string**| The image id or file name |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdImagesListData**
> \Cyclos\Api\Model\ImagesListData getAdImagesListData($ad, $fields)

Returns the images of an advertisement, plus additional permissions and data.

Returns the images of an advertisement. Additional data, such as the maximum images and whether the images can be managed by the authenticated user are also returned.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad = "ad_example"; // string | Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form `productNumber@user`, with the user identifier as well.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->getAdImagesListData($ad, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getAdImagesListData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad** | **string**| Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form &#x60;productNumber@user&#x60;, with the user identifier as well. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\ImagesListData**](../Model/ImagesListData.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImageContent**
> string getImageContent($id_or_key, $width, $height)

Returns an image content by id or key

Returns the content of an image, given the image identifier or key. When neither `width` nor `height` are specified, returns the original content. The original ratio is always maintained. When only of one of the dimensions is specified, it is used as maximum, and the other is calculated. When both are informed, the maximum size with the original ratio that fits both dimensions is used.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_or_key = "id_or_key_example"; // string | The image id or file name
$width = 56; // int | The requested image width
$height = 56; // int | The requested file height

try {
    $result = $apiInstance->getImageContent($id_or_key, $width, $height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getImageContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_or_key** | **string**| The image id or file name |
 **width** | **int**| The requested image width | [optional]
 **height** | **int**| The requested file height | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/_*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImageContentById**
> string getImageContentById($id, $width, $height)

Returns an image content by id

Use `GET /images/{idOrKey}/content` instead. Generally clients should use the `Image.url` property, which is always correct.   Returns the content of an image, given the image id. When neither `width` nor `height` are specified, returns the original content. The original ratio is always maintained. When only of one of the dimensions is specified, it is used as maximum, and the other is calculated. When both are informed, the maximum size with the original ratio that fits both dimensions is used.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$width = 56; // int | The requested image width
$height = 56; // int | The requested file height

try {
    $result = $apiInstance->getImageContentById($id, $width, $height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getImageContentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **width** | **int**| The requested image width | [optional]
 **height** | **int**| The requested file height | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/_*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImageContentDeprecated**
> string getImageContentDeprecated($kind, $file, $width, $height)

Returns an image content

Use `GET /images/{idOrKey}/content` instead. Generally clients should use the `Image.url` property, which is always correct.   Returns the content of an image, given the image kind and key. When neither `width` nor `height` are specified, returns the original content. The original ratio is always maintained. When only of one of the dimensions is specified, it is used as maximum, and the other is calculated. When both are informed, the maximum size with the original ratio that fits both dimensions is used.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kind = new \Cyclos\Api\Model\ImageKind(); // \Cyclos\Api\Model\ImageKind | 
$file = "file_example"; // string | The file name. This is not the original uploaded file name, but a generated one.
$width = 56; // int | The requested image width
$height = 56; // int | The requested file height

try {
    $result = $apiInstance->getImageContentDeprecated($kind, $file, $width, $height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getImageContentDeprecated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kind** | [**\Cyclos\Api\Model\ImageKind**](../Model/.md)|  |
 **file** | **string**| The file name. This is not the original uploaded file name, but a generated one. |
 **width** | **int**| The requested image width | [optional]
 **height** | **int**| The requested file height | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/_*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserImagesListData**
> \Cyclos\Api\Model\ImagesListData getUserImagesListData($user, $fields, $kind)

Returns either `profile` or `custom` images for a given user, plus additional permissions and data

Returns either `profile` or `custom` images for the given user. For `profile`, the user must be visible by the authenticated user. For `custom`, the authenticated user must either be the owner or a manager (administrator or broker). Custom images are used in rich text content, not images for custom fields. Additional data, such as the maximum images and whether the images can be managed by the authenticated user are also returned.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$kind = new \Cyclos\Api\Model\UserImageKind(); // \Cyclos\Api\Model\UserImageKind | The kind of images to be returned. The default value is `profile`

try {
    $result = $apiInstance->getUserImagesListData($user, $fields, $kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getUserImagesListData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **kind** | [**\Cyclos\Api\Model\UserImageKind**](../Model/.md)| The kind of images to be returned. The default value is &#x60;profile&#x60; | [optional]

### Return type

[**\Cyclos\Api\Model\ImagesListData**](../Model/ImagesListData.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAdImages**
> \Cyclos\Api\Model\Image[] listAdImages($ad, $fields)

Lists the images of an advertisement

Returns the images of an advertisement.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad = "ad_example"; // string | Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form `productNumber@user`, with the user identifier as well.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->listAdImages($ad, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->listAdImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad** | **string**| Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form &#x60;productNumber@user&#x60;, with the user identifier as well. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\Image[]**](../Model/Image.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTempImages**
> \Cyclos\Api\Model\Image[] listTempImages($fields, $target, $guest_key, $user, $custom_field, $custom_field_kind)

Lists temporary images related to the currently authenticated user or guest

Returns all uploaded temporary images by the current user, or guest key. If the current request is as guest and no guest key is given, the IP address is used to match images. Using a key is recommended, because clients that move between WiFi and mobile connection or if the client is in a network with multiple outbound IP addresses, images won't be correctly matched without a key.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$target = new \Cyclos\Api\Model\TempImageTargetEnum(); // \Cyclos\Api\Model\TempImageTargetEnum | Filter by target usage
$guest_key = "guest_key_example"; // string | This parameter is only taken into account if the current request is running as guest. It is the key passed by the client when uploading images. If no key is given, images are matched by remote address.
$user = "user_example"; // string | If the target is `userProfile` or `advertisement`, must be either the id or an identification method of the target user (or advertisement owner).
$custom_field = "custom_field_example"; // string | If the temp image will be used as the value of a custom field of type image then the corresponding custom field must be given (id or internal name). Otherwise this paremeter will be ignored.
$custom_field_kind = new \Cyclos\Api\Model\CustomFieldKind(); // \Cyclos\Api\Model\CustomFieldKind | If a custom field is given then its kind must be given too to allow find it.

try {
    $result = $apiInstance->listTempImages($fields, $target, $guest_key, $user, $custom_field, $custom_field_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->listTempImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **target** | [**\Cyclos\Api\Model\TempImageTargetEnum**](../Model/.md)| Filter by target usage | [optional]
 **guest_key** | **string**| This parameter is only taken into account if the current request is running as guest. It is the key passed by the client when uploading images. If no key is given, images are matched by remote address. | [optional]
 **user** | **string**| If the target is &#x60;userProfile&#x60; or &#x60;advertisement&#x60;, must be either the id or an identification method of the target user (or advertisement owner). | [optional]
 **custom_field** | **string**| If the temp image will be used as the value of a custom field of type image then the corresponding custom field must be given (id or internal name). Otherwise this paremeter will be ignored. | [optional]
 **custom_field_kind** | [**\Cyclos\Api\Model\CustomFieldKind**](../Model/.md)| If a custom field is given then its kind must be given too to allow find it. | [optional]

### Return type

[**\Cyclos\Api\Model\Image[]**](../Model/Image.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUserImages**
> \Cyclos\Api\Model\Image[] listUserImages($user, $fields, $kind)

Lists either `profile` or `custom` images for a given user.

Returns either `profile` or `custom` images for the given user. For `profile`, the user must be visible by the authenticated user. Custom images are used in rich text content, not images for custom fields. For `custom`, the authenticated user must either be the owner or a manager (administrator or broker).

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.
$kind = new \Cyclos\Api\Model\UserImageKind(); // \Cyclos\Api\Model\UserImageKind | The kind of images to be returned. The default value is `profile`

try {
    $result = $apiInstance->listUserImages($user, $fields, $kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->listUserImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]
 **kind** | [**\Cyclos\Api\Model\UserImageKind**](../Model/.md)| The kind of images to be returned. The default value is &#x60;profile&#x60; | [optional]

### Return type

[**\Cyclos\Api\Model\Image[]**](../Model/Image.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reorderAdImages**
> reorderAdImages($ad, $ids)

Changes the order of the images of an advertisement.

The new order is defined by the list of ids, so that images appear in the same order as the ids.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad = "ad_example"; // string | Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form `productNumber@user`, with the user identifier as well.
$ids = array("ids_example"); // string[] | The array of ids (comma-separated) reflecting the desired order

try {
    $apiInstance->reorderAdImages($ad, $ids);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->reorderAdImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad** | **string**| Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form &#x60;productNumber@user&#x60;, with the user identifier as well. |
 **ids** | [**string[]**](../Model/string.md)| The array of ids (comma-separated) reflecting the desired order |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reorderProfileImages**
> reorderProfileImages($user, $ids)

Changes the order of a user's profile images

The new order is defined by the list of ids, so that images appear in the same order as the ids.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$ids = array("ids_example"); // string[] | The array of ids (comma-separated) reflecting the desired order

try {
    $apiInstance->reorderProfileImages($user, $ids);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->reorderProfileImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **ids** | [**string[]**](../Model/string.md)| The array of ids (comma-separated) reflecting the desired order |

### Return type

void (empty response body)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAdImage**
> string uploadAdImage($ad, $image, $name)

Adds a new image for the given advertisement.

Uploads a new image for the given advertisement.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad = "ad_example"; // string | Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form `productNumber@user`, with the user identifier as well.
$image = "image_example"; // string | 
$name = "name_example"; // string | The name for the new image. If not informed will fall back to the original file name in the form data

try {
    $result = $apiInstance->uploadAdImage($ad, $image, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadAdImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad** | **string**| Can be either the advertisement internal identifier or, in case of webshop advertisements, can be the product number (if the owner is the logged user) or a string in the form &#x60;productNumber@user&#x60;, with the user identifier as well. |
 **image** | **string****string**|  | [optional]
 **name** | **string**| The name for the new image. If not informed will fall back to the original file name in the form data | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadContactInfoImage**
> string uploadContactInfoImage($id, $image, $name)

Uploads a new image for the given additional contact information.

Saves the given image for the additional contact information. If the given additional contact information already has an image, the old one is removed, and the current image is saved in its place.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$image = "image_example"; // string | 
$name = "name_example"; // string | The name for the new image. If not informed will fall back to the original file name in the form data

try {
    $result = $apiInstance->uploadContactInfoImage($id, $image, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadContactInfoImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **image** | **string****string**|  | [optional]
 **name** | **string**| The name for the new image. If not informed will fall back to the original file name in the form data | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadContactInfoImageDeprecated**
> string uploadContactInfoImageDeprecated($id, $image, $name)

This operation is deprecated, use `POST /contact-infos/{id}/image` instead.

Use `POST /contact-infos/{id}/image`   Saves the given image for the additional contact information. If the given additional contact information already has an image, the old one is removed, and the current image is saved in its place.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The object identification
$image = "image_example"; // string | 
$name = "name_example"; // string | The name for the new image. If not informed will fall back to the original file name in the form data

try {
    $result = $apiInstance->uploadContactInfoImageDeprecated($id, $image, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadContactInfoImageDeprecated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The object identification |
 **image** | **string****string**|  | [optional]
 **name** | **string**| The name for the new image. If not informed will fall back to the original file name in the form data | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadTempImage**
> string uploadTempImage($image, $name, $target, $guest_key, $user, $custom_field, $custom_field_kind)

Adds a new temporary image for the currently authenticated user or guest.

Uploads a new temporary image. A temporary image should be given a target, which can be: - `userRegistration`: The image will be used as a profile image for a newly registered user; - `userProfile`: The image will be used as a profile image for an existing user; - `advertisement`: The image will be used for an advertisement of a specific user; - `customValue`: The image will be used for a value of a specific custom field. Temporary images won't be immediately associated to the next registered model, but its `id`, which is returned by this operation, must be explicitly passed in, either as the `images` field (for profile or advertisement images) or in the `customValues` field of the model that has custom values (multiple ids can be passed-in as pipe-separated). Images as guest can only be uploaded if on the destination group products the image profile field is allowed at registrations. Users may upload images if they can register new users or create advertisements.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "image_example"; // string | 
$name = "name_example"; // string | The name for the new image. If not informed will fall back to the original file name in the form data
$target = new \Cyclos\Api\Model\TempImageTargetEnum(); // \Cyclos\Api\Model\TempImageTargetEnum | The target usage for this temporary image
$guest_key = "guest_key_example"; // string | This parameter is only taken into account if the current request is running as guest. It should be a reasonably unique key (for example, an UUID, device identifier or a reasonably large random string) which uniquely identifies the uploaded image as belonging to this \"session\". If no key is given, images uploaded as guest are matched by IP address. Using a key is recommended, because clients that move between WiFi and mobile connection or if the client is in a network with multiple outbound IP addresses, images won't be correctly matched without a key.
$user = "user_example"; // string | If the target is `userProfile` or `advertisement`, must be either the id or an identification method of the target user (or advertisement owner).
$custom_field = "custom_field_example"; // string | If the temp image will be used as the value of a custom field of type image then the corresponding custom field must be given (id or internal name). Otherwise this paremeter will be ignored.
$custom_field_kind = new \Cyclos\Api\Model\CustomFieldKind(); // \Cyclos\Api\Model\CustomFieldKind | If a custom field is given then its kind must be given too to allow find it.

try {
    $result = $apiInstance->uploadTempImage($image, $name, $target, $guest_key, $user, $custom_field, $custom_field_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadTempImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **string****string**|  | [optional]
 **name** | **string**| The name for the new image. If not informed will fall back to the original file name in the form data | [optional]
 **target** | [**\Cyclos\Api\Model\TempImageTargetEnum**](../Model/.md)| The target usage for this temporary image | [optional]
 **guest_key** | **string**| This parameter is only taken into account if the current request is running as guest. It should be a reasonably unique key (for example, an UUID, device identifier or a reasonably large random string) which uniquely identifies the uploaded image as belonging to this \&quot;session\&quot;. If no key is given, images uploaded as guest are matched by IP address. Using a key is recommended, because clients that move between WiFi and mobile connection or if the client is in a network with multiple outbound IP addresses, images won&#x27;t be correctly matched without a key. | [optional]
 **user** | **string**| If the target is &#x60;userProfile&#x60; or &#x60;advertisement&#x60;, must be either the id or an identification method of the target user (or advertisement owner). | [optional]
 **custom_field** | **string**| If the temp image will be used as the value of a custom field of type image then the corresponding custom field must be given (id or internal name). Otherwise this paremeter will be ignored. | [optional]
 **custom_field_kind** | [**\Cyclos\Api\Model\CustomFieldKind**](../Model/.md)| If a custom field is given then its kind must be given too to allow find it. | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadUserImage**
> string uploadUserImage($user, $image, $kind, $name)

Adds a new image for the given user. The image kind is either  `profile` or `custom`.

Uploads a new image, either `profile` (by default) or `custom`, for the given user. Custom images are used in rich text content, not images for custom fields. For uploading images for custom field values, see the documentation for the operation at `POST /images/temp`.

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  `self` for the currently authenticated user.
$image = "image_example"; // string | 
$kind = new \Cyclos\Api\Model\UserImageKind(); // \Cyclos\Api\Model\UserImageKind | The kind of images to be returned. The default value is `profile`
$name = "name_example"; // string | The name for the new image. If not informed will fall back to the original file name in the form data

try {
    $result = $apiInstance->uploadUserImage($user, $image, $kind, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadUserImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix\\   the value with a single quote (like in Excel spreadsheets);  -  &#x60;self&#x60; for the currently authenticated user. |
 **image** | **string****string**|  | [optional]
 **kind** | [**\Cyclos\Api\Model\UserImageKind**](../Model/.md)| The kind of images to be returned. The default value is &#x60;profile&#x60; | [optional]
 **name** | **string**| The name for the new image. If not informed will fall back to the original file name in the form data | [optional]

### Return type

**string**

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewImage**
> \Cyclos\Api\Model\ImageView viewImage($id_or_key, $fields)

Returns an image details by id or key

Returns metadata about an image given its identifier or key

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

$apiInstance = new Cyclos\Api\Functions\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_or_key = "id_or_key_example"; // string | The image id or file name
$fields = array("fields_example"); // string[] | Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works.

try {
    $result = $apiInstance->viewImage($id_or_key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->viewImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_or_key** | **string**| The image id or file name |
 **fields** | [**string[]**](../Model/string.md)| Select which fields to include on returned data. On the beginning of this page is an explanation on how this parameter works. | [optional]

### Return type

[**\Cyclos\Api\Model\ImageView**](../Model/ImageView.md)

### Authorization

[accessClient](../../README.md#accessClient), [basic](../../README.md#basic), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

