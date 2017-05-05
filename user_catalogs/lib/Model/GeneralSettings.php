<?php
/**
 * GeneralSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * This is the RESTful API of BeezUP which allows you to manage everything related to BeezUP
 *
 * OpenAPI spec version: 2.0
 * Contact: support@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GeneralSettings Class Doc Comment
 *
 * @category    Class
 * @description Represents the general settings of your channel catalog
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GeneralSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'generalSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accept_to_publish_info' => 'bool',
        'use_bid' => 'bool',
        'no_category_mapping' => 'bool',
        'do_not_export_out_of_stock_products' => 'bool',
        'active_beez_up_tracking' => 'bool'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'accept_to_publish_info' => 'acceptToPublishInfo',
        'use_bid' => 'useBid',
        'no_category_mapping' => 'noCategoryMapping',
        'do_not_export_out_of_stock_products' => 'doNotExportOutOfStockProducts',
        'active_beez_up_tracking' => 'activeBeezUPTracking'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'accept_to_publish_info' => 'setAcceptToPublishInfo',
        'use_bid' => 'setUseBid',
        'no_category_mapping' => 'setNoCategoryMapping',
        'do_not_export_out_of_stock_products' => 'setDoNotExportOutOfStockProducts',
        'active_beez_up_tracking' => 'setActiveBeezUpTracking'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'accept_to_publish_info' => 'getAcceptToPublishInfo',
        'use_bid' => 'getUseBid',
        'no_category_mapping' => 'getNoCategoryMapping',
        'do_not_export_out_of_stock_products' => 'getDoNotExportOutOfStockProducts',
        'active_beez_up_tracking' => 'getActiveBeezUpTracking'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accept_to_publish_info'] = isset($data['accept_to_publish_info']) ? $data['accept_to_publish_info'] : null;
        $this->container['use_bid'] = isset($data['use_bid']) ? $data['use_bid'] : null;
        $this->container['no_category_mapping'] = isset($data['no_category_mapping']) ? $data['no_category_mapping'] : null;
        $this->container['do_not_export_out_of_stock_products'] = isset($data['do_not_export_out_of_stock_products']) ? $data['do_not_export_out_of_stock_products'] : null;
        $this->container['active_beez_up_tracking'] = isset($data['active_beez_up_tracking']) ? $data['active_beez_up_tracking'] : true;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['accept_to_publish_info'] === null) {
            $invalid_properties[] = "'accept_to_publish_info' can't be null";
        }
        if ($this->container['use_bid'] === null) {
            $invalid_properties[] = "'use_bid' can't be null";
        }
        if ($this->container['no_category_mapping'] === null) {
            $invalid_properties[] = "'no_category_mapping' can't be null";
        }
        if ($this->container['do_not_export_out_of_stock_products'] === null) {
            $invalid_properties[] = "'do_not_export_out_of_stock_products' can't be null";
        }
        if ($this->container['active_beez_up_tracking'] === null) {
            $invalid_properties[] = "'active_beez_up_tracking' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['accept_to_publish_info'] === null) {
            return false;
        }
        if ($this->container['use_bid'] === null) {
            return false;
        }
        if ($this->container['no_category_mapping'] === null) {
            return false;
        }
        if ($this->container['do_not_export_out_of_stock_products'] === null) {
            return false;
        }
        if ($this->container['active_beez_up_tracking'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets accept_to_publish_info
     * @return bool
     */
    public function getAcceptToPublishInfo()
    {
        return $this->container['accept_to_publish_info'];
    }

    /**
     * Sets accept_to_publish_info
     * @param bool $accept_to_publish_info If true then you authorize disclosure of my statistics generated from clicks and sales
     * @return $this
     */
    public function setAcceptToPublishInfo($accept_to_publish_info)
    {
        $this->container['accept_to_publish_info'] = $accept_to_publish_info;

        return $this;
    }

    /**
     * Gets use_bid
     * @return bool
     */
    public function getUseBid()
    {
        return $this->container['use_bid'];
    }

    /**
     * Sets use_bid
     * @param bool $use_bid Activate bidding for this channel
     * @return $this
     */
    public function setUseBid($use_bid)
    {
        $this->container['use_bid'] = $use_bid;

        return $this;
    }

    /**
     * Gets no_category_mapping
     * @return bool
     */
    public function getNoCategoryMapping()
    {
        return $this->container['no_category_mapping'];
    }

    /**
     * Sets no_category_mapping
     * @param bool $no_category_mapping Indicates that the channel authorize you to do not map your categories with their categories
     * @return $this
     */
    public function setNoCategoryMapping($no_category_mapping)
    {
        $this->container['no_category_mapping'] = $no_category_mapping;

        return $this;
    }

    /**
     * Gets do_not_export_out_of_stock_products
     * @return bool
     */
    public function getDoNotExportOutOfStockProducts()
    {
        return $this->container['do_not_export_out_of_stock_products'];
    }

    /**
     * Sets do_not_export_out_of_stock_products
     * @param bool $do_not_export_out_of_stock_products Do not export \"out of stock\" products. Note: this option is not taken into account by the counter.
     * @return $this
     */
    public function setDoNotExportOutOfStockProducts($do_not_export_out_of_stock_products)
    {
        $this->container['do_not_export_out_of_stock_products'] = $do_not_export_out_of_stock_products;

        return $this;
    }

    /**
     * Gets active_beez_up_tracking
     * @return bool
     */
    public function getActiveBeezUpTracking()
    {
        return $this->container['active_beez_up_tracking'];
    }

    /**
     * Sets active_beez_up_tracking
     * @param bool $active_beez_up_tracking Activate BeezUP tracking for my statistics (checked by default)
     * @return $this
     */
    public function setActiveBeezUpTracking($active_beez_up_tracking)
    {
        $this->container['active_beez_up_tracking'] = $active_beez_up_tracking;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


