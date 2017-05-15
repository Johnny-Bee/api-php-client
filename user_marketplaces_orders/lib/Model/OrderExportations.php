<?php
/**
 * OrderExportations
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
 * OrderExportations Class Doc Comment
 *
 * @category    Class
 * @description The list of Order report exportations
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderExportations implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'orderExportations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pagination_result' => '\Swagger\Client\Model\BeezUPCommonPaginationResult',
        'exportations' => '\Swagger\Client\Model\OrderExportationReporting[]',
        'links' => '\Swagger\Client\Model\OrderExportationsLinks'
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
        'pagination_result' => 'paginationResult',
        'exportations' => 'exportations',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'pagination_result' => 'setPaginationResult',
        'exportations' => 'setExportations',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'pagination_result' => 'getPaginationResult',
        'exportations' => 'getExportations',
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
        $this->container['pagination_result'] = isset($data['pagination_result']) ? $data['pagination_result'] : null;
        $this->container['exportations'] = isset($data['exportations']) ? $data['exportations'] : null;
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

        if ($this->container['pagination_result'] === null) {
            $invalid_properties[] = "'pagination_result' can't be null";
        }
        if ($this->container['exportations'] === null) {
            $invalid_properties[] = "'exportations' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalid_properties[] = "'links' can't be null";
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

        if ($this->container['pagination_result'] === null) {
            return false;
        }
        if ($this->container['exportations'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets pagination_result
     * @return \Swagger\Client\Model\BeezUPCommonPaginationResult
     */
    public function getPaginationResult()
    {
        return $this->container['pagination_result'];
    }

    /**
     * Sets pagination_result
     * @param \Swagger\Client\Model\BeezUPCommonPaginationResult $pagination_result
     * @return $this
     */
    public function setPaginationResult($pagination_result)
    {
        $this->container['pagination_result'] = $pagination_result;

        return $this;
    }

    /**
     * Gets exportations
     * @return \Swagger\Client\Model\OrderExportationReporting[]
     */
    public function getExportations()
    {
        return $this->container['exportations'];
    }

    /**
     * Sets exportations
     * @param \Swagger\Client\Model\OrderExportationReporting[] $exportations
     * @return $this
     */
    public function setExportations($exportations)
    {
        $this->container['exportations'] = $exportations;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\OrderExportationsLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\OrderExportationsLinks $links
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


