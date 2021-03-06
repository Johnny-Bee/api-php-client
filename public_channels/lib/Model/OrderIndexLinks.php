<?php
/**
 * OrderIndexLinks
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketplaces - Orders
 *
 * The features exposed in this API are centered around managing Orders harvested from your configured marketplaces.\\ This includes: - fetching current information (as known by BeezUP) for a single or multiple Orders, - requesting Order harvest to synchronize your marketplaces and BeezUP accounts, - changing BeezUP data and requesting changes to your marketplaces (accepting, shipping, etc), - configuring automatic changes to marketplace based our newly fetched data, - creating and exporting reports for your Orders.
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
 * OrderIndexLinks Class Doc Comment
 *
 * @category    Class
 * @description Gives you all entry point operations you can do on this API
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderIndexLinks implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'orderIndexLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'self' => '\Swagger\Client\Model\LinksGetOrderIndexLink',
        'status' => '\Swagger\Client\Model\LinksGetMarketplaceAccountsSynchronizationLink',
        'harvest' => '\Swagger\Client\Model\LinksHarvestAllLink',
        'set_merchant_infos' => '\Swagger\Client\Model\LinksSetMerchantOrderInfoListLink',
        'clear_merchant_infos' => '\Swagger\Client\Model\LinksClearMerchantOrderInfoListLink',
        'export' => '\Swagger\Client\Model\LinksExportOrdersLink',
        'auto_transitions' => '\Swagger\Client\Model\LinksGetAutomaticTransitionsLink',
        'exportations' => '\Swagger\Client\Model\LinksGetOrderExportationsLink',
        'orders' => '\Swagger\Client\Model\LinksGetOrderListFullLink',
        'light_orders' => '\Swagger\Client\Model\LinksGetOrderListLightLink'
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
        'self' => 'self',
        'status' => 'status',
        'harvest' => 'harvest',
        'set_merchant_infos' => 'setMerchantInfos',
        'clear_merchant_infos' => 'clearMerchantInfos',
        'export' => 'export',
        'auto_transitions' => 'autoTransitions',
        'exportations' => 'exportations',
        'orders' => 'orders',
        'light_orders' => 'lightOrders'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'status' => 'setStatus',
        'harvest' => 'setHarvest',
        'set_merchant_infos' => 'setSetMerchantInfos',
        'clear_merchant_infos' => 'setClearMerchantInfos',
        'export' => 'setExport',
        'auto_transitions' => 'setAutoTransitions',
        'exportations' => 'setExportations',
        'orders' => 'setOrders',
        'light_orders' => 'setLightOrders'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'status' => 'getStatus',
        'harvest' => 'getHarvest',
        'set_merchant_infos' => 'getSetMerchantInfos',
        'clear_merchant_infos' => 'getClearMerchantInfos',
        'export' => 'getExport',
        'auto_transitions' => 'getAutoTransitions',
        'exportations' => 'getExportations',
        'orders' => 'getOrders',
        'light_orders' => 'getLightOrders'
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
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['harvest'] = isset($data['harvest']) ? $data['harvest'] : null;
        $this->container['set_merchant_infos'] = isset($data['set_merchant_infos']) ? $data['set_merchant_infos'] : null;
        $this->container['clear_merchant_infos'] = isset($data['clear_merchant_infos']) ? $data['clear_merchant_infos'] : null;
        $this->container['export'] = isset($data['export']) ? $data['export'] : null;
        $this->container['auto_transitions'] = isset($data['auto_transitions']) ? $data['auto_transitions'] : null;
        $this->container['exportations'] = isset($data['exportations']) ? $data['exportations'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['light_orders'] = isset($data['light_orders']) ? $data['light_orders'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['self'] === null) {
            $invalid_properties[] = "'self' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['harvest'] === null) {
            $invalid_properties[] = "'harvest' can't be null";
        }
        if ($this->container['set_merchant_infos'] === null) {
            $invalid_properties[] = "'set_merchant_infos' can't be null";
        }
        if ($this->container['clear_merchant_infos'] === null) {
            $invalid_properties[] = "'clear_merchant_infos' can't be null";
        }
        if ($this->container['export'] === null) {
            $invalid_properties[] = "'export' can't be null";
        }
        if ($this->container['auto_transitions'] === null) {
            $invalid_properties[] = "'auto_transitions' can't be null";
        }
        if ($this->container['orders'] === null) {
            $invalid_properties[] = "'orders' can't be null";
        }
        if ($this->container['light_orders'] === null) {
            $invalid_properties[] = "'light_orders' can't be null";
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

        if ($this->container['self'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['harvest'] === null) {
            return false;
        }
        if ($this->container['set_merchant_infos'] === null) {
            return false;
        }
        if ($this->container['clear_merchant_infos'] === null) {
            return false;
        }
        if ($this->container['export'] === null) {
            return false;
        }
        if ($this->container['auto_transitions'] === null) {
            return false;
        }
        if ($this->container['orders'] === null) {
            return false;
        }
        if ($this->container['light_orders'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets self
     * @return \Swagger\Client\Model\LinksGetOrderIndexLink
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     * @param \Swagger\Client\Model\LinksGetOrderIndexLink $self
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets status
     * @return \Swagger\Client\Model\LinksGetMarketplaceAccountsSynchronizationLink
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Swagger\Client\Model\LinksGetMarketplaceAccountsSynchronizationLink $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets harvest
     * @return \Swagger\Client\Model\LinksHarvestAllLink
     */
    public function getHarvest()
    {
        return $this->container['harvest'];
    }

    /**
     * Sets harvest
     * @param \Swagger\Client\Model\LinksHarvestAllLink $harvest
     * @return $this
     */
    public function setHarvest($harvest)
    {
        $this->container['harvest'] = $harvest;

        return $this;
    }

    /**
     * Gets set_merchant_infos
     * @return \Swagger\Client\Model\LinksSetMerchantOrderInfoListLink
     */
    public function getSetMerchantInfos()
    {
        return $this->container['set_merchant_infos'];
    }

    /**
     * Sets set_merchant_infos
     * @param \Swagger\Client\Model\LinksSetMerchantOrderInfoListLink $set_merchant_infos
     * @return $this
     */
    public function setSetMerchantInfos($set_merchant_infos)
    {
        $this->container['set_merchant_infos'] = $set_merchant_infos;

        return $this;
    }

    /**
     * Gets clear_merchant_infos
     * @return \Swagger\Client\Model\LinksClearMerchantOrderInfoListLink
     */
    public function getClearMerchantInfos()
    {
        return $this->container['clear_merchant_infos'];
    }

    /**
     * Sets clear_merchant_infos
     * @param \Swagger\Client\Model\LinksClearMerchantOrderInfoListLink $clear_merchant_infos
     * @return $this
     */
    public function setClearMerchantInfos($clear_merchant_infos)
    {
        $this->container['clear_merchant_infos'] = $clear_merchant_infos;

        return $this;
    }

    /**
     * Gets export
     * @return \Swagger\Client\Model\LinksExportOrdersLink
     */
    public function getExport()
    {
        return $this->container['export'];
    }

    /**
     * Sets export
     * @param \Swagger\Client\Model\LinksExportOrdersLink $export
     * @return $this
     */
    public function setExport($export)
    {
        $this->container['export'] = $export;

        return $this;
    }

    /**
     * Gets auto_transitions
     * @return \Swagger\Client\Model\LinksGetAutomaticTransitionsLink
     */
    public function getAutoTransitions()
    {
        return $this->container['auto_transitions'];
    }

    /**
     * Sets auto_transitions
     * @param \Swagger\Client\Model\LinksGetAutomaticTransitionsLink $auto_transitions
     * @return $this
     */
    public function setAutoTransitions($auto_transitions)
    {
        $this->container['auto_transitions'] = $auto_transitions;

        return $this;
    }

    /**
     * Gets exportations
     * @return \Swagger\Client\Model\LinksGetOrderExportationsLink
     */
    public function getExportations()
    {
        return $this->container['exportations'];
    }

    /**
     * Sets exportations
     * @param \Swagger\Client\Model\LinksGetOrderExportationsLink $exportations
     * @return $this
     */
    public function setExportations($exportations)
    {
        $this->container['exportations'] = $exportations;

        return $this;
    }

    /**
     * Gets orders
     * @return \Swagger\Client\Model\LinksGetOrderListFullLink
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     * @param \Swagger\Client\Model\LinksGetOrderListFullLink $orders
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets light_orders
     * @return \Swagger\Client\Model\LinksGetOrderListLightLink
     */
    public function getLightOrders()
    {
        return $this->container['light_orders'];
    }

    /**
     * Sets light_orders
     * @param \Swagger\Client\Model\LinksGetOrderListLightLink $light_orders
     * @return $this
     */
    public function setLightOrders($light_orders)
    {
        $this->container['light_orders'] = $light_orders;

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


