<?php
/**
 * ReportByCategory
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
 * ReportByCategory Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportByCategory implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportByCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'catalog_category_id' => '\Swagger\Client\Model\BeezUPCommonCatalogCategoryId',
        'catalog_category_path' => '\Swagger\Client\Model\BeezUPCommonCatalogCategoryPath',
        'enabled_product_count' => 'int',
        'catalog_product_count' => 'int',
        'click_count' => 'int',
        'cost' => 'float',
        'order_count' => 'int',
        'turn_over' => 'float',
        'margin' => 'float',
        'performance_indicator' => 'float',
        'links' => '\Swagger\Client\Model\ReportByCategoryLinks'
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
        'catalog_category_id' => 'catalogCategoryId',
        'catalog_category_path' => 'catalogCategoryPath',
        'enabled_product_count' => 'enabledProductCount',
        'catalog_product_count' => 'catalogProductCount',
        'click_count' => 'clickCount',
        'cost' => 'cost',
        'order_count' => 'orderCount',
        'turn_over' => 'turnOver',
        'margin' => 'margin',
        'performance_indicator' => 'performanceIndicator',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'catalog_category_id' => 'setCatalogCategoryId',
        'catalog_category_path' => 'setCatalogCategoryPath',
        'enabled_product_count' => 'setEnabledProductCount',
        'catalog_product_count' => 'setCatalogProductCount',
        'click_count' => 'setClickCount',
        'cost' => 'setCost',
        'order_count' => 'setOrderCount',
        'turn_over' => 'setTurnOver',
        'margin' => 'setMargin',
        'performance_indicator' => 'setPerformanceIndicator',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'catalog_category_id' => 'getCatalogCategoryId',
        'catalog_category_path' => 'getCatalogCategoryPath',
        'enabled_product_count' => 'getEnabledProductCount',
        'catalog_product_count' => 'getCatalogProductCount',
        'click_count' => 'getClickCount',
        'cost' => 'getCost',
        'order_count' => 'getOrderCount',
        'turn_over' => 'getTurnOver',
        'margin' => 'getMargin',
        'performance_indicator' => 'getPerformanceIndicator',
        'links' => 'getLinks'
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
        $this->container['catalog_category_id'] = isset($data['catalog_category_id']) ? $data['catalog_category_id'] : null;
        $this->container['catalog_category_path'] = isset($data['catalog_category_path']) ? $data['catalog_category_path'] : null;
        $this->container['enabled_product_count'] = isset($data['enabled_product_count']) ? $data['enabled_product_count'] : null;
        $this->container['catalog_product_count'] = isset($data['catalog_product_count']) ? $data['catalog_product_count'] : null;
        $this->container['click_count'] = isset($data['click_count']) ? $data['click_count'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['order_count'] = isset($data['order_count']) ? $data['order_count'] : null;
        $this->container['turn_over'] = isset($data['turn_over']) ? $data['turn_over'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['performance_indicator'] = isset($data['performance_indicator']) ? $data['performance_indicator'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['catalog_category_id'] === null) {
            $invalid_properties[] = "'catalog_category_id' can't be null";
        }
        if ($this->container['enabled_product_count'] === null) {
            $invalid_properties[] = "'enabled_product_count' can't be null";
        }
        if ($this->container['catalog_product_count'] === null) {
            $invalid_properties[] = "'catalog_product_count' can't be null";
        }
        if ($this->container['click_count'] === null) {
            $invalid_properties[] = "'click_count' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalid_properties[] = "'cost' can't be null";
        }
        if ($this->container['order_count'] === null) {
            $invalid_properties[] = "'order_count' can't be null";
        }
        if ($this->container['turn_over'] === null) {
            $invalid_properties[] = "'turn_over' can't be null";
        }
        if ($this->container['margin'] === null) {
            $invalid_properties[] = "'margin' can't be null";
        }
        if ($this->container['performance_indicator'] === null) {
            $invalid_properties[] = "'performance_indicator' can't be null";
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

        if ($this->container['catalog_category_id'] === null) {
            return false;
        }
        if ($this->container['enabled_product_count'] === null) {
            return false;
        }
        if ($this->container['catalog_product_count'] === null) {
            return false;
        }
        if ($this->container['click_count'] === null) {
            return false;
        }
        if ($this->container['cost'] === null) {
            return false;
        }
        if ($this->container['order_count'] === null) {
            return false;
        }
        if ($this->container['turn_over'] === null) {
            return false;
        }
        if ($this->container['margin'] === null) {
            return false;
        }
        if ($this->container['performance_indicator'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets catalog_category_id
     * @return \Swagger\Client\Model\BeezUPCommonCatalogCategoryId
     */
    public function getCatalogCategoryId()
    {
        return $this->container['catalog_category_id'];
    }

    /**
     * Sets catalog_category_id
     * @param \Swagger\Client\Model\BeezUPCommonCatalogCategoryId $catalog_category_id
     * @return $this
     */
    public function setCatalogCategoryId($catalog_category_id)
    {
        $this->container['catalog_category_id'] = $catalog_category_id;

        return $this;
    }

    /**
     * Gets catalog_category_path
     * @return \Swagger\Client\Model\BeezUPCommonCatalogCategoryPath
     */
    public function getCatalogCategoryPath()
    {
        return $this->container['catalog_category_path'];
    }

    /**
     * Sets catalog_category_path
     * @param \Swagger\Client\Model\BeezUPCommonCatalogCategoryPath $catalog_category_path
     * @return $this
     */
    public function setCatalogCategoryPath($catalog_category_path)
    {
        $this->container['catalog_category_path'] = $catalog_category_path;

        return $this;
    }

    /**
     * Gets enabled_product_count
     * @return int
     */
    public function getEnabledProductCount()
    {
        return $this->container['enabled_product_count'];
    }

    /**
     * Sets enabled_product_count
     * @param int $enabled_product_count The enabled product count for this category
     * @return $this
     */
    public function setEnabledProductCount($enabled_product_count)
    {
        $this->container['enabled_product_count'] = $enabled_product_count;

        return $this;
    }

    /**
     * Gets catalog_product_count
     * @return int
     */
    public function getCatalogProductCount()
    {
        return $this->container['catalog_product_count'];
    }

    /**
     * Sets catalog_product_count
     * @param int $catalog_product_count The catalog product count related to this category
     * @return $this
     */
    public function setCatalogProductCount($catalog_product_count)
    {
        $this->container['catalog_product_count'] = $catalog_product_count;

        return $this;
    }

    /**
     * Gets click_count
     * @return int
     */
    public function getClickCount()
    {
        return $this->container['click_count'];
    }

    /**
     * Sets click_count
     * @param int $click_count The click count for this category
     * @return $this
     */
    public function setClickCount($click_count)
    {
        $this->container['click_count'] = $click_count;

        return $this;
    }

    /**
     * Gets cost
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     * @param float $cost The cost for this category
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets order_count
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     * @param int $order_count The order count for this category
     * @return $this
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets turn_over
     * @return float
     */
    public function getTurnOver()
    {
        return $this->container['turn_over'];
    }

    /**
     * Sets turn_over
     * @param float $turn_over The Turnover for this category
     * @return $this
     */
    public function setTurnOver($turn_over)
    {
        $this->container['turn_over'] = $turn_over;

        return $this;
    }

    /**
     * Gets margin
     * @return float
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     * @param float $margin The margin for this category
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets performance_indicator
     * @return float
     */
    public function getPerformanceIndicator()
    {
        return $this->container['performance_indicator'];
    }

    /**
     * Sets performance_indicator
     * @param float $performance_indicator The performance indicator based on the performance indicator formula indicated in the request for this category
     * @return $this
     */
    public function setPerformanceIndicator($performance_indicator)
    {
        $this->container['performance_indicator'] = $performance_indicator;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\ReportByCategoryLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\ReportByCategoryLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


