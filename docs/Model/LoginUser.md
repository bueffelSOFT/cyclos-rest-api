# LoginUser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **string** | The user identification for login. The accepted kind of identification (login name, e-mail, etc) depend on the channel configuration. | [optional] 
**password** | **string** | The user password. The password type is set in the channel configuration. | [optional] 
**remote_address** | **string** | The IP address of the user requesting the login. | [optional] 
**channel** | **string** | The channel internal name. Defaults to &#x60;main&#x60;. | [optional] 
**session_timeout** | [**AllOfLoginUserSessionTimeout**](AllOfLoginUserSessionTimeout.md) | The amount of time the session is valid. The channel configuration has the session timeout, which is the maximum amount of time that can be set. If the given value is higher than the one in the configuration, it will be ignored. Defaults to the timeout set in the configuration. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

