# BaseNotificationSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**\Cyclos\Api\Model\User**](User.md) |  | [optional] 
**role** | [**\Cyclos\Api\Model\RoleEnum**](RoleEnum.md) |  | [optional] 
**editable** | **bool** | Indicates whether the logged user can manage the notitification settings of this user. | [optional] 
**email_allowed** | **bool** | Indicates whether e-mail notifications are allowed | [optional] 
**sms_allowed** | **bool** | Indicates whether SMS notifications are allowed | [optional] 
**max_sms_per_month** | **int** | The maximum number of allowed SMS messages per month | [optional] 
**sms_count_this_month** | **int** | The number of SMS messages already sent this month | [optional] 
**forward_messages_allowed** | **bool** | Indicates whether it can be configured to forward received internal messages to the user&#x27;s e-mail. Only applicable for users (members / brokers), not administrators. | [optional] 
**forward_messages** | **bool** | Indicates whether to forward received internal messages to the user&#x27;s e-mail. Only applicable for users (members / brokers), not administrators. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

