<?php
/**
 * UserQueryFilters
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
 * UserQueryFilters Class Doc Comment
 *
 * @category Class
 * @description Parameters for searching users
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserQueryFilters extends BasicUserQueryFilters 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserQueryFilters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ignore_profile_fields_in_list' => 'bool',
'contacts_owner' => 'string',
'exclude_contacts' => 'bool',
'statuses' => '\Cyclos\Api\Model\UserStatusEnum[]',
'roles' => '\Cyclos\Api\Model\RoleEnum[]',
'order_by' => '\Cyclos\Api\Model\UserOrderByEnum'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ignore_profile_fields_in_list' => null,
'contacts_owner' => null,
'exclude_contacts' => null,
'statuses' => null,
'roles' => null,
'order_by' => null    ];

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
        'ignore_profile_fields_in_list' => 'ignoreProfileFieldsInList',
'contacts_owner' => 'contactsOwner',
'exclude_contacts' => 'excludeContacts',
'statuses' => 'statuses',
'roles' => 'roles',
'order_by' => 'orderBy'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ignore_profile_fields_in_list' => 'setIgnoreProfileFieldsInList',
'contacts_owner' => 'setContactsOwner',
'exclude_contacts' => 'setExcludeContacts',
'statuses' => 'setStatuses',
'roles' => 'setRoles',
'order_by' => 'setOrderBy'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ignore_profile_fields_in_list' => 'getIgnoreProfileFieldsInList',
'contacts_owner' => 'getContactsOwner',
'exclude_contacts' => 'getExcludeContacts',
'statuses' => 'getStatuses',
'roles' => 'getRoles',
'order_by' => 'getOrderBy'    ];

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

        $this->container['ignore_profile_fields_in_list'] = isset($data['ignore_profile_fields_in_list']) ? $data['ignore_profile_fields_in_list'] : null;
        $this->container['contacts_owner'] = isset($data['contacts_owner']) ? $data['contacts_owner'] : null;
        $this->container['exclude_contacts'] = isset($data['exclude_contacts']) ? $data['exclude_contacts'] : null;
        $this->container['statuses'] = isset($data['statuses']) ? $data['statuses'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
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
     * Gets ignore_profile_fields_in_list
     *
     * @return bool
     */
    public function getIgnoreProfileFieldsInList()
    {
        return $this->container['ignore_profile_fields_in_list'];
    }

    /**
     * Sets ignore_profile_fields_in_list
     *
     * @param bool $ignore_profile_fields_in_list When set to `true`, instead of returning users with corresponding profile fields set on list, will return them with `display` and `shortDisplay`.
     *
     * @return $this
     */
    public function setIgnoreProfileFieldsInList($ignore_profile_fields_in_list)
    {
        $this->container['ignore_profile_fields_in_list'] = $ignore_profile_fields_in_list;

        return $this;
    }

    /**
     * Gets contacts_owner
     *
     * @return string
     */
    public function getContactsOwner()
    {
        return $this->container['contacts_owner'];
    }

    /**
     * Sets contacts_owner
     *
     * @param string $contacts_owner Indicates the (managed) user to exclude contacts when `excludecontacts` is set. Defaults to the logged user.
     *
     * @return $this
     */
    public function setContactsOwner($contacts_owner)
    {
        $this->container['contacts_owner'] = $contacts_owner;

        return $this;
    }

    /**
     * Gets exclude_contacts
     *
     * @return bool
     */
    public function getExcludeContacts()
    {
        return $this->container['exclude_contacts'];
    }

    /**
     * Sets exclude_contacts
     *
     * @param bool $exclude_contacts When set to `true` will not return any user that is already a contact of the user indicated on `contactsOwner` (the logged user if not set).
     *
     * @return $this
     */
    public function setExcludeContacts($exclude_contacts)
    {
        $this->container['exclude_contacts'] = $exclude_contacts;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return \Cyclos\Api\Model\UserStatusEnum[]
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param \Cyclos\Api\Model\UserStatusEnum[] $statuses statuses
     *
     * @return $this
     */
    public function setStatuses($statuses)
    {
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \Cyclos\Api\Model\RoleEnum[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \Cyclos\Api\Model\RoleEnum[] $roles roles
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \Cyclos\Api\Model\UserOrderByEnum
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Cyclos\Api\Model\UserOrderByEnum $order_by order_by
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

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
