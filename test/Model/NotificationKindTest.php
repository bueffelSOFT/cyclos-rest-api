<?php
/**
 * NotificationKindTest
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
 * Please update the test case below to test the model.
 */

namespace Cyclos\Api;

/**
 * NotificationKindTest Class Doc Comment
 *
 * @category    Class
 * @description Indicates a kind of notification Possible values are: - &#x60;accountAllNonSmsPerformedPayments&#x60;: A payment was performed - &#x60;accountAuthorizedPaymentCanceled&#x60;: The authorization process of a payment was canceled - &#x60;accountAuthorizedPaymentDenied&#x60;: A payment pending authorization was denied - &#x60;accountAuthorizedPaymentExpired&#x60;: The authorization process of a payment has expired - &#x60;accountAuthorizedPaymentSucceeded&#x60;: A payment pending authorization was processed - &#x60;accountBoughtVouchersAboutToExpire&#x60;: One or more bought vouchers are about to expire - &#x60;accountBoughtVouchersExpirationDateChanged&#x60;: The expiration date of a bought voucher was changed - &#x60;accountBoughtVouchersExpired&#x60;: One or more bought vouchers have expired - &#x60;accountExternalPaymentExpired&#x60;: A performed external payment has expired - &#x60;accountExternalPaymentPerformedFailed&#x60;: A performed external payment has failed - &#x60;accountExternalPaymentReceivedFailed&#x60;: A received external payment has failed - &#x60;accountIncomingRecurringPaymentCanceled&#x60;: An incoming recurring payment was canceled - &#x60;accountIncomingRecurringPaymentFailed&#x60;: An incoming recurring payment processing has failed - &#x60;accountIncomingRecurringPaymentReceived&#x60;: A recurring payment was received - &#x60;accountIncomingScheduledPaymentCanceled&#x60;: An incoming scheduled payment processing has canceled - &#x60;accountIncomingScheduledPaymentFailed&#x60;: An incoming scheduled payment processing has failed - &#x60;accountIncomingScheduledPaymentReceived&#x60;: A scheduled payment was received - &#x60;accountLimitChange&#x60;: The account balance limit was changed by the administration - &#x60;accountOperatorAuthorizedPaymentApprovedStillPending&#x60;: A payment performed by an operator was approved, but still needs administration authorization - &#x60;accountOperatorAuthorizedPaymentCanceled&#x60;: A payment performed by an operator had the authorization process canceled - &#x60;accountOperatorAuthorizedPaymentDenied&#x60;: A payment performed by an operator was denied - &#x60;accountOperatorAuthorizedPaymentExpired&#x60;: A payment performed by an operator had the authorization process expired - &#x60;accountOperatorAuthorizedPaymentSucceeded&#x60;: A payment performed by an operator was processed - &#x60;accountOperatorPaymentAwaitingAuthorization&#x60;: A payment performed by an operator needs my authorization - &#x60;accountPaymentAwaitingAuthorization&#x60;: A payment is awaiting my authorization - &#x60;accountPaymentReceived&#x60;: A payment was received - &#x60;accountPaymentRequestCanceled&#x60;: A sent payment request was canceled - &#x60;accountPaymentRequestDenied&#x60;: A sent payment request was denied - &#x60;accountPaymentRequestExpirationDateChanged&#x60;: An incoming payment request had its expiration date changed - &#x60;accountPaymentRequestExpired&#x60;: A sent payment request has expired - &#x60;accountPaymentRequestProcessed&#x60;: A sent payment request was processed - &#x60;accountPaymentRequestReceived&#x60;: A payment was requested - &#x60;accountRecurringPaymentFailed&#x60;: The processing of a recurring payment has failed - &#x60;accountRecurringPaymentOccurrenceProcessed&#x60;: A recurring payment processing was processed - &#x60;accountScheduledPaymentFailed&#x60;: The processing of a scheduled payment has failed - &#x60;accountScheduledPaymentInstallmentProcessed&#x60;: A scheduled payment was processed - &#x60;accountScheduledPaymentRequestFailed&#x60;: A scheduled payment request has failed and was reopened - &#x60;accountSentPaymentRequestExpirationDateChanged&#x60;: A sent payment request had its expiration date changed - &#x60;accountSmsPerformedPayment&#x60;: A payment was performed by SMS - &#x60;accountTicketWebhookFailed&#x60;: The webhook processing for a ticket has failed - &#x60;adminAdPendingAuthorization&#x60;: A new advertisement was created, and it is pending administrator authorization - &#x60;adminApplicationError&#x60;: A new application error was generated - &#x60;adminExternalPaymentExpired&#x60;: An external payment has expired without the destination user being registered - &#x60;adminExternalPaymentPerformedFailed&#x60;: An external payment has failed processing - &#x60;adminGeneratedVouchersAboutToExpire&#x60;: One or more generated vouchers are about to expire - &#x60;adminGeneratedVouchersExpired&#x60;: One or more generated vouchers have expired - &#x60;adminNetworkCreated&#x60;: A new network has been created - &#x60;adminPaymentAwaitingAuthorization&#x60;: A payment is awaiting the administrator authorization - &#x60;adminPaymentPerformed&#x60;: A payment was performed - &#x60;adminSystemAlert&#x60;: A new system alert was generated - &#x60;adminUserAlert&#x60;: A new user alert was generated - &#x60;adminUserImportRegistration&#x60;: An import of users has finished processing - &#x60;adminUserRegistration&#x60;: A new user has been registered - &#x60;adminVoucherBuyingAboutToExpire&#x60;: Buying in a voucher type is about to expire - &#x60;brokeringAdPendingAuthorization&#x60;: A new advertisement from an assigned member needs authorization - &#x60;brokeringMemberAssigned&#x60;: A new member was unassigned from me as broker - &#x60;brokeringMemberUnassigned&#x60;: A new member was assigned to me as broker - &#x60;buyerAdInterestNotification&#x60;: A new advertisement was published, matching one of my advertisement interests - &#x60;buyerAdQuestionAnswered&#x60;: An advertisement question I&#x27;ve asked was answered - &#x60;buyerOrderCanceled&#x60;: A web-shop order was canceled - &#x60;buyerOrderPaymentCanceled&#x60;: The payment for a web-shop purchase had the authorization process canceled - &#x60;buyerOrderPaymentDenied&#x60;: The payment for a web-shop purchase was denied authorization - &#x60;buyerOrderPaymentExpired&#x60;: The payment for a web-shop purchase was expired without being authorized - &#x60;buyerOrderPending&#x60;: A web-shop order is pending my approval - &#x60;buyerOrderPendingAuthorization&#x60;: A web-shop order is pending authorization - &#x60;buyerOrderPendingDeliveryData&#x60;: A web-shop order needs me to fill its delivery information - &#x60;buyerOrderProcessedBySeller&#x60;: A web-shop order was processed by the seller - &#x60;buyerOrderRejectedBySeller&#x60;: A web-shop order was rejected by the seller - &#x60;buyerSalePending&#x60;: A web-shop order is pending seller&#x27;s approval - &#x60;buyerSaleRejectedBySeller&#x60;: A web-shop sale order was rejected by the seller - &#x60;feedbackChanged&#x60;: A feedback for a sale was changed - &#x60;feedbackCreated&#x60;: A feedback for a sale was created - &#x60;feedbackExpirationReminder&#x60;: Reminder to supply feedback for a purchase - &#x60;feedbackOptional&#x60;: I can optionally supply feedback for a purchase - &#x60;feedbackReplyCreated&#x60;: A feedback for a purchase was replied - &#x60;feedbackRequired&#x60;: I have to supply feedback for a purchase - &#x60;personalBrokerAssigned&#x60;: A broker was assigned to the user - &#x60;personalBrokerUnassigned&#x60;: A broker was unassigned from the user - &#x60;personalMaxSmsPerMonthReached&#x60;: The user has reached the maximum number of monthly SMS messages - &#x60;personalNewToken&#x60;: A new token (card) was assigned - &#x60;personalNewTokenPendingActivation&#x60;: a new token (card) is pending activation - &#x60;personalPasswordStatusChanged&#x60;: The status of a password has changed - &#x60;personalTokenStatusChanged&#x60;: The status of a token has changed - &#x60;personalUserStatusChanged&#x60;: The user status has changed - &#x60;referenceChanged&#x60;: A personal reference was changed - &#x60;referenceCreated&#x60;: A new personal reference was created - &#x60;sellerAdAuthorized&#x60;: An advertisement was authorized by the administration - &#x60;sellerAdExpired&#x60;: An advertisement publication period has expired - &#x60;sellerAdLowStock&#x60;: A web-shop advertisement&#x27;s stock quantity is low - &#x60;sellerAdOutOfStock&#x60;: A given web-shop advertisement is out of stock - &#x60;sellerAdQuestionCreated&#x60;: A question to an advertisement was created - &#x60;sellerAdRejected&#x60;: An advertisement was rejected by the administration - &#x60;sellerOrderCanceled&#x60;: A web-shop order was canceled - &#x60;sellerOrderCreated&#x60;: A web-shop order was created - &#x60;sellerOrderPaymentCanceled&#x60;: The payment for a web-shop order had the authorization process canceled - &#x60;sellerOrderPaymentDenied&#x60;: The payment for a web-shop order was denied authorization - &#x60;sellerOrderPaymentExpired&#x60;: The payment for a web-shop order was expired without being authorized - &#x60;sellerOrderPendingAuthorization&#x60;: A web-shop order is pending authorization - &#x60;sellerOrderPendingDeliveryData&#x60;: A web-shop order is pending delivery information - &#x60;sellerOrderProcessedByBuyer&#x60;: A web-shop order was fulfilled by the buyer - &#x60;sellerOrderRejectedByBuyer&#x60;: A web-shop order was rejected by the buyer - &#x60;sellerSaleProcessedByBuyer&#x60;: A web-shop sale order was fulfilled by the buyer
 * @package     Cyclos\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotificationKindTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "NotificationKind"
     */
    public function testNotificationKind()
    {
    }
}
