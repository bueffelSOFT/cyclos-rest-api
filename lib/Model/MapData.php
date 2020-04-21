<?php
/**
 * MapData
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
 * MapData Class Doc Comment
 *
 * @category Class
 * @description Contains data relative to maps displayed in the application
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MapData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MapData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'google_maps_api_key' => 'string',
'default_location' => 'AllOfMapDataDefaultLocation',
'default_zoom_mobile' => 'int',
'default_zoom' => 'int',
'distance_unit' => '\Cyclos\Api\Model\DistanceUnitEnum'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'google_maps_api_key' => null,
'default_location' => null,
'default_zoom_mobile' => null,
'default_zoom' => null,
'distance_unit' => null    ];

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
        'google_maps_api_key' => 'googleMapsApiKey',
'default_location' => 'defaultLocation',
'default_zoom_mobile' => 'defaultZoomMobile',
'default_zoom' => 'defaultZoom',
'distance_unit' => 'distanceUnit'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'google_maps_api_key' => 'setGoogleMapsApiKey',
'default_location' => 'setDefaultLocation',
'default_zoom_mobile' => 'setDefaultZoomMobile',
'default_zoom' => 'setDefaultZoom',
'distance_unit' => 'setDistanceUnit'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'google_maps_api_key' => 'getGoogleMapsApiKey',
'default_location' => 'getDefaultLocation',
'default_zoom_mobile' => 'getDefaultZoomMobile',
'default_zoom' => 'getDefaultZoom',
'distance_unit' => 'getDistanceUnit'    ];

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
        $this->container['google_maps_api_key'] = isset($data['google_maps_api_key']) ? $data['google_maps_api_key'] : null;
        $this->container['default_location'] = isset($data['default_location']) ? $data['default_location'] : null;
        $this->container['default_zoom_mobile'] = isset($data['default_zoom_mobile']) ? $data['default_zoom_mobile'] : null;
        $this->container['default_zoom'] = isset($data['default_zoom']) ? $data['default_zoom'] : null;
        $this->container['distance_unit'] = isset($data['distance_unit']) ? $data['distance_unit'] : null;
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
     * Gets google_maps_api_key
     *
     * @return string
     */
    public function getGoogleMapsApiKey()
    {
        return $this->container['google_maps_api_key'];
    }

    /**
     * Sets google_maps_api_key
     *
     * @param string $google_maps_api_key The Google Maps API key to be used by clients
     *
     * @return $this
     */
    public function setGoogleMapsApiKey($google_maps_api_key)
    {
        $this->container['google_maps_api_key'] = $google_maps_api_key;

        return $this;
    }

    /**
     * Gets default_location
     *
     * @return AllOfMapDataDefaultLocation
     */
    public function getDefaultLocation()
    {
        return $this->container['default_location'];
    }

    /**
     * Sets default_location
     *
     * @param AllOfMapDataDefaultLocation $default_location The default location, if any, for map displays
     *
     * @return $this
     */
    public function setDefaultLocation($default_location)
    {
        $this->container['default_location'] = $default_location;

        return $this;
    }

    /**
     * Gets default_zoom_mobile
     *
     * @return int
     */
    public function getDefaultZoomMobile()
    {
        return $this->container['default_zoom_mobile'];
    }

    /**
     * Sets default_zoom_mobile
     *
     * @param int $default_zoom_mobile The default zoom level for mobile views
     *
     * @return $this
     */
    public function setDefaultZoomMobile($default_zoom_mobile)
    {
        $this->container['default_zoom_mobile'] = $default_zoom_mobile;

        return $this;
    }

    /**
     * Gets default_zoom
     *
     * @return int
     */
    public function getDefaultZoom()
    {
        return $this->container['default_zoom'];
    }

    /**
     * Sets default_zoom
     *
     * @param int $default_zoom The default zoom level for larger views
     *
     * @return $this
     */
    public function setDefaultZoom($default_zoom)
    {
        $this->container['default_zoom'] = $default_zoom;

        return $this;
    }

    /**
     * Gets distance_unit
     *
     * @return \Cyclos\Api\Model\DistanceUnitEnum
     */
    public function getDistanceUnit()
    {
        return $this->container['distance_unit'];
    }

    /**
     * Sets distance_unit
     *
     * @param \Cyclos\Api\Model\DistanceUnitEnum $distance_unit distance_unit
     *
     * @return $this
     */
    public function setDistanceUnit($distance_unit)
    {
        $this->container['distance_unit'] = $distance_unit;

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
