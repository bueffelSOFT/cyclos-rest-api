<?php
/**
 * WebshopAd
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
 * WebshopAd Class Doc Comment
 *
 * @category Class
 * @description An Ad with its status information.
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebshopAd extends BaseAdDetailed 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebshopAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_decimal_quantity' => 'bool',
'min_allowed_in_cart' => 'float',
'max_allowed_in_cart' => 'float',
'stock_quantity' => 'float',
'unlimited_stock' => 'bool',
'product_number' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_decimal_quantity' => null,
'min_allowed_in_cart' => 'number',
'max_allowed_in_cart' => 'number',
'stock_quantity' => 'number',
'unlimited_stock' => null,
'product_number' => null    ];

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
        'allow_decimal_quantity' => 'allowDecimalQuantity',
'min_allowed_in_cart' => 'minAllowedInCart',
'max_allowed_in_cart' => 'maxAllowedInCart',
'stock_quantity' => 'stockQuantity',
'unlimited_stock' => 'unlimitedStock',
'product_number' => 'productNumber'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_decimal_quantity' => 'setAllowDecimalQuantity',
'min_allowed_in_cart' => 'setMinAllowedInCart',
'max_allowed_in_cart' => 'setMaxAllowedInCart',
'stock_quantity' => 'setStockQuantity',
'unlimited_stock' => 'setUnlimitedStock',
'product_number' => 'setProductNumber'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_decimal_quantity' => 'getAllowDecimalQuantity',
'min_allowed_in_cart' => 'getMinAllowedInCart',
'max_allowed_in_cart' => 'getMaxAllowedInCart',
'stock_quantity' => 'getStockQuantity',
'unlimited_stock' => 'getUnlimitedStock',
'product_number' => 'getProductNumber'    ];

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

        $this->container['allow_decimal_quantity'] = isset($data['allow_decimal_quantity']) ? $data['allow_decimal_quantity'] : null;
        $this->container['min_allowed_in_cart'] = isset($data['min_allowed_in_cart']) ? $data['min_allowed_in_cart'] : null;
        $this->container['max_allowed_in_cart'] = isset($data['max_allowed_in_cart']) ? $data['max_allowed_in_cart'] : null;
        $this->container['stock_quantity'] = isset($data['stock_quantity']) ? $data['stock_quantity'] : null;
        $this->container['unlimited_stock'] = isset($data['unlimited_stock']) ? $data['unlimited_stock'] : null;
        $this->container['product_number'] = isset($data['product_number']) ? $data['product_number'] : null;
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
     * Gets allow_decimal_quantity
     *
     * @return bool
     */
    public function getAllowDecimalQuantity()
    {
        return $this->container['allow_decimal_quantity'];
    }

    /**
     * Sets allow_decimal_quantity
     *
     * @param bool $allow_decimal_quantity Indicates if the webshop ad allow enter a decimal value for the  quantity.
     *
     * @return $this
     */
    public function setAllowDecimalQuantity($allow_decimal_quantity)
    {
        $this->container['allow_decimal_quantity'] = $allow_decimal_quantity;

        return $this;
    }

    /**
     * Gets min_allowed_in_cart
     *
     * @return float
     */
    public function getMinAllowedInCart()
    {
        return $this->container['min_allowed_in_cart'];
    }

    /**
     * Sets min_allowed_in_cart
     *
     * @param float $min_allowed_in_cart The minimum quantity allowed to be added in the shopping cart.
     *
     * @return $this
     */
    public function setMinAllowedInCart($min_allowed_in_cart)
    {
        $this->container['min_allowed_in_cart'] = $min_allowed_in_cart;

        return $this;
    }

    /**
     * Gets max_allowed_in_cart
     *
     * @return float
     */
    public function getMaxAllowedInCart()
    {
        return $this->container['max_allowed_in_cart'];
    }

    /**
     * Sets max_allowed_in_cart
     *
     * @param float $max_allowed_in_cart The maximum quantity allowed to be added in the shopping cart.
     *
     * @return $this
     */
    public function setMaxAllowedInCart($max_allowed_in_cart)
    {
        $this->container['max_allowed_in_cart'] = $max_allowed_in_cart;

        return $this;
    }

    /**
     * Gets stock_quantity
     *
     * @return float
     */
    public function getStockQuantity()
    {
        return $this->container['stock_quantity'];
    }

    /**
     * Sets stock_quantity
     *
     * @param float $stock_quantity The stock disponibility. Only if `unlimitedStock` is false and the  'Stock type' was not marked as 'Not available' (through the web  interface).
     *
     * @return $this
     */
    public function setStockQuantity($stock_quantity)
    {
        $this->container['stock_quantity'] = $stock_quantity;

        return $this;
    }

    /**
     * Gets unlimited_stock
     *
     * @return bool
     */
    public function getUnlimitedStock()
    {
        return $this->container['unlimited_stock'];
    }

    /**
     * Sets unlimited_stock
     *
     * @param bool $unlimited_stock If true then it means there is always disponibility of the webshop ad.
     *
     * @return $this
     */
    public function setUnlimitedStock($unlimited_stock)
    {
        $this->container['unlimited_stock'] = $unlimited_stock;

        return $this;
    }

    /**
     * Gets product_number
     *
     * @return string
     */
    public function getProductNumber()
    {
        return $this->container['product_number'];
    }

    /**
     * Sets product_number
     *
     * @param string $product_number The number assigned to the webshop ad.
     *
     * @return $this
     */
    public function setProductNumber($product_number)
    {
        $this->container['product_number'] = $product_number;

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
