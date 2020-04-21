<?php
/**
 * PerformPaymentTest
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
 * PerformPaymentTest Class Doc Comment
 *
 * @category    Class
 * @description Definitions used to perform either a direct, scheduled or recurring payment. Regarding scheduling, the &#x60;scheduling&#x60; field must be set if some scheduling option (other than direct payment) is desired. The scheduling possibilities are:  - Direct payment: For a direct payment, leave empty the &#x60;scheduling&#x60;   field or set it to &#x60;direct&#x60;;  - Single future payment: For a payment scheduled to a future date, set   the &#x60;scheduling&#x60; field to &#x60;scheduled&#x60; and set   the &#x60;firstDueDate&#x60; property with the desired due date;  - Multiple installments, being the first immediately and the rest with   regular 1 month interval in-between: For this, set the &#x60;scheduling&#x60; field   to &#x60;scheduled&#x60; and the &#x60;installmentsCount&#x60; to   a value greater than 1;  - Multiple installments, starting at a specific date, with other   installments with regular 1 month interval in-between: For this, set the   &#x60;scheduling&#x60; field to &#x60;scheduled&#x60;, the   &#x60;installmentsCount&#x60; to a value greater than 1 and the   &#x60;firstInstallmentDate&#x60; with a future date;  - Custom installments: For a full control on the generated installments,   set the &#x60;scheduling&#x60; field to &#x60;scheduled&#x60;   and pass in the &#x60;installments&#x60; array. However, there are some rules:    - The total amount must be equals the sum of all installment amounts;    - The first due date must be in the future;    - The due dates of all installments must be in ascending order;    - There must be at least one day between distinct due dates.  - Recurring payment with the first payment immediately, the others at fixed   future dates: This can be achieved by setting the &#x60;scheduling&#x60; field to   &#x60;recurring&#x60; and leaving blank the   &#x60;firstOccurrenceDate&#x60;. It is possible to schedule a limited number of   occurrences, by setting &#x60;occurrencesCount&#x60;, or until it is manually   canceled, by leaving &#x60;occurrencesCount&#x60; empty. Also, it is possible to   customize the interval (default is 1 month) between each occurrence, by   setting the &#x60;occurrenceInterval&#x60; field.  - Recurring payment starting in a future date: This can be achieved by   setting the &#x60;scheduling&#x60; field to &#x60;recurring&#x60;   and setting the &#x60;firstOccurrenceDate&#x60;. The other options, the fixed number   of occurrences (&#x60;occurrencesCount&#x60;) and interval between each occurrence   (&#x60;occurrenceInterval&#x60;) can be set just like the case above.
 * @package     Cyclos\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PerformPaymentTest extends \PHPUnit_Framework_TestCase
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
     * Test "PerformPayment"
     */
    public function testPerformPayment()
    {
    }

    /**
     * Test attribute "installments_count"
     */
    public function testPropertyInstallmentsCount()
    {
    }

    /**
     * Test attribute "first_installment_date"
     */
    public function testPropertyFirstInstallmentDate()
    {
    }

    /**
     * Test attribute "installments"
     */
    public function testPropertyInstallments()
    {
    }

    /**
     * Test attribute "occurrences_count"
     */
    public function testPropertyOccurrencesCount()
    {
    }

    /**
     * Test attribute "first_occurrence_date"
     */
    public function testPropertyFirstOccurrenceDate()
    {
    }

    /**
     * Test attribute "occurrence_interval"
     */
    public function testPropertyOccurrenceInterval()
    {
    }

    /**
     * Test attribute "nfc_challence"
     */
    public function testPropertyNfcChallence()
    {
    }

    /**
     * Test attribute "scheduling"
     */
    public function testPropertyScheduling()
    {
    }
}
