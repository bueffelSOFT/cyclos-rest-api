# CreateDeviceConfirmation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | The payment account owner. Can be one of:  - a user identification value, such as id, username, e-mail, phone, etc.   Id is always allowed, others depend on Cyclos configuration. Note that   a valid numeric value is always considered as id. For example, when   using another identification method that can be numeric only, prefix   the value with a single quote (like in Excel spreadsheets);  - &#x60;self&#x60; for the currently authenticated user; - &#x60;system&#x60; for the owner of system accounts.  Required only if type is &#x60;performPayment&#x60; or &#x60;performExternalPayment&#x60;. | [optional] 
**to** | **string** | Same as &#x60;from&#x60; but for the receiver. Required only if type is &#x60;performPayment&#x60;. | [optional] 
**to_principal** | **string** | The receiver of the external payment (email or mobile number). Required only if type is &#x60;performExternalPayment&#x60;. | [optional] 
**payment_type** | **string** | The payment type id or qualified internal name (in the form &#x60;fromAccountType.paymentType&#x60;). Required only if type is &#x60;performPayment&#x60;, &#x60;performExternalPayment&#x60;, &#x60;shoppingCartCheckout&#x60; or &#x60;importUserPayments&#x60;. | [optional] 
**amount** | **float** | The amount involved in the confirmation, its meaning depends on the type. Required only if type is &#x60;performPayment&#x60;, &#x60;performExternalPayment&#x60;, &#x60;shoppingCartCheckout&#x60;, &#x60;generateVouchers&#x60; or &#x60;buyVouchers&#x60;. | [optional] 
**transaction** | **string** | Either the id or number of the transaction (or ticket number if type is &#x60;approveTicket&#x60;). Required only if type is &#x60;manageAuthorization&#x60;, &#x60;manageExternalPayment&#x60;, &#x60;manageScheduledPayment&#x60;, &#x60;manageRecurringPayment&#x60;, &#x60;managePaymentRequest&#x60; or &#x60;approveTicket&#x60;. | [optional] 
**transfer** | **string** | Either the id or number of the transfer. Required only if type is &#x60;chargeback&#x60;. | [optional] 
**account** | **string** | Either the id or number of the user account. Required only if type is &#x60;changeAccountLimits&#x60;. | [optional] 
**installment** | **string** | The id of a scheduled payment installment. Required only if type is &#x60;manageInstallment&#x60;. | [optional] 
**failed_occurrence** | **string** | The id of a recurring payment failed occurrence. Required only if type is &#x60;manageFailedOccurrence&#x60;. | [optional] 
**client** | **string** | The access client id or token. Required only if type is  &#x60;clientAction&#x60;. | [optional] 
**name** | **string** | The entity&#x27;s name for which this confirmation is created for. Required only if type is either &#x60;manageAddress&#x60;, &#x60;managePhone&#x60; or &#x60;manageContactInfo&#x60;. | [optional] 
**type** | [**\Cyclos\Api\Model\DeviceConfirmationTypeEnum**](DeviceConfirmationTypeEnum.md) |  | [optional] 
**external_payment_action** | [**AllOfCreateDeviceConfirmationExternalPaymentAction**](AllOfCreateDeviceConfirmationExternalPaymentAction.md) | The action being applied to the external payment. Required only if type is &#x60;manageExternalPayment&#x60;. | [optional] 
**scheduled_payment_action** | [**AllOfCreateDeviceConfirmationScheduledPaymentAction**](AllOfCreateDeviceConfirmationScheduledPaymentAction.md) | The action being applied to the scheduled payment. Required only if type is &#x60;manageScheduledPayment&#x60;. | [optional] 
**recurring_payment_action** | [**AllOfCreateDeviceConfirmationRecurringPaymentAction**](AllOfCreateDeviceConfirmationRecurringPaymentAction.md) | The action being applied to the recurring payment. Required only if type is &#x60;manageRecurringPayment&#x60;. | [optional] 
**installment_action** | [**AllOfCreateDeviceConfirmationInstallmentAction**](AllOfCreateDeviceConfirmationInstallmentAction.md) | The action being applied to the scheduled payment installment. Required only if type is &#x60;manageInstallment&#x60;. | [optional] 
**failed_occurrence_action** | [**AllOfCreateDeviceConfirmationFailedOccurrenceAction**](AllOfCreateDeviceConfirmationFailedOccurrenceAction.md) | The action being applied to the recurring payment failed occurrence. Required only if type is &#x60;manageFailedOccurrence&#x60;. | [optional] 
**authorization_action** | [**AllOfCreateDeviceConfirmationAuthorizationAction**](AllOfCreateDeviceConfirmationAuthorizationAction.md) | The action being applied to the payment authorization. Required only if type is &#x60;manageAuthorization&#x60;. | [optional] 
**payment_request_action** | [**AllOfCreateDeviceConfirmationPaymentRequestAction**](AllOfCreateDeviceConfirmationPaymentRequestAction.md) | The action being applied to the payment request. Required only if type is &#x60;managePaymentRequest&#x60;. | [optional] 
**client_action** | [**AllOfCreateDeviceConfirmationClientAction**](AllOfCreateDeviceConfirmationClientAction.md) | The action being applied to the access client. Required only if type is &#x60;clientAction&#x60;. | [optional] 
**operation** | **string** | Either the id or internal name of the custom operation being executed. Required only if type is &#x60;runOperation&#x60;. | [optional] 
**password_type** | **string** | Either the id or internal name of the password type being e generatated. Required only if type is &#x60;generatePassword&#x60;. | [optional] 
**seller** | **string** | The order seller. Can be one a user identification value, such as id, username, e-mail, phone, etc. Id is always allowed, others depend on Cyclos configuration. Note that a valid numeric value is always considered as id. For example, when using another identification method that can be numeric only, prefix the value with a single quote (like in Excel spreadsheets); Required only if type is &#x60;shoppingCartCheckout&#x60;. | [optional] 
**order** | **string** | Either the id or number of an webshop order. Required only if type is &#x60;acceptOrder&#x60;. | [optional] 
**voucher** | **string** | The voucher id or token. Required only if type is  &#x60;manageVoucher&#x60;. | [optional] 
**voucher_action** | [**AllOfCreateDeviceConfirmationVoucherAction**](AllOfCreateDeviceConfirmationVoucherAction.md) | The action being applied to the voucher. Required only if type is &#x60;manageVoucher&#x60;. | [optional] 
**voucher_type** | **string** | Either the id or internal name of a voucher type. Required only if type is &#x60;generateVouchers&#x60; or &#x60;buyVouchers&#x60;. | [optional] 
**number_of_vouchers** | **int** | The number of vouchers to be generated. Required only if type is &#x60;generateVouchers&#x60; or &#x60;buyVouchers&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

