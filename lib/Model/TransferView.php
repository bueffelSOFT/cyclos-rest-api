<?php
/**
 * TransferView
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
 * TransferView Class Doc Comment
 *
 * @category Class
 * @description Details about a balance transfer between accounts
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferView extends Transfer 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parent' => '',
'children' => '\Cyclos\Api\Model\Transfer[]',
'charged_back_by' => '',
'chargeback_of' => '',
'transaction' => '',
'a_rate' => 'float',
'd_rate' => 'float',
'status_flows' => '\Cyclos\Api\Model\TransferStatusFlowForTransferView[]',
'can_chargeback' => 'bool',
'operations' => '\Cyclos\Api\Model\Operation[]',
'confirmation_password_input' => '',
'users_which_can_add_to_contacts' => '\Cyclos\Api\Model\TransactionSubjectsEnum',
'users_which_can_view_profile' => '\Cyclos\Api\Model\TransactionSubjectsEnum'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parent' => null,
'children' => null,
'charged_back_by' => null,
'chargeback_of' => null,
'transaction' => null,
'a_rate' => 'number',
'd_rate' => 'number',
'status_flows' => null,
'can_chargeback' => null,
'operations' => null,
'confirmation_password_input' => null,
'users_which_can_add_to_contacts' => null,
'users_which_can_view_profile' => null    ];

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
        'parent' => 'parent',
'children' => 'children',
'charged_back_by' => 'chargedBackBy',
'chargeback_of' => 'chargebackOf',
'transaction' => 'transaction',
'a_rate' => 'ARate',
'd_rate' => 'DRate',
'status_flows' => 'statusFlows',
'can_chargeback' => 'canChargeback',
'operations' => 'operations',
'confirmation_password_input' => 'confirmationPasswordInput',
'users_which_can_add_to_contacts' => 'usersWhichCanAddToContacts',
'users_which_can_view_profile' => 'usersWhichCanViewProfile'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parent' => 'setParent',
'children' => 'setChildren',
'charged_back_by' => 'setChargedBackBy',
'chargeback_of' => 'setChargebackOf',
'transaction' => 'setTransaction',
'a_rate' => 'setARate',
'd_rate' => 'setDRate',
'status_flows' => 'setStatusFlows',
'can_chargeback' => 'setCanChargeback',
'operations' => 'setOperations',
'confirmation_password_input' => 'setConfirmationPasswordInput',
'users_which_can_add_to_contacts' => 'setUsersWhichCanAddToContacts',
'users_which_can_view_profile' => 'setUsersWhichCanViewProfile'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parent' => 'getParent',
'children' => 'getChildren',
'charged_back_by' => 'getChargedBackBy',
'chargeback_of' => 'getChargebackOf',
'transaction' => 'getTransaction',
'a_rate' => 'getARate',
'd_rate' => 'getDRate',
'status_flows' => 'getStatusFlows',
'can_chargeback' => 'getCanChargeback',
'operations' => 'getOperations',
'confirmation_password_input' => 'getConfirmationPasswordInput',
'users_which_can_add_to_contacts' => 'getUsersWhichCanAddToContacts',
'users_which_can_view_profile' => 'getUsersWhichCanViewProfile'    ];

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

        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['charged_back_by'] = isset($data['charged_back_by']) ? $data['charged_back_by'] : null;
        $this->container['chargeback_of'] = isset($data['chargeback_of']) ? $data['chargeback_of'] : null;
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        $this->container['a_rate'] = isset($data['a_rate']) ? $data['a_rate'] : null;
        $this->container['d_rate'] = isset($data['d_rate']) ? $data['d_rate'] : null;
        $this->container['status_flows'] = isset($data['status_flows']) ? $data['status_flows'] : null;
        $this->container['can_chargeback'] = isset($data['can_chargeback']) ? $data['can_chargeback'] : null;
        $this->container['operations'] = isset($data['operations']) ? $data['operations'] : null;
        $this->container['confirmation_password_input'] = isset($data['confirmation_password_input']) ? $data['confirmation_password_input'] : null;
        $this->container['users_which_can_add_to_contacts'] = isset($data['users_which_can_add_to_contacts']) ? $data['users_which_can_add_to_contacts'] : null;
        $this->container['users_which_can_view_profile'] = isset($data['users_which_can_view_profile']) ? $data['users_which_can_view_profile'] : null;
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
     * Gets parent
     *
     * @return 
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param  $parent Reference to the parent transfer that generated this one, if any
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \Cyclos\Api\Model\Transfer[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Cyclos\Api\Model\Transfer[] $children Reference to the transfers generated by this one, if any
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets charged_back_by
     *
     * @return 
     */
    public function getChargedBackBy()
    {
        return $this->container['charged_back_by'];
    }

    /**
     * Sets charged_back_by
     *
     * @param  $charged_back_by Reference to the transfer that has charged back this transfer. Only returned if this transfer has been charged back.
     *
     * @return $this
     */
    public function setChargedBackBy($charged_back_by)
    {
        $this->container['charged_back_by'] = $charged_back_by;

        return $this;
    }

    /**
     * Gets chargeback_of
     *
     * @return 
     */
    public function getChargebackOf()
    {
        return $this->container['chargeback_of'];
    }

    /**
     * Sets chargeback_of
     *
     * @param  $chargeback_of Reference to the transfer that this transfer has charged back. Only returned if this transfer is a chargeback.
     *
     * @return $this
     */
    public function setChargebackOf($chargeback_of)
    {
        $this->container['chargeback_of'] = $chargeback_of;

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
     * @param  $transaction If this balance transfer was originated from a transaction (like a payment or scheduled payment), contains the reference to this transaction. Only returned if this `TransferView` is not already in a `TransactionView`.
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets a_rate
     *
     * @return float
     */
    public function getARate()
    {
        return $this->container['a_rate'];
    }

    /**
     * Sets a_rate
     *
     * @param float $a_rate The balance aging counter
     *
     * @return $this
     */
    public function setARate($a_rate)
    {
        $this->container['a_rate'] = $a_rate;

        return $this;
    }

    /**
     * Gets d_rate
     *
     * @return float
     */
    public function getDRate()
    {
        return $this->container['d_rate'];
    }

    /**
     * Sets d_rate
     *
     * @param float $d_rate The balance maturity
     *
     * @return $this
     */
    public function setDRate($d_rate)
    {
        $this->container['d_rate'] = $d_rate;

        return $this;
    }

    /**
     * Gets status_flows
     *
     * @return \Cyclos\Api\Model\TransferStatusFlowForTransferView[]
     */
    public function getStatusFlows()
    {
        return $this->container['status_flows'];
    }

    /**
     * Sets status_flows
     *
     * @param \Cyclos\Api\Model\TransferStatusFlowForTransferView[] $status_flows List with each status this transfer has, with additional information, such as the flow and the log
     *
     * @return $this
     */
    public function setStatusFlows($status_flows)
    {
        $this->container['status_flows'] = $status_flows;

        return $this;
    }

    /**
     * Gets can_chargeback
     *
     * @return bool
     */
    public function getCanChargeback()
    {
        return $this->container['can_chargeback'];
    }

    /**
     * Sets can_chargeback
     *
     * @param bool $can_chargeback Can the authenticated user chargeback this transfer?
     *
     * @return $this
     */
    public function setCanChargeback($can_chargeback)
    {
        $this->container['can_chargeback'] = $can_chargeback;

        return $this;
    }

    /**
     * Gets operations
     *
     * @return \Cyclos\Api\Model\Operation[]
     */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
     * Sets operations
     *
     * @param \Cyclos\Api\Model\Operation[] $operations The list of custom operations the logged user can run over this transfer
     *
     * @return $this
     */
    public function setOperations($operations)
    {
        $this->container['operations'] = $operations;

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
     * Gets users_which_can_add_to_contacts
     *
     * @return \Cyclos\Api\Model\TransactionSubjectsEnum
     */
    public function getUsersWhichCanAddToContacts()
    {
        return $this->container['users_which_can_add_to_contacts'];
    }

    /**
     * Sets users_which_can_add_to_contacts
     *
     * @param \Cyclos\Api\Model\TransactionSubjectsEnum $users_which_can_add_to_contacts users_which_can_add_to_contacts
     *
     * @return $this
     */
    public function setUsersWhichCanAddToContacts($users_which_can_add_to_contacts)
    {
        $this->container['users_which_can_add_to_contacts'] = $users_which_can_add_to_contacts;

        return $this;
    }

    /**
     * Gets users_which_can_view_profile
     *
     * @return \Cyclos\Api\Model\TransactionSubjectsEnum
     */
    public function getUsersWhichCanViewProfile()
    {
        return $this->container['users_which_can_view_profile'];
    }

    /**
     * Sets users_which_can_view_profile
     *
     * @param \Cyclos\Api\Model\TransactionSubjectsEnum $users_which_can_view_profile users_which_can_view_profile
     *
     * @return $this
     */
    public function setUsersWhichCanViewProfile($users_which_can_view_profile)
    {
        $this->container['users_which_can_view_profile'] = $users_which_can_view_profile;

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
