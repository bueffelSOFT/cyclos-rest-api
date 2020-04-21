# BaseTransactionQueryFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kinds** | [**\Cyclos\Api\Model\TransactionKind[]**](TransactionKind.md) |  | [optional] 
**authorized** | **bool** | When set, will only return transactions that went through the authorization process (if true) or that never went through it (when false). In either case, only kinds that can go through authorization are returned (&#x60;payment&#x60;, &#x60;order&#x60;, &#x60;recurringPayment&#x60; or &#x60;scheduledPayment&#x60;). | [optional] 
**authorization_statuses** | [**\Cyclos\Api\Model\TransactionAuthorizationStatusEnum[]**](TransactionAuthorizationStatusEnum.md) | Authorization statuses used as search criteria. When set, only kinds that can go through authorization are returned (&#x60;payment&#x60;, &#x60;order&#x60;, &#x60;recurringPayment&#x60; or &#x60;scheduledPayment&#x60;). | [optional] 
**authorization_performed_by** | **string** | Id or other identifier (login name, email, etc) of the user that performed an authorization action (authorize, deny or cancel). | [optional] 
**ticket_statuses** | [**\Cyclos\Api\Model\TicketStatusEnum[]**](TicketStatusEnum.md) | Statuses used as search criteria applied only to transactions of kind &#x60;ticket&#x60;. | [optional] 
**recurring_payment_statuses** | [**\Cyclos\Api\Model\RecurringPaymentStatusEnum[]**](RecurringPaymentStatusEnum.md) | Statuses used as search criteria applied only to transactions of kind &#x60;recurringPayment&#x60;. If this filter is not empty then pending recurring payments will be excluded from the result. Pending recurring payments does not have a status. | [optional] 
**scheduled_payment_statuses** | [**\Cyclos\Api\Model\ScheduledPaymentStatusEnum[]**](ScheduledPaymentStatusEnum.md) | Statuses used as search criteria applied only to transactions of kind &#x60;scheduledPayment&#x60;. If this filter is not empty then pending scheduled payments will be excluded from the result. Pending scheduled payments does not have a status. | [optional] 
**payment_request_statuses** | [**\Cyclos\Api\Model\PaymentRequestStatusEnum[]**](PaymentRequestStatusEnum.md) | Statuses used as search criteria applied only to transactions of kind &#x60;paymentRequest&#x60;. | [optional] 
**payment_request_expiration** | [**\DateTime[]**](\DateTime.md) | The minimum / maximum date for payment request expiration. Only affects payment requests. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma. | [optional] 
**external_payment_statuses** | [**\Cyclos\Api\Model\ExternalPaymentStatusEnum[]**](ExternalPaymentStatusEnum.md) | Statuses used as search criteria applied only to transactions of kind &#x60;externalPayment&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

