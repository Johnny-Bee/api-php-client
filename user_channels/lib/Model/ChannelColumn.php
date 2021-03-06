<?php
/**
 * ChannelColumn
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Channels
 *
 * This api allows you to get access to your channels
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
 * ChannelColumn Class Doc Comment
 *
 * @category    Class
 * @description The channel column
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChannelColumn implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'channelColumn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_column_id' => '\Swagger\Client\Model\BeezUPCommonChannelColumnId',
        'channel_column_name' => '\Swagger\Client\Model\BeezUPCommonChannelColumnName',
        'channel_column_description' => '\Swagger\Client\Model\ChannelColumnDescription',
        'show_in_mapping' => '\Swagger\Client\Model\ChannelColumnShowInMapping',
        'position' => 'int',
        'configuration' => '\Swagger\Client\Model\ChannelColumnConfiguration',
        'restricted_values' => '\Swagger\Client\Model\ChannelColumnRestrictedValues'
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
        'channel_column_id' => 'channelColumnId',
        'channel_column_name' => 'channelColumnName',
        'channel_column_description' => 'channelColumnDescription',
        'show_in_mapping' => 'showInMapping',
        'position' => 'position',
        'configuration' => 'configuration',
        'restricted_values' => 'restrictedValues'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'channel_column_id' => 'setChannelColumnId',
        'channel_column_name' => 'setChannelColumnName',
        'channel_column_description' => 'setChannelColumnDescription',
        'show_in_mapping' => 'setShowInMapping',
        'position' => 'setPosition',
        'configuration' => 'setConfiguration',
        'restricted_values' => 'setRestrictedValues'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'channel_column_id' => 'getChannelColumnId',
        'channel_column_name' => 'getChannelColumnName',
        'channel_column_description' => 'getChannelColumnDescription',
        'show_in_mapping' => 'getShowInMapping',
        'position' => 'getPosition',
        'configuration' => 'getConfiguration',
        'restricted_values' => 'getRestrictedValues'
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
        $this->container['channel_column_id'] = isset($data['channel_column_id']) ? $data['channel_column_id'] : null;
        $this->container['channel_column_name'] = isset($data['channel_column_name']) ? $data['channel_column_name'] : null;
        $this->container['channel_column_description'] = isset($data['channel_column_description']) ? $data['channel_column_description'] : null;
        $this->container['show_in_mapping'] = isset($data['show_in_mapping']) ? $data['show_in_mapping'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['restricted_values'] = isset($data['restricted_values']) ? $data['restricted_values'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['channel_column_id'] === null) {
            $invalid_properties[] = "'channel_column_id' can't be null";
        }
        if ($this->container['channel_column_name'] === null) {
            $invalid_properties[] = "'channel_column_name' can't be null";
        }
        if ($this->container['show_in_mapping'] === null) {
            $invalid_properties[] = "'show_in_mapping' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalid_properties[] = "'position' can't be null";
        }
        if ($this->container['configuration'] === null) {
            $invalid_properties[] = "'configuration' can't be null";
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

        if ($this->container['channel_column_id'] === null) {
            return false;
        }
        if ($this->container['channel_column_name'] === null) {
            return false;
        }
        if ($this->container['show_in_mapping'] === null) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        if ($this->container['configuration'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel_column_id
     * @return \Swagger\Client\Model\BeezUPCommonChannelColumnId
     */
    public function getChannelColumnId()
    {
        return $this->container['channel_column_id'];
    }

    /**
     * Sets channel_column_id
     * @param \Swagger\Client\Model\BeezUPCommonChannelColumnId $channel_column_id
     * @return $this
     */
    public function setChannelColumnId($channel_column_id)
    {
        $this->container['channel_column_id'] = $channel_column_id;

        return $this;
    }

    /**
     * Gets channel_column_name
     * @return \Swagger\Client\Model\BeezUPCommonChannelColumnName
     */
    public function getChannelColumnName()
    {
        return $this->container['channel_column_name'];
    }

    /**
     * Sets channel_column_name
     * @param \Swagger\Client\Model\BeezUPCommonChannelColumnName $channel_column_name
     * @return $this
     */
    public function setChannelColumnName($channel_column_name)
    {
        $this->container['channel_column_name'] = $channel_column_name;

        return $this;
    }

    /**
     * Gets channel_column_description
     * @return \Swagger\Client\Model\ChannelColumnDescription
     */
    public function getChannelColumnDescription()
    {
        return $this->container['channel_column_description'];
    }

    /**
     * Sets channel_column_description
     * @param \Swagger\Client\Model\ChannelColumnDescription $channel_column_description
     * @return $this
     */
    public function setChannelColumnDescription($channel_column_description)
    {
        $this->container['channel_column_description'] = $channel_column_description;

        return $this;
    }

    /**
     * Gets show_in_mapping
     * @return \Swagger\Client\Model\ChannelColumnShowInMapping
     */
    public function getShowInMapping()
    {
        return $this->container['show_in_mapping'];
    }

    /**
     * Sets show_in_mapping
     * @param \Swagger\Client\Model\ChannelColumnShowInMapping $show_in_mapping
     * @return $this
     */
    public function setShowInMapping($show_in_mapping)
    {
        $this->container['show_in_mapping'] = $show_in_mapping;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position The position of the column starting from 1
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets configuration
     * @return \Swagger\Client\Model\ChannelColumnConfiguration
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     * @param \Swagger\Client\Model\ChannelColumnConfiguration $configuration
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets restricted_values
     * @return \Swagger\Client\Model\ChannelColumnRestrictedValues
     */
    public function getRestrictedValues()
    {
        return $this->container['restricted_values'];
    }

    /**
     * Sets restricted_values
     * @param \Swagger\Client\Model\ChannelColumnRestrictedValues $restricted_values
     * @return $this
     */
    public function setRestrictedValues($restricted_values)
    {
        $this->container['restricted_values'] = $restricted_values;

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


