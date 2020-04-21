<?php
/**
 * CustomFieldDetailed
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
 * CustomFieldDetailed Class Doc Comment
 *
 * @category Class
 * @description Contains all information needed to render a widget for a custom field value
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomFieldDetailed extends CustomField 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomFieldDetailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'information_text' => 'string',
'pattern' => 'string',
'required' => 'bool',
'size' => '',
'all_selected_label' => 'string',
'default_value' => 'string',
'possible_value_categories' => '\Cyclos\Api\Model\EntityReference[]',
'has_values_list' => 'bool',
'possible_values' => '\Cyclos\Api\Model\CustomFieldPossibleValue[]',
'dynamic_values' => '\Cyclos\Api\Model\CustomFieldDynamicValue[]',
'string_values' => 'string[]',
'date_values' => '\DateTime[]',
'integer_values' => 'int[]',
'decimal_values' => 'float[]',
'ad_values' => '\Cyclos\Api\Model\Ad[]',
'transaction_values' => '\Cyclos\Api\Model\Transaction[]',
'transfer_values' => '\Cyclos\Api\Model\Transfer[]',
'record_values' => '\Cyclos\Api\Model\Record[]',
'user_values' => '\Cyclos\Api\Model\User[]',
'max_files' => 'int',
'mime_types' => 'string[]',
'allowed_mime_types' => '\Cyclos\Api\Model\FileMimeTypeEnum[]',
'other_mime_types' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'information_text' => null,
'pattern' => null,
'required' => null,
'size' => null,
'all_selected_label' => null,
'default_value' => null,
'possible_value_categories' => null,
'has_values_list' => null,
'possible_values' => null,
'dynamic_values' => null,
'string_values' => null,
'date_values' => 'date-time',
'integer_values' => null,
'decimal_values' => 'number',
'ad_values' => null,
'transaction_values' => null,
'transfer_values' => null,
'record_values' => null,
'user_values' => null,
'max_files' => null,
'mime_types' => null,
'allowed_mime_types' => null,
'other_mime_types' => null    ];

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
        'information_text' => 'informationText',
'pattern' => 'pattern',
'required' => 'required',
'size' => 'size',
'all_selected_label' => 'allSelectedLabel',
'default_value' => 'defaultValue',
'possible_value_categories' => 'possibleValueCategories',
'has_values_list' => 'hasValuesList',
'possible_values' => 'possibleValues',
'dynamic_values' => 'dynamicValues',
'string_values' => 'stringValues',
'date_values' => 'dateValues',
'integer_values' => 'integerValues',
'decimal_values' => 'decimalValues',
'ad_values' => 'adValues',
'transaction_values' => 'transactionValues',
'transfer_values' => 'transferValues',
'record_values' => 'recordValues',
'user_values' => 'userValues',
'max_files' => 'maxFiles',
'mime_types' => 'mimeTypes',
'allowed_mime_types' => 'allowedMimeTypes',
'other_mime_types' => 'otherMimeTypes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'information_text' => 'setInformationText',
'pattern' => 'setPattern',
'required' => 'setRequired',
'size' => 'setSize',
'all_selected_label' => 'setAllSelectedLabel',
'default_value' => 'setDefaultValue',
'possible_value_categories' => 'setPossibleValueCategories',
'has_values_list' => 'setHasValuesList',
'possible_values' => 'setPossibleValues',
'dynamic_values' => 'setDynamicValues',
'string_values' => 'setStringValues',
'date_values' => 'setDateValues',
'integer_values' => 'setIntegerValues',
'decimal_values' => 'setDecimalValues',
'ad_values' => 'setAdValues',
'transaction_values' => 'setTransactionValues',
'transfer_values' => 'setTransferValues',
'record_values' => 'setRecordValues',
'user_values' => 'setUserValues',
'max_files' => 'setMaxFiles',
'mime_types' => 'setMimeTypes',
'allowed_mime_types' => 'setAllowedMimeTypes',
'other_mime_types' => 'setOtherMimeTypes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'information_text' => 'getInformationText',
'pattern' => 'getPattern',
'required' => 'getRequired',
'size' => 'getSize',
'all_selected_label' => 'getAllSelectedLabel',
'default_value' => 'getDefaultValue',
'possible_value_categories' => 'getPossibleValueCategories',
'has_values_list' => 'getHasValuesList',
'possible_values' => 'getPossibleValues',
'dynamic_values' => 'getDynamicValues',
'string_values' => 'getStringValues',
'date_values' => 'getDateValues',
'integer_values' => 'getIntegerValues',
'decimal_values' => 'getDecimalValues',
'ad_values' => 'getAdValues',
'transaction_values' => 'getTransactionValues',
'transfer_values' => 'getTransferValues',
'record_values' => 'getRecordValues',
'user_values' => 'getUserValues',
'max_files' => 'getMaxFiles',
'mime_types' => 'getMimeTypes',
'allowed_mime_types' => 'getAllowedMimeTypes',
'other_mime_types' => 'getOtherMimeTypes'    ];

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

        $this->container['information_text'] = isset($data['information_text']) ? $data['information_text'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['all_selected_label'] = isset($data['all_selected_label']) ? $data['all_selected_label'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['possible_value_categories'] = isset($data['possible_value_categories']) ? $data['possible_value_categories'] : null;
        $this->container['has_values_list'] = isset($data['has_values_list']) ? $data['has_values_list'] : null;
        $this->container['possible_values'] = isset($data['possible_values']) ? $data['possible_values'] : null;
        $this->container['dynamic_values'] = isset($data['dynamic_values']) ? $data['dynamic_values'] : null;
        $this->container['string_values'] = isset($data['string_values']) ? $data['string_values'] : null;
        $this->container['date_values'] = isset($data['date_values']) ? $data['date_values'] : null;
        $this->container['integer_values'] = isset($data['integer_values']) ? $data['integer_values'] : null;
        $this->container['decimal_values'] = isset($data['decimal_values']) ? $data['decimal_values'] : null;
        $this->container['ad_values'] = isset($data['ad_values']) ? $data['ad_values'] : null;
        $this->container['transaction_values'] = isset($data['transaction_values']) ? $data['transaction_values'] : null;
        $this->container['transfer_values'] = isset($data['transfer_values']) ? $data['transfer_values'] : null;
        $this->container['record_values'] = isset($data['record_values']) ? $data['record_values'] : null;
        $this->container['user_values'] = isset($data['user_values']) ? $data['user_values'] : null;
        $this->container['max_files'] = isset($data['max_files']) ? $data['max_files'] : null;
        $this->container['mime_types'] = isset($data['mime_types']) ? $data['mime_types'] : null;
        $this->container['allowed_mime_types'] = isset($data['allowed_mime_types']) ? $data['allowed_mime_types'] : null;
        $this->container['other_mime_types'] = isset($data['other_mime_types']) ? $data['other_mime_types'] : null;
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
     * Gets information_text
     *
     * @return string
     */
    public function getInformationText()
    {
        return $this->container['information_text'];
    }

    /**
     * Sets information_text
     *
     * @param string $information_text Additional text that can be shown to the user as a hint of this field
     *
     * @return $this
     */
    public function setInformationText($information_text)
    {
        $this->container['information_text'] = $information_text;

        return $this;
    }

    /**
     * Gets pattern
     *
     * @return string
     */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
     * Sets pattern
     *
     * @param string $pattern The (optional) mask to be applied to string values
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required Indicates whether this field is required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets size
     *
     * @return 
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param  $size The suggested size for the rendered widget
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets all_selected_label
     *
     * @return string
     */
    public function getAllSelectedLabel()
    {
        return $this->container['all_selected_label'];
    }

    /**
     * Sets all_selected_label
     *
     * @param string $all_selected_label The label to be shown when all values are selected for a multi selection field.
     *
     * @return $this
     */
    public function setAllSelectedLabel($all_selected_label)
    {
        $this->container['all_selected_label'] = $all_selected_label;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string $default_value The value that should be suggested as default. For multi selection will be a comma-separated string with possible values ids or internal names.
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets possible_value_categories
     *
     * @return \Cyclos\Api\Model\EntityReference[]
     */
    public function getPossibleValueCategories()
    {
        return $this->container['possible_value_categories'];
    }

    /**
     * Sets possible_value_categories
     *
     * @param \Cyclos\Api\Model\EntityReference[] $possible_value_categories Only applicable when the custom field is enumerated (single or multi select). Contains the possible value categories.
     *
     * @return $this
     */
    public function setPossibleValueCategories($possible_value_categories)
    {
        $this->container['possible_value_categories'] = $possible_value_categories;

        return $this;
    }

    /**
     * Gets has_values_list
     *
     * @return bool
     */
    public function getHasValuesList()
    {
        return $this->container['has_values_list'];
    }

    /**
     * Sets has_values_list
     *
     * @param bool $has_values_list Returns whether this custom field has a list of possible values, according to its type.
     *
     * @return $this
     */
    public function setHasValuesList($has_values_list)
    {
        $this->container['has_values_list'] = $has_values_list;

        return $this;
    }

    /**
     * Gets possible_values
     *
     * @return \Cyclos\Api\Model\CustomFieldPossibleValue[]
     */
    public function getPossibleValues()
    {
        return $this->container['possible_values'];
    }

    /**
     * Sets possible_values
     *
     * @param \Cyclos\Api\Model\CustomFieldPossibleValue[] $possible_values Only applicable when the custom field is enumerated (single or multi selection). Contains the possible values for selection. Each value may or may not have a category. When they have, it will be a string pointing to the internal name (if available) or id of the possible value category, which can be looked up in the categories property.
     *
     * @return $this
     */
    public function setPossibleValues($possible_values)
    {
        $this->container['possible_values'] = $possible_values;

        return $this;
    }

    /**
     * Gets dynamic_values
     *
     * @return \Cyclos\Api\Model\CustomFieldDynamicValue[]
     */
    public function getDynamicValues()
    {
        return $this->container['dynamic_values'];
    }

    /**
     * Sets dynamic_values
     *
     * @param \Cyclos\Api\Model\CustomFieldDynamicValue[] $dynamic_values Only applicable when the custom field is dynamic selection. Contains the script-generated possible values.
     *
     * @return $this
     */
    public function setDynamicValues($dynamic_values)
    {
        $this->container['dynamic_values'] = $dynamic_values;

        return $this;
    }

    /**
     * Gets string_values
     *
     * @return string[]
     */
    public function getStringValues()
    {
        return $this->container['string_values'];
    }

    /**
     * Sets string_values
     *
     * @param string[] $string_values Only applicable when the custom field type is `string` and `hasValuesList` is `true`. Contains the possible string values.
     *
     * @return $this
     */
    public function setStringValues($string_values)
    {
        $this->container['string_values'] = $string_values;

        return $this;
    }

    /**
     * Gets date_values
     *
     * @return \DateTime[]
     */
    public function getDateValues()
    {
        return $this->container['date_values'];
    }

    /**
     * Sets date_values
     *
     * @param \DateTime[] $date_values Only applicable when the custom field type is `date` and `hasValuesList` is `true`. Contains the possible date values.
     *
     * @return $this
     */
    public function setDateValues($date_values)
    {
        $this->container['date_values'] = $date_values;

        return $this;
    }

    /**
     * Gets integer_values
     *
     * @return int[]
     */
    public function getIntegerValues()
    {
        return $this->container['integer_values'];
    }

    /**
     * Sets integer_values
     *
     * @param int[] $integer_values Only applicable when the custom field type is `integer` and `hasValuesList` is `true`. Contains the possible integer values.
     *
     * @return $this
     */
    public function setIntegerValues($integer_values)
    {
        $this->container['integer_values'] = $integer_values;

        return $this;
    }

    /**
     * Gets decimal_values
     *
     * @return float[]
     */
    public function getDecimalValues()
    {
        return $this->container['decimal_values'];
    }

    /**
     * Sets decimal_values
     *
     * @param float[] $decimal_values Only applicable when the custom field type is `decimal` and `hasValuesList` is `true`. Contains the possible decimal values.
     *
     * @return $this
     */
    public function setDecimalValues($decimal_values)
    {
        $this->container['decimal_values'] = $decimal_values;

        return $this;
    }

    /**
     * Gets ad_values
     *
     * @return \Cyclos\Api\Model\Ad[]
     */
    public function getAdValues()
    {
        return $this->container['ad_values'];
    }

    /**
     * Sets ad_values
     *
     * @param \Cyclos\Api\Model\Ad[] $ad_values Only applicable when the custom field is linked entity of type `advertisement` and `hasValuesList` is `true`. Contains the possible advertisements.
     *
     * @return $this
     */
    public function setAdValues($ad_values)
    {
        $this->container['ad_values'] = $ad_values;

        return $this;
    }

    /**
     * Gets transaction_values
     *
     * @return \Cyclos\Api\Model\Transaction[]
     */
    public function getTransactionValues()
    {
        return $this->container['transaction_values'];
    }

    /**
     * Sets transaction_values
     *
     * @param \Cyclos\Api\Model\Transaction[] $transaction_values Only applicable when the custom field is linked entity of type `transaction` and `hasValuesList` is `true`. Contains the possible transactions.
     *
     * @return $this
     */
    public function setTransactionValues($transaction_values)
    {
        $this->container['transaction_values'] = $transaction_values;

        return $this;
    }

    /**
     * Gets transfer_values
     *
     * @return \Cyclos\Api\Model\Transfer[]
     */
    public function getTransferValues()
    {
        return $this->container['transfer_values'];
    }

    /**
     * Sets transfer_values
     *
     * @param \Cyclos\Api\Model\Transfer[] $transfer_values Only applicable when the custom field is linked entity of type `transfer` and `hasValuesList` is `true`. Contains the possible transfers.
     *
     * @return $this
     */
    public function setTransferValues($transfer_values)
    {
        $this->container['transfer_values'] = $transfer_values;

        return $this;
    }

    /**
     * Gets record_values
     *
     * @return \Cyclos\Api\Model\Record[]
     */
    public function getRecordValues()
    {
        return $this->container['record_values'];
    }

    /**
     * Sets record_values
     *
     * @param \Cyclos\Api\Model\Record[] $record_values Only applicable when the custom field is linked entity of type `record` and `hasValuesList` is `true`. Contains the possible records.
     *
     * @return $this
     */
    public function setRecordValues($record_values)
    {
        $this->container['record_values'] = $record_values;

        return $this;
    }

    /**
     * Gets user_values
     *
     * @return \Cyclos\Api\Model\User[]
     */
    public function getUserValues()
    {
        return $this->container['user_values'];
    }

    /**
     * Sets user_values
     *
     * @param \Cyclos\Api\Model\User[] $user_values Only applicable when the custom field is linked entity of type `user` and `hasValuesList` is `true`. Contains the possible users.
     *
     * @return $this
     */
    public function setUserValues($user_values)
    {
        $this->container['user_values'] = $user_values;

        return $this;
    }

    /**
     * Gets max_files
     *
     * @return int
     */
    public function getMaxFiles()
    {
        return $this->container['max_files'];
    }

    /**
     * Sets max_files
     *
     * @param int $max_files Only applicable when the custom field type is `file` or `image`. The maximun files that can be uploaded.
     *
     * @return $this
     */
    public function setMaxFiles($max_files)
    {
        $this->container['max_files'] = $max_files;

        return $this;
    }

    /**
     * Gets mime_types
     *
     * @return string[]
     */
    public function getMimeTypes()
    {
        return $this->container['mime_types'];
    }

    /**
     * Sets mime_types
     *
     * @param string[] $mime_types The allowed mime types for binary custom fields. Only applicable when the custom field type is either `file` or `image`.
     *
     * @return $this
     */
    public function setMimeTypes($mime_types)
    {
        $this->container['mime_types'] = $mime_types;

        return $this;
    }

    /**
     * Gets allowed_mime_types
     *
     * @return \Cyclos\Api\Model\FileMimeTypeEnum[]
     */
    public function getAllowedMimeTypes()
    {
        return $this->container['allowed_mime_types'];
    }

    /**
     * Sets allowed_mime_types
     *
     * @param \Cyclos\Api\Model\FileMimeTypeEnum[] $allowed_mime_types Use `mimeTypes` instead.   Only applicable when the custom field type is `file`. Contains the possible built-in mime types allowed for the file being uploaded.
     *
     * @return $this
     */
    public function setAllowedMimeTypes($allowed_mime_types)
    {
        $this->container['allowed_mime_types'] = $allowed_mime_types;

        return $this;
    }

    /**
     * Gets other_mime_types
     *
     * @return string[]
     */
    public function getOtherMimeTypes()
    {
        return $this->container['other_mime_types'];
    }

    /**
     * Sets other_mime_types
     *
     * @param string[] $other_mime_types Use `mimeTypes` instead.   Only applicable when the custom field type is `file`and the `others` option was selected in `allowedMimeTypes`. Contains the other mime types allowed for the file being uploaded.
     *
     * @return $this
     */
    public function setOtherMimeTypes($other_mime_types)
    {
        $this->container['other_mime_types'] = $other_mime_types;

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
