<?php
/**
 * DataForUi
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
 * DataForUi Class Doc Comment
 *
 * @category Class
 * @description Contains data to display an alternative user interface
 * @package  Cyclos\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataForUi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataForUi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cyclos_version' => 'string',
'current_client_time' => '\DateTime',
'auth' => 'AllOfDataForUiAuth',
'data_for_login' => 'AllOfDataForUiDataForLogin',
'public_registration_groups' => '\Cyclos\Api\Model\GroupForRegistration[]',
'map_data' => 'AllOfDataForUiMapData',
'decimal_separator' => 'string',
'grouping_separator' => 'string',
'date_format' => 'string',
'time_format' => 'string',
'time_zone_id' => 'string',
'distance_unit' => '\Cyclos\Api\Model\DistanceUnitEnum',
'root_url' => 'string',
'country' => 'string',
'max_image_width' => 'int',
'max_image_height' => 'int',
'max_upload_size' => 'int',
'jpeg_quality' => 'int',
'language' => 'AllOfDataForUiLanguage',
'allowed_locales' => '\Cyclos\Api\Model\UserLocale[]',
'resource_cache_key' => 'string',
'apple_store_url' => 'string',
'play_store_url' => 'string',
'theme' => 'AllOfDataForUiTheme',
'header' => 'AllOfDataForUiHeader',
'footer' => 'AllOfDataForUiFooter'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cyclos_version' => null,
'current_client_time' => 'date-time',
'auth' => null,
'data_for_login' => null,
'public_registration_groups' => null,
'map_data' => null,
'decimal_separator' => null,
'grouping_separator' => null,
'date_format' => null,
'time_format' => null,
'time_zone_id' => null,
'distance_unit' => null,
'root_url' => null,
'country' => null,
'max_image_width' => null,
'max_image_height' => null,
'max_upload_size' => null,
'jpeg_quality' => null,
'language' => null,
'allowed_locales' => null,
'resource_cache_key' => null,
'apple_store_url' => null,
'play_store_url' => null,
'theme' => null,
'header' => null,
'footer' => null    ];

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
        'cyclos_version' => 'cyclosVersion',
'current_client_time' => 'currentClientTime',
'auth' => 'auth',
'data_for_login' => 'dataForLogin',
'public_registration_groups' => 'publicRegistrationGroups',
'map_data' => 'mapData',
'decimal_separator' => 'decimalSeparator',
'grouping_separator' => 'groupingSeparator',
'date_format' => 'dateFormat',
'time_format' => 'timeFormat',
'time_zone_id' => 'timeZoneId',
'distance_unit' => 'distanceUnit',
'root_url' => 'rootUrl',
'country' => 'country',
'max_image_width' => 'maxImageWidth',
'max_image_height' => 'maxImageHeight',
'max_upload_size' => 'maxUploadSize',
'jpeg_quality' => 'jpegQuality',
'language' => 'language',
'allowed_locales' => 'allowedLocales',
'resource_cache_key' => 'resourceCacheKey',
'apple_store_url' => 'appleStoreUrl',
'play_store_url' => 'playStoreUrl',
'theme' => 'theme',
'header' => 'header',
'footer' => 'footer'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cyclos_version' => 'setCyclosVersion',
'current_client_time' => 'setCurrentClientTime',
'auth' => 'setAuth',
'data_for_login' => 'setDataForLogin',
'public_registration_groups' => 'setPublicRegistrationGroups',
'map_data' => 'setMapData',
'decimal_separator' => 'setDecimalSeparator',
'grouping_separator' => 'setGroupingSeparator',
'date_format' => 'setDateFormat',
'time_format' => 'setTimeFormat',
'time_zone_id' => 'setTimeZoneId',
'distance_unit' => 'setDistanceUnit',
'root_url' => 'setRootUrl',
'country' => 'setCountry',
'max_image_width' => 'setMaxImageWidth',
'max_image_height' => 'setMaxImageHeight',
'max_upload_size' => 'setMaxUploadSize',
'jpeg_quality' => 'setJpegQuality',
'language' => 'setLanguage',
'allowed_locales' => 'setAllowedLocales',
'resource_cache_key' => 'setResourceCacheKey',
'apple_store_url' => 'setAppleStoreUrl',
'play_store_url' => 'setPlayStoreUrl',
'theme' => 'setTheme',
'header' => 'setHeader',
'footer' => 'setFooter'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cyclos_version' => 'getCyclosVersion',
'current_client_time' => 'getCurrentClientTime',
'auth' => 'getAuth',
'data_for_login' => 'getDataForLogin',
'public_registration_groups' => 'getPublicRegistrationGroups',
'map_data' => 'getMapData',
'decimal_separator' => 'getDecimalSeparator',
'grouping_separator' => 'getGroupingSeparator',
'date_format' => 'getDateFormat',
'time_format' => 'getTimeFormat',
'time_zone_id' => 'getTimeZoneId',
'distance_unit' => 'getDistanceUnit',
'root_url' => 'getRootUrl',
'country' => 'getCountry',
'max_image_width' => 'getMaxImageWidth',
'max_image_height' => 'getMaxImageHeight',
'max_upload_size' => 'getMaxUploadSize',
'jpeg_quality' => 'getJpegQuality',
'language' => 'getLanguage',
'allowed_locales' => 'getAllowedLocales',
'resource_cache_key' => 'getResourceCacheKey',
'apple_store_url' => 'getAppleStoreUrl',
'play_store_url' => 'getPlayStoreUrl',
'theme' => 'getTheme',
'header' => 'getHeader',
'footer' => 'getFooter'    ];

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
        $this->container['cyclos_version'] = isset($data['cyclos_version']) ? $data['cyclos_version'] : null;
        $this->container['current_client_time'] = isset($data['current_client_time']) ? $data['current_client_time'] : null;
        $this->container['auth'] = isset($data['auth']) ? $data['auth'] : null;
        $this->container['data_for_login'] = isset($data['data_for_login']) ? $data['data_for_login'] : null;
        $this->container['public_registration_groups'] = isset($data['public_registration_groups']) ? $data['public_registration_groups'] : null;
        $this->container['map_data'] = isset($data['map_data']) ? $data['map_data'] : null;
        $this->container['decimal_separator'] = isset($data['decimal_separator']) ? $data['decimal_separator'] : null;
        $this->container['grouping_separator'] = isset($data['grouping_separator']) ? $data['grouping_separator'] : null;
        $this->container['date_format'] = isset($data['date_format']) ? $data['date_format'] : null;
        $this->container['time_format'] = isset($data['time_format']) ? $data['time_format'] : null;
        $this->container['time_zone_id'] = isset($data['time_zone_id']) ? $data['time_zone_id'] : null;
        $this->container['distance_unit'] = isset($data['distance_unit']) ? $data['distance_unit'] : null;
        $this->container['root_url'] = isset($data['root_url']) ? $data['root_url'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['max_image_width'] = isset($data['max_image_width']) ? $data['max_image_width'] : null;
        $this->container['max_image_height'] = isset($data['max_image_height']) ? $data['max_image_height'] : null;
        $this->container['max_upload_size'] = isset($data['max_upload_size']) ? $data['max_upload_size'] : null;
        $this->container['jpeg_quality'] = isset($data['jpeg_quality']) ? $data['jpeg_quality'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['allowed_locales'] = isset($data['allowed_locales']) ? $data['allowed_locales'] : null;
        $this->container['resource_cache_key'] = isset($data['resource_cache_key']) ? $data['resource_cache_key'] : null;
        $this->container['apple_store_url'] = isset($data['apple_store_url']) ? $data['apple_store_url'] : null;
        $this->container['play_store_url'] = isset($data['play_store_url']) ? $data['play_store_url'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
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
     * Gets cyclos_version
     *
     * @return string
     */
    public function getCyclosVersion()
    {
        return $this->container['cyclos_version'];
    }

    /**
     * Sets cyclos_version
     *
     * @param string $cyclos_version The version of the Cyclos server. It will of the form x.y[.z]
     *
     * @return $this
     */
    public function setCyclosVersion($cyclos_version)
    {
        $this->container['cyclos_version'] = $cyclos_version;

        return $this;
    }

    /**
     * Gets current_client_time
     *
     * @return \DateTime
     */
    public function getCurrentClientTime()
    {
        return $this->container['current_client_time'];
    }

    /**
     * Sets current_client_time
     *
     * @param \DateTime $current_client_time The current time in the the user's time zone.
     *
     * @return $this
     */
    public function setCurrentClientTime($current_client_time)
    {
        $this->container['current_client_time'] = $current_client_time;

        return $this;
    }

    /**
     * Gets auth
     *
     * @return AllOfDataForUiAuth
     */
    public function getAuth()
    {
        return $this->container['auth'];
    }

    /**
     * Sets auth
     *
     * @param AllOfDataForUiAuth $auth The logged user authentication. Not returned for guests.
     *
     * @return $this
     */
    public function setAuth($auth)
    {
        $this->container['auth'] = $auth;

        return $this;
    }

    /**
     * Gets data_for_login
     *
     * @return AllOfDataForUiDataForLogin
     */
    public function getDataForLogin()
    {
        return $this->container['data_for_login'];
    }

    /**
     * Sets data_for_login
     *
     * @param AllOfDataForUiDataForLogin $data_for_login The data used for logging the user in. Not returned for logged users.
     *
     * @return $this
     */
    public function setDataForLogin($data_for_login)
    {
        $this->container['data_for_login'] = $data_for_login;

        return $this;
    }

    /**
     * Gets public_registration_groups
     *
     * @return \Cyclos\Api\Model\GroupForRegistration[]
     */
    public function getPublicRegistrationGroups()
    {
        return $this->container['public_registration_groups'];
    }

    /**
     * Sets public_registration_groups
     *
     * @param \Cyclos\Api\Model\GroupForRegistration[] $public_registration_groups Groups that can be used for a public registration. Not returned for logged users.
     *
     * @return $this
     */
    public function setPublicRegistrationGroups($public_registration_groups)
    {
        $this->container['public_registration_groups'] = $public_registration_groups;

        return $this;
    }

    /**
     * Gets map_data
     *
     * @return AllOfDataForUiMapData
     */
    public function getMapData()
    {
        return $this->container['map_data'];
    }

    /**
     * Sets map_data
     *
     * @param AllOfDataForUiMapData $map_data Configuration data for map usage. Is null when maps are not used.
     *
     * @return $this
     */
    public function setMapData($map_data)
    {
        $this->container['map_data'] = $map_data;

        return $this;
    }

    /**
     * Gets decimal_separator
     *
     * @return string
     */
    public function getDecimalSeparator()
    {
        return $this->container['decimal_separator'];
    }

    /**
     * Sets decimal_separator
     *
     * @param string $decimal_separator The character used to specify the decimal point
     *
     * @return $this
     */
    public function setDecimalSeparator($decimal_separator)
    {
        $this->container['decimal_separator'] = $decimal_separator;

        return $this;
    }

    /**
     * Gets grouping_separator
     *
     * @return string
     */
    public function getGroupingSeparator()
    {
        return $this->container['grouping_separator'];
    }

    /**
     * Sets grouping_separator
     *
     * @param string $grouping_separator The character used to separate thousands.
     *
     * @return $this
     */
    public function setGroupingSeparator($grouping_separator)
    {
        $this->container['grouping_separator'] = $grouping_separator;

        return $this;
    }

    /**
     * Gets date_format
     *
     * @return string
     */
    public function getDateFormat()
    {
        return $this->container['date_format'];
    }

    /**
     * Sets date_format
     *
     * @param string $date_format The pattern string used to format dates. The following are the letters used in each supported pattern: * dd: The day of the month; * MM: The month ranging from 1 to 12; * yyyy: The full year number.
     *
     * @return $this
     */
    public function setDateFormat($date_format)
    {
        $this->container['date_format'] = $date_format;

        return $this;
    }

    /**
     * Gets time_format
     *
     * @return string
     */
    public function getTimeFormat()
    {
        return $this->container['time_format'];
    }

    /**
     * Sets time_format
     *
     * @param string $time_format The pattern string used to format time. The following are the letters used in each supported pattern: * hh: The hour of the morning or afternoon (12-hour clock); * HH: The hour of the day (24-hour clock); * mm: The minute within the hour; * a: Marker to idicate whether the hour (hh) is before or after noon.
     *
     * @return $this
     */
    public function setTimeFormat($time_format)
    {
        $this->container['time_format'] = $time_format;

        return $this;
    }

    /**
     * Gets time_zone_id
     *
     * @return string
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param string $time_zone_id The time zone ID set in the configuration (e.g `Europe/Amsterdam`)
     *
     * @return $this
     */
    public function setTimeZoneId($time_zone_id)
    {
        $this->container['time_zone_id'] = $time_zone_id;

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
     * Gets root_url
     *
     * @return string
     */
    public function getRootUrl()
    {
        return $this->container['root_url'];
    }

    /**
     * Sets root_url
     *
     * @param string $root_url The main URL set in the configuration
     *
     * @return $this
     */
    public function setRootUrl($root_url)
    {
        $this->container['root_url'] = $root_url;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The ISO 3166-1 alpha-2 country code, as set in the configuration
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets max_image_width
     *
     * @return int
     */
    public function getMaxImageWidth()
    {
        return $this->container['max_image_width'];
    }

    /**
     * Sets max_image_width
     *
     * @param int $max_image_width Maximum width (in pixels) for uploaded images
     *
     * @return $this
     */
    public function setMaxImageWidth($max_image_width)
    {
        $this->container['max_image_width'] = $max_image_width;

        return $this;
    }

    /**
     * Gets max_image_height
     *
     * @return int
     */
    public function getMaxImageHeight()
    {
        return $this->container['max_image_height'];
    }

    /**
     * Sets max_image_height
     *
     * @param int $max_image_height Maximum height (in pixels) for uploaded images
     *
     * @return $this
     */
    public function setMaxImageHeight($max_image_height)
    {
        $this->container['max_image_height'] = $max_image_height;

        return $this;
    }

    /**
     * Gets max_upload_size
     *
     * @return int
     */
    public function getMaxUploadSize()
    {
        return $this->container['max_upload_size'];
    }

    /**
     * Sets max_upload_size
     *
     * @param int $max_upload_size Maximum size (in bytes) for uploaded files
     *
     * @return $this
     */
    public function setMaxUploadSize($max_upload_size)
    {
        $this->container['max_upload_size'] = $max_upload_size;

        return $this;
    }

    /**
     * Gets jpeg_quality
     *
     * @return int
     */
    public function getJpegQuality()
    {
        return $this->container['jpeg_quality'];
    }

    /**
     * Sets jpeg_quality
     *
     * @param int $jpeg_quality Quality for JPEG image types (higher means better quality)
     *
     * @return $this
     */
    public function setJpegQuality($jpeg_quality)
    {
        $this->container['jpeg_quality'] = $jpeg_quality;

        return $this;
    }

    /**
     * Gets language
     *
     * @return AllOfDataForUiLanguage
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param AllOfDataForUiLanguage $language The language set in the configuration
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets allowed_locales
     *
     * @return \Cyclos\Api\Model\UserLocale[]
     */
    public function getAllowedLocales()
    {
        return $this->container['allowed_locales'];
    }

    /**
     * Sets allowed_locales
     *
     * @param \Cyclos\Api\Model\UserLocale[] $allowed_locales The locales the user can select, for example to change the language.
     *
     * @return $this
     */
    public function setAllowedLocales($allowed_locales)
    {
        $this->container['allowed_locales'] = $allowed_locales;

        return $this;
    }

    /**
     * Gets resource_cache_key
     *
     * @return string
     */
    public function getResourceCacheKey()
    {
        return $this->container['resource_cache_key'];
    }

    /**
     * Sets resource_cache_key
     *
     * @param string $resource_cache_key A new key is generated after each server restart
     *
     * @return $this
     */
    public function setResourceCacheKey($resource_cache_key)
    {
        $this->container['resource_cache_key'] = $resource_cache_key;

        return $this;
    }

    /**
     * Gets apple_store_url
     *
     * @return string
     */
    public function getAppleStoreUrl()
    {
        return $this->container['apple_store_url'];
    }

    /**
     * Sets apple_store_url
     *
     * @param string $apple_store_url The mobile app url in the Apple store.
     *
     * @return $this
     */
    public function setAppleStoreUrl($apple_store_url)
    {
        $this->container['apple_store_url'] = $apple_store_url;

        return $this;
    }

    /**
     * Gets play_store_url
     *
     * @return string
     */
    public function getPlayStoreUrl()
    {
        return $this->container['play_store_url'];
    }

    /**
     * Sets play_store_url
     *
     * @param string $play_store_url The mobile app url in the Play store.
     *
     * @return $this
     */
    public function setPlayStoreUrl($play_store_url)
    {
        $this->container['play_store_url'] = $play_store_url;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return AllOfDataForUiTheme
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param AllOfDataForUiTheme $theme The theme content (i.e the CSS or its components according). Only returned when changed or if the corresponding `themeIf` parameter was not specified. The returned theme will be the following according to the UI kind:  - `main`: If there is a logged user then the theme for   users associated to the configuration. Otherwise the theme for guests;  - `mobile`: only returned for guest; - `pay`: The theme defined for the ticket / easy   invoice confirmation application interface (it's the same for logged   users and guests).
     *
     * @return $this
     */
    public function setTheme($theme)
    {
        $this->container['theme'] = $theme;

        return $this;
    }

    /**
     * Gets header
     *
     * @return AllOfDataForUiHeader
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param AllOfDataForUiHeader $header The header content. Only returned when changed or if the corresponding `headerIf` parameter was not specified. For all cases the content returned will be the same for logged users an for guests.  The returned header will be the following according to the UI kind:  - `main`: The header configured for the main web interface; - `mobile`: The header configured for the mobile application. Only returned for guests; - `pay`: The header defined for the ticket / easy invoice confirmation interface.
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets footer
     *
     * @return AllOfDataForUiFooter
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     *
     * @param AllOfDataForUiFooter $footer The footer content. Only returned when changed or if the corresponding `footerIf` parameter was not specified. For all cases the content returned will be the same for logged users an for guests.  The returned footer will be the following according to the UI kind:  - `main`: The footer configured for the main web interface; - `mobile`: The footer configured for the mobile application. Only returned for guests; - `pay`: The footer defined for the ticket / easy invoice confirmation interface.
     *
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;

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
