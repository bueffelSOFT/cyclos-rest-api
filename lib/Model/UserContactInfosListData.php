<?php
/**
 * UserContactInfosListData
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

use \ArrayAccess;
use \Cyclos\Api\ObjectSerializer;

/**
 * UserContactInfosListData Class Doc Comment
 *
 * @category Class
 * @description Contains, besides the user&#x27;s additional contact informations, data for managing them
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserContactInfosListData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserContactInfosListData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can_manage' => 'bool',
'can_create' => 'bool',
'max_contact_infos' => 'int',
'custom_fields' => '\Cyclos\Api\Model\CustomFieldDetailed[]',
'contact_infos' => '\Cyclos\Api\Model\ContactInfoResult[]',
'availability' => '\Cyclos\Api\Model\AvailabilityEnum'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can_manage' => null,
'can_create' => null,
'max_contact_infos' => null,
'custom_fields' => null,
'contact_infos' => null,
'availability' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'can_manage' => 'canManage',
'can_create' => 'canCreate',
'max_contact_infos' => 'maxContactInfos',
'custom_fields' => 'customFields',
'contact_infos' => 'contactInfos',
'availability' => 'availability'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_manage' => 'setCanManage',
'can_create' => 'setCanCreate',
'max_contact_infos' => 'setMaxContactInfos',
'custom_fields' => 'setCustomFields',
'contact_infos' => 'setContactInfos',
'availability' => 'setAvailability'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_manage' => 'getCanManage',
'can_create' => 'getCanCreate',
'max_contact_infos' => 'getMaxContactInfos',
'custom_fields' => 'getCustomFields',
'contact_infos' => 'getContactInfos',
'availability' => 'getAvailability'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['can_manage'] = isset($data['can_manage']) ? $data['can_manage'] : null;
        $this->container['can_create'] = isset($data['can_create']) ? $data['can_create'] : null;
        $this->container['max_contact_infos'] = isset($data['max_contact_infos']) ? $data['max_contact_infos'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['contact_infos'] = isset($data['contact_infos']) ? $data['contact_infos'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets can_manage
     *
     * @return bool
     */
    public function getCanManage()
    {
        return $this->container['can_manage'];
    }

    /**
     * Sets can_manage
     *
     * @param bool $can_manage Indicates whether the additional contact informations can be managed by the authenticated user
     *
     * @return $this
     */
    public function setCanManage($can_manage)
    {
        $this->container['can_manage'] = $can_manage;

        return $this;
    }

    /**
     * Gets can_create
     *
     * @return bool
     */
    public function getCanCreate()
    {
        return $this->container['can_create'];
    }

    /**
     * Sets can_create
     *
     * @param bool $can_create Indicates whether new additional contact informations can be created by the authenticated user
     *
     * @return $this
     */
    public function setCanCreate($can_create)
    {
        $this->container['can_create'] = $can_create;

        return $this;
    }

    /**
     * Gets max_contact_infos
     *
     * @return int
     */
    public function getMaxContactInfos()
    {
        return $this->container['max_contact_infos'];
    }

    /**
     * Sets max_contact_infos
     *
     * @param int $max_contact_infos Indicates the maximum number of additional contact informations the user can have
     *
     * @return $this
     */
    public function setMaxContactInfos($max_contact_infos)
    {
        $this->container['max_contact_infos'] = $max_contact_infos;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \Cyclos\Api\Model\CustomFieldDetailed[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \Cyclos\Api\Model\CustomFieldDetailed[] $custom_fields The list of additional contact informations custom fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets contact_infos
     *
     * @return \Cyclos\Api\Model\ContactInfoResult[]
     */
    public function getContactInfos()
    {
        return $this->container['contact_infos'];
    }

    /**
     * Sets contact_infos
     *
     * @param \Cyclos\Api\Model\ContactInfoResult[] $contact_infos The additional contact information list
     *
     * @return $this
     */
    public function setContactInfos($contact_infos)
    {
        $this->container['contact_infos'] = $contact_infos;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return \Cyclos\Api\Model\AvailabilityEnum
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \Cyclos\Api\Model\AvailabilityEnum $availability availability
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

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
