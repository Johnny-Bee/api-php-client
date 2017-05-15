<?php
/**
 * OfferFunctionality
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Customer
 *
 * This API will gives you the ability to : - manage your account - manage your stores - shares your stores with your friends - manage your contracts - access to your invoices
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
 * OfferFunctionality Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OfferFunctionality implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'offerFunctionality';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'functionality_code' => 'string',
        'max_value_integer' => 'int',
        'unlimited' => 'bool',
        'text' => 'string'
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
        'functionality_code' => 'functionalityCode',
        'max_value_integer' => 'maxValueInteger',
        'unlimited' => 'unlimited',
        'text' => 'text'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'functionality_code' => 'setFunctionalityCode',
        'max_value_integer' => 'setMaxValueInteger',
        'unlimited' => 'setUnlimited',
        'text' => 'setText'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'functionality_code' => 'getFunctionalityCode',
        'max_value_integer' => 'getMaxValueInteger',
        'unlimited' => 'getUnlimited',
        'text' => 'getText'
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
        $this->container['functionality_code'] = isset($data['functionality_code']) ? $data['functionality_code'] : null;
        $this->container['max_value_integer'] = isset($data['max_value_integer']) ? $data['max_value_integer'] : null;
        $this->container['unlimited'] = isset($data['unlimited']) ? $data['unlimited'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['functionality_code'] === null) {
            $invalid_properties[] = "'functionality_code' can't be null";
        }
        if ($this->container['unlimited'] === null) {
            $invalid_properties[] = "'unlimited' can't be null";
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

        if ($this->container['functionality_code'] === null) {
            return false;
        }
        if ($this->container['unlimited'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets functionality_code
     * @return string
     */
    public function getFunctionalityCode()
    {
        return $this->container['functionality_code'];
    }

    /**
     * Sets functionality_code
     * @param string $functionality_code The functionality code
     * @return $this
     */
    public function setFunctionalityCode($functionality_code)
    {
        $this->container['functionality_code'] = $functionality_code;

        return $this;
    }

    /**
     * Gets max_value_integer
     * @return int
     */
    public function getMaxValueInteger()
    {
        return $this->container['max_value_integer'];
    }

    /**
     * Sets max_value_integer
     * @param int $max_value_integer The max value in integer for this feature in this offer
     * @return $this
     */
    public function setMaxValueInteger($max_value_integer)
    {
        $this->container['max_value_integer'] = $max_value_integer;

        return $this;
    }

    /**
     * Gets unlimited
     * @return bool
     */
    public function getUnlimited()
    {
        return $this->container['unlimited'];
    }

    /**
     * Sets unlimited
     * @param bool $unlimited Is this feature is unlimited for this offer?
     * @return $this
     */
    public function setUnlimited($unlimited)
    {
        $this->container['unlimited'] = $unlimited;

        return $this;
    }

    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param string $text A description text of this feature
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

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


