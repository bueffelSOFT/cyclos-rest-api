# UserVouchersQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_range** | **float[]** | The minimum / maximum voucher amount | [optional] 
**creation_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum voucher creation date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**expiration_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum voucher expiration date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**redeem_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum voucher redeem date. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**redeem_by** | **string** | The user who perform the redeem action. A user identification value, such as id, username, e-mail, phone, etc. Id is always allowed, others depend on Cyclos configuration. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets), for example, &#x60;&#x27;1234567890&#x60;; | [optional] 
**token** | **string** | The voucher token (with or without mask) | [optional] 
**types** | **string[]** | The ids or internal names of voucher types | [optional] 
**statuses** | [**\Cyclos\Api\Model\VoucherStatusEnum[]**](VoucherStatusEnum.md) |  | [optional] 
**relation** | [**\Cyclos\Api\Model\VoucherRelationEnum**](VoucherRelationEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

