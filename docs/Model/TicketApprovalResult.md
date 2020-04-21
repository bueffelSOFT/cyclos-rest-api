# TicketApprovalResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ticket_number** | **string** | The ticket number identifier. | [optional] 
**cancel_url** | **string** | The URL to redirect when canceling the accept ticket flow | [optional] 
**success_url** | **string** | The URL to redirect after successfully accepting a ticket | [optional] 
**transaction** | [****](.md) | The generated payment. Only if &#x60;status&#x60; is &#x60;processed&#x60;. | [optional] 
**ticket_status** | [**\Cyclos\Api\Model\TicketStatusEnum**](TicketStatusEnum.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

