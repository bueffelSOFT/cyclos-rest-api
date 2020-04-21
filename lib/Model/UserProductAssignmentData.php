<?php
/**
 * UserProductAssignmentData
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
 * UserProductAssignmentData Class Doc Comment
 *
 * @category Class
 * @description Contains the current user individually assigned products, as well as other information
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserProductAssignmentData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserProductAssignmentData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user' => '\Cyclos\Api\Model\User',
'group' => '\Cyclos\Api\Model\Group',
'user_products' => '\Cyclos\Api\Model\ProductWithUserAccount[]',
'group_products' => '\Cyclos\Api\Model\ProductWithUserAccount[]',
'group_set_products' => '\Cyclos\Api\Model\ProductWithUserAccount[]',
'assignable' => '\Cyclos\Api\Model\ProductWithUserAccount[]',
'unassignable' => 'string[]',
'history' => '\Cyclos\Api\Model\ProductAssignmentLog[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user' => null,
'group' => null,
'user_products' => null,
'group_products' => null,
'group_set_products' => null,
'assignable' => null,
'unassignable' => null,
'history' => null    ];

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
        'user' => 'user',
'group' => 'group',
'user_products' => 'userProducts',
'group_products' => 'groupProducts',
'group_set_products' => 'groupSetProducts',
'assignable' => 'assignable',
'unassignable' => 'unassignable',
'history' => 'history'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user' => 'setUser',
'group' => 'setGroup',
'user_products' => 'setUserProducts',
'group_products' => 'setGroupProducts',
'group_set_products' => 'setGroupSetProducts',
'assignable' => 'setAssignable',
'unassignable' => 'setUnassignable',
'history' => 'setHistory'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user' => 'getUser',
'group' => 'getGroup',
'user_products' => 'getUserProducts',
'group_products' => 'getGroupProducts',
'group_set_products' => 'getGroupSetProducts',
'assignable' => 'getAssignable',
'unassignable' => 'getUnassignable',
'history' => 'getHistory'    ];

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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['user_products'] = isset($data['user_products']) ? $data['user_products'] : null;
        $this->container['group_products'] = isset($data['group_products']) ? $data['group_products'] : null;
        $this->container['group_set_products'] = isset($data['group_set_products']) ? $data['group_set_products'] : null;
        $this->container['assignable'] = isset($data['assignable']) ? $data['assignable'] : null;
        $this->container['unassignable'] = isset($data['unassignable']) ? $data['unassignable'] : null;
        $this->container['history'] = isset($data['history']) ? $data['history'] : null;
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
     * Gets user
     *
     * @return \Cyclos\Api\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Cyclos\Api\Model\User $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \Cyclos\Api\Model\Group
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \Cyclos\Api\Model\Group $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets user_products
     *
     * @return \Cyclos\Api\Model\ProductWithUserAccount[]
     */
    public function getUserProducts()
    {
        return $this->container['user_products'];
    }

    /**
     * Sets user_products
     *
     * @param \Cyclos\Api\Model\ProductWithUserAccount[] $user_products Products currently assigned to this individual user
     *
     * @return $this
     */
    public function setUserProducts($user_products)
    {
        $this->container['user_products'] = $user_products;

        return $this;
    }

    /**
     * Gets group_products
     *
     * @return \Cyclos\Api\Model\ProductWithUserAccount[]
     */
    public function getGroupProducts()
    {
        return $this->container['group_products'];
    }

    /**
     * Sets group_products
     *
     * @param \Cyclos\Api\Model\ProductWithUserAccount[] $group_products Products currently assigned to the user's group
     *
     * @return $this
     */
    public function setGroupProducts($group_products)
    {
        $this->container['group_products'] = $group_products;

        return $this;
    }

    /**
     * Gets group_set_products
     *
     * @return \Cyclos\Api\Model\ProductWithUserAccount[]
     */
    public function getGroupSetProducts()
    {
        return $this->container['group_set_products'];
    }

    /**
     * Sets group_set_products
     *
     * @param \Cyclos\Api\Model\ProductWithUserAccount[] $group_set_products Products currently assigned to the user's group set
     *
     * @return $this
     */
    public function setGroupSetProducts($group_set_products)
    {
        $this->container['group_set_products'] = $group_set_products;

        return $this;
    }

    /**
     * Gets assignable
     *
     * @return \Cyclos\Api\Model\ProductWithUserAccount[]
     */
    public function getAssignable()
    {
        return $this->container['assignable'];
    }

    /**
     * Sets assignable
     *
     * @param \Cyclos\Api\Model\ProductWithUserAccount[] $assignable If the authenticated user can assign more products to the user, this is the list of possible products to assign to the user.
     *
     * @return $this
     */
    public function setAssignable($assignable)
    {
        $this->container['assignable'] = $assignable;

        return $this;
    }

    /**
     * Gets unassignable
     *
     * @return string[]
     */
    public function getUnassignable()
    {
        return $this->container['unassignable'];
    }

    /**
     * Sets unassignable
     *
     * @param string[] $unassignable Either internal names or ids of currently assigned products that the logged user can unassign from the user.
     *
     * @return $this
     */
    public function setUnassignable($unassignable)
    {
        $this->container['unassignable'] = $unassignable;

        return $this;
    }

    /**
     * Gets history
     *
     * @return \Cyclos\Api\Model\ProductAssignmentLog[]
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param \Cyclos\Api\Model\ProductAssignmentLog[] $history Contains the history entries for all product assignment changes
     *
     * @return $this
     */
    public function setHistory($history)
    {
        $this->container['history'] = $history;

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
