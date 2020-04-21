# TokenQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum token activation date. | [optional] 
**expiry_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum token expiry date. | [optional] 
**groups** | **string[]** | Either id or internal names of groups / group sets | [optional] 
**brokers** | **string[]** | Either id or a principal (login name, e-mail, etc) for brokers | [optional] 
**user** | **string** | Either id or a principal (login name, e-mail, etc) for the token owner user | [optional] 
**value** | **string** | The token value | [optional] 
**statuses** | [**\Cyclos\Api\Model\TokenStatusEnum[]**](TokenStatusEnum.md) | The desired token statuses | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

