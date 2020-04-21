# AccountStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**balance** | **float** | The raw account balance | [optional] 
**credit_limit** | **float** | The maximum negative balance an account may get | [optional] 
**upper_credit_limit** | **float** | The maximum positive balance an account may get | [optional] 
**reserved_amount** | **float** | The reserved amount is part of the raw balance, but cannot be used for payments because of some other events, like payments pending authorization, confirmed webshop orders, scheduled payments (when configured to reserve the total amount) and so on. | [optional] 
**available_balance** | **float** | The available balance to be used, taking into account the raw balance, credit limit and reserved amount | [optional] 
**negative_since** | [**\DateTime**](\DateTime.md) | If the account is negative, contains the date since it became so | [optional] 
**a_rate** | **float** | The balance aging counter | [optional] 
**d_rate** | **float** | The balance maturity | [optional] 
**rate_balance_correction** | **float** |  | [optional] 
**virtual_rated_balance** | **float** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

