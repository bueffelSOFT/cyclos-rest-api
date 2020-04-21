# BaseTransDataForSearch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transfer_filters** | [**\Cyclos\Api\Model\TransferFilter[]**](TransferFilter.md) | References for transfer filters, which can be used to filter entries by transfer type | [optional] 
**channels** | [**\Cyclos\Api\Model\EntityReference[]**](EntityReference.md) | References for channels which can be used to filter entries by transfers generated on a specific channel. Is only returned if the authenticated user is an administrator. | [optional] 
**groups** | [**\Cyclos\Api\Model\Group[]**](Group.md) | Groups that can be used to filter entries, so that only transfers from or to users of those groups are returned on search. Is only returned if the authenticated user is an administrator. | [optional] 
**preselected_periods** | [**\Cyclos\Api\Model\PreselectedPeriod[]**](PreselectedPeriod.md) | Contains the pre-selected period filter ranges according to the Cyclos configuration | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

