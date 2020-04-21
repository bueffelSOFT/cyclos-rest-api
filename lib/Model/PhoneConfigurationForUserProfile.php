<?php
/**
 * PhoneConfigurationForUserProfile
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
 * PhoneConfigurationForUserProfile Class Doc Comment
 *
 * @category Class
 * @description Contains extended phone configuration for a user profile
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhoneConfigurationForUserProfile extends PhoneConfiguration 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PhoneConfigurationForUserProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mobile_phone' => '',
'land_line_phone' => '',
'edit' => 'bool',
'manage_privacy' => 'bool',
'max_land_lines' => 'int',
'max_mobiles' => 'int',
'mobile_availability' => '\Cyclos\Api\Model\AvailabilityEnum',
'land_line_availability' => '\Cyclos\Api\Model\AvailabilityEnum'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mobile_phone' => null,
'land_line_phone' => null,
'edit' => null,
'manage_privacy' => null,
'max_land_lines' => null,
'max_mobiles' => null,
'mobile_availability' => null,
'land_line_availability' => null    ];

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
        'mobile_phone' => 'mobilePhone',
'land_line_phone' => 'landLinePhone',
'edit' => 'edit',
'manage_privacy' => 'managePrivacy',
'max_land_lines' => 'maxLandLines',
'max_mobiles' => 'maxMobiles',
'mobile_availability' => 'mobileAvailability',
'land_line_availability' => 'landLineAvailability'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobile_phone' => 'setMobilePhone',
'land_line_phone' => 'setLandLinePhone',
'edit' => 'setEdit',
'manage_privacy' => 'setManagePrivacy',
'max_land_lines' => 'setMaxLandLines',
'max_mobiles' => 'setMaxMobiles',
'mobile_availability' => 'setMobileAvailability',
'land_line_availability' => 'setLandLineAvailability'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobile_phone' => 'getMobilePhone',
'land_line_phone' => 'getLandLinePhone',
'edit' => 'getEdit',
'manage_privacy' => 'getManagePrivacy',
'max_land_lines' => 'getMaxLandLines',
'max_mobiles' => 'getMaxMobiles',
'mobile_availability' => 'getMobileAvailability',
'land_line_availability' => 'getLandLineAvailability'    ];

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

        $this->container['mobile_phone'] = isset($data['mobile_phone']) ? $data['mobile_phone'] : null;
        $this->container['land_line_phone'] = isset($data['land_line_phone']) ? $data['land_line_phone'] : null;
        $this->container['edit'] = isset($data['edit']) ? $data['edit'] : null;
        $this->container['manage_privacy'] = isset($data['manage_privacy']) ? $data['manage_privacy'] : null;
        $this->container['max_land_lines'] = isset($data['max_land_lines']) ? $data['max_land_lines'] : null;
        $this->container['max_mobiles'] = isset($data['max_mobiles']) ? $data['max_mobiles'] : null;
        $this->container['mobile_availability'] = isset($data['mobile_availability']) ? $data['mobile_availability'] : null;
        $this->container['land_line_availability'] = isset($data['land_line_availability']) ? $data['land_line_availability'] : null;
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
     * Gets mobile_phone
     *
     * @return 
     */
    public function getMobilePhone()
    {
        return $this->container['mobile_phone'];
    }

    /**
     * Sets mobile_phone
     *
     * @param  $mobile_phone Contains a template with default values for a new mobile phone
     *
     * @return $this
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->container['mobile_phone'] = $mobile_phone;

        return $this;
    }

    /**
     * Gets land_line_phone
     *
     * @return 
     */
    public function getLandLinePhone()
    {
        return $this->container['land_line_phone'];
    }

    /**
     * Sets land_line_phone
     *
     * @param  $land_line_phone Contains a template the default values for a new land-line phone
     *
     * @return $this
     */
    public function setLandLinePhone($land_line_phone)
    {
        $this->container['land_line_phone'] = $land_line_phone;

        return $this;
    }

    /**
     * Gets edit
     *
     * @return bool
     */
    public function getEdit()
    {
        return $this->container['edit'];
    }

    /**
     * Sets edit
     *
     * @param bool $edit Can edit phones?
     *
     * @return $this
     */
    public function setEdit($edit)
    {
        $this->container['edit'] = $edit;

        return $this;
    }

    /**
     * Gets manage_privacy
     *
     * @return bool
     */
    public function getManagePrivacy()
    {
        return $this->container['manage_privacy'];
    }

    /**
     * Sets manage_privacy
     *
     * @param bool $manage_privacy Can manage the privacy of phones?
     *
     * @return $this
     */
    public function setManagePrivacy($manage_privacy)
    {
        $this->container['manage_privacy'] = $manage_privacy;

        return $this;
    }

    /**
     * Gets max_land_lines
     *
     * @return int
     */
    public function getMaxLandLines()
    {
        return $this->container['max_land_lines'];
    }

    /**
     * Sets max_land_lines
     *
     * @param int $max_land_lines The maximum number of land-line phones the user can own
     *
     * @return $this
     */
    public function setMaxLandLines($max_land_lines)
    {
        $this->container['max_land_lines'] = $max_land_lines;

        return $this;
    }

    /**
     * Gets max_mobiles
     *
     * @return int
     */
    public function getMaxMobiles()
    {
        return $this->container['max_mobiles'];
    }

    /**
     * Sets max_mobiles
     *
     * @param int $max_mobiles The maximum number of mobile phones the user can own
     *
     * @return $this
     */
    public function setMaxMobiles($max_mobiles)
    {
        $this->container['max_mobiles'] = $max_mobiles;

        return $this;
    }

    /**
     * Gets mobile_availability
     *
     * @return \Cyclos\Api\Model\AvailabilityEnum
     */
    public function getMobileAvailability()
    {
        return $this->container['mobile_availability'];
    }

    /**
     * Sets mobile_availability
     *
     * @param \Cyclos\Api\Model\AvailabilityEnum $mobile_availability mobile_availability
     *
     * @return $this
     */
    public function setMobileAvailability($mobile_availability)
    {
        $this->container['mobile_availability'] = $mobile_availability;

        return $this;
    }

    /**
     * Gets land_line_availability
     *
     * @return \Cyclos\Api\Model\AvailabilityEnum
     */
    public function getLandLineAvailability()
    {
        return $this->container['land_line_availability'];
    }

    /**
     * Sets land_line_availability
     *
     * @param \Cyclos\Api\Model\AvailabilityEnum $land_line_availability land_line_availability
     *
     * @return $this
     */
    public function setLandLineAvailability($land_line_availability)
    {
        $this->container['land_line_availability'] = $land_line_availability;

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
