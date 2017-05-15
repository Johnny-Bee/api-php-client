<?php
/**
 * ChannelHeader
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
 * ChannelHeader Class Doc Comment
 *
 * @category    Class
 * @description The available channel
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChannelHeader implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'channelHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_id' => '\Swagger\Client\Model\BeezUPCommonChannelId',
        'channel_name' => '\Swagger\Client\Model\BeezUPCommonChannelName',
        'channel_logo_url' => '\Swagger\Client\Model\BeezUPCommonHttpUrl',
        'description_available' => 'bool',
        'is_marketplace' => 'bool',
        'links' => '\Swagger\Client\Model\ChannelHeaderLinks'
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
        'channel_id' => 'channelId',
        'channel_name' => 'channelName',
        'channel_logo_url' => 'channelLogoUrl',
        'description_available' => 'descriptionAvailable',
        'is_marketplace' => 'isMarketplace',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'channel_id' => 'setChannelId',
        'channel_name' => 'setChannelName',
        'channel_logo_url' => 'setChannelLogoUrl',
        'description_available' => 'setDescriptionAvailable',
        'is_marketplace' => 'setIsMarketplace',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'channel_id' => 'getChannelId',
        'channel_name' => 'getChannelName',
        'channel_logo_url' => 'getChannelLogoUrl',
        'description_available' => 'getDescriptionAvailable',
        'is_marketplace' => 'getIsMarketplace',
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
        $this->container['channel_id'] = isset($data['channel_id']) ? $data['channel_id'] : null;
        $this->container['channel_name'] = isset($data['channel_name']) ? $data['channel_name'] : null;
        $this->container['channel_logo_url'] = isset($data['channel_logo_url']) ? $data['channel_logo_url'] : null;
        $this->container['description_available'] = isset($data['description_available']) ? $data['description_available'] : false;
        $this->container['is_marketplace'] = isset($data['is_marketplace']) ? $data['is_marketplace'] : false;
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

        if ($this->container['channel_id'] === null) {
            $invalid_properties[] = "'channel_id' can't be null";
        }
        if ($this->container['channel_name'] === null) {
            $invalid_properties[] = "'channel_name' can't be null";
        }
        if ($this->container['channel_logo_url'] === null) {
            $invalid_properties[] = "'channel_logo_url' can't be null";
        }
        if ($this->container['description_available'] === null) {
            $invalid_properties[] = "'description_available' can't be null";
        }
        if ($this->container['is_marketplace'] === null) {
            $invalid_properties[] = "'is_marketplace' can't be null";
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

        if ($this->container['channel_id'] === null) {
            return false;
        }
        if ($this->container['channel_name'] === null) {
            return false;
        }
        if ($this->container['channel_logo_url'] === null) {
            return false;
        }
        if ($this->container['description_available'] === null) {
            return false;
        }
        if ($this->container['is_marketplace'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel_id
     * @return \Swagger\Client\Model\BeezUPCommonChannelId
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     * @param \Swagger\Client\Model\BeezUPCommonChannelId $channel_id
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets channel_name
     * @return \Swagger\Client\Model\BeezUPCommonChannelName
     */
    public function getChannelName()
    {
        return $this->container['channel_name'];
    }

    /**
     * Sets channel_name
     * @param \Swagger\Client\Model\BeezUPCommonChannelName $channel_name
     * @return $this
     */
    public function setChannelName($channel_name)
    {
        $this->container['channel_name'] = $channel_name;

        return $this;
    }

    /**
     * Gets channel_logo_url
     * @return \Swagger\Client\Model\BeezUPCommonHttpUrl
     */
    public function getChannelLogoUrl()
    {
        return $this->container['channel_logo_url'];
    }

    /**
     * Sets channel_logo_url
     * @param \Swagger\Client\Model\BeezUPCommonHttpUrl $channel_logo_url
     * @return $this
     */
    public function setChannelLogoUrl($channel_logo_url)
    {
        $this->container['channel_logo_url'] = $channel_logo_url;

        return $this;
    }

    /**
     * Gets description_available
     * @return bool
     */
    public function getDescriptionAvailable()
    {
        return $this->container['description_available'];
    }

    /**
     * Sets description_available
     * @param bool $description_available Indicates if we have more detailed information about this channel
     * @return $this
     */
    public function setDescriptionAvailable($description_available)
    {
        $this->container['description_available'] = $description_available;

        return $this;
    }

    /**
     * Gets is_marketplace
     * @return bool
     */
    public function getIsMarketplace()
    {
        return $this->container['is_marketplace'];
    }

    /**
     * Sets is_marketplace
     * @param bool $is_marketplace Indicates if the channel is a marketplace
     * @return $this
     */
    public function setIsMarketplace($is_marketplace)
    {
        $this->container['is_marketplace'] = $is_marketplace;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\ChannelHeaderLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\ChannelHeaderLinks $links
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


