<?php
/**
 * TicketProcessResult
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
 * TicketProcessResult Class Doc Comment
 *
 * @category Class
 * @description Ticket process result.
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TicketProcessResult extends Entity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TicketProcessResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ticket_number' => 'string',
'actually_processed' => 'bool',
'transaction' => ''    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ticket_number' => null,
'actually_processed' => null,
'transaction' => null    ];

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
        'ticket_number' => 'ticketNumber',
'actually_processed' => 'actuallyProcessed',
'transaction' => 'transaction'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ticket_number' => 'setTicketNumber',
'actually_processed' => 'setActuallyProcessed',
'transaction' => 'setTransaction'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ticket_number' => 'getTicketNumber',
'actually_processed' => 'getActuallyProcessed',
'transaction' => 'getTransaction'    ];

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

        $this->container['ticket_number'] = isset($data['ticket_number']) ? $data['ticket_number'] : null;
        $this->container['actually_processed'] = isset($data['actually_processed']) ? $data['actually_processed'] : null;
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
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
     * Gets ticket_number
     *
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->container['ticket_number'];
    }

    /**
     * Sets ticket_number
     *
     * @param string $ticket_number The ticket number identifier.
     *
     * @return $this
     */
    public function setTicketNumber($ticket_number)
    {
        $this->container['ticket_number'] = $ticket_number;

        return $this;
    }

    /**
     * Gets actually_processed
     *
     * @return bool
     */
    public function getActuallyProcessed()
    {
        return $this->container['actually_processed'];
    }

    /**
     * Sets actually_processed
     *
     * @param bool $actually_processed Flag indicating if the ticket was processed by this invocation or the ticket was already processed in a previous invocation. This will only  be true for the first invocation of the `process` service method.
     *
     * @return $this
     */
    public function setActuallyProcessed($actually_processed)
    {
        $this->container['actually_processed'] = $actually_processed;

        return $this;
    }

    /**
     * Gets transaction
     *
     * @return 
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param  $transaction The generated payment.
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

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
