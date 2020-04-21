<?php
/**
 * BaseTransactionQueryFilters
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
 * BaseTransactionQueryFilters Class Doc Comment
 *
 * @category Class
 * @description Base query filters for transactions
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BaseTransactionQueryFilters extends BaseTransQueryFilters 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BaseTransactionQueryFilters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kinds' => '\Cyclos\Api\Model\TransactionKind[]',
'authorized' => 'bool',
'authorization_statuses' => '\Cyclos\Api\Model\TransactionAuthorizationStatusEnum[]',
'authorization_performed_by' => 'string',
'ticket_statuses' => '\Cyclos\Api\Model\TicketStatusEnum[]',
'recurring_payment_statuses' => '\Cyclos\Api\Model\RecurringPaymentStatusEnum[]',
'scheduled_payment_statuses' => '\Cyclos\Api\Model\ScheduledPaymentStatusEnum[]',
'payment_request_statuses' => '\Cyclos\Api\Model\PaymentRequestStatusEnum[]',
'payment_request_expiration' => '\DateTime[]',
'external_payment_statuses' => '\Cyclos\Api\Model\ExternalPaymentStatusEnum[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kinds' => null,
'authorized' => null,
'authorization_statuses' => null,
'authorization_performed_by' => null,
'ticket_statuses' => null,
'recurring_payment_statuses' => null,
'scheduled_payment_statuses' => null,
'payment_request_statuses' => null,
'payment_request_expiration' => 'date-time',
'external_payment_statuses' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'kinds' => 'kinds',
'authorized' => 'authorized',
'authorization_statuses' => 'authorizationStatuses',
'authorization_performed_by' => 'authorizationPerformedBy',
'ticket_statuses' => 'ticketStatuses',
'recurring_payment_statuses' => 'recurringPaymentStatuses',
'scheduled_payment_statuses' => 'scheduledPaymentStatuses',
'payment_request_statuses' => 'paymentRequestStatuses',
'payment_request_expiration' => 'paymentRequestExpiration',
'external_payment_statuses' => 'externalPaymentStatuses'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kinds' => 'setKinds',
'authorized' => 'setAuthorized',
'authorization_statuses' => 'setAuthorizationStatuses',
'authorization_performed_by' => 'setAuthorizationPerformedBy',
'ticket_statuses' => 'setTicketStatuses',
'recurring_payment_statuses' => 'setRecurringPaymentStatuses',
'scheduled_payment_statuses' => 'setScheduledPaymentStatuses',
'payment_request_statuses' => 'setPaymentRequestStatuses',
'payment_request_expiration' => 'setPaymentRequestExpiration',
'external_payment_statuses' => 'setExternalPaymentStatuses'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kinds' => 'getKinds',
'authorized' => 'getAuthorized',
'authorization_statuses' => 'getAuthorizationStatuses',
'authorization_performed_by' => 'getAuthorizationPerformedBy',
'ticket_statuses' => 'getTicketStatuses',
'recurring_payment_statuses' => 'getRecurringPaymentStatuses',
'scheduled_payment_statuses' => 'getScheduledPaymentStatuses',
'payment_request_statuses' => 'getPaymentRequestStatuses',
'payment_request_expiration' => 'getPaymentRequestExpiration',
'external_payment_statuses' => 'getExternalPaymentStatuses'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['kinds'] = isset($data['kinds']) ? $data['kinds'] : null;
        $this->container['authorized'] = isset($data['authorized']) ? $data['authorized'] : null;
        $this->container['authorization_statuses'] = isset($data['authorization_statuses']) ? $data['authorization_statuses'] : null;
        $this->container['authorization_performed_by'] = isset($data['authorization_performed_by']) ? $data['authorization_performed_by'] : null;
        $this->container['ticket_statuses'] = isset($data['ticket_statuses']) ? $data['ticket_statuses'] : null;
        $this->container['recurring_payment_statuses'] = isset($data['recurring_payment_statuses']) ? $data['recurring_payment_statuses'] : null;
        $this->container['scheduled_payment_statuses'] = isset($data['scheduled_payment_statuses']) ? $data['scheduled_payment_statuses'] : null;
        $this->container['payment_request_statuses'] = isset($data['payment_request_statuses']) ? $data['payment_request_statuses'] : null;
        $this->container['payment_request_expiration'] = isset($data['payment_request_expiration']) ? $data['payment_request_expiration'] : null;
        $this->container['external_payment_statuses'] = isset($data['external_payment_statuses']) ? $data['external_payment_statuses'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets kinds
     *
     * @return \Cyclos\Api\Model\TransactionKind[]
     */
    public function getKinds()
    {
        return $this->container['kinds'];
    }

    /**
     * Sets kinds
     *
     * @param \Cyclos\Api\Model\TransactionKind[] $kinds kinds
     *
     * @return $this
     */
    public function setKinds($kinds)
    {
        $this->container['kinds'] = $kinds;

        return $this;
    }

    /**
     * Gets authorized
     *
     * @return bool
     */
    public function getAuthorized()
    {
        return $this->container['authorized'];
    }

    /**
     * Sets authorized
     *
     * @param bool $authorized When set, will only return transactions that went through the authorization process (if true) or that never went through it (when false). In either case, only kinds that can go through authorization are returned (`payment`, `order`, `recurringPayment` or `scheduledPayment`).
     *
     * @return $this
     */
    public function setAuthorized($authorized)
    {
        $this->container['authorized'] = $authorized;

        return $this;
    }

    /**
     * Gets authorization_statuses
     *
     * @return \Cyclos\Api\Model\TransactionAuthorizationStatusEnum[]
     */
    public function getAuthorizationStatuses()
    {
        return $this->container['authorization_statuses'];
    }

    /**
     * Sets authorization_statuses
     *
     * @param \Cyclos\Api\Model\TransactionAuthorizationStatusEnum[] $authorization_statuses Authorization statuses used as search criteria. When set, only kinds that can go through authorization are returned (`payment`, `order`, `recurringPayment` or `scheduledPayment`).
     *
     * @return $this
     */
    public function setAuthorizationStatuses($authorization_statuses)
    {
        $this->container['authorization_statuses'] = $authorization_statuses;

        return $this;
    }

    /**
     * Gets authorization_performed_by
     *
     * @return string
     */
    public function getAuthorizationPerformedBy()
    {
        return $this->container['authorization_performed_by'];
    }

    /**
     * Sets authorization_performed_by
     *
     * @param string $authorization_performed_by Id or other identifier (login name, email, etc) of the user that performed an authorization action (authorize, deny or cancel).
     *
     * @return $this
     */
    public function setAuthorizationPerformedBy($authorization_performed_by)
    {
        $this->container['authorization_performed_by'] = $authorization_performed_by;

        return $this;
    }

    /**
     * Gets ticket_statuses
     *
     * @return \Cyclos\Api\Model\TicketStatusEnum[]
     */
    public function getTicketStatuses()
    {
        return $this->container['ticket_statuses'];
    }

    /**
     * Sets ticket_statuses
     *
     * @param \Cyclos\Api\Model\TicketStatusEnum[] $ticket_statuses Statuses used as search criteria applied only to transactions of kind `ticket`.
     *
     * @return $this
     */
    public function setTicketStatuses($ticket_statuses)
    {
        $this->container['ticket_statuses'] = $ticket_statuses;

        return $this;
    }

    /**
     * Gets recurring_payment_statuses
     *
     * @return \Cyclos\Api\Model\RecurringPaymentStatusEnum[]
     */
    public function getRecurringPaymentStatuses()
    {
        return $this->container['recurring_payment_statuses'];
    }

    /**
     * Sets recurring_payment_statuses
     *
     * @param \Cyclos\Api\Model\RecurringPaymentStatusEnum[] $recurring_payment_statuses Statuses used as search criteria applied only to transactions of kind `recurringPayment`. If this filter is not empty then pending recurring payments will be excluded from the result. Pending recurring payments does not have a status.
     *
     * @return $this
     */
    public function setRecurringPaymentStatuses($recurring_payment_statuses)
    {
        $this->container['recurring_payment_statuses'] = $recurring_payment_statuses;

        return $this;
    }

    /**
     * Gets scheduled_payment_statuses
     *
     * @return \Cyclos\Api\Model\ScheduledPaymentStatusEnum[]
     */
    public function getScheduledPaymentStatuses()
    {
        return $this->container['scheduled_payment_statuses'];
    }

    /**
     * Sets scheduled_payment_statuses
     *
     * @param \Cyclos\Api\Model\ScheduledPaymentStatusEnum[] $scheduled_payment_statuses Statuses used as search criteria applied only to transactions of kind `scheduledPayment`. If this filter is not empty then pending scheduled payments will be excluded from the result. Pending scheduled payments does not have a status.
     *
     * @return $this
     */
    public function setScheduledPaymentStatuses($scheduled_payment_statuses)
    {
        $this->container['scheduled_payment_statuses'] = $scheduled_payment_statuses;

        return $this;
    }

    /**
     * Gets payment_request_statuses
     *
     * @return \Cyclos\Api\Model\PaymentRequestStatusEnum[]
     */
    public function getPaymentRequestStatuses()
    {
        return $this->container['payment_request_statuses'];
    }

    /**
     * Sets payment_request_statuses
     *
     * @param \Cyclos\Api\Model\PaymentRequestStatusEnum[] $payment_request_statuses Statuses used as search criteria applied only to transactions of kind `paymentRequest`.
     *
     * @return $this
     */
    public function setPaymentRequestStatuses($payment_request_statuses)
    {
        $this->container['payment_request_statuses'] = $payment_request_statuses;

        return $this;
    }

    /**
     * Gets payment_request_expiration
     *
     * @return \DateTime[]
     */
    public function getPaymentRequestExpiration()
    {
        return $this->container['payment_request_expiration'];
    }

    /**
     * Sets payment_request_expiration
     *
     * @param \DateTime[] $payment_request_expiration The minimum / maximum date for payment request expiration. Only affects payment requests. Is expressed an array, with the lower bound as first element, and the upper bound as second element. When only one element, will have just the lower bound. To specify only the upper bound, prefix the value with a comma.
     *
     * @return $this
     */
    public function setPaymentRequestExpiration($payment_request_expiration)
    {
        $this->container['payment_request_expiration'] = $payment_request_expiration;

        return $this;
    }

    /**
     * Gets external_payment_statuses
     *
     * @return \Cyclos\Api\Model\ExternalPaymentStatusEnum[]
     */
    public function getExternalPaymentStatuses()
    {
        return $this->container['external_payment_statuses'];
    }

    /**
     * Sets external_payment_statuses
     *
     * @param \Cyclos\Api\Model\ExternalPaymentStatusEnum[] $external_payment_statuses Statuses used as search criteria applied only to transactions of kind `externalPayment`.
     *
     * @return $this
     */
    public function setExternalPaymentStatuses($external_payment_statuses)
    {
        $this->container['external_payment_statuses'] = $external_payment_statuses;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
