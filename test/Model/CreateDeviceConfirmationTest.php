<?php
/**
 * CreateDeviceConfirmationTest
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
 * CreateDeviceConfirmationTest Class Doc Comment
 *
 * @category    Class
 * @description Contains data for create a pending device confirmation.
 * @package     Cyclos\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateDeviceConfirmationTest extends \PHPUnit_Framework_TestCase
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
     * Test "CreateDeviceConfirmation"
     */
    public function testCreateDeviceConfirmation()
    {
    }

    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
    }

    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
    }

    /**
     * Test attribute "to_principal"
     */
    public function testPropertyToPrincipal()
    {
    }

    /**
     * Test attribute "payment_type"
     */
    public function testPropertyPaymentType()
    {
    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
    }

    /**
     * Test attribute "transaction"
     */
    public function testPropertyTransaction()
    {
    }

    /**
     * Test attribute "transfer"
     */
    public function testPropertyTransfer()
    {
    }

    /**
     * Test attribute "account"
     */
    public function testPropertyAccount()
    {
    }

    /**
     * Test attribute "installment"
     */
    public function testPropertyInstallment()
    {
    }

    /**
     * Test attribute "failed_occurrence"
     */
    public function testPropertyFailedOccurrence()
    {
    }

    /**
     * Test attribute "client"
     */
    public function testPropertyClient()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
    }

    /**
     * Test attribute "external_payment_action"
     */
    public function testPropertyExternalPaymentAction()
    {
    }

    /**
     * Test attribute "scheduled_payment_action"
     */
    public function testPropertyScheduledPaymentAction()
    {
    }

    /**
     * Test attribute "recurring_payment_action"
     */
    public function testPropertyRecurringPaymentAction()
    {
    }

    /**
     * Test attribute "installment_action"
     */
    public function testPropertyInstallmentAction()
    {
    }

    /**
     * Test attribute "failed_occurrence_action"
     */
    public function testPropertyFailedOccurrenceAction()
    {
    }

    /**
     * Test attribute "authorization_action"
     */
    public function testPropertyAuthorizationAction()
    {
    }

    /**
     * Test attribute "payment_request_action"
     */
    public function testPropertyPaymentRequestAction()
    {
    }

    /**
     * Test attribute "client_action"
     */
    public function testPropertyClientAction()
    {
    }

    /**
     * Test attribute "operation"
     */
    public function testPropertyOperation()
    {
    }

    /**
     * Test attribute "password_type"
     */
    public function testPropertyPasswordType()
    {
    }

    /**
     * Test attribute "seller"
     */
    public function testPropertySeller()
    {
    }

    /**
     * Test attribute "order"
     */
    public function testPropertyOrder()
    {
    }

    /**
     * Test attribute "voucher"
     */
    public function testPropertyVoucher()
    {
    }

    /**
     * Test attribute "voucher_action"
     */
    public function testPropertyVoucherAction()
    {
    }

    /**
     * Test attribute "voucher_type"
     */
    public function testPropertyVoucherType()
    {
    }

    /**
     * Test attribute "number_of_vouchers"
     */
    public function testPropertyNumberOfVouchers()
    {
    }
}
