<?php
/**
 * ContractCommitmentInfo
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
 * ContractCommitmentInfo Class Doc Comment
 *
 * @category    Class
 * @description Describe the commitment information related to the offer.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContractCommitmentInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'contractCommitmentInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commitment_calculated_finish_date' => '\DateTime',
        'new_contract_start_date' => '\DateTime',
        'commitment_period_in_month' => 'int',
        'trial_period_in_month' => 'int',
        'trial_period_finish_date' => '\DateTime',
        'payment_delay_in_days' => 'int',
        'offer_id' => '\Swagger\Client\Model\OfferId',
        'offer_name' => 'string',
        'current_contract_id' => 'string',
        'commercial_user_id' => 'string',
        'model' => 'string',
        'current_contract_termination_date' => '\DateTime',
        'requested_payment_method' => '\Swagger\Client\Model\PaymentMethod',
        'current_customer_payment_method' => '\Swagger\Client\Model\PaymentMethod',
        'contract_type' => 'int',
        'is_model_must_be_transmitted_in_new_contract' => 'bool',
        'fixed_and_variable_click_info' => '\Swagger\Client\Model\FixedAndVariableClickModelInfo',
        'variable_model_info' => '\Swagger\Client\Model\VariableModelInfo',
        'payment_method_authorized' => '\Swagger\Client\Model\PaymentMethod',
        'coupon_offer_code' => '\Swagger\Client\Model\CouponOfferCode',
        'commercial_creator_user_id' => 'string',
        'min_billing_period_in_months' => 'int',
        'is_customer_wants_to_terminate_his_contract' => 'bool'
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
        'commitment_calculated_finish_date' => 'commitmentCalculatedFinishDate',
        'new_contract_start_date' => 'newContractStartDate',
        'commitment_period_in_month' => 'commitmentPeriodInMonth',
        'trial_period_in_month' => 'trialPeriodInMonth',
        'trial_period_finish_date' => 'trialPeriodFinishDate',
        'payment_delay_in_days' => 'paymentDelayInDays',
        'offer_id' => 'offerId',
        'offer_name' => 'offerName',
        'current_contract_id' => 'currentContractId',
        'commercial_user_id' => 'commercialUserId',
        'model' => 'model',
        'current_contract_termination_date' => 'currentContractTerminationDate',
        'requested_payment_method' => 'requestedPaymentMethod',
        'current_customer_payment_method' => 'currentCustomerPaymentMethod',
        'contract_type' => 'contractType',
        'is_model_must_be_transmitted_in_new_contract' => 'isModelMustBeTransmittedInNewContract',
        'fixed_and_variable_click_info' => 'fixedAndVariableClickInfo',
        'variable_model_info' => 'variableModelInfo',
        'payment_method_authorized' => 'paymentMethodAuthorized',
        'coupon_offer_code' => 'couponOfferCode',
        'commercial_creator_user_id' => 'commercialCreatorUserId',
        'min_billing_period_in_months' => 'minBillingPeriodInMonths',
        'is_customer_wants_to_terminate_his_contract' => 'isCustomerWantsToTerminateHisContract'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'commitment_calculated_finish_date' => 'setCommitmentCalculatedFinishDate',
        'new_contract_start_date' => 'setNewContractStartDate',
        'commitment_period_in_month' => 'setCommitmentPeriodInMonth',
        'trial_period_in_month' => 'setTrialPeriodInMonth',
        'trial_period_finish_date' => 'setTrialPeriodFinishDate',
        'payment_delay_in_days' => 'setPaymentDelayInDays',
        'offer_id' => 'setOfferId',
        'offer_name' => 'setOfferName',
        'current_contract_id' => 'setCurrentContractId',
        'commercial_user_id' => 'setCommercialUserId',
        'model' => 'setModel',
        'current_contract_termination_date' => 'setCurrentContractTerminationDate',
        'requested_payment_method' => 'setRequestedPaymentMethod',
        'current_customer_payment_method' => 'setCurrentCustomerPaymentMethod',
        'contract_type' => 'setContractType',
        'is_model_must_be_transmitted_in_new_contract' => 'setIsModelMustBeTransmittedInNewContract',
        'fixed_and_variable_click_info' => 'setFixedAndVariableClickInfo',
        'variable_model_info' => 'setVariableModelInfo',
        'payment_method_authorized' => 'setPaymentMethodAuthorized',
        'coupon_offer_code' => 'setCouponOfferCode',
        'commercial_creator_user_id' => 'setCommercialCreatorUserId',
        'min_billing_period_in_months' => 'setMinBillingPeriodInMonths',
        'is_customer_wants_to_terminate_his_contract' => 'setIsCustomerWantsToTerminateHisContract'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'commitment_calculated_finish_date' => 'getCommitmentCalculatedFinishDate',
        'new_contract_start_date' => 'getNewContractStartDate',
        'commitment_period_in_month' => 'getCommitmentPeriodInMonth',
        'trial_period_in_month' => 'getTrialPeriodInMonth',
        'trial_period_finish_date' => 'getTrialPeriodFinishDate',
        'payment_delay_in_days' => 'getPaymentDelayInDays',
        'offer_id' => 'getOfferId',
        'offer_name' => 'getOfferName',
        'current_contract_id' => 'getCurrentContractId',
        'commercial_user_id' => 'getCommercialUserId',
        'model' => 'getModel',
        'current_contract_termination_date' => 'getCurrentContractTerminationDate',
        'requested_payment_method' => 'getRequestedPaymentMethod',
        'current_customer_payment_method' => 'getCurrentCustomerPaymentMethod',
        'contract_type' => 'getContractType',
        'is_model_must_be_transmitted_in_new_contract' => 'getIsModelMustBeTransmittedInNewContract',
        'fixed_and_variable_click_info' => 'getFixedAndVariableClickInfo',
        'variable_model_info' => 'getVariableModelInfo',
        'payment_method_authorized' => 'getPaymentMethodAuthorized',
        'coupon_offer_code' => 'getCouponOfferCode',
        'commercial_creator_user_id' => 'getCommercialCreatorUserId',
        'min_billing_period_in_months' => 'getMinBillingPeriodInMonths',
        'is_customer_wants_to_terminate_his_contract' => 'getIsCustomerWantsToTerminateHisContract'
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
        $this->container['commitment_calculated_finish_date'] = isset($data['commitment_calculated_finish_date']) ? $data['commitment_calculated_finish_date'] : null;
        $this->container['new_contract_start_date'] = isset($data['new_contract_start_date']) ? $data['new_contract_start_date'] : null;
        $this->container['commitment_period_in_month'] = isset($data['commitment_period_in_month']) ? $data['commitment_period_in_month'] : null;
        $this->container['trial_period_in_month'] = isset($data['trial_period_in_month']) ? $data['trial_period_in_month'] : null;
        $this->container['trial_period_finish_date'] = isset($data['trial_period_finish_date']) ? $data['trial_period_finish_date'] : null;
        $this->container['payment_delay_in_days'] = isset($data['payment_delay_in_days']) ? $data['payment_delay_in_days'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['offer_name'] = isset($data['offer_name']) ? $data['offer_name'] : null;
        $this->container['current_contract_id'] = isset($data['current_contract_id']) ? $data['current_contract_id'] : null;
        $this->container['commercial_user_id'] = isset($data['commercial_user_id']) ? $data['commercial_user_id'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['current_contract_termination_date'] = isset($data['current_contract_termination_date']) ? $data['current_contract_termination_date'] : null;
        $this->container['requested_payment_method'] = isset($data['requested_payment_method']) ? $data['requested_payment_method'] : null;
        $this->container['current_customer_payment_method'] = isset($data['current_customer_payment_method']) ? $data['current_customer_payment_method'] : null;
        $this->container['contract_type'] = isset($data['contract_type']) ? $data['contract_type'] : null;
        $this->container['is_model_must_be_transmitted_in_new_contract'] = isset($data['is_model_must_be_transmitted_in_new_contract']) ? $data['is_model_must_be_transmitted_in_new_contract'] : null;
        $this->container['fixed_and_variable_click_info'] = isset($data['fixed_and_variable_click_info']) ? $data['fixed_and_variable_click_info'] : null;
        $this->container['variable_model_info'] = isset($data['variable_model_info']) ? $data['variable_model_info'] : null;
        $this->container['payment_method_authorized'] = isset($data['payment_method_authorized']) ? $data['payment_method_authorized'] : null;
        $this->container['coupon_offer_code'] = isset($data['coupon_offer_code']) ? $data['coupon_offer_code'] : null;
        $this->container['commercial_creator_user_id'] = isset($data['commercial_creator_user_id']) ? $data['commercial_creator_user_id'] : null;
        $this->container['min_billing_period_in_months'] = isset($data['min_billing_period_in_months']) ? $data['min_billing_period_in_months'] : null;
        $this->container['is_customer_wants_to_terminate_his_contract'] = isset($data['is_customer_wants_to_terminate_his_contract']) ? $data['is_customer_wants_to_terminate_his_contract'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets commitment_calculated_finish_date
     * @return \DateTime
     */
    public function getCommitmentCalculatedFinishDate()
    {
        return $this->container['commitment_calculated_finish_date'];
    }

    /**
     * Sets commitment_calculated_finish_date
     * @param \DateTime $commitment_calculated_finish_date The commitment end date related to the offer
     * @return $this
     */
    public function setCommitmentCalculatedFinishDate($commitment_calculated_finish_date)
    {
        $this->container['commitment_calculated_finish_date'] = $commitment_calculated_finish_date;

        return $this;
    }

    /**
     * Gets new_contract_start_date
     * @return \DateTime
     */
    public function getNewContractStartDate()
    {
        return $this->container['new_contract_start_date'];
    }

    /**
     * Sets new_contract_start_date
     * @param \DateTime $new_contract_start_date The start date related to the offer
     * @return $this
     */
    public function setNewContractStartDate($new_contract_start_date)
    {
        $this->container['new_contract_start_date'] = $new_contract_start_date;

        return $this;
    }

    /**
     * Gets commitment_period_in_month
     * @return int
     */
    public function getCommitmentPeriodInMonth()
    {
        return $this->container['commitment_period_in_month'];
    }

    /**
     * Sets commitment_period_in_month
     * @param int $commitment_period_in_month The commitment period in month related to the offer
     * @return $this
     */
    public function setCommitmentPeriodInMonth($commitment_period_in_month)
    {
        $this->container['commitment_period_in_month'] = $commitment_period_in_month;

        return $this;
    }

    /**
     * Gets trial_period_in_month
     * @return int
     */
    public function getTrialPeriodInMonth()
    {
        return $this->container['trial_period_in_month'];
    }

    /**
     * Sets trial_period_in_month
     * @param int $trial_period_in_month The trial period in month related to the offer
     * @return $this
     */
    public function setTrialPeriodInMonth($trial_period_in_month)
    {
        $this->container['trial_period_in_month'] = $trial_period_in_month;

        return $this;
    }

    /**
     * Gets trial_period_finish_date
     * @return \DateTime
     */
    public function getTrialPeriodFinishDate()
    {
        return $this->container['trial_period_finish_date'];
    }

    /**
     * Sets trial_period_finish_date
     * @param \DateTime $trial_period_finish_date The trial period end date related to the offer
     * @return $this
     */
    public function setTrialPeriodFinishDate($trial_period_finish_date)
    {
        $this->container['trial_period_finish_date'] = $trial_period_finish_date;

        return $this;
    }

    /**
     * Gets payment_delay_in_days
     * @return int
     */
    public function getPaymentDelayInDays()
    {
        return $this->container['payment_delay_in_days'];
    }

    /**
     * Sets payment_delay_in_days
     * @param int $payment_delay_in_days The payment delay in days related to the offer
     * @return $this
     */
    public function setPaymentDelayInDays($payment_delay_in_days)
    {
        $this->container['payment_delay_in_days'] = $payment_delay_in_days;

        return $this;
    }

    /**
     * Gets offer_id
     * @return \Swagger\Client\Model\OfferId
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     * @param \Swagger\Client\Model\OfferId $offer_id
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets offer_name
     * @return string
     */
    public function getOfferName()
    {
        return $this->container['offer_name'];
    }

    /**
     * Sets offer_name
     * @param string $offer_name The offer Name
     * @return $this
     */
    public function setOfferName($offer_name)
    {
        $this->container['offer_name'] = $offer_name;

        return $this;
    }

    /**
     * Gets current_contract_id
     * @return string
     */
    public function getCurrentContractId()
    {
        return $this->container['current_contract_id'];
    }

    /**
     * Sets current_contract_id
     * @param string $current_contract_id Your current contract id
     * @return $this
     */
    public function setCurrentContractId($current_contract_id)
    {
        $this->container['current_contract_id'] = $current_contract_id;

        return $this;
    }

    /**
     * Gets commercial_user_id
     * @return string
     */
    public function getCommercialUserId()
    {
        return $this->container['commercial_user_id'];
    }

    /**
     * Sets commercial_user_id
     * @param string $commercial_user_id Your current commercial user id
     * @return $this
     */
    public function setCommercialUserId($commercial_user_id)
    {
        $this->container['commercial_user_id'] = $commercial_user_id;

        return $this;
    }

    /**
     * Gets model
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     * @param string $model Interal usage: Old offer type. The model description
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets current_contract_termination_date
     * @return \DateTime
     */
    public function getCurrentContractTerminationDate()
    {
        return $this->container['current_contract_termination_date'];
    }

    /**
     * Sets current_contract_termination_date
     * @param \DateTime $current_contract_termination_date The current contract termination date
     * @return $this
     */
    public function setCurrentContractTerminationDate($current_contract_termination_date)
    {
        $this->container['current_contract_termination_date'] = $current_contract_termination_date;

        return $this;
    }

    /**
     * Gets requested_payment_method
     * @return \Swagger\Client\Model\PaymentMethod
     */
    public function getRequestedPaymentMethod()
    {
        return $this->container['requested_payment_method'];
    }

    /**
     * Sets requested_payment_method
     * @param \Swagger\Client\Model\PaymentMethod $requested_payment_method
     * @return $this
     */
    public function setRequestedPaymentMethod($requested_payment_method)
    {
        $this->container['requested_payment_method'] = $requested_payment_method;

        return $this;
    }

    /**
     * Gets current_customer_payment_method
     * @return \Swagger\Client\Model\PaymentMethod
     */
    public function getCurrentCustomerPaymentMethod()
    {
        return $this->container['current_customer_payment_method'];
    }

    /**
     * Sets current_customer_payment_method
     * @param \Swagger\Client\Model\PaymentMethod $current_customer_payment_method
     * @return $this
     */
    public function setCurrentCustomerPaymentMethod($current_customer_payment_method)
    {
        $this->container['current_customer_payment_method'] = $current_customer_payment_method;

        return $this;
    }

    /**
     * Gets contract_type
     * @return int
     */
    public function getContractType()
    {
        return $this->container['contract_type'];
    }

    /**
     * Sets contract_type
     * @param int $contract_type Internal usage: Old offer type. Your contract type
     * @return $this
     */
    public function setContractType($contract_type)
    {
        $this->container['contract_type'] = $contract_type;

        return $this;
    }

    /**
     * Gets is_model_must_be_transmitted_in_new_contract
     * @return bool
     */
    public function getIsModelMustBeTransmittedInNewContract()
    {
        return $this->container['is_model_must_be_transmitted_in_new_contract'];
    }

    /**
     * Sets is_model_must_be_transmitted_in_new_contract
     * @param bool $is_model_must_be_transmitted_in_new_contract Internal usage: Old offer type. Is the current contract model needs to be converted into a new contract type
     * @return $this
     */
    public function setIsModelMustBeTransmittedInNewContract($is_model_must_be_transmitted_in_new_contract)
    {
        $this->container['is_model_must_be_transmitted_in_new_contract'] = $is_model_must_be_transmitted_in_new_contract;

        return $this;
    }

    /**
     * Gets fixed_and_variable_click_info
     * @return \Swagger\Client\Model\FixedAndVariableClickModelInfo
     */
    public function getFixedAndVariableClickInfo()
    {
        return $this->container['fixed_and_variable_click_info'];
    }

    /**
     * Sets fixed_and_variable_click_info
     * @param \Swagger\Client\Model\FixedAndVariableClickModelInfo $fixed_and_variable_click_info
     * @return $this
     */
    public function setFixedAndVariableClickInfo($fixed_and_variable_click_info)
    {
        $this->container['fixed_and_variable_click_info'] = $fixed_and_variable_click_info;

        return $this;
    }

    /**
     * Gets variable_model_info
     * @return \Swagger\Client\Model\VariableModelInfo
     */
    public function getVariableModelInfo()
    {
        return $this->container['variable_model_info'];
    }

    /**
     * Sets variable_model_info
     * @param \Swagger\Client\Model\VariableModelInfo $variable_model_info
     * @return $this
     */
    public function setVariableModelInfo($variable_model_info)
    {
        $this->container['variable_model_info'] = $variable_model_info;

        return $this;
    }

    /**
     * Gets payment_method_authorized
     * @return \Swagger\Client\Model\PaymentMethod
     */
    public function getPaymentMethodAuthorized()
    {
        return $this->container['payment_method_authorized'];
    }

    /**
     * Sets payment_method_authorized
     * @param \Swagger\Client\Model\PaymentMethod $payment_method_authorized
     * @return $this
     */
    public function setPaymentMethodAuthorized($payment_method_authorized)
    {
        $this->container['payment_method_authorized'] = $payment_method_authorized;

        return $this;
    }

    /**
     * Gets coupon_offer_code
     * @return \Swagger\Client\Model\CouponOfferCode
     */
    public function getCouponOfferCode()
    {
        return $this->container['coupon_offer_code'];
    }

    /**
     * Sets coupon_offer_code
     * @param \Swagger\Client\Model\CouponOfferCode $coupon_offer_code
     * @return $this
     */
    public function setCouponOfferCode($coupon_offer_code)
    {
        $this->container['coupon_offer_code'] = $coupon_offer_code;

        return $this;
    }

    /**
     * Gets commercial_creator_user_id
     * @return string
     */
    public function getCommercialCreatorUserId()
    {
        return $this->container['commercial_creator_user_id'];
    }

    /**
     * Sets commercial_creator_user_id
     * @param string $commercial_creator_user_id The commercial that is responsible of the creation of your account
     * @return $this
     */
    public function setCommercialCreatorUserId($commercial_creator_user_id)
    {
        $this->container['commercial_creator_user_id'] = $commercial_creator_user_id;

        return $this;
    }

    /**
     * Gets min_billing_period_in_months
     * @return int
     */
    public function getMinBillingPeriodInMonths()
    {
        return $this->container['min_billing_period_in_months'];
    }

    /**
     * Sets min_billing_period_in_months
     * @param int $min_billing_period_in_months The minimum billing period in month authorized for this offer.
     * @return $this
     */
    public function setMinBillingPeriodInMonths($min_billing_period_in_months)
    {
        $this->container['min_billing_period_in_months'] = $min_billing_period_in_months;

        return $this;
    }

    /**
     * Gets is_customer_wants_to_terminate_his_contract
     * @return bool
     */
    public function getIsCustomerWantsToTerminateHisContract()
    {
        return $this->container['is_customer_wants_to_terminate_his_contract'];
    }

    /**
     * Sets is_customer_wants_to_terminate_his_contract
     * @param bool $is_customer_wants_to_terminate_his_contract If true, this means you want to leave us and that's sad... :'-(
     * @return $this
     */
    public function setIsCustomerWantsToTerminateHisContract($is_customer_wants_to_terminate_his_contract)
    {
        $this->container['is_customer_wants_to_terminate_his_contract'] = $is_customer_wants_to_terminate_his_contract;

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


