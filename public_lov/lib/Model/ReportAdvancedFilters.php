<?php
/**
 * ReportAdvancedFilters
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Analytics
 *
 * This API will help you to manage the tracking of your clicks and your sales, get reporting on this trackings and put in place rules based on this reporting to automatically optimize your channel catalogs. \\ Also, you will be able to consult the rule execution reporting.
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
 * ReportAdvancedFilters Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportAdvancedFilters implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportAdvancedFilters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marging_type' => '\Swagger\Client\Model\MargingType',
        'global_margin_percent' => 'int',
        'link_click_to_order_type' => '\Swagger\Client\Model\LinkClickToOrderType',
        'link_click_to_order_max_day' => 'int',
        'only_payment_validated_orders' => 'bool',
        'only_direct_sales' => 'bool',
        'performance_indicator_formula' => '\Swagger\Client\Model\PerformanceIndicatorFormula'
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
        'marging_type' => 'margingType',
        'global_margin_percent' => 'globalMarginPercent',
        'link_click_to_order_type' => 'linkClickToOrderType',
        'link_click_to_order_max_day' => 'linkClickToOrderMaxDay',
        'only_payment_validated_orders' => 'onlyPaymentValidatedOrders',
        'only_direct_sales' => 'onlyDirectSales',
        'performance_indicator_formula' => 'performanceIndicatorFormula'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'marging_type' => 'setMargingType',
        'global_margin_percent' => 'setGlobalMarginPercent',
        'link_click_to_order_type' => 'setLinkClickToOrderType',
        'link_click_to_order_max_day' => 'setLinkClickToOrderMaxDay',
        'only_payment_validated_orders' => 'setOnlyPaymentValidatedOrders',
        'only_direct_sales' => 'setOnlyDirectSales',
        'performance_indicator_formula' => 'setPerformanceIndicatorFormula'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'marging_type' => 'getMargingType',
        'global_margin_percent' => 'getGlobalMarginPercent',
        'link_click_to_order_type' => 'getLinkClickToOrderType',
        'link_click_to_order_max_day' => 'getLinkClickToOrderMaxDay',
        'only_payment_validated_orders' => 'getOnlyPaymentValidatedOrders',
        'only_direct_sales' => 'getOnlyDirectSales',
        'performance_indicator_formula' => 'getPerformanceIndicatorFormula'
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
        $this->container['marging_type'] = isset($data['marging_type']) ? $data['marging_type'] : null;
        $this->container['global_margin_percent'] = isset($data['global_margin_percent']) ? $data['global_margin_percent'] : null;
        $this->container['link_click_to_order_type'] = isset($data['link_click_to_order_type']) ? $data['link_click_to_order_type'] : null;
        $this->container['link_click_to_order_max_day'] = isset($data['link_click_to_order_max_day']) ? $data['link_click_to_order_max_day'] : null;
        $this->container['only_payment_validated_orders'] = isset($data['only_payment_validated_orders']) ? $data['only_payment_validated_orders'] : null;
        $this->container['only_direct_sales'] = isset($data['only_direct_sales']) ? $data['only_direct_sales'] : null;
        $this->container['performance_indicator_formula'] = isset($data['performance_indicator_formula']) ? $data['performance_indicator_formula'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['marging_type'] === null) {
            $invalid_properties[] = "'marging_type' can't be null";
        }
        if ($this->container['link_click_to_order_type'] === null) {
            $invalid_properties[] = "'link_click_to_order_type' can't be null";
        }
        if ($this->container['only_payment_validated_orders'] === null) {
            $invalid_properties[] = "'only_payment_validated_orders' can't be null";
        }
        if ($this->container['only_direct_sales'] === null) {
            $invalid_properties[] = "'only_direct_sales' can't be null";
        }
        if ($this->container['performance_indicator_formula'] === null) {
            $invalid_properties[] = "'performance_indicator_formula' can't be null";
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

        if ($this->container['marging_type'] === null) {
            return false;
        }
        if ($this->container['link_click_to_order_type'] === null) {
            return false;
        }
        if ($this->container['only_payment_validated_orders'] === null) {
            return false;
        }
        if ($this->container['only_direct_sales'] === null) {
            return false;
        }
        if ($this->container['performance_indicator_formula'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets marging_type
     * @return \Swagger\Client\Model\MargingType
     */
    public function getMargingType()
    {
        return $this->container['marging_type'];
    }

    /**
     * Sets marging_type
     * @param \Swagger\Client\Model\MargingType $marging_type
     * @return $this
     */
    public function setMargingType($marging_type)
    {
        $this->container['marging_type'] = $marging_type;

        return $this;
    }

    /**
     * Gets global_margin_percent
     * @return int
     */
    public function getGlobalMarginPercent()
    {
        return $this->container['global_margin_percent'];
    }

    /**
     * Sets global_margin_percent
     * @param int $global_margin_percent If the margin type is 'Global', indicate the percentage of sale price.
     * @return $this
     */
    public function setGlobalMarginPercent($global_margin_percent)
    {
        $this->container['global_margin_percent'] = $global_margin_percent;

        return $this;
    }

    /**
     * Gets link_click_to_order_type
     * @return \Swagger\Client\Model\LinkClickToOrderType
     */
    public function getLinkClickToOrderType()
    {
        return $this->container['link_click_to_order_type'];
    }

    /**
     * Sets link_click_to_order_type
     * @param \Swagger\Client\Model\LinkClickToOrderType $link_click_to_order_type
     * @return $this
     */
    public function setLinkClickToOrderType($link_click_to_order_type)
    {
        $this->container['link_click_to_order_type'] = $link_click_to_order_type;

        return $this;
    }

    /**
     * Gets link_click_to_order_max_day
     * @return int
     */
    public function getLinkClickToOrderMaxDay()
    {
        return $this->container['link_click_to_order_max_day'];
    }

    /**
     * Sets link_click_to_order_max_day
     * @param int $link_click_to_order_max_day If the linkOrderType is OnClickDate, indicate the max day to search the click from the order
     * @return $this
     */
    public function setLinkClickToOrderMaxDay($link_click_to_order_max_day)
    {
        $this->container['link_click_to_order_max_day'] = $link_click_to_order_max_day;

        return $this;
    }

    /**
     * Gets only_payment_validated_orders
     * @return bool
     */
    public function getOnlyPaymentValidatedOrders()
    {
        return $this->container['only_payment_validated_orders'];
    }

    /**
     * Sets only_payment_validated_orders
     * @param bool $only_payment_validated_orders If true, you will get the only the orders with payment validated. Otherwise, you will get all orders validated or not.
     * @return $this
     */
    public function setOnlyPaymentValidatedOrders($only_payment_validated_orders)
    {
        $this->container['only_payment_validated_orders'] = $only_payment_validated_orders;

        return $this;
    }

    /**
     * Gets only_direct_sales
     * @return bool
     */
    public function getOnlyDirectSales()
    {
        return $this->container['only_direct_sales'];
    }

    /**
     * Sets only_direct_sales
     * @param bool $only_direct_sales If true, you will get only direct sales. Otherwise the indirect sales will be included.
     * @return $this
     */
    public function setOnlyDirectSales($only_direct_sales)
    {
        $this->container['only_direct_sales'] = $only_direct_sales;

        return $this;
    }

    /**
     * Gets performance_indicator_formula
     * @return \Swagger\Client\Model\PerformanceIndicatorFormula
     */
    public function getPerformanceIndicatorFormula()
    {
        return $this->container['performance_indicator_formula'];
    }

    /**
     * Sets performance_indicator_formula
     * @param \Swagger\Client\Model\PerformanceIndicatorFormula $performance_indicator_formula
     * @return $this
     */
    public function setPerformanceIndicatorFormula($performance_indicator_formula)
    {
        $this->container['performance_indicator_formula'] = $performance_indicator_formula;

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

