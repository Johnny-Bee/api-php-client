<?php
/**
 * AccountInfo
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
 * AccountInfo Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'accountInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => '\Swagger\Client\Model\BeezUPCommonUserId',
        'email' => '\Swagger\Client\Model\BeezUPCommonEmail',
        'personal_info' => '\Swagger\Client\Model\PersonalInfo',
        'status' => '\Swagger\Client\Model\AccountStatus',
        'company_info' => '\Swagger\Client\Model\CompanyInfo',
        'profile_picture_url' => '\Swagger\Client\Model\ProfilePictureUrl',
        'links' => '\Swagger\Client\Model\AccountInfoLinks',
        'info' => '\Swagger\Client\Model\BeezUPCommonInfoSummaries'
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
        'user_id' => 'userId',
        'email' => 'email',
        'personal_info' => 'personalInfo',
        'status' => 'status',
        'company_info' => 'companyInfo',
        'profile_picture_url' => 'profilePictureUrl',
        'links' => 'links',
        'info' => 'info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'email' => 'setEmail',
        'personal_info' => 'setPersonalInfo',
        'status' => 'setStatus',
        'company_info' => 'setCompanyInfo',
        'profile_picture_url' => 'setProfilePictureUrl',
        'links' => 'setLinks',
        'info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'email' => 'getEmail',
        'personal_info' => 'getPersonalInfo',
        'status' => 'getStatus',
        'company_info' => 'getCompanyInfo',
        'profile_picture_url' => 'getProfilePictureUrl',
        'links' => 'getLinks',
        'info' => 'getInfo'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['personal_info'] = isset($data['personal_info']) ? $data['personal_info'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['company_info'] = isset($data['company_info']) ? $data['company_info'] : null;
        $this->container['profile_picture_url'] = isset($data['profile_picture_url']) ? $data['profile_picture_url'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['personal_info'] === null) {
            $invalid_properties[] = "'personal_info' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['company_info'] === null) {
            $invalid_properties[] = "'company_info' can't be null";
        }
        if ($this->container['profile_picture_url'] === null) {
            $invalid_properties[] = "'profile_picture_url' can't be null";
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

        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['personal_info'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['company_info'] === null) {
            return false;
        }
        if ($this->container['profile_picture_url'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets user_id
     * @return \Swagger\Client\Model\BeezUPCommonUserId
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param \Swagger\Client\Model\BeezUPCommonUserId $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets email
     * @return \Swagger\Client\Model\BeezUPCommonEmail
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param \Swagger\Client\Model\BeezUPCommonEmail $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets personal_info
     * @return \Swagger\Client\Model\PersonalInfo
     */
    public function getPersonalInfo()
    {
        return $this->container['personal_info'];
    }

    /**
     * Sets personal_info
     * @param \Swagger\Client\Model\PersonalInfo $personal_info
     * @return $this
     */
    public function setPersonalInfo($personal_info)
    {
        $this->container['personal_info'] = $personal_info;

        return $this;
    }

    /**
     * Gets status
     * @return \Swagger\Client\Model\AccountStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Swagger\Client\Model\AccountStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets company_info
     * @return \Swagger\Client\Model\CompanyInfo
     */
    public function getCompanyInfo()
    {
        return $this->container['company_info'];
    }

    /**
     * Sets company_info
     * @param \Swagger\Client\Model\CompanyInfo $company_info
     * @return $this
     */
    public function setCompanyInfo($company_info)
    {
        $this->container['company_info'] = $company_info;

        return $this;
    }

    /**
     * Gets profile_picture_url
     * @return \Swagger\Client\Model\ProfilePictureUrl
     */
    public function getProfilePictureUrl()
    {
        return $this->container['profile_picture_url'];
    }

    /**
     * Sets profile_picture_url
     * @param \Swagger\Client\Model\ProfilePictureUrl $profile_picture_url
     * @return $this
     */
    public function setProfilePictureUrl($profile_picture_url)
    {
        $this->container['profile_picture_url'] = $profile_picture_url;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\AccountInfoLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\AccountInfoLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets info
     * @return \Swagger\Client\Model\BeezUPCommonInfoSummaries
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     * @param \Swagger\Client\Model\BeezUPCommonInfoSummaries $info
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

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


