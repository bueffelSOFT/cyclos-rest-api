<?php
/**
 * InputError
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
 * InputError Class Doc Comment
 *
 * @category Class
 * @description Error returned when some input data failed validation
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InputError implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InputError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'general_errors' => 'string[]',
'properties' => 'string[]',
'property_errors' => 'map[string,string[]]',
'custom_fields' => 'string[]',
'custom_field_errors' => 'map[string,string[]]',
'max_items' => 'int',
'max_file_size' => 'int',
'value' => 'string',
'name' => 'string',
'errors' => 'map[string,\Cyclos\Api\Model\InputError]',
'indexed_errors' => 'map[string,\Cyclos\Api\Model\InputError[]]',
'code' => '\Cyclos\Api\Model\InputErrorCode'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'general_errors' => null,
'properties' => null,
'property_errors' => null,
'custom_fields' => null,
'custom_field_errors' => null,
'max_items' => null,
'max_file_size' => null,
'value' => null,
'name' => null,
'errors' => null,
'indexed_errors' => null,
'code' => null    ];

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
        'general_errors' => 'generalErrors',
'properties' => 'properties',
'property_errors' => 'propertyErrors',
'custom_fields' => 'customFields',
'custom_field_errors' => 'customFieldErrors',
'max_items' => 'maxItems',
'max_file_size' => 'maxFileSize',
'value' => 'value',
'name' => 'name',
'errors' => 'errors',
'indexed_errors' => 'indexedErrors',
'code' => 'code'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'general_errors' => 'setGeneralErrors',
'properties' => 'setProperties',
'property_errors' => 'setPropertyErrors',
'custom_fields' => 'setCustomFields',
'custom_field_errors' => 'setCustomFieldErrors',
'max_items' => 'setMaxItems',
'max_file_size' => 'setMaxFileSize',
'value' => 'setValue',
'name' => 'setName',
'errors' => 'setErrors',
'indexed_errors' => 'setIndexedErrors',
'code' => 'setCode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'general_errors' => 'getGeneralErrors',
'properties' => 'getProperties',
'property_errors' => 'getPropertyErrors',
'custom_fields' => 'getCustomFields',
'custom_field_errors' => 'getCustomFieldErrors',
'max_items' => 'getMaxItems',
'max_file_size' => 'getMaxFileSize',
'value' => 'getValue',
'name' => 'getName',
'errors' => 'getErrors',
'indexed_errors' => 'getIndexedErrors',
'code' => 'getCode'    ];

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
        $this->container['general_errors'] = isset($data['general_errors']) ? $data['general_errors'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['property_errors'] = isset($data['property_errors']) ? $data['property_errors'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['custom_field_errors'] = isset($data['custom_field_errors']) ? $data['custom_field_errors'] : null;
        $this->container['max_items'] = isset($data['max_items']) ? $data['max_items'] : null;
        $this->container['max_file_size'] = isset($data['max_file_size']) ? $data['max_file_size'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['indexed_errors'] = isset($data['indexed_errors']) ? $data['indexed_errors'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
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
     * Gets general_errors
     *
     * @return string[]
     */
    public function getGeneralErrors()
    {
        return $this->container['general_errors'];
    }

    /**
     * Sets general_errors
     *
     * @param string[] $general_errors A list of errors that cannot be attributed to a specific property. Only returned if `code` is `validation`.
     *
     * @return $this
     */
    public function setGeneralErrors($general_errors)
    {
        $this->container['general_errors'] = $general_errors;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return string[]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param string[] $properties An array of properties which contains errors, in the order they were processed. As `propertyErrors` is an object (without a guaranteed order for its keys) the original order would be lost otherwise. Only returned if `code` is `validation`.
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets property_errors
     *
     * @return map[string,string[]]
     */
    public function getPropertyErrors()
    {
        return $this->container['property_errors'];
    }

    /**
     * Sets property_errors
     *
     * @param map[string,string[]] $property_errors An object keyed by property name, whose values are lists of errors for that property. Only returned if `code` is `validation`.
     *
     * @return $this
     */
    public function setPropertyErrors($property_errors)
    {
        $this->container['property_errors'] = $property_errors;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return string[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param string[] $custom_fields An array of custom field internal names which contains errors, in the order they were processed. As `propertyErrors` is an object (without a guaranteed order for its keys) the original order would be lost otherwise. Only returned if `code` is `validation`.
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets custom_field_errors
     *
     * @return map[string,string[]]
     */
    public function getCustomFieldErrors()
    {
        return $this->container['custom_field_errors'];
    }

    /**
     * Sets custom_field_errors
     *
     * @param map[string,string[]] $custom_field_errors An object keyed by custom field internal name, whose values are lists of errors for that custom field. Only returned if `code` is `validation`.
     *
     * @return $this
     */
    public function setCustomFieldErrors($custom_field_errors)
    {
        $this->container['custom_field_errors'] = $custom_field_errors;

        return $this;
    }

    /**
     * Gets max_items
     *
     * @return int
     */
    public function getMaxItems()
    {
        return $this->container['max_items'];
    }

    /**
     * Sets max_items
     *
     * @param int $max_items The maximum allowed items. Only returned if `code` is `maxItems`.
     *
     * @return $this
     */
    public function setMaxItems($max_items)
    {
        $this->container['max_items'] = $max_items;

        return $this;
    }

    /**
     * Gets max_file_size
     *
     * @return int
     */
    public function getMaxFileSize()
    {
        return $this->container['max_file_size'];
    }

    /**
     * Sets max_file_size
     *
     * @param int $max_file_size The maximum file size, in bytes, allowed for uploads. Only returned if `code` is `fileUploadSize`.
     *
     * @return $this
     */
    public function setMaxFileSize($max_file_size)
    {
        $this->container['max_file_size'] = $max_file_size;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value The value that failed conversion to the expected data type, or the original full-text query keywords that failed parsing. Only returned if `code` is either `dataConversion` or `queryParse`.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the required request parameter Only returned if `code` is `missingParameter`.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return map[string,\Cyclos\Api\Model\InputError]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param map[string,\Cyclos\Api\Model\InputError] $errors The aggregated `InputError`s for each regular property, that is, those that have a single input. Only returned if `code` is `aggregated`.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets indexed_errors
     *
     * @return map[string,\Cyclos\Api\Model\InputError[]]
     */
    public function getIndexedErrors()
    {
        return $this->container['indexed_errors'];
    }

    /**
     * Sets indexed_errors
     *
     * @param map[string,\Cyclos\Api\Model\InputError[]] $indexed_errors The aggregated `InputError`s for each list property, that is, those that have a list of inputs. It is guaranteed that the indexes in the input array correspond to the indexes in the corresponding value. The positions with no errors will contain `null`. Only returned if `code` is `aggregated`.
     *
     * @return $this
     */
    public function setIndexedErrors($indexed_errors)
    {
        $this->container['indexed_errors'] = $indexed_errors;

        return $this;
    }

    /**
     * Gets code
     *
     * @return \Cyclos\Api\Model\InputErrorCode
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param \Cyclos\Api\Model\InputErrorCode $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
