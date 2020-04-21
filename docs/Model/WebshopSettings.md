# WebshopSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_number_generated** | **bool** | Whether the product number, which is required for webshop advertisements, will be generated (true) or manual (false). | [optional] 
**product_number_mask** | **string** | A mask that indicates the format of product numbers. The following characters are accepted: - &#x60;?&#x60;, &#x60;_&#x60;: Any character; - &#x60;#&#x60;, &#x60;0&#x60;, &#x60;9&#x60;: A digit; - &#x60;A&#x60;, &#x60;a&#x60;: A letter (regardless the case); - &#x60;L&#x60;, &#x60;l&#x60;: A lowercase letter; - &#x60;U&#x60;, &#x60;u&#x60;: An uppercase letter; - &#x60;C&#x60;, &#x60;c&#x60;: A capitalized letter; - &#x60;\\&#x60; folowed by any character, or any character not in the list   above: A literal character. | [optional] 
**custom_order_number_format** | **bool** | Whether orders will have a custom format for assigned numbers. When set, the number will be generated from a given prefix, inner length and suffix. When false, a numeric string will be used. | [optional] 
**order_number_prefix** | **string** | The order number prefix. You can generate a date part by using a [Java date pattern](https://docs.oracle.com/javase/8/docs/api/java/text/SimpleDateFormat.html) between sharp (#) characters. | [optional] 
**order_number_inner_length** | **int** | The size of the numerical part of the order number. | [optional] 
**order_number_suffix** | **string** | The order number suffix. You can generate a date part by using a [Java date pattern](https://docs.oracle.com/javase/8/docs/api/java/text/SimpleDateFormat.html) between sharp (#) characters. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

