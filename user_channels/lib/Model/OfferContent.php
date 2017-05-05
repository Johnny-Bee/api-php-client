<?php
/**
 * OfferContent
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
 * OfferContent Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OfferContent implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'offerContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'previous_fix_period_invoice_prorata_info' => '\Swagger\Client\Model\PreviousFixPeriodInvoiceProrataInfo',
        'contract_billing_period_info' => '\Swagger\Client\Model\ContractBillingPeriodInfo',
        'contract_click_info' => '\Swagger\Client\Model\ContractClickInfo',
        'contract_commitment_info' => '\Swagger\Client\Model\ContractCommitmentInfo',
        'contract_discount_info' => '\Swagger\Client\Model\ContractDiscountInfo',
        'contract_money_info' => '\Swagger\Client\Model\ContractMoneyInfo',
        'contract_store_info' => '\Swagger\Client\Model\ContractStoreInfo',
        'contract_bonus_info' => '\Swagger\Client\Model\ContractBonusInfo',
        'contract_termination_reason_type' => '\Swagger\Client\Model\ContractTerminationReasonType',
        'contract_termination_reason' => '\Swagger\Client\Model\ContractTerminationReason',
        'notify_vat_exemption' => 'bool'
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
        'previous_fix_period_invoice_prorata_info' => 'previousFixPeriodInvoiceProrataInfo',
        'contract_billing_period_info' => 'contractBillingPeriodInfo',
        'contract_click_info' => 'contractClickInfo',
        'contract_commitment_info' => 'contractCommitmentInfo',
        'contract_discount_info' => 'contractDiscountInfo',
        'contract_money_info' => 'contractMoneyInfo',
        'contract_store_info' => 'contractStoreInfo',
        'contract_bonus_info' => 'contractBonusInfo',
        'contract_termination_reason_type' => 'contractTerminationReasonType',
        'contract_termination_reason' => 'contractTerminationReason',
        'notify_vat_exemption' => 'notifyVatExemption'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'previous_fix_period_invoice_prorata_info' => 'setPreviousFixPeriodInvoiceProrataInfo',
        'contract_billing_period_info' => 'setContractBillingPeriodInfo',
        'contract_click_info' => 'setContractClickInfo',
        'contract_commitment_info' => 'setContractCommitmentInfo',
        'contract_discount_info' => 'setContractDiscountInfo',
        'contract_money_info' => 'setContractMoneyInfo',
        'contract_store_info' => 'setContractStoreInfo',
        'contract_bonus_info' => 'setContractBonusInfo',
        'contract_termination_reason_type' => 'setContractTerminationReasonType',
        'contract_termination_reason' => 'setContractTerminationReason',
        'notify_vat_exemption' => 'setNotifyVatExemption'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'previous_fix_period_invoice_prorata_info' => 'getPreviousFixPeriodInvoiceProrataInfo',
        'contract_billing_period_info' => 'getContractBillingPeriodInfo',
        'contract_click_info' => 'getContractClickInfo',
        'contract_commitment_info' => 'getContractCommitmentInfo',
        'contract_discount_info' => 'getContractDiscountInfo',
        'contract_money_info' => 'getContractMoneyInfo',
        'contract_store_info' => 'getContractStoreInfo',
        'contract_bonus_info' => 'getContractBonusInfo',
        'contract_termination_reason_type' => 'getContractTerminationReasonType',
        'contract_termination_reason' => 'getContractTerminationReason',
        'notify_vat_exemption' => 'getNotifyVatExemption'
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
        $this->container['previous_fix_period_invoice_prorata_info'] = isset($data['previous_fix_period_invoice_prorata_info']) ? $data['previous_fix_period_invoice_prorata_info'] : null;
        $this->container['contract_billing_period_info'] = isset($data['contract_billing_period_info']) ? $data['contract_billing_period_info'] : null;
        $this->container['contract_click_info'] = isset($data['contract_click_info']) ? $data['contract_click_info'] : null;
        $this->container['contract_commitment_info'] = isset($data['contract_commitment_info']) ? $data['contract_commitment_info'] : null;
        $this->container['contract_discount_info'] = isset($data['contract_discount_info']) ? $data['contract_discount_info'] : null;
        $this->container['contract_money_info'] = isset($data['contract_money_info']) ? $data['contract_money_info'] : null;
        $this->container['contract_store_info'] = isset($data['contract_store_info']) ? $data['contract_store_info'] : null;
        $this->container['contract_bonus_info'] = isset($data['contract_bonus_info']) ? $data['contract_bonus_info'] : null;
        $this->container['contract_termination_reason_type'] = isset($data['contract_termination_reason_type']) ? $data['contract_termination_reason_type'] : null;
        $this->container['contract_termination_reason'] = isset($data['contract_termination_reason']) ? $data['contract_termination_reason'] : null;
        $this->container['notify_vat_exemption'] = isset($data['notify_vat_exemption']) ? $data['notify_vat_exemption'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['previous_fix_period_invoice_prorata_info'] === null) {
            $invalid_properties[] = "'previous_fix_period_invoice_prorata_info' can't be null";
        }
        if ($this->container['contract_billing_period_info'] === null) {
            $invalid_properties[] = "'contract_billing_period_info' can't be null";
        }
        if ($this->container['contract_click_info'] === null) {
            $invalid_properties[] = "'contract_click_info' can't be null";
        }
        if ($this->container['contract_commitment_info'] === null) {
            $invalid_properties[] = "'contract_commitment_info' can't be null";
        }
        if ($this->container['contract_discount_info'] === null) {
            $invalid_properties[] = "'contract_discount_info' can't be null";
        }
        if ($this->container['contract_money_info'] === null) {
            $invalid_properties[] = "'contract_money_info' can't be null";
        }
        if ($this->container['contract_store_info'] === null) {
            $invalid_properties[] = "'contract_store_info' can't be null";
        }
        if ($this->container['contract_bonus_info'] === null) {
            $invalid_properties[] = "'contract_bonus_info' can't be null";
        }
        if ($this->container['notify_vat_exemption'] === null) {
            $invalid_properties[] = "'notify_vat_exemption' can't be null";
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

        if ($this->container['previous_fix_period_invoice_prorata_info'] === null) {
            return false;
        }
        if ($this->container['contract_billing_period_info'] === null) {
            return false;
        }
        if ($this->container['contract_click_info'] === null) {
            return false;
        }
        if ($this->container['contract_commitment_info'] === null) {
            return false;
        }
        if ($this->container['contract_discount_info'] === null) {
            return false;
        }
        if ($this->container['contract_money_info'] === null) {
            return false;
        }
        if ($this->container['contract_store_info'] === null) {
            return false;
        }
        if ($this->container['contract_bonus_info'] === null) {
            return false;
        }
        if ($this->container['notify_vat_exemption'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets previous_fix_period_invoice_prorata_info
     * @return \Swagger\Client\Model\PreviousFixPeriodInvoiceProrataInfo
     */
    public function getPreviousFixPeriodInvoiceProrataInfo()
    {
        return $this->container['previous_fix_period_invoice_prorata_info'];
    }

    /**
     * Sets previous_fix_period_invoice_prorata_info
     * @param \Swagger\Client\Model\PreviousFixPeriodInvoiceProrataInfo $previous_fix_period_invoice_prorata_info
     * @return $this
     */
    public function setPreviousFixPeriodInvoiceProrataInfo($previous_fix_period_invoice_prorata_info)
    {
        $this->container['previous_fix_period_invoice_prorata_info'] = $previous_fix_period_invoice_prorata_info;

        return $this;
    }

    /**
     * Gets contract_billing_period_info
     * @return \Swagger\Client\Model\ContractBillingPeriodInfo
     */
    public function getContractBillingPeriodInfo()
    {
        return $this->container['contract_billing_period_info'];
    }

    /**
     * Sets contract_billing_period_info
     * @param \Swagger\Client\Model\ContractBillingPeriodInfo $contract_billing_period_info
     * @return $this
     */
    public function setContractBillingPeriodInfo($contract_billing_period_info)
    {
        $this->container['contract_billing_period_info'] = $contract_billing_period_info;

        return $this;
    }

    /**
     * Gets contract_click_info
     * @return \Swagger\Client\Model\ContractClickInfo
     */
    public function getContractClickInfo()
    {
        return $this->container['contract_click_info'];
    }

    /**
     * Sets contract_click_info
     * @param \Swagger\Client\Model\ContractClickInfo $contract_click_info
     * @return $this
     */
    public function setContractClickInfo($contract_click_info)
    {
        $this->container['contract_click_info'] = $contract_click_info;

        return $this;
    }

    /**
     * Gets contract_commitment_info
     * @return \Swagger\Client\Model\ContractCommitmentInfo
     */
    public function getContractCommitmentInfo()
    {
        return $this->container['contract_commitment_info'];
    }

    /**
     * Sets contract_commitment_info
     * @param \Swagger\Client\Model\ContractCommitmentInfo $contract_commitment_info
     * @return $this
     */
    public function setContractCommitmentInfo($contract_commitment_info)
    {
        $this->container['contract_commitment_info'] = $contract_commitment_info;

        return $this;
    }

    /**
     * Gets contract_discount_info
     * @return \Swagger\Client\Model\ContractDiscountInfo
     */
    public function getContractDiscountInfo()
    {
        return $this->container['contract_discount_info'];
    }

    /**
     * Sets contract_discount_info
     * @param \Swagger\Client\Model\ContractDiscountInfo $contract_discount_info
     * @return $this
     */
    public function setContractDiscountInfo($contract_discount_info)
    {
        $this->container['contract_discount_info'] = $contract_discount_info;

        return $this;
    }

    /**
     * Gets contract_money_info
     * @return \Swagger\Client\Model\ContractMoneyInfo
     */
    public function getContractMoneyInfo()
    {
        return $this->container['contract_money_info'];
    }

    /**
     * Sets contract_money_info
     * @param \Swagger\Client\Model\ContractMoneyInfo $contract_money_info
     * @return $this
     */
    public function setContractMoneyInfo($contract_money_info)
    {
        $this->container['contract_money_info'] = $contract_money_info;

        return $this;
    }

    /**
     * Gets contract_store_info
     * @return \Swagger\Client\Model\ContractStoreInfo
     */
    public function getContractStoreInfo()
    {
        return $this->container['contract_store_info'];
    }

    /**
     * Sets contract_store_info
     * @param \Swagger\Client\Model\ContractStoreInfo $contract_store_info
     * @return $this
     */
    public function setContractStoreInfo($contract_store_info)
    {
        $this->container['contract_store_info'] = $contract_store_info;

        return $this;
    }

    /**
     * Gets contract_bonus_info
     * @return \Swagger\Client\Model\ContractBonusInfo
     */
    public function getContractBonusInfo()
    {
        return $this->container['contract_bonus_info'];
    }

    /**
     * Sets contract_bonus_info
     * @param \Swagger\Client\Model\ContractBonusInfo $contract_bonus_info
     * @return $this
     */
    public function setContractBonusInfo($contract_bonus_info)
    {
        $this->container['contract_bonus_info'] = $contract_bonus_info;

        return $this;
    }

    /**
     * Gets contract_termination_reason_type
     * @return \Swagger\Client\Model\ContractTerminationReasonType
     */
    public function getContractTerminationReasonType()
    {
        return $this->container['contract_termination_reason_type'];
    }

    /**
     * Sets contract_termination_reason_type
     * @param \Swagger\Client\Model\ContractTerminationReasonType $contract_termination_reason_type
     * @return $this
     */
    public function setContractTerminationReasonType($contract_termination_reason_type)
    {
        $this->container['contract_termination_reason_type'] = $contract_termination_reason_type;

        return $this;
    }

    /**
     * Gets contract_termination_reason
     * @return \Swagger\Client\Model\ContractTerminationReason
     */
    public function getContractTerminationReason()
    {
        return $this->container['contract_termination_reason'];
    }

    /**
     * Sets contract_termination_reason
     * @param \Swagger\Client\Model\ContractTerminationReason $contract_termination_reason
     * @return $this
     */
    public function setContractTerminationReason($contract_termination_reason)
    {
        $this->container['contract_termination_reason'] = $contract_termination_reason;

        return $this;
    }

    /**
     * Gets notify_vat_exemption
     * @return bool
     */
    public function getNotifyVatExemption()
    {
        return $this->container['notify_vat_exemption'];
    }

    /**
     * Sets notify_vat_exemption
     * @param bool $notify_vat_exemption Internal usage: Indicates if we have to notify you about VAT exemption.
     * @return $this
     */
    public function setNotifyVatExemption($notify_vat_exemption)
    {
        $this->container['notify_vat_exemption'] = $notify_vat_exemption;

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

