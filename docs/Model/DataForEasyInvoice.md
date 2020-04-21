# DataForEasyInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | [**AllOfDataForEasyInvoiceTo**](AllOfDataForEasyInvoiceTo.md) | The destination user details. Is only returned if called with a logged user or if the user&#x27;s group is visible to guests accoerding to the current configuration. | [optional] 
**amount** | **float** | The easy invoice amount | [optional] 
**currency** | [**\Cyclos\Api\Model\Currency**](Currency.md) |  | [optional] 
**payment_type_data** | [**AllOfDataForEasyInvoicePaymentTypeData**](AllOfDataForEasyInvoicePaymentTypeData.md) | Contains the detailed data for the selected (or first) payment type. Only returned if there is a logged user. The custom fields will only contain those without a fixed value. | [optional] 
**device_confirmation_availability** | [**AllOfDataForEasyInvoiceDeviceConfirmationAvailability**](AllOfDataForEasyInvoiceDeviceConfirmationAvailability.md) | Only returned if there is not a logged user. Whether the confirmation with a trusted device is not used, optional or required. | [optional] 
**payment_types** | [**\Cyclos\Api\Model\TransferTypeWithCurrency[]**](TransferTypeWithCurrency.md) | Only returned if there is a logged user, and a specific payment type was not informed. Contains the allowed payment types to the given user. | [optional] 
**custom_values** | [**\Cyclos\Api\Model\CustomFieldValue[]**](CustomFieldValue.md) | The list of custom field values with a fixed value, as requested. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

