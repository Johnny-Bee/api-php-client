<?php
/**
 * ChangeCustomColumnExpressionRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalogs
 *
 * This API allows you to manage your catalogs
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
 * ChangeCustomColumnExpressionRequest Class Doc Comment
 *
 * @category    Class
 * @description The request message to change the custom column expression
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChangeCustomColumnExpressionRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'changeCustomColumnExpressionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'encrypted_expression' => '\Swagger\Client\Model\EncryptedExpression',
        'encrypted_blockly_expression' => '\Swagger\Client\Model\EncryptedBlocklyExpression'
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
        'encrypted_expression' => 'encryptedExpression',
        'encrypted_blockly_expression' => 'encryptedBlocklyExpression'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'encrypted_expression' => 'setEncryptedExpression',
        'encrypted_blockly_expression' => 'setEncryptedBlocklyExpression'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'encrypted_expression' => 'getEncryptedExpression',
        'encrypted_blockly_expression' => 'getEncryptedBlocklyExpression'
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
        $this->container['encrypted_expression'] = isset($data['encrypted_expression']) ? $data['encrypted_expression'] : null;
        $this->container['encrypted_blockly_expression'] = isset($data['encrypted_blockly_expression']) ? $data['encrypted_blockly_expression'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['encrypted_expression'] === null) {
            $invalid_properties[] = "'encrypted_expression' can't be null";
        }
        if ($this->container['encrypted_blockly_expression'] === null) {
            $invalid_properties[] = "'encrypted_blockly_expression' can't be null";
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

        if ($this->container['encrypted_expression'] === null) {
            return false;
        }
        if ($this->container['encrypted_blockly_expression'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets encrypted_expression
     * @return \Swagger\Client\Model\EncryptedExpression
     */
    public function getEncryptedExpression()
    {
        return $this->container['encrypted_expression'];
    }

    /**
     * Sets encrypted_expression
     * @param \Swagger\Client\Model\EncryptedExpression $encrypted_expression
     * @return $this
     */
    public function setEncryptedExpression($encrypted_expression)
    {
        $this->container['encrypted_expression'] = $encrypted_expression;

        return $this;
    }

    /**
     * Gets encrypted_blockly_expression
     * @return \Swagger\Client\Model\EncryptedBlocklyExpression
     */
    public function getEncryptedBlocklyExpression()
    {
        return $this->container['encrypted_blockly_expression'];
    }

    /**
     * Sets encrypted_blockly_expression
     * @param \Swagger\Client\Model\EncryptedBlocklyExpression $encrypted_blockly_expression
     * @return $this
     */
    public function setEncryptedBlocklyExpression($encrypted_blockly_expression)
    {
        $this->container['encrypted_blockly_expression'] = $encrypted_blockly_expression;

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


