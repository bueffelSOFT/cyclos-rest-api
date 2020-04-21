<?php
/**
 * NotificationTypeEnum
 *
 * PHP version 5
 *
 * @category Class
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Cyclos 4.12.6 API
 *
 * The Cyclos REST API is described using OpenAPI 3.0. The descriptor for the api can be downloaded in both [YAML](http://kb1.cyclos-dev.info/api/cyclos-openapi.yaml) or [JSON](http://kb1.cyclos-dev.info/api/cyclos-openapi.json) formats. These files can be used in tools that support the OpenAPI specification, such as the [Swagger Generator](https://generator.swagger.io/).  In the API, whenever some data is referenced, for example, a group, or payment type, either id or internal name can be used. When an user is to be referenced, the special word 'self' (sans quotes) always refers to the currently authenticated user, and any identification method (login name, e-mail, mobile phone, account number or custom field) that can be used on keywords search (as configured in the products) can also be used to identify users. Some specific data types have other identification fields, like accounts can have a number and payments can have a transaction number. This all depends on the current configuration.  Most of the operations that return data allow selecting which fields to include in the response. This is useful for reducing the data to be download over the network. If nothing is set, all object fields are returned. Unprefixed field names will be handled like a whitelist (only listed fields will be included), while names starting with a minus (-) or exclamation mark (!) will be handled as blacklist (listed fields will not be included). This works for nesting as well. For example: `a,b.b1,c.-c1,c.-c2` will return the fields `a`, `b` (containing only the `b1` field) and `c` (containing all its fields except for `c1` or `c2`).  For details of the deprecated elements (operations and model) please visit the [deprecation notes page](https://documentation.cyclos.org/4.12.6/api-deprecation.html) for this version.
 *
 * OpenAPI spec version: 4.12.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Cyclos\Api\Model;
use \Cyclos\Api\ObjectSerializer;

/**
 * NotificationTypeEnum Class Doc Comment
 *
 * @category Class
 * @description The different notification types generated for for users / administrators. Possible values are: - &#x60;adAuthorized&#x60;: A notification generated if a notification created when an advertisement is authorized. - &#x60;adExpired&#x60;: A notification generated if a notification created when an advertisement expires. - &#x60;adInterestNotification&#x60;: A notification generated if a notification created by a new advertisement (Simple or Webshop). - &#x60;adPendingAuthorization&#x60;: A notification generated if an ad is pending by broker authorization. - &#x60;adPendingByAdminAuthorization&#x60;: An admin notification generated if an advertisement is pending for authorization. - &#x60;adQuestionAnswered&#x60;: A notification generated if a question answered to some AD (Simple or Webshop). - &#x60;adQuestionCreated&#x60;: A notification generated if a question created to some AD (Simple or Webshop). - &#x60;adRejected&#x60;: A notification generated if a notification created when an advertisement authorization is rejected. - &#x60;allNonSmsPerformedPayments&#x60;: A notification generated if a user performed a new payment through a channel that is not the SMS channel. - &#x60;applicationError&#x60;: An admin notification generated if an application error has occurred. - &#x60;articleOutOfStock&#x60;: A notification generated if a webshop product is out of stock. - &#x60;authorizedPaymentCanceled&#x60;: A notification generated if the authorization of a payment was canceled. This notification is to be sent to the payer. - &#x60;authorizedPaymentDenied&#x60;: A notification generated if the authorization of a payment was denied. This notification is to be sent to the payer. - &#x60;authorizedPaymentExpired&#x60;: A notification generated if the authorization of a payment has expired. This notification is to be sent to the payer. - &#x60;authorizedPaymentSucceeded&#x60;: A notification generated if the authorization of a payment succeeded (the payment went successfully through its final authorization and is now processed). This notification is to be sent to the payer. - &#x60;boughtVouchersAboutToExpire&#x60;: A notification generated if a one or more bought vouchers are about to expire. - &#x60;boughtVouchersExpirationDateChanged&#x60;: A notification generated if a bought voucher has new expiration date. - &#x60;boughtVouchersExpired&#x60;: A notification generated if one or more bought vouchers have expired. - &#x60;brokerAssigned&#x60;: A notification generated if a broker has been assigned to a user. - &#x60;brokerUnassigned&#x60;: A notification generated if a broker has been unassigned from a user. - &#x60;externalPaymentExpired&#x60;: A notification generated if the external payment has reached the expiration date. - &#x60;externalPaymentPerformedFailed&#x60;: A notification generated if the performed external payment has failed processing. - &#x60;externalPaymentReceivedFailed&#x60;: A notification generated if the received external payment has failed processing. - &#x60;externalUserPaymentExpired&#x60;: An admin notification generated if an external payment has expired. - &#x60;externalUserPaymentPerformedFailed&#x60;: An admin notification generated if an external payment failed processing. - &#x60;feedbackChanged&#x60;: A notification generated if a transaction feedback was modified. - &#x60;feedbackCreated&#x60;: A notification generated if a transaction feedback was created. - &#x60;feedbackExpirationReminder&#x60;: A notification generated if a transaction feedback is about to expire. - &#x60;feedbackOptional&#x60;: A notification generated if a performed payment can have an optional feedback. - &#x60;feedbackReplyCreated&#x60;: A notification generated if a transaction feedback was replied. - &#x60;feedbackRequired&#x60;: A notification generated if a performed payment needs to be given a feedback. - &#x60;generatedVouchersAboutToExpire&#x60;: An admin notification generated if a voucher will expire in a few days. - &#x60;generatedVouchersExpired&#x60;: An admin notification generated if a voucher has expired. - &#x60;incomingRecurringPaymentCanceled&#x60;: A notification generated if a recurring payment to a user has been canceled (only if the recurring payment is shown to receiver). - &#x60;incomingRecurringPaymentFailed&#x60;: A notification generated if a recurring payment to a user has failed (only if the recurring payment is shown to receiver). - &#x60;incomingRecurringPaymentReceived&#x60;: A notification generated if a recurring payment to a user was received (only if the recurring payment is shown to receiver). - &#x60;incomingScheduledPaymentCanceled&#x60;: A notification generated if a scheduled payment to a user has been canceled (only if the scheduled payment is shown to receiver). - &#x60;incomingScheduledPaymentFailed&#x60;: A notification generated if a scheduled payment to a user has failed (only if the scheduled payment is shown to receiver). - &#x60;incomingScheduledPaymentReceived&#x60;: A notification generated if a scheduled payment to a user was received (only if the scheduled payment is shown to receiver). - &#x60;limitChange&#x60;: A notification generated if a limit (lower/upper) has changed on an account. - &#x60;lowStockQuantity&#x60;: A notification generated if a product with stock quantity under limit. - &#x60;maxSmsPerMonthReached&#x60;: A notification generated if the maximum number of SMS messages per month has been reached. - &#x60;memberAssigned&#x60;: A notification generated if an user has been assigned to a broker. - &#x60;memberUnassigned&#x60;: A notification generated if an user has been unassigned from a broker. - &#x60;networkCreated&#x60;: An admin notification generated if a network is created. - &#x60;newToken&#x60;: A notification generated if a token / card has been created. - &#x60;newTokenPendingActivation&#x60;: A notification generated if a token / card has been created, but needs to be activated before being used. - &#x60;operatorAuthorizedPaymentApprovedStillPending&#x60;: A notification generated if a payment performed by an operator with authorization type &#x60;operator&#x60; was approved, but there is at least one authorization level. - &#x60;operatorAuthorizedPaymentCanceled&#x60;: A notification generated if a payment performed by an operator with authorization type &#x60;operator&#x60; was canceled. - &#x60;operatorAuthorizedPaymentDenied&#x60;: A notification generated if a payment performed by an operator with authorization type &#x60;operator&#x60; was denied. - &#x60;operatorAuthorizedPaymentExpired&#x60;: A notification generated if a payment performed by an operator with authorization type &#x60;operator&#x60; has expired. - &#x60;operatorAuthorizedPaymentSucceeded&#x60;: A notification generated if a payment performed by an operator with authorization type &#x60;operator&#x60; was approved and there was no further authorization. - &#x60;operatorPaymentAwaitingAuthorization&#x60;: A notification generated if a payment performed by an operator with authorization type &#x60;operator&#x60; is pending by authorization. - &#x60;orderCanceledBuyer&#x60;: A notification generated if a pending order has been canceled. - &#x60;orderCanceledSeller&#x60;: A notification generated if a pending order has been canceled. - &#x60;orderCreated&#x60;: A notification generated if a new web shop order created from a shopping cart checkout. - &#x60;orderPaymentCanceledBuyer&#x60;: A notification generated if an order payment was canceled by authorizer. - &#x60;orderPaymentCanceledSeller&#x60;: A notification generated if an order payment was canceled by authorizer. - &#x60;orderPaymentDeniedBuyer&#x60;: A notification generated if an order payment was denied by authorizer. - &#x60;orderPaymentDeniedSeller&#x60;: A notification generated if an order payment was denied by authorizer. - &#x60;orderPaymentExpiredBuyer&#x60;: A notification generated if an order payment has automatically expired. - &#x60;orderPaymentExpiredSeller&#x60;: A notification generated if an order payment has automatically expired. - &#x60;orderPendingAuthorizationBuyer&#x60;: A notification generated if an order accepted by buyer/seller but the payment is pending for authorization. - &#x60;orderPendingAuthorizationSeller&#x60;: A notification generated if an order accepted by buyer/seller but the payment is pending for authorization. - &#x60;orderPendingBuyer&#x60;: A notification generated if an order pending buyer approval. - &#x60;orderPendingDeliveryDataBuyer&#x60;: A notification generated if an order buyer needs to fill in the delivery data. - &#x60;orderPendingDeliveryDataSeller&#x60;: A notification generated if an order seller needs to fill in the delivery data. - &#x60;orderRealizedBuyer&#x60;: A notification generated if an order accepted by buyer (sent to seller). - &#x60;orderRealizedSeller&#x60;: A notification generated if an order accepted by seller (sent to buyer). - &#x60;orderRejectedByBuyer&#x60;: A notification generated if an order rejected by buyer. - &#x60;orderRejectedBySeller&#x60;: A notification generated if an order rejected by seller. - &#x60;passwordStatusChanged&#x60;: A notification generated if a password status has changed. - &#x60;paymentAwaitingAdminAuthorization&#x60;: An admin notification generated if a payment is awaiting for authorization. - &#x60;paymentAwaitingAuthorization&#x60;: A notification generated if a user must authorize a pending payment. - &#x60;paymentPerformed&#x60;: An admin notification generated if a payment is performed. - &#x60;paymentReceived&#x60;: A notification generated if a user received a new payment. - &#x60;paymentRequestCanceled&#x60;: A notification generated if a payment request was canceled. - &#x60;paymentRequestDenied&#x60;: A notification generated if a payment request was denied. - &#x60;paymentRequestExpirationDateChanged&#x60;: A notification generated if the payment request&#x27;s expiration date has changed. - &#x60;paymentRequestExpired&#x60;: A notification generated if a payment request has expired. - &#x60;paymentRequestProcessed&#x60;: A notification generated if a payment request was processed. - &#x60;paymentRequestReceived&#x60;: A notification generated if a payment request was received. - &#x60;recurringPaymentFailed&#x60;: A notification generated if a recurring payment from a user has failed (probably because of lack of funds). - &#x60;recurringPaymentOccurrenceProcessed&#x60;: A notification generated if an occurrence of an outgoing recurring payment was processed. - &#x60;referenceChanged&#x60;: A notification generated if a reference was modified. - &#x60;referenceCreated&#x60;: A notification generated if a reference has been set. - &#x60;salePendingBuyer&#x60;: A notification generated if a sale pending buyer approval. - &#x60;saleRealizedBuyer&#x60;: A notification generated if a sale accepted by buyer (sent to seller). - &#x60;saleRejectedSeller&#x60;: A notification generated if a sale rejected by seller. - &#x60;scheduledPaymentFailed&#x60;: A notification generated if a scheduled payment from a user has failed (probably because of lack of funds). - &#x60;scheduledPaymentInstallmentProcessed&#x60;: A notification generated if a scheduled payment to a user has been processed. - &#x60;scheduledPaymentRequestFailed&#x60;: A notification generated if a payment request which was scheduled has failed processing (probably because of lack of funds), and is being reopened. - &#x60;sentPaymentRequestExpirationDateChanged&#x60;: A notification generated if the payment request&#x27;s expiration date has changed. This notification is to be sent to the sender. - &#x60;smsPerformedPayment&#x60;: A notification generated if a user performed a new payment through SMS. - &#x60;systemAlert&#x60;: An admin notification generated if a system alert as occurred. - &#x60;ticketWebhookFailed&#x60;: A notification generated if the invocation of a webhook after (a successful) ticket approval has failed. - &#x60;tokenStatusChanged&#x60;: A notification generated if a token / card status has changed. - &#x60;userAlert&#x60;: An admin notification generated if a member alert as occurred. - &#x60;userImport&#x60;: An admin notification generated if a user import has been done. - &#x60;userRegistration&#x60;: An admin notification generated if a new user has been registered. - &#x60;userStatusChanged&#x60;: A notification generated if a user status has changed. - &#x60;voucherBuyingAboutToExpire&#x60;: An admin notification generated if a voucher type allowing buy is about to expire.
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationTypeEnum
{
    /**
     * Possible values of this enum
     */
    const AD_AUTHORIZED = 'adAuthorized';
