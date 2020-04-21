# TransactionAuthorizationLevelData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_broker** | **bool** | Indicates that any of the payer&#x27;s brokers can authorize this level. | [optional] 
**allow_payer** | **bool** | Indicates that the payer can authorize this level. | [optional] 
**allow_receiver** | **bool** | Indicates that the payer can authorize this level. | [optional] 
**allow_admin** | **bool** | Indicates that an administrator can authorize this level. | [optional] 
**brokers** | [**\Cyclos\Api\Model\User[]**](User.md) | Contains the brokers that can authorize this level. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

