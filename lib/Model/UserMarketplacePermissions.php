<?php
/**
 * UserMarketplacePermissions
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
 * UserMarketplacePermissions Class Doc Comment
 *
 * @category Class
 * @description Permissions over a user marketplace
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserMarketplacePermissions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserMarketplacePermissions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'simple' => '\Cyclos\Api\Model\UserBaseAdPermissions',
'webshop' => '\Cyclos\Api\Model\UserWebshopPermissions',
'view_advertisements' => 'bool',
'manage_advertisements' => 'bool',
'view_webshop' => 'bool',
'manage_webshop' => 'bool',
'view_purchases' => 'bool',
'view_sales' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'simple' => null,
'webshop' => null,
'view_advertisements' => null,
'manage_advertisements' => null,
'view_webshop' => null,
'manage_webshop' => null,
'view_purchases' => null,
'view_sales' => null    ];

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
        'simple' => 'simple',
'webshop' => 'webshop',
'view_advertisements' => 'viewAdvertisements',
'manage_advertisements' => 'manageAdvertisements',
'view_webshop' => 'viewWebshop',
'manage_webshop' => 'manageWebshop',
'view_purchases' => 'viewPurchases',
'view_sales' => 'viewSales'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'simple' => 'setSimple',
'webshop' => 'setWebshop',
'view_advertisements' => 'setViewAdvertisements',
'manage_advertisements' => 'setManageAdvertisements',
'view_webshop' => 'setViewWebshop',
'manage_webshop' => 'setManageWebshop',
'view_purchases' => 'setViewPurchases',
'view_sales' => 'setViewSales'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'simple' => 'getSimple',
'webshop' => 'getWebshop',
'view_advertisements' => 'getViewAdvertisements',
'manage_advertisements' => 'getManageAdvertisements',
'view_webshop' => 'getViewWebshop',
'manage_webshop' => 'getManageWebshop',
'view_purchases' => 'getViewPurchases',
'view_sales' => 'getViewSales'    ];

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
        $this->container['simple'] = isset($data['simple']) ? $data['simple'] : null;
        $this->container['webshop'] = isset($data['webshop']) ? $data['webshop'] : null;
        $this->container['view_advertisements'] = isset($data['view_advertisements']) ? $data['view_advertisements'] : null;
        $this->container['manage_advertisements'] = isset($data['manage_advertisements']) ? $data['manage_advertisements'] : null;
        $this->container['view_webshop'] = isset($data['view_webshop']) ? $data['view_webshop'] : null;
        $this->container['manage_webshop'] = isset($data['manage_webshop']) ? $data['manage_webshop'] : null;
        $this->container['view_purchases'] = isset($data['view_purchases']) ? $data['view_purchases'] : null;
        $this->container['view_sales'] = isset($data['view_sales']) ? $data['view_sales'] : null;
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
     * Gets simple
     *
     * @return \Cyclos\Api\Model\UserBaseAdPermissions
     */
    public function getSimple()
    {
        return $this->container['simple'];
    }

    /**
     * Sets simple
     *
     * @param \Cyclos\Api\Model\UserBaseAdPermissions $simple simple
     *
     * @return $this
     */
    public function setSimple($simple)
    {
        $this->container['simple'] = $simple;

        return $this;
    }

    /**
     * Gets webshop
     *
     * @return \Cyclos\Api\Model\UserWebshopPermissions
     */
    public function getWebshop()
    {
        return $this->container['webshop'];
    }

    /**
     * Sets webshop
     *
     * @param \Cyclos\Api\Model\UserWebshopPermissions $webshop webshop
     *
     * @return $this
     */
    public function setWebshop($webshop)
    {
        $this->container['webshop'] = $webshop;

        return $this;
    }

    /**
     * Gets view_advertisements
     *
     * @return bool
     */
    public function getViewAdvertisements()
    {
        return $this->container['view_advertisements'];
    }

    /**
     * Sets view_advertisements
     *
     * @param bool $view_advertisements Use `simple.view` instead   Can view simple advertisements?
     *
     * @return $this
     */
    public function setViewAdvertisements($view_advertisements)
    {
        $this->container['view_advertisements'] = $view_advertisements;

        return $this;
    }

    /**
     * Gets manage_advertisements
     *
     * @return bool
     */
    public function getManageAdvertisements()
    {
        return $this->container['manage_advertisements'];
    }

    /**
     * Sets manage_advertisements
     *
     * @param bool $manage_advertisements Use `simple.manage` instead   Can manage simple advertisements?
     *
     * @return $this
     */
    public function setManageAdvertisements($manage_advertisements)
    {
        $this->container['manage_advertisements'] = $manage_advertisements;

        return $this;
    }

    /**
     * Gets view_webshop
     *
     * @return bool
     */
    public function getViewWebshop()
    {
        return $this->container['view_webshop'];
    }

    /**
     * Sets view_webshop
     *
     * @param bool $view_webshop Use `webshop.view` instead   Can view webshop advertisements?
     *
     * @return $this
     */
    public function setViewWebshop($view_webshop)
    {
        $this->container['view_webshop'] = $view_webshop;

        return $this;
    }

    /**
     * Gets manage_webshop
     *
     * @return bool
     */
    public function getManageWebshop()
    {
        return $this->container['manage_webshop'];
    }

    /**
     * Sets manage_webshop
     *
     * @param bool $manage_webshop Use `webshop.manage` instead   Can manage webshop advertisements?
     *
     * @return $this
     */
    public function setManageWebshop($manage_webshop)
    {
        $this->container['manage_webshop'] = $manage_webshop;

        return $this;
    }

    /**
     * Gets view_purchases
     *
     * @return bool
     */
    public function getViewPurchases()
    {
        return $this->container['view_purchases'];
    }

    /**
     * Sets view_purchases
     *
     * @param bool $view_purchases Use `webshop.viewPurchases` instead   Can view the purchases?
     *
     * @return $this
     */
    public function setViewPurchases($view_purchases)
    {
        $this->container['view_purchases'] = $view_purchases;

        return $this;
    }

    /**
     * Gets view_sales
     *
     * @return bool
     */
    public function getViewSales()
    {
        return $this->container['view_sales'];
    }

    /**
     * Sets view_sales
     *
     * @param bool $view_sales Use `webshop.viewSales` instead   Can view the sales?
     *
     * @return $this
     */
    public function setViewSales($view_sales)
    {
        $this->container['view_sales'] = $view_sales;

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
