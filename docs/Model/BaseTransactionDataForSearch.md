# BaseTransactionDataForSearch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_types** | [**\Cyclos\Api\Model\AccountType[]**](AccountType.md) | Visible account types from the given owner | [optional] 
**can_view_authorized** | **bool** | Can the authenticated user view authorized transactions of this owner? | [optional] 
**can_view_scheduled** | **bool** | DEPRECATED: Use &#x60;visibleKinds&#x60; instead. Can the authenticated user view scheduled payments of this owner? | [optional] 
**visible_kinds** | [**\Cyclos\Api\Model\TransactionKind[]**](TransactionKind.md) | Contains the transaction kinds the authenticated user can view over this owner. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

