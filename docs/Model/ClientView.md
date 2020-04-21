# ClientView

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_date** | [**\DateTime**](\DateTime.md) | The date the client was activated | [optional] 
**confirmation_password_input** | [****](.md) | If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless). | [optional] 
**can_get_activation_code** | **bool** | Can the authenticated user get the activation code, to later activate (assign) this client? | [optional] 
**can_unassign** | **bool** | Can the authenticated user unassign this client? | [optional] 
**can_block** | **bool** | Can the authenticated user block this client? | [optional] 
**can_unblock** | **bool** | Can the authenticated user unblock this client? | [optional] 
**status** | [**\Cyclos\Api\Model\ClientStatusEnum**](ClientStatusEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

