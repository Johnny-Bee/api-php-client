<?php
/**
 * ExclusionFilter
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Channel Catalogs
 *
 * This api allows you to manage your channel catalogs.   A channel catalog is an association between your store and a channel.  You will be able to: - map your catalog colums to channel columns. - map your catalog categories to the channel categories and define a cost of this category - configure the general and cost settings of the channel - enable or disable a channel - exclude products using filters for a channel - override product values for a channel - disable or reenable a product on a channel
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
 * ExclusionFilter Class Doc Comment
 *
 * @category    Class
 * @description The exclusion filter
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ExclusionFilter implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'exclusionFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => '\Swagger\Client\Model\ExclusionFilterName',
        'position' => 'int',
        'group_id' => 'string',
        'position_in_group' => 'int',
        'channel_column_id' => '\Swagger\Client\Model\BeezUPCommonChannelColumnId',
        'operator_name' => '\Swagger\Client\Model\ExclusionFilterOperatorName',
        'value' => 'string',
        'enabled' => 'bool'
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
        'name' => 'name',
        'position' => 'position',
        'group_id' => 'groupId',
        'position_in_group' => 'positionInGroup',
        'channel_column_id' => 'channelColumnId',
        'operator_name' => 'operatorName',
        'value' => 'value',
        'enabled' => 'enabled'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'position' => 'setPosition',
        'group_id' => 'setGroupId',
        'position_in_group' => 'setPositionInGroup',
        'channel_column_id' => 'setChannelColumnId',
        'operator_name' => 'setOperatorName',
        'value' => 'setValue',
        'enabled' => 'setEnabled'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'position' => 'getPosition',
        'group_id' => 'getGroupId',
        'position_in_group' => 'getPositionInGroup',
        'channel_column_id' => 'getChannelColumnId',
        'operator_name' => 'getOperatorName',
        'value' => 'getValue',
        'enabled' => 'getEnabled'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['position_in_group'] = isset($data['position_in_group']) ? $data['position_in_group'] : null;
        $this->container['channel_column_id'] = isset($data['channel_column_id']) ? $data['channel_column_id'] : null;
        $this->container['operator_name'] = isset($data['operator_name']) ? $data['operator_name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalid_properties[] = "'position' can't be null";
        }
        if (($this->container['position'] < 1)) {
            $invalid_properties[] = "invalid value for 'position', must be bigger than or equal to 1.";
        }

        if ($this->container['group_id'] === null) {
            $invalid_properties[] = "'group_id' can't be null";
        }
        if ($this->container['position_in_group'] === null) {
            $invalid_properties[] = "'position_in_group' can't be null";
        }
        if (($this->container['position_in_group'] < 1)) {
            $invalid_properties[] = "invalid value for 'position_in_group', must be bigger than or equal to 1.";
        }

        if ($this->container['channel_column_id'] === null) {
            $invalid_properties[] = "'channel_column_id' can't be null";
        }
        if ($this->container['operator_name'] === null) {
            $invalid_properties[] = "'operator_name' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalid_properties[] = "'enabled' can't be null";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        if ($this->container['position'] < 1) {
            return false;
        }
        if ($this->container['group_id'] === null) {
            return false;
        }
        if ($this->container['position_in_group'] === null) {
            return false;
        }
        if ($this->container['position_in_group'] < 1) {
            return false;
        }
        if ($this->container['channel_column_id'] === null) {
            return false;
        }
        if ($this->container['operator_name'] === null) {
            return false;
        }
        if ($this->container['enabled'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return \Swagger\Client\Model\ExclusionFilterName
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Swagger\Client\Model\ExclusionFilterName $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param int $position The position of the exclusion filter
     * @return $this
     */
    public function setPosition($position)
    {

        if (($position < 1)) {
            throw new \InvalidArgumentException('invalid value for $position when calling ExclusionFilter., must be bigger than or equal to 1.');
        }

        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets group_id
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     * @param string $group_id Indicate the filter's group. All filters in the same group means an \"AND\" operation in the filter group
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets position_in_group
     * @return int
     */
    public function getPositionInGroup()
    {
        return $this->container['position_in_group'];
    }

    /**
     * Sets position_in_group
     * @param int $position_in_group Indicate the filter group position. This information is used for the UI purpose and must be unique in the filter group.
     * @return $this
     */
    public function setPositionInGroup($position_in_group)
    {

        if (($position_in_group < 1)) {
            throw new \InvalidArgumentException('invalid value for $position_in_group when calling ExclusionFilter., must be bigger than or equal to 1.');
        }

        $this->container['position_in_group'] = $position_in_group;

        return $this;
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
     * Gets operator_name
     * @return \Swagger\Client\Model\ExclusionFilterOperatorName
     */
    public function getOperatorName()
    {
        return $this->container['operator_name'];
    }

    /**
     * Sets operator_name
     * @param \Swagger\Client\Model\ExclusionFilterOperatorName $operator_name
     * @return $this
     */
    public function setOperatorName($operator_name)
    {
        $this->container['operator_name'] = $operator_name;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value The value indicate by the user when the filter operation requires it.
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled indicates if the filter is currently active.
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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


