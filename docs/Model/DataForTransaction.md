# DataForTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts** | [**\Cyclos\Api\Model\AccountWithStatus[]**](AccountWithStatus.md) | Only returned when the payment type is not selected. Contains the possible accounts which can be used either as source (when performing the payment) or destination (when receiving the payment, on POS). | [optional] 
**from_kind** | [**AllOfDataForTransactionFromKind**](AllOfDataForTransactionFromKind.md) | Indicates the account kind that will perform the payment | [optional] 
**from_user** | [**AllOfDataForTransactionFromUser**](AllOfDataForTransactionFromUser.md) | Only returned if &#x60;fromKind&#x60; is &#x60;user&#x60;. Is the payer user. | [optional] 
**to_kind** | [**AllOfDataForTransactionToKind**](AllOfDataForTransactionToKind.md) | Indicates the account kind that will receive the payment | [optional] 
**to_user** | [**AllOfDataForTransactionToUser**](AllOfDataForTransactionToUser.md) | Only returned if &#x60;toKind&#x60; is &#x60;user&#x60;. Is the payee user. | [optional] 
**payment_type_data** | [**AllOfDataForTransactionPaymentTypeData**](AllOfDataForTransactionPaymentTypeData.md) | Contains the detailed data for the selected (or first) payment type | [optional] 
**payment_types** | [**\Cyclos\Api\Model\TransferTypeWithCurrency[]**](TransferTypeWithCurrency.md) | Only returned when the payment type is not selected. Contains the allowed payment types for a payment between the selected from and to owners. | [optional] 
**allow_autocomplete** | **bool** | Only returned when no subject is selected. Indicates whether the payee can be obtaining by freely searching users | [optional] 
**allow_contacts** | **bool** | Only returned when no subject is selected. Indicates whether the payee can be obtaining from the contact list | [optional] 
**allowed_users** | [**\Cyclos\Api\Model\User[]**](User.md) | If the authorized user is a restricted operator, it may be that the owner user has defined exactly to which users the operator can pay. If this is the case, this will be the list with such users. | [optional] 
**principal_types** | [**\Cyclos\Api\Model\PrincipalTypeInput[]**](PrincipalTypeInput.md) | Only returned when no subject is selected. The possible principal types that can be used to locate the payee | [optional] 
**default_principal_type** | **string** | Only returned when no subject is selected. If the &#x60;defaultIdMethod&#x60; is &#x60;principalType&#x60;, contains the internal name or id of the principal type that should be the default. If there is a default, the user should be provided with the option to choose which principal type he&#x27;s using. If there is no default, all possible principal types will be attempted. In this case, the UI will normally not show the option for which principal type should be used. | [optional] 
**default_id_method** | [**AllOfDataForTransactionDefaultIdMethod**](AllOfDataForTransactionDefaultIdMethod.md) | Only returned when no subject is selected. The default option for the identification method when performing a payment. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

