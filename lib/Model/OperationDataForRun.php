<?php
/**
 * OperationDataForRun
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
 * OperationDataForRun Class Doc Comment
 *
 * @category Class
 * @description Contains definitions used to run a custom operation
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OperationDataForRun extends Operation 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OperationDataForRun';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'result_information_text' => 'string',
'custom_submit_label' => 'string',
'form_parameters' => '\Cyclos\Api\Model\CustomFieldDetailed[]',
'confirmation_password_input' => '',
'search_automatically' => 'bool',
'row_location' => 'string',
'row_operation' => '',
'row_url' => 'string',
'row_parameters' => 'string[]',
'row_action' => '\Cyclos\Api\Model\OperationRowActionEnum',
'user' => '',
'ad' => '',
'contact' => '',
'contact_info' => '',
'record' => '',
'record_type' => '',
'transfer' => ''    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'result_information_text' => null,
'custom_submit_label' => null,
'form_parameters' => null,
'confirmation_password_input' => null,
'search_automatically' => null,
'row_location' => null,
'row_operation' => null,
'row_url' => null,
'row_parameters' => null,
'row_action' => null,
'user' => null,
'ad' => null,
'contact' => null,
'contact_info' => null,
'record' => null,
'record_type' => null,
'transfer' => null    ];

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
        'result_information_text' => 'resultInformationText',
'custom_submit_label' => 'customSubmitLabel',
'form_parameters' => 'formParameters',
'confirmation_password_input' => 'confirmationPasswordInput',
'search_automatically' => 'searchAutomatically',
'row_location' => 'rowLocation',
'row_operation' => 'rowOperation',
'row_url' => 'rowUrl',
'row_parameters' => 'rowParameters',
'row_action' => 'rowAction',
'user' => 'user',
'ad' => 'ad',
'contact' => 'contact',
'contact_info' => 'contactInfo',
'record' => 'record',
'record_type' => 'recordType',
'transfer' => 'transfer'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'result_information_text' => 'setResultInformationText',
'custom_submit_label' => 'setCustomSubmitLabel',
'form_parameters' => 'setFormParameters',
'confirmation_password_input' => 'setConfirmationPasswordInput',
'search_automatically' => 'setSearchAutomatically',
'row_location' => 'setRowLocation',
'row_operation' => 'setRowOperation',
'row_url' => 'setRowUrl',
'row_parameters' => 'setRowParameters',
'row_action' => 'setRowAction',
'user' => 'setUser',
'ad' => 'setAd',
'contact' => 'setContact',
'contact_info' => 'setContactInfo',
'record' => 'setRecord',
'record_type' => 'setRecordType',
'transfer' => 'setTransfer'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'result_information_text' => 'getResultInformationText',
'custom_submit_label' => 'getCustomSubmitLabel',
'form_parameters' => 'getFormParameters',
'confirmation_password_input' => 'getConfirmationPasswordInput',
'search_automatically' => 'getSearchAutomatically',
'row_location' => 'getRowLocation',
'row_operation' => 'getRowOperation',
'row_url' => 'getRowUrl',
'row_parameters' => 'getRowParameters',
'row_action' => 'getRowAction',
'user' => 'getUser',
'ad' => 'getAd',
'contact' => 'getContact',
'contact_info' => 'getContactInfo',
'record' => 'getRecord',
'record_type' => 'getRecordType',
'transfer' => 'getTransfer'    ];

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

        $this->container['result_information_text'] = isset($data['result_information_text']) ? $data['result_information_text'] : null;
        $this->container['custom_submit_label'] = isset($data['custom_submit_label']) ? $data['custom_submit_label'] : null;
        $this->container['form_parameters'] = isset($data['form_parameters']) ? $data['form_parameters'] : null;
        $this->container['confirmation_password_input'] = isset($data['confirmation_password_input']) ? $data['confirmation_password_input'] : null;
        $this->container['search_automatically'] = isset($data['search_automatically']) ? $data['search_automatically'] : null;
        $this->container['row_location'] = isset($data['row_location']) ? $data['row_location'] : null;
        $this->container['row_operation'] = isset($data['row_operation']) ? $data['row_operation'] : null;
        $this->container['row_url'] = isset($data['row_url']) ? $data['row_url'] : null;
        $this->container['row_parameters'] = isset($data['row_parameters']) ? $data['row_parameters'] : null;
        $this->container['row_action'] = isset($data['row_action']) ? $data['row_action'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['ad'] = isset($data['ad']) ? $data['ad'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['contact_info'] = isset($data['contact_info']) ? $data['contact_info'] : null;
        $this->container['record'] = isset($data['record']) ? $data['record'] : null;
        $this->container['record_type'] = isset($data['record_type']) ? $data['record_type'] : null;
        $this->container['transfer'] = isset($data['transfer']) ? $data['transfer'] : null;
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
     * Gets result_information_text
     *
     * @return string
     */
    public function getResultInformationText()
    {
        return $this->container['result_information_text'];
    }

    /**
     * Sets result_information_text
     *
     * @param string $result_information_text A message to be displayed to the user when displaying the page results. Only returned if `resultType` is `resultPage`.
     *
     * @return $this
     */
    public function setResultInformationText($result_information_text)
    {
        $this->container['result_information_text'] = $result_information_text;

        return $this;
    }

    /**
     * Gets custom_submit_label
     *
     * @return string
     */
    public function getCustomSubmitLabel()
    {
        return $this->container['custom_submit_label'];
    }

    /**
     * Sets custom_submit_label
     *
     * @param string $custom_submit_label A label to be shown on the submit button. When not returned, a generic 'Submit' should be displayed.
     *
     * @return $this
     */
    public function setCustomSubmitLabel($custom_submit_label)
    {
        $this->container['custom_submit_label'] = $custom_submit_label;

        return $this;
    }

    /**
     * Gets form_parameters
     *
     * @return \Cyclos\Api\Model\CustomFieldDetailed[]
     */
    public function getFormParameters()
    {
        return $this->container['form_parameters'];
    }

    /**
     * Sets form_parameters
     *
     * @param \Cyclos\Api\Model\CustomFieldDetailed[] $form_parameters The custom fields which are used in a form as parameters for the operation execution.
     *
     * @return $this
     */
    public function setFormParameters($form_parameters)
    {
        $this->container['form_parameters'] = $form_parameters;

        return $this;
    }

    /**
     * Gets confirmation_password_input
     *
     * @return 
     */
    public function getConfirmationPasswordInput()
    {
        return $this->container['confirmation_password_input'];
    }

    /**
     * Sets confirmation_password_input
     *
     * @param  $confirmation_password_input If a confirmation password is used, contains the definitions on how to request that password from the user. This confirmation password is required when performing sensible actions. Sometimes this is dynamic, for example, the confirmation might be configured to be used only once per session, or operations like payments may have a limit per day to be without confirmation (pinless).
     *
     * @return $this
     */
    public function setConfirmationPasswordInput($confirmation_password_input)
    {
        $this->container['confirmation_password_input'] = $confirmation_password_input;

        return $this;
    }

    /**
     * Gets search_automatically
     *
     * @return bool
     */
    public function getSearchAutomatically()
    {
        return $this->container['search_automatically'];
    }

    /**
     * Sets search_automatically
     *
     * @param bool $search_automatically Should the operation be immediately executed by the third party client software when first presenting the form to the user  (when `true`) or only when the user clicks submit (when `false`)? Only returned if `resultType` is `resultPage`.
     *
     * @return $this
     */
    public function setSearchAutomatically($search_automatically)
    {
        $this->container['search_automatically'] = $search_automatically;

        return $this;
    }

    /**
     * Gets row_location
     *
     * @return string
     */
    public function getRowLocation()
    {
        return $this->container['row_location'];
    }

    /**
     * Sets row_location
     *
     * @param string $row_location The location to which the client should be redirected when selecting a row in the results table. Only returned if `resultType` is `resultPage` and `rowAction` is `location`.
     *
     * @return $this
     */
    public function setRowLocation($row_location)
    {
        $this->container['row_location'] = $row_location;

        return $this;
    }

    /**
     * Gets row_operation
     *
     * @return 
     */
    public function getRowOperation()
    {
        return $this->container['row_operation'];
    }

    /**
     * Sets row_operation
     *
     * @param  $row_operation The custom operation that should be executed when clicking a row. Only returned if `resultType` is `resultPage` and `rowAction` is `operation`.
     *
     * @return $this
     */
    public function setRowOperation($row_operation)
    {
        $this->container['row_operation'] = $row_operation;

        return $this;
    }

    /**
     * Gets row_url
     *
     * @return string
     */
    public function getRowUrl()
    {
        return $this->container['row_url'];
    }

    /**
     * Sets row_url
     *
     * @param string $row_url The URL the client should be redirected when clicking a row. Only returned if `resultType` is `resultPage` and `rowAction` is `url`.
     *
     * @return $this
     */
    public function setRowUrl($row_url)
    {
        $this->container['row_url'] = $row_url;

        return $this;
    }

    /**
     * Gets row_parameters
     *
     * @return string[]
     */
    public function getRowParameters()
    {
        return $this->container['row_parameters'];
    }

    /**
     * Sets row_parameters
     *
     * @param string[] $row_parameters The names of parameters belonging to each custom operation result that should be passed as parameter to the custom operation or URL which is executed when selecting a row in the table. Only returned if `resultType` is `resultPage`.
     *
     * @return $this
     */
    public function setRowParameters($row_parameters)
    {
        $this->container['row_parameters'] = $row_parameters;

        return $this;
    }

    /**
     * Gets row_action
     *
     * @return \Cyclos\Api\Model\OperationRowActionEnum
     */
    public function getRowAction()
    {
        return $this->container['row_action'];
    }

    /**
     * Sets row_action
     *
     * @param \Cyclos\Api\Model\OperationRowActionEnum $row_action row_action
     *
     * @return $this
     */
    public function setRowAction($row_action)
    {
        $this->container['row_action'] = $row_action;

        return $this;
    }

    /**
     * Gets user
     *
     * @return 
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param  $user The user for whom this custom operation will be executed. Returned if `scope` is either `user`, `advertisement`, `contact` (the contact owner), `contactInfo` or `record` (for user records).
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets ad
     *
     * @return 
     */
    public function getAd()
    {
        return $this->container['ad'];
    }

    /**
     * Sets ad
     *
     * @param  $ad The advertisement for which this custom operation will be executed. Only returned if `scope` is  `advertisement`
     *
     * @return $this
     */
    public function setAd($ad)
    {
        $this->container['ad'] = $ad;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return 
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param  $contact The contact for whom this custom operation will be executed. Only returned if `scope` is  `contact`
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets contact_info
     *
     * @return 
     */
    public function getContactInfo()
    {
        return $this->container['contact_info'];
    }

    /**
     * Sets contact_info
     *
     * @param  $contact_info The additional contact for which this custom operation will be executed. Only returned if `scope` is  `contactInfo`
     *
     * @return $this
     */
    public function setContactInfo($contact_info)
    {
        $this->container['contact_info'] = $contact_info;

        return $this;
    }

    /**
     * Gets record
     *
     * @return 
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * Sets record
     *
     * @param  $record The record for which this custom operation will be executed. Only returned if `scope` is  `record`
     *
     * @return $this
     */
    public function setRecord($record)
    {
        $this->container['record'] = $record;

        return $this;
    }

    /**
     * Gets record_type
     *
     * @return 
     */
    public function getRecordType()
    {
        return $this->container['record_type'];
    }

    /**
     * Sets record_type
     *
     * @param  $record_type The record type of the record for which this custom operation will be executed. Only returned if `scope` is  `record`
     *
     * @return $this
     */
    public function setRecordType($record_type)
    {
        $this->container['record_type'] = $record_type;

        return $this;
    }

    /**
     * Gets transfer
     *
     * @return 
     */
    public function getTransfer()
    {
        return $this->container['transfer'];
    }

    /**
     * Sets transfer
     *
     * @param  $transfer The transfer for which this custom operation will be executed. Only returned if `scope` is  `transfer`
     *
     * @return $this
     */
    public function setTransfer($transfer)
    {
        $this->container['transfer'] = $transfer;

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
