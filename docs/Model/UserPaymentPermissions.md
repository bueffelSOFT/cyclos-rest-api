# UserPaymentPermissions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**as_user_to_self** | **bool** | Can the authenticated administrator or broker perform a payment in behalf of this user to another account belonging to the same user? | [optional] 
**as_user_to_system** | **bool** | Can the authenticated administrator or broker perform a payment in behalf of this user to a system account? | [optional] 
**as_user_to_user** | **bool** | Can the authenticated administrator or broker perform a payment in behalf of this user to another user? | [optional] 
**system_to_user** | **bool** | Can the authenticated administrator perform a payment from a system account to this user? | [optional] 
**user_to_user** | **bool** | Can the authenticated member perform a payment from an himself to this user? | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

