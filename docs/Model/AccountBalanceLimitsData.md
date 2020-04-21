# AccountBalanceLimitsData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [**\Cyclos\Api\Model\AccountWithCurrency**](AccountWithCurrency.md) |  | [optional] 
**user** | [**\Cyclos\Api\Model\User**](User.md) |  | [optional] 
**editable** | **bool** | Can the authenticated user manage the limits of this account? | [optional] 
**default_credit_limit** | **float** | The default credit limit from the user products. | [optional] 
**default_upper_credit_limit** | **float** | The default upper credit limit from the user products. | [optional] 
**history** | [**\Cyclos\Api\Model\AccountBalanceLimitsLog[]**](AccountBalanceLimitsLog.md) | The history of balance limit changes. | [optional] 
**confirmation_password_input** | [****](.md) | If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

