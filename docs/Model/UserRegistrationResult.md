# UserRegistrationResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**AllOfUserRegistrationResultUser**](AllOfUserRegistrationResultUser.md) | The user that has just been registered | [optional] 
**generated_passwords** | [**\Cyclos\Api\Model\EntityReference[]**](EntityReference.md) | The types of passwords that were generated | [optional] 
**root_url** | **string** | The root URL that can be used to access the web interface | [optional] 
**principals** | [**\Cyclos\Api\Model\UserRegistrationPrincipal[]**](UserRegistrationPrincipal.md) | Contains information about each user principal (identification) and the channels that can be accessed using it | [optional] 
**status** | [**\Cyclos\Api\Model\UserRegistrationStatusEnum**](UserRegistrationStatusEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

