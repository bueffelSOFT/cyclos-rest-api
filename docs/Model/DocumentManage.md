# DocumentManage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The document name | [optional] 
**description** | **string** | The document description | [optional] 
**enabled** | **bool** | Whether the document is enabled | [optional] 
**category** | **string** | The shared document category internal name or id. Only used if the document &#x60;kind&#x60; is either &#x60;static&#x60; or &#x60;dynamic&#x60;. | [optional] 
**user_visible** | **bool** | Is this document visible by the owner user? Only used if the document &#x60;kind&#x60; is &#x60;user&#x60;. | [optional] 
**broker_visible** | **bool** | Is this document visible by the user&#x27;s broker(s)? Only used if the document &#x60;kind&#x60; is &#x60;user&#x60;. | [optional] 
**broker_manageable** | **bool** | Can this document be managed by the user&#x27;s broker(s)? Only used if the document &#x60;kind&#x60; is &#x60;user&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

