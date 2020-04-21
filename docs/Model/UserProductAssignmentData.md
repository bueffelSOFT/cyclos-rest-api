# UserProductAssignmentData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | [**\Cyclos\Api\Model\User**](User.md) |  | [optional] 
**group** | [**\Cyclos\Api\Model\Group**](Group.md) |  | [optional] 
**user_products** | [**\Cyclos\Api\Model\ProductWithUserAccount[]**](ProductWithUserAccount.md) | Products currently assigned to this individual user | [optional] 
**group_products** | [**\Cyclos\Api\Model\ProductWithUserAccount[]**](ProductWithUserAccount.md) | Products currently assigned to the user&#x27;s group | [optional] 
**group_set_products** | [**\Cyclos\Api\Model\ProductWithUserAccount[]**](ProductWithUserAccount.md) | Products currently assigned to the user&#x27;s group set | [optional] 
**assignable** | [**\Cyclos\Api\Model\ProductWithUserAccount[]**](ProductWithUserAccount.md) | If the authenticated user can assign more products to the user, this is the list of possible products to assign to the user. | [optional] 
**unassignable** | **string[]** | Either internal names or ids of currently assigned products that the logged user can unassign from the user. | [optional] 
**history** | [**\Cyclos\Api\Model\ProductAssignmentLog[]**](ProductAssignmentLog.md) | Contains the history entries for all product assignment changes | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

