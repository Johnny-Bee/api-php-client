<?php
/**
 * OrderHeader
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
 * OrderHeader Class Doc Comment
 *
 * @category    Class
 * @description Describe the basic information related to an order. All properties with the prefix order_ are translated in the list of values /user/lov/OrderMetaInfoOrderDetails
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderHeader implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'orderHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_technical_code' => '\Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode',
        'account_id' => '\Swagger\Client\Model\AccountId',
        'beez_up_order_id' => '\Swagger\Client\Model\BeezUPOrderId',
        'beez_up_order_url' => '\Swagger\Client\Model\BeezUPCommonHttpUrl',
        'marketplace_business_code' => '\Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode',
        'order_marketplace_order_id' => '\Swagger\Client\Model\MarketplaceOrderId',
        'order_status_beez_up_order_status' => '\Swagger\Client\Model\BeezUPOrderStatus',
        'order_status_marketplace_order_status' => '\Swagger\Client\Model\MarketplaceOrderStatus',
        'order_merchant_order_id' => '\Swagger\Client\Model\OrderMerchantOrderId',
        'order_merchant_e_commerce_software_name' => '\Swagger\Client\Model\OrderMerchantECommerceSoftwareName',
        'order_merchant_e_commerce_software_version' => '\Swagger\Client\Model\OrderMerchantECommerceSoftwareVersion',
        'order_purchase_utc_date' => '\DateTime',
        'order_last_modification_utc_date' => '\DateTime',
        'order_marketplace_last_modification_utc_date' => '\DateTime',
        'order_buyer_name' => '\Swagger\Client\Model\OrderBuyerName',
        'order_total_price' => 'float',
        'order_currency_code' => '\Swagger\Client\Model\BeezUPCommonCurrencyCode',
        'processing' => '\Swagger\Client\Model\Processing',
        'etag' => '\Swagger\Client\Model\Etag',
        'links' => '\Swagger\Client\Model\OrderHeaderLinks'
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
        'marketplace_technical_code' => 'marketplaceTechnicalCode',
        'account_id' => 'accountId',
        'beez_up_order_id' => 'beezUPOrderId',
        'beez_up_order_url' => 'beezUPOrderUrl',
        'marketplace_business_code' => 'marketplaceBusinessCode',
        'order_marketplace_order_id' => 'order_MarketplaceOrderId',
        'order_status_beez_up_order_status' => 'order_Status_BeezUPOrderStatus',
        'order_status_marketplace_order_status' => 'order_Status_MarketplaceOrderStatus',
        'order_merchant_order_id' => 'order_MerchantOrderId',
        'order_merchant_e_commerce_software_name' => 'order_MerchantECommerceSoftwareName',
        'order_merchant_e_commerce_software_version' => 'order_MerchantECommerceSoftwareVersion',
        'order_purchase_utc_date' => 'order_PurchaseUtcDate',
        'order_last_modification_utc_date' => 'order_LastModificationUtcDate',
        'order_marketplace_last_modification_utc_date' => 'order_MarketplaceLastModificationUtcDate',
        'order_buyer_name' => 'order_Buyer_Name',
        'order_total_price' => 'order_TotalPrice',
        'order_currency_code' => 'order_CurrencyCode',
        'processing' => 'processing',
        'etag' => 'etag',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'marketplace_technical_code' => 'setMarketplaceTechnicalCode',
        'account_id' => 'setAccountId',
        'beez_up_order_id' => 'setBeezUpOrderId',
        'beez_up_order_url' => 'setBeezUpOrderUrl',
        'marketplace_business_code' => 'setMarketplaceBusinessCode',
        'order_marketplace_order_id' => 'setOrderMarketplaceOrderId',
        'order_status_beez_up_order_status' => 'setOrderStatusBeezUpOrderStatus',
        'order_status_marketplace_order_status' => 'setOrderStatusMarketplaceOrderStatus',
        'order_merchant_order_id' => 'setOrderMerchantOrderId',
        'order_merchant_e_commerce_software_name' => 'setOrderMerchantECommerceSoftwareName',
        'order_merchant_e_commerce_software_version' => 'setOrderMerchantECommerceSoftwareVersion',
        'order_purchase_utc_date' => 'setOrderPurchaseUtcDate',
        'order_last_modification_utc_date' => 'setOrderLastModificationUtcDate',
        'order_marketplace_last_modification_utc_date' => 'setOrderMarketplaceLastModificationUtcDate',
        'order_buyer_name' => 'setOrderBuyerName',
        'order_total_price' => 'setOrderTotalPrice',
        'order_currency_code' => 'setOrderCurrencyCode',
        'processing' => 'setProcessing',
        'etag' => 'setEtag',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'marketplace_technical_code' => 'getMarketplaceTechnicalCode',
        'account_id' => 'getAccountId',
        'beez_up_order_id' => 'getBeezUpOrderId',
        'beez_up_order_url' => 'getBeezUpOrderUrl',
        'marketplace_business_code' => 'getMarketplaceBusinessCode',
        'order_marketplace_order_id' => 'getOrderMarketplaceOrderId',
        'order_status_beez_up_order_status' => 'getOrderStatusBeezUpOrderStatus',
        'order_status_marketplace_order_status' => 'getOrderStatusMarketplaceOrderStatus',
        'order_merchant_order_id' => 'getOrderMerchantOrderId',
        'order_merchant_e_commerce_software_name' => 'getOrderMerchantECommerceSoftwareName',
        'order_merchant_e_commerce_software_version' => 'getOrderMerchantECommerceSoftwareVersion',
        'order_purchase_utc_date' => 'getOrderPurchaseUtcDate',
        'order_last_modification_utc_date' => 'getOrderLastModificationUtcDate',
        'order_marketplace_last_modification_utc_date' => 'getOrderMarketplaceLastModificationUtcDate',
        'order_buyer_name' => 'getOrderBuyerName',
        'order_total_price' => 'getOrderTotalPrice',
        'order_currency_code' => 'getOrderCurrencyCode',
        'processing' => 'getProcessing',
        'etag' => 'getEtag',
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
        $this->container['marketplace_technical_code'] = isset($data['marketplace_technical_code']) ? $data['marketplace_technical_code'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['beez_up_order_id'] = isset($data['beez_up_order_id']) ? $data['beez_up_order_id'] : null;
        $this->container['beez_up_order_url'] = isset($data['beez_up_order_url']) ? $data['beez_up_order_url'] : null;
        $this->container['marketplace_business_code'] = isset($data['marketplace_business_code']) ? $data['marketplace_business_code'] : null;
        $this->container['order_marketplace_order_id'] = isset($data['order_marketplace_order_id']) ? $data['order_marketplace_order_id'] : null;
        $this->container['order_status_beez_up_order_status'] = isset($data['order_status_beez_up_order_status']) ? $data['order_status_beez_up_order_status'] : null;
        $this->container['order_status_marketplace_order_status'] = isset($data['order_status_marketplace_order_status']) ? $data['order_status_marketplace_order_status'] : null;
        $this->container['order_merchant_order_id'] = isset($data['order_merchant_order_id']) ? $data['order_merchant_order_id'] : null;
        $this->container['order_merchant_e_commerce_software_name'] = isset($data['order_merchant_e_commerce_software_name']) ? $data['order_merchant_e_commerce_software_name'] : null;
        $this->container['order_merchant_e_commerce_software_version'] = isset($data['order_merchant_e_commerce_software_version']) ? $data['order_merchant_e_commerce_software_version'] : null;
        $this->container['order_purchase_utc_date'] = isset($data['order_purchase_utc_date']) ? $data['order_purchase_utc_date'] : null;
        $this->container['order_last_modification_utc_date'] = isset($data['order_last_modification_utc_date']) ? $data['order_last_modification_utc_date'] : null;
        $this->container['order_marketplace_last_modification_utc_date'] = isset($data['order_marketplace_last_modification_utc_date']) ? $data['order_marketplace_last_modification_utc_date'] : null;
        $this->container['order_buyer_name'] = isset($data['order_buyer_name']) ? $data['order_buyer_name'] : null;
        $this->container['order_total_price'] = isset($data['order_total_price']) ? $data['order_total_price'] : null;
        $this->container['order_currency_code'] = isset($data['order_currency_code']) ? $data['order_currency_code'] : null;
        $this->container['processing'] = isset($data['processing']) ? $data['processing'] : null;
        $this->container['etag'] = isset($data['etag']) ? $data['etag'] : null;
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

        if ($this->container['marketplace_technical_code'] === null) {
            $invalid_properties[] = "'marketplace_technical_code' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalid_properties[] = "'account_id' can't be null";
        }
        if ($this->container['beez_up_order_id'] === null) {
            $invalid_properties[] = "'beez_up_order_id' can't be null";
        }
        if ($this->container['marketplace_business_code'] === null) {
            $invalid_properties[] = "'marketplace_business_code' can't be null";
        }
        if ($this->container['order_marketplace_order_id'] === null) {
            $invalid_properties[] = "'order_marketplace_order_id' can't be null";
        }
        if ($this->container['order_status_beez_up_order_status'] === null) {
            $invalid_properties[] = "'order_status_beez_up_order_status' can't be null";
        }
        if ($this->container['order_purchase_utc_date'] === null) {
            $invalid_properties[] = "'order_purchase_utc_date' can't be null";
        }
        if ($this->container['order_last_modification_utc_date'] === null) {
            $invalid_properties[] = "'order_last_modification_utc_date' can't be null";
        }
        if ($this->container['order_marketplace_last_modification_utc_date'] === null) {
            $invalid_properties[] = "'order_marketplace_last_modification_utc_date' can't be null";
        }
        if ($this->container['processing'] === null) {
            $invalid_properties[] = "'processing' can't be null";
        }
        if ($this->container['etag'] === null) {
            $invalid_properties[] = "'etag' can't be null";
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

        if ($this->container['marketplace_technical_code'] === null) {
            return false;
        }
        if ($this->container['account_id'] === null) {
            return false;
        }
        if ($this->container['beez_up_order_id'] === null) {
            return false;
        }
        if ($this->container['marketplace_business_code'] === null) {
            return false;
        }
        if ($this->container['order_marketplace_order_id'] === null) {
            return false;
        }
        if ($this->container['order_status_beez_up_order_status'] === null) {
            return false;
        }
        if ($this->container['order_purchase_utc_date'] === null) {
            return false;
        }
        if ($this->container['order_last_modification_utc_date'] === null) {
            return false;
        }
        if ($this->container['order_marketplace_last_modification_utc_date'] === null) {
            return false;
        }
        if ($this->container['processing'] === null) {
            return false;
        }
        if ($this->container['etag'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets marketplace_technical_code
     * @return \Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode
     */
    public function getMarketplaceTechnicalCode()
    {
        return $this->container['marketplace_technical_code'];
    }

    /**
     * Sets marketplace_technical_code
     * @param \Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode $marketplace_technical_code
     * @return $this
     */
    public function setMarketplaceTechnicalCode($marketplace_technical_code)
    {
        $this->container['marketplace_technical_code'] = $marketplace_technical_code;

        return $this;
    }

    /**
     * Gets account_id
     * @return \Swagger\Client\Model\AccountId
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     * @param \Swagger\Client\Model\AccountId $account_id
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets beez_up_order_id
     * @return \Swagger\Client\Model\BeezUPOrderId
     */
    public function getBeezUpOrderId()
    {
        return $this->container['beez_up_order_id'];
    }

    /**
     * Sets beez_up_order_id
     * @param \Swagger\Client\Model\BeezUPOrderId $beez_up_order_id
     * @return $this
     */
    public function setBeezUpOrderId($beez_up_order_id)
    {
        $this->container['beez_up_order_id'] = $beez_up_order_id;

        return $this;
    }

    /**
     * Gets beez_up_order_url
     * @return \Swagger\Client\Model\BeezUPCommonHttpUrl
     */
    public function getBeezUpOrderUrl()
    {
        return $this->container['beez_up_order_url'];
    }

    /**
     * Sets beez_up_order_url
     * @param \Swagger\Client\Model\BeezUPCommonHttpUrl $beez_up_order_url
     * @return $this
     */
    public function setBeezUpOrderUrl($beez_up_order_url)
    {
        $this->container['beez_up_order_url'] = $beez_up_order_url;

        return $this;
    }

    /**
     * Gets marketplace_business_code
     * @return \Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode
     */
    public function getMarketplaceBusinessCode()
    {
        return $this->container['marketplace_business_code'];
    }

    /**
     * Sets marketplace_business_code
     * @param \Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode $marketplace_business_code
     * @return $this
     */
    public function setMarketplaceBusinessCode($marketplace_business_code)
    {
        $this->container['marketplace_business_code'] = $marketplace_business_code;

        return $this;
    }

    /**
     * Gets order_marketplace_order_id
     * @return \Swagger\Client\Model\MarketplaceOrderId
     */
    public function getOrderMarketplaceOrderId()
    {
        return $this->container['order_marketplace_order_id'];
    }

    /**
     * Sets order_marketplace_order_id
     * @param \Swagger\Client\Model\MarketplaceOrderId $order_marketplace_order_id
     * @return $this
     */
    public function setOrderMarketplaceOrderId($order_marketplace_order_id)
    {
        $this->container['order_marketplace_order_id'] = $order_marketplace_order_id;

        return $this;
    }

    /**
     * Gets order_status_beez_up_order_status
     * @return \Swagger\Client\Model\BeezUPOrderStatus
     */
    public function getOrderStatusBeezUpOrderStatus()
    {
        return $this->container['order_status_beez_up_order_status'];
    }

    /**
     * Sets order_status_beez_up_order_status
     * @param \Swagger\Client\Model\BeezUPOrderStatus $order_status_beez_up_order_status
     * @return $this
     */
    public function setOrderStatusBeezUpOrderStatus($order_status_beez_up_order_status)
    {
        $this->container['order_status_beez_up_order_status'] = $order_status_beez_up_order_status;

        return $this;
    }

    /**
     * Gets order_status_marketplace_order_status
     * @return \Swagger\Client\Model\MarketplaceOrderStatus
     */
    public function getOrderStatusMarketplaceOrderStatus()
    {
        return $this->container['order_status_marketplace_order_status'];
    }

    /**
     * Sets order_status_marketplace_order_status
     * @param \Swagger\Client\Model\MarketplaceOrderStatus $order_status_marketplace_order_status
     * @return $this
     */
    public function setOrderStatusMarketplaceOrderStatus($order_status_marketplace_order_status)
    {
        $this->container['order_status_marketplace_order_status'] = $order_status_marketplace_order_status;

        return $this;
    }

    /**
     * Gets order_merchant_order_id
     * @return \Swagger\Client\Model\OrderMerchantOrderId
     */
    public function getOrderMerchantOrderId()
    {
        return $this->container['order_merchant_order_id'];
    }

    /**
     * Sets order_merchant_order_id
     * @param \Swagger\Client\Model\OrderMerchantOrderId $order_merchant_order_id
     * @return $this
     */
    public function setOrderMerchantOrderId($order_merchant_order_id)
    {
        $this->container['order_merchant_order_id'] = $order_merchant_order_id;

        return $this;
    }

    /**
     * Gets order_merchant_e_commerce_software_name
     * @return \Swagger\Client\Model\OrderMerchantECommerceSoftwareName
     */
    public function getOrderMerchantECommerceSoftwareName()
    {
        return $this->container['order_merchant_e_commerce_software_name'];
    }

    /**
     * Sets order_merchant_e_commerce_software_name
     * @param \Swagger\Client\Model\OrderMerchantECommerceSoftwareName $order_merchant_e_commerce_software_name
     * @return $this
     */
    public function setOrderMerchantECommerceSoftwareName($order_merchant_e_commerce_software_name)
    {
        $this->container['order_merchant_e_commerce_software_name'] = $order_merchant_e_commerce_software_name;

        return $this;
    }

    /**
     * Gets order_merchant_e_commerce_software_version
     * @return \Swagger\Client\Model\OrderMerchantECommerceSoftwareVersion
     */
    public function getOrderMerchantECommerceSoftwareVersion()
    {
        return $this->container['order_merchant_e_commerce_software_version'];
    }

    /**
     * Sets order_merchant_e_commerce_software_version
     * @param \Swagger\Client\Model\OrderMerchantECommerceSoftwareVersion $order_merchant_e_commerce_software_version
     * @return $this
     */
    public function setOrderMerchantECommerceSoftwareVersion($order_merchant_e_commerce_software_version)
    {
        $this->container['order_merchant_e_commerce_software_version'] = $order_merchant_e_commerce_software_version;

        return $this;
    }

    /**
     * Gets order_purchase_utc_date
     * @return \DateTime
     */
    public function getOrderPurchaseUtcDate()
    {
        return $this->container['order_purchase_utc_date'];
    }

    /**
     * Sets order_purchase_utc_date
     * @param \DateTime $order_purchase_utc_date The purchase date of this order
     * @return $this
     */
    public function setOrderPurchaseUtcDate($order_purchase_utc_date)
    {
        $this->container['order_purchase_utc_date'] = $order_purchase_utc_date;

        return $this;
    }

    /**
     * Gets order_last_modification_utc_date
     * @return \DateTime
     */
    public function getOrderLastModificationUtcDate()
    {
        return $this->container['order_last_modification_utc_date'];
    }

    /**
     * Sets order_last_modification_utc_date
     * @param \DateTime $order_last_modification_utc_date The last modification UTC date done by BeezUP of this order
     * @return $this
     */
    public function setOrderLastModificationUtcDate($order_last_modification_utc_date)
    {
        $this->container['order_last_modification_utc_date'] = $order_last_modification_utc_date;

        return $this;
    }

    /**
     * Gets order_marketplace_last_modification_utc_date
     * @return \DateTime
     */
    public function getOrderMarketplaceLastModificationUtcDate()
    {
        return $this->container['order_marketplace_last_modification_utc_date'];
    }

    /**
     * Sets order_marketplace_last_modification_utc_date
     * @param \DateTime $order_marketplace_last_modification_utc_date The last modification UTC date done by the marketplace on this order
     * @return $this
     */
    public function setOrderMarketplaceLastModificationUtcDate($order_marketplace_last_modification_utc_date)
    {
        $this->container['order_marketplace_last_modification_utc_date'] = $order_marketplace_last_modification_utc_date;

        return $this;
    }

    /**
     * Gets order_buyer_name
     * @return \Swagger\Client\Model\OrderBuyerName
     */
    public function getOrderBuyerName()
    {
        return $this->container['order_buyer_name'];
    }

    /**
     * Sets order_buyer_name
     * @param \Swagger\Client\Model\OrderBuyerName $order_buyer_name
     * @return $this
     */
    public function setOrderBuyerName($order_buyer_name)
    {
        $this->container['order_buyer_name'] = $order_buyer_name;

        return $this;
    }

    /**
     * Gets order_total_price
     * @return float
     */
    public function getOrderTotalPrice()
    {
        return $this->container['order_total_price'];
    }

    /**
     * Sets order_total_price
     * @param float $order_total_price The total price of this order (corresponding to the amount paid by the customer)
     * @return $this
     */
    public function setOrderTotalPrice($order_total_price)
    {
        $this->container['order_total_price'] = $order_total_price;

        return $this;
    }

    /**
     * Gets order_currency_code
     * @return \Swagger\Client\Model\BeezUPCommonCurrencyCode
     */
    public function getOrderCurrencyCode()
    {
        return $this->container['order_currency_code'];
    }

    /**
     * Sets order_currency_code
     * @param \Swagger\Client\Model\BeezUPCommonCurrencyCode $order_currency_code
     * @return $this
     */
    public function setOrderCurrencyCode($order_currency_code)
    {
        $this->container['order_currency_code'] = $order_currency_code;

        return $this;
    }

    /**
     * Gets processing
     * @return \Swagger\Client\Model\Processing
     */
    public function getProcessing()
    {
        return $this->container['processing'];
    }

    /**
     * Sets processing
     * @param \Swagger\Client\Model\Processing $processing
     * @return $this
     */
    public function setProcessing($processing)
    {
        $this->container['processing'] = $processing;

        return $this;
    }

    /**
     * Gets etag
     * @return \Swagger\Client\Model\Etag
     */
    public function getEtag()
    {
        return $this->container['etag'];
    }

    /**
     * Sets etag
     * @param \Swagger\Client\Model\Etag $etag
     * @return $this
     */
    public function setEtag($etag)
    {
        $this->container['etag'] = $etag;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\OrderHeaderLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\OrderHeaderLinks $links
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


