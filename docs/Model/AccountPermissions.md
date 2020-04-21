# AccountPermissions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [**\Cyclos\Api\Model\AccountWithCurrency**](AccountWithCurrency.md) |  | [optional] 
**visible** | **bool** | Whether the account also is visible for the logged user or, if false means it is only accessible. A non visible account still is operative, i.e the user could make/receive payments from/to it (i.e is accessible) but can not make a transfers history search for it. | [optional] 
**view_status** | **bool** | Indicates whether the logged user can see the account status for this account. Some restricted operators can view the account history, but not the account status (balance and so on). | [optional] 
**system_payments** | [**\Cyclos\Api\Model\RelatedTransferType[]**](RelatedTransferType.md) | Payment types allowed to be performed to system accounts. | [optional] 
**user_payments** | [**\Cyclos\Api\Model\RelatedTransferType[]**](RelatedTransferType.md) | Payment types allowed to be performed to other users | [optional] 
**self_payments** | [**\Cyclos\Api\Model\RelatedTransferType[]**](RelatedTransferType.md) | Payment types allowed to be performed to other self accounts. Only returned for user accounts. | [optional] 
**pos_payments** | [**\Cyclos\Api\Model\RelatedTransferType[]**](RelatedTransferType.md) | Payment types allowed to be used on POS (receive payments from other users). Only returned for user accounts. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

