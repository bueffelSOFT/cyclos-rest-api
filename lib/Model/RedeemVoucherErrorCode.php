<?php
/**
 * RedeemVoucherErrorCode
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
 * RedeemVoucherErrorCode Class Doc Comment
 *
 * @category Class
 * @description Possible errors when redeeming a voucher Possible values are: - &#x60;notAllowedForUser&#x60;: This user cannot redeem this voucher - &#x60;notAllowedForVoucher&#x60;: This voucher cannot be redeemed - &#x60;notAllowedToday&#x60;: This voucher cannot be redeemed today - &#x60;notAllowedYet&#x60;: The redeem period for this voucher has not arrived yet - &#x60;payment&#x60;: There was an error when performing the payment - &#x60;unexpected&#x60;: An unexpected error has occurred. See the &#x60;exceptionType&#x60; and &#x60;exceptionMessage&#x60; fields for the internal information. - &#x60;userBlocked&#x60;: The user has been blocked by exceeding redeem tries
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RedeemVoucherErrorCode
{
    /**
     * Possible values of this enum
     */
    const NOT_ALLOWED_FOR_USER = 'notAllowedForUser';
const NOT_ALLOWED_FOR_VOUCHER = 'notAllowedForVoucher';
const NOT_ALLOWED_TODAY = 'notAllowedToday';
const NOT_ALLOWED_YET = 'notAllowedYet';
const PAYMENT = 'payment';
const UNEXPECTED = 'unexpected';
const USER_BLOCKED = 'userBlocked';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_ALLOWED_FOR_USER,
self::NOT_ALLOWED_FOR_VOUCHER,
self::NOT_ALLOWED_TODAY,
self::NOT_ALLOWED_YET,
self::PAYMENT,
self::UNEXPECTED,
self::USER_BLOCKED,        ];
    }
}
