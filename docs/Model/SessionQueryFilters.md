# SessionQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**broker** | **string** | Either id or a principal (login name, e-mail, etc) of a broker. Used to filter the sessions of users brokered by the given broker. | [optional] 
**channels** | **string[]** | Internal names of the sessions channels that can be returned. | [optional] 
**exclude_current_session** | **bool** | Whether to exclude or not the current session. | [optional] 
**operators_of** | **string** | Either id or a principal (login name, e-mail, etc) of a user. The owner member of the operators sessions Used to filter the operator sessions of the given user. | [optional] 
**roles** | [**\Cyclos\Api\Model\RoleEnum[]**](RoleEnum.md) | The role of the logged user in the sessions. | [optional] 
**user** | **string** | Either id or a principal (login name, e-mail, etc) of the sessions owner. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