const AD_EXPIRED = 'adExpired';
const AD_INTEREST_NOTIFICATION = 'adInterestNotification';
const AD_PENDING_AUTHORIZATION = 'adPendingAuthorization';
const AD_PENDING_BY_ADMIN_AUTHORIZATION = 'adPendingByAdminAuthorization';
const AD_QUESTION_ANSWERED = 'adQuestionAnswered';
const AD_QUESTION_CREATED = 'adQuestionCreated';
const AD_REJECTED = 'adRejected';
const ALL_NON_SMS_PERFORMED_PAYMENTS = 'allNonSmsPerformedPayments';
const APPLICATION_ERROR = 'applicationError';
const ARTICLE_OUT_OF_STOCK = 'articleOutOfStock';
const AUTHORIZED_PAYMENT_CANCELED = 'authorizedPaymentCanceled';
const AUTHORIZED_PAYMENT_DENIED = 'authorizedPaymentDenied';
const AUTHORIZED_PAYMENT_EXPIRED = 'authorizedPaymentExpired';
const AUTHORIZED_PAYMENT_SUCCEEDED = 'authorizedPaymentSucceeded';
const BOUGHT_VOUCHERS_ABOUT_TO_EXPIRE = 'boughtVouchersAboutToExpire';
const BOUGHT_VOUCHERS_EXPIRATION_DATE_CHANGED = 'boughtVouchersExpirationDateChanged';
const BOUGHT_VOUCHERS_EXPIRED = 'boughtVouchersExpired';
const BROKER_ASSIGNED = 'brokerAssigned';
const BROKER_UNASSIGNED = 'brokerUnassigned';
const EXTERNAL_PAYMENT_EXPIRED = 'externalPaymentExpired';
const EXTERNAL_PAYMENT_PERFORMED_FAILED = 'externalPaymentPerformedFailed';
const EXTERNAL_PAYMENT_RECEIVED_FAILED = 'externalPaymentReceivedFailed';
const EXTERNAL_USER_PAYMENT_EXPIRED = 'externalUserPaymentExpired';
const EXTERNAL_USER_PAYMENT_PERFORMED_FAILED = 'externalUserPaymentPerformedFailed';
const FEEDBACK_CHANGED = 'feedbackChanged';
const FEEDBACK_CREATED = 'feedbackCreated';
const FEEDBACK_EXPIRATION_REMINDER = 'feedbackExpirationReminder';
const FEEDBACK_OPTIONAL = 'feedbackOptional';
const FEEDBACK_REPLY_CREATED = 'feedbackReplyCreated';
const FEEDBACK_REQUIRED = 'feedbackRequired';
const GENERATED_VOUCHERS_ABOUT_TO_EXPIRE = 'generatedVouchersAboutToExpire';
const GENERATED_VOUCHERS_EXPIRED = 'generatedVouchersExpired';
const INCOMING_RECURRING_PAYMENT_CANCELED = 'incomingRecurringPaymentCanceled';
const INCOMING_RECURRING_PAYMENT_FAILED = 'incomingRecurringPaymentFailed';
const INCOMING_RECURRING_PAYMENT_RECEIVED = 'incomingRecurringPaymentReceived';
const INCOMING_SCHEDULED_PAYMENT_CANCELED = 'incomingScheduledPaymentCanceled';
const INCOMING_SCHEDULED_PAYMENT_FAILED = 'incomingScheduledPaymentFailed';
const INCOMING_SCHEDULED_PAYMENT_RECEIVED = 'incomingScheduledPaymentReceived';
const LIMIT_CHANGE = 'limitChange';
const LOW_STOCK_QUANTITY = 'lowStockQuantity';
const MAX_SMS_PER_MONTH_REACHED = 'maxSmsPerMonthReached';
const MEMBER_ASSIGNED = 'memberAssigned';
const MEMBER_UNASSIGNED = 'memberUnassigned';
const NETWORK_CREATED = 'networkCreated';
const NEW_TOKEN = 'newToken';
const NEW_TOKEN_PENDING_ACTIVATION = 'newTokenPendingActivation';
const OPERATOR_AUTHORIZED_PAYMENT_APPROVED_STILL_PENDING = 'operatorAuthorizedPaymentApprovedStillPending';
const OPERATOR_AUTHORIZED_PAYMENT_CANCELED = 'operatorAuthorizedPaymentCanceled';
const OPERATOR_AUTHORIZED_PAYMENT_DENIED = 'operatorAuthorizedPaymentDenied';
const OPERATOR_AUTHORIZED_PAYMENT_EXPIRED = 'operatorAuthorizedPaymentExpired';
const OPERATOR_AUTHORIZED_PAYMENT_SUCCEEDED = 'operatorAuthorizedPaymentSucceeded';
const OPERATOR_PAYMENT_AWAITING_AUTHORIZATION = 'operatorPaymentAwaitingAuthorization';
const ORDER_CANCELED_BUYER = 'orderCanceledBuyer';
const ORDER_CANCELED_SELLER = 'orderCanceledSeller';
const ORDER_CREATED = 'orderCreated';
const ORDER_PAYMENT_CANCELED_BUYER = 'orderPaymentCanceledBuyer';
const ORDER_PAYMENT_CANCELED_SELLER = 'orderPaymentCanceledSeller';
const ORDER_PAYMENT_DENIED_BUYER = 'orderPaymentDeniedBuyer';
const ORDER_PAYMENT_DENIED_SELLER = 'orderPaymentDeniedSeller';
const ORDER_PAYMENT_EXPIRED_BUYER = 'orderPaymentExpiredBuyer';
const ORDER_PAYMENT_EXPIRED_SELLER = 'orderPaymentExpiredSeller';
const ORDER_PENDING_AUTHORIZATION_BUYER = 'orderPendingAuthorizationBuyer';
const ORDER_PENDING_AUTHORIZATION_SELLER = 'orderPendingAuthorizationSeller';
const ORDER_PENDING_BUYER = 'orderPendingBuyer';
const ORDER_PENDING_DELIVERY_DATA_BUYER = 'orderPendingDeliveryDataBuyer';
const ORDER_PENDING_DELIVERY_DATA_SELLER = 'orderPendingDeliveryDataSeller';
const ORDER_REALIZED_BUYER = 'orderRealizedBuyer';
const ORDER_REALIZED_SELLER = 'orderRealizedSeller';
const ORDER_REJECTED_BY_BUYER = 'orderRejectedByBuyer';
const ORDER_REJECTED_BY_SELLER = 'orderRejectedBySeller';
const PASSWORD_STATUS_CHANGED = 'passwordStatusChanged';
const PAYMENT_AWAITING_ADMIN_AUTHORIZATION = 'paymentAwaitingAdminAuthorization';
const PAYMENT_AWAITING_AUTHORIZATION = 'paymentAwaitingAuthorization';
const PAYMENT_PERFORMED = 'paymentPerformed';
const PAYMENT_RECEIVED = 'paymentReceived';
const PAYMENT_REQUEST_CANCELED = 'paymentRequestCanceled';
const PAYMENT_REQUEST_DENIED = 'paymentRequestDenied';
const PAYMENT_REQUEST_EXPIRATION_DATE_CHANGED = 'paymentRequestExpirationDateChanged';
const PAYMENT_REQUEST_EXPIRED = 'paymentRequestExpired';
const PAYMENT_REQUEST_PROCESSED = 'paymentRequestProcessed';
const PAYMENT_REQUEST_RECEIVED = 'paymentRequestReceived';
const RECURRING_PAYMENT_FAILED = 'recurringPaymentFailed';
const RECURRING_PAYMENT_OCCURRENCE_PROCESSED = 'recurringPaymentOccurrenceProcessed';
const REFERENCE_CHANGED = 'referenceChanged';
const REFERENCE_CREATED = 'referenceCreated';
const SALE_PENDING_BUYER = 'salePendingBuyer';
const SALE_REALIZED_BUYER = 'saleRealizedBuyer';
const SALE_REJECTED_SELLER = 'saleRejectedSeller';
const SCHEDULED_PAYMENT_FAILED = 'scheduledPaymentFailed';
const SCHEDULED_PAYMENT_INSTALLMENT_PROCESSED = 'scheduledPaymentInstallmentProcessed';
const SCHEDULED_PAYMENT_REQUEST_FAILED = 'scheduledPaymentRequestFailed';
const SENT_PAYMENT_REQUEST_EXPIRATION_DATE_CHANGED = 'sentPaymentRequestExpirationDateChanged';
const SMS_PERFORMED_PAYMENT = 'smsPerformedPayment';
const SYSTEM_ALERT = 'systemAlert';
const TICKET_WEBHOOK_FAILED = 'ticketWebhookFailed';
const TOKEN_STATUS_CHANGED = 'tokenStatusChanged';
const USER_ALERT = 'userAlert';
const USER_IMPORT = 'userImport';
const USER_REGISTRATION = 'userRegistration';
const USER_STATUS_CHANGED = 'userStatusChanged';
const VOUCHER_BUYING_ABOUT_TO_EXPIRE = 'voucherBuyingAboutToExpire';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AD_AUTHORIZED,
self::AD_EXPIRED,
self::AD_INTEREST_NOTIFICATION,
self::AD_PENDING_AUTHORIZATION,
self::AD_PENDING_BY_ADMIN_AUTHORIZATION,
self::AD_QUESTION_ANSWERED,
self::AD_QUESTION_CREATED,
self::AD_REJECTED,
self::ALL_NON_SMS_PERFORMED_PAYMENTS,
self::APPLICATION_ERROR,
self::ARTICLE_OUT_OF_STOCK,
self::AUTHORIZED_PAYMENT_CANCELED,
self::AUTHORIZED_PAYMENT_DENIED,
self::AUTHORIZED_PAYMENT_EXPIRED,
self::AUTHORIZED_PAYMENT_SUCCEEDED,
self::BOUGHT_VOUCHERS_ABOUT_TO_EXPIRE,
self::BOUGHT_VOUCHERS_EXPIRATION_DATE_CHANGED,
self::BOUGHT_VOUCHERS_EXPIRED,
self::BROKER_ASSIGNED,
self::BROKER_UNASSIGNED,
self::EXTERNAL_PAYMENT_EXPIRED,
self::EXTERNAL_PAYMENT_PERFORMED_FAILED,
self::EXTERNAL_PAYMENT_RECEIVED_FAILED,
self::EXTERNAL_USER_PAYMENT_EXPIRED,
self::EXTERNAL_USER_PAYMENT_PERFORMED_FAILED,
self::FEEDBACK_CHANGED,
self::FEEDBACK_CREATED,
self::FEEDBACK_EXPIRATION_REMINDER,
self::FEEDBACK_OPTIONAL,
self::FEEDBACK_REPLY_CREATED,
self::FEEDBACK_REQUIRED,
self::GENERATED_VOUCHERS_ABOUT_TO_EXPIRE,
self::GENERATED_VOUCHERS_EXPIRED,
self::INCOMING_RECURRING_PAYMENT_CANCELED,
self::INCOMING_RECURRING_PAYMENT_FAILED,
self::INCOMING_RECURRING_PAYMENT_RECEIVED,
self::INCOMING_SCHEDULED_PAYMENT_CANCELED,
self::INCOMING_SCHEDULED_PAYMENT_FAILED,
self::INCOMING_SCHEDULED_PAYMENT_RECEIVED,
self::LIMIT_CHANGE,
self::LOW_STOCK_QUANTITY,
self::MAX_SMS_PER_MONTH_REACHED,
self::MEMBER_ASSIGNED,
self::MEMBER_UNASSIGNED,
self::NETWORK_CREATED,
self::NEW_TOKEN,
self::NEW_TOKEN_PENDING_ACTIVATION,
self::OPERATOR_AUTHORIZED_PAYMENT_APPROVED_STILL_PENDING,
self::OPERATOR_AUTHORIZED_PAYMENT_CANCELED,
self::OPERATOR_AUTHORIZED_PAYMENT_DENIED,
self::OPERATOR_AUTHORIZED_PAYMENT_EXPIRED,
self::OPERATOR_AUTHORIZED_PAYMENT_SUCCEEDED,
self::OPERATOR_PAYMENT_AWAITING_AUTHORIZATION,
self::ORDER_CANCELED_BUYER,
self::ORDER_CANCELED_SELLER,
self::ORDER_CREATED,
self::ORDER_PAYMENT_CANCELED_BUYER,
self::ORDER_PAYMENT_CANCELED_SELLER,
self::ORDER_PAYMENT_DENIED_BUYER,
self::ORDER_PAYMENT_DENIED_SELLER,
self::ORDER_PAYMENT_EXPIRED_BUYER,
self::ORDER_PAYMENT_EXPIRED_SELLER,
self::ORDER_PENDING_AUTHORIZATION_BUYER,
self::ORDER_PENDING_AUTHORIZATION_SELLER,
self::ORDER_PENDING_BUYER,
self::ORDER_PENDING_DELIVERY_DATA_BUYER,
self::ORDER_PENDING_DELIVERY_DATA_SELLER,
self::ORDER_REALIZED_BUYER,
self::ORDER_REALIZED_SELLER,
self::ORDER_REJECTED_BY_BUYER,
self::ORDER_REJECTED_BY_SELLER,
self::PASSWORD_STATUS_CHANGED,
self::PAYMENT_AWAITING_ADMIN_AUTHORIZATION,
self::PAYMENT_AWAITING_AUTHORIZATION,
self::PAYMENT_PERFORMED,
self::PAYMENT_RECEIVED,
self::PAYMENT_REQUEST_CANCELED,
self::PAYMENT_REQUEST_DENIED,
self::PAYMENT_REQUEST_EXPIRATION_DATE_CHANGED,
self::PAYMENT_REQUEST_EXPIRED,
self::PAYMENT_REQUEST_PROCESSED,
self::PAYMENT_REQUEST_RECEIVED,
self::RECURRING_PAYMENT_FAILED,
self::RECURRING_PAYMENT_OCCURRENCE_PROCESSED,
self::REFERENCE_CHANGED,
self::REFERENCE_CREATED,
self::SALE_PENDING_BUYER,
self::SALE_REALIZED_BUYER,
self::SALE_REJECTED_SELLER,
self::SCHEDULED_PAYMENT_FAILED,
self::SCHEDULED_PAYMENT_INSTALLMENT_PROCESSED,
self::SCHEDULED_PAYMENT_REQUEST_FAILED,
self::SENT_PAYMENT_REQUEST_EXPIRATION_DATE_CHANGED,
self::SMS_PERFORMED_PAYMENT,
self::SYSTEM_ALERT,
self::TICKET_WEBHOOK_FAILED,
self::TOKEN_STATUS_CHANGED,
self::USER_ALERT,
self::USER_IMPORT,
self::USER_REGISTRATION,
self::USER_STATUS_CHANGED,
self::VOUCHER_BUYING_ABOUT_TO_EXPIRE,        ];
    }
}
