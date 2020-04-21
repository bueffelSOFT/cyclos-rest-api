# BasicUserQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**users_to_exclude** | **string[]** | Indicated the users to be excluded from the result | [optional] 
**users_to_include** | **string[]** | Indicated the users to be included in the result.  Any other user not present in this list will be excluded from the result. | [optional] 
**activation_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum user activation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**creation_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum user creation date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**last_login_period** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum user last login date. Only taken into account if searching as administrator or managing broker. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**groups** | **string[]** | Either id or internal names of groups / group sets | [optional] 
**brokers** | **string[]** | Either id or a principal (login name, e-mail, etc) for brokers | [optional] 
**main_broker_only** | **bool** | When set to &#x60;true&#x60;, will match only users that have the brokers as set in the &#x60;brokers&#x60; parameter as main broker. | [optional] 
**include_group** | **bool** | When set to &#x60;true&#x60; and the logged user has permission to view user groups, will return the &#x60;group&#x60; property on users. | [optional] 
**include_group_set** | **bool** | When set to &#x60;true&#x60; and the logged user has permission to view user group sets, will return the &#x60;groupSet&#x60; property on users. | [optional] 
**address_result** | [**\Cyclos\Api\Model\UserAddressResultEnum**](UserAddressResultEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

