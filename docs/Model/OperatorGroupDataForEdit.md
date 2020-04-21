# OperatorGroupDataForEdit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**restrict_payments_to_users** | [**\Cyclos\Api\Model\User[]**](User.md) | Details of the currently set users in the &#x60;restrictPaymentsToUsers&#x60; property in &#x60;operatorGroup&#x60; (which have only the ids). | [optional] 
**operator_group** | [****](.md) | The operator group that is being edited. This value can be modified and sent back on &#x60;PUT /operator-groups/{id}&#x60;. | [optional] 
**edit** | **bool** | Can the authenticated user edit this operator group? | [optional] 
**remove** | **bool** | Can the authenticated user remove this operator group? | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

