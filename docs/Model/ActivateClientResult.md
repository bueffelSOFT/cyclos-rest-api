# ActivateClientResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | The generated access client token. It should be passed using the &#x60;Access-Client-Token&#x60; header. If a prefix was informed on activation, it will not be returned, here, but should be sent prepending the returned token | [optional] 
**access_client** | [**AllOfActivateClientResultAccessClient**](AllOfActivateClientResultAccessClient.md) | A reference to the activated access client | [optional] 
**access_client_type** | [**AllOfActivateClientResultAccessClientType**](AllOfActivateClientResultAccessClientType.md) | A reference to the access client type | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

