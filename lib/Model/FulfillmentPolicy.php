<?php
/**
 * FulfillmentPolicy
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Account
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Account API
 *
 * The Account API gives sellers the ability to configure their eBay seller accounts, including the seller's policies (the Fulfillment Policy, Payment Policy, and Return Policy), opt in and out of eBay seller programs, configure sales tax tables, and get account information. For details on the restrictions and availability of the methods in this API, see API restrictions.
 *
 * OpenAPI spec version: v1.3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Sell\Account\Model;

use \ArrayAccess;
use \Nopolabs\EBay\Sell\Account\ObjectSerializer;

/**
 * FulfillmentPolicy Class Doc Comment
 *
 * @category Class
 * @description This root container defines a seller&#39;s fulfillment policy for a specific marketplace and category type. &lt;b&gt;fulfillmentPolicy&lt;/b&gt; encapsulates a seller&#39;s terms for fulfilling an order and includes the shipping carriers and services used for shipment and time the seller takes to ship an order. While each seller must define at least one fulfillment policy for every marketplace into which they sell, sellers can define multiple fulfillment policies for a single marketplace by specifying different configurations for the unique policies.
 * @package  Nopolabs\EBay\Sell\Account
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FulfillmentPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FulfillmentPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category_types' => '\Nopolabs\EBay\Sell\Account\Model\CategoryType[]',
        'description' => 'string',
        'freight_shipping' => 'bool',
        'fulfillment_policy_id' => 'string',
        'global_shipping' => 'bool',
        'handling_time' => '\Nopolabs\EBay\Sell\Account\Model\TimeDuration',
        'local_pickup' => 'bool',
        'marketplace_id' => 'string',
        'name' => 'string',
        'pickup_drop_off' => 'bool',
        'shipping_options' => '\Nopolabs\EBay\Sell\Account\Model\ShippingOption[]',
        'ship_to_locations' => '\Nopolabs\EBay\Sell\Account\Model\RegionSet'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category_types' => null,
        'description' => null,
        'freight_shipping' => null,
        'fulfillment_policy_id' => null,
        'global_shipping' => null,
        'handling_time' => null,
        'local_pickup' => null,
        'marketplace_id' => null,
        'name' => null,
        'pickup_drop_off' => null,
        'shipping_options' => null,
        'ship_to_locations' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'category_types' => 'categoryTypes',
        'description' => 'description',
        'freight_shipping' => 'freightShipping',
        'fulfillment_policy_id' => 'fulfillmentPolicyId',
        'global_shipping' => 'globalShipping',
        'handling_time' => 'handlingTime',
        'local_pickup' => 'localPickup',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'pickup_drop_off' => 'pickupDropOff',
        'shipping_options' => 'shippingOptions',
        'ship_to_locations' => 'shipToLocations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_types' => 'setCategoryTypes',
        'description' => 'setDescription',
        'freight_shipping' => 'setFreightShipping',
        'fulfillment_policy_id' => 'setFulfillmentPolicyId',
        'global_shipping' => 'setGlobalShipping',
        'handling_time' => 'setHandlingTime',
        'local_pickup' => 'setLocalPickup',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'pickup_drop_off' => 'setPickupDropOff',
        'shipping_options' => 'setShippingOptions',
        'ship_to_locations' => 'setShipToLocations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_types' => 'getCategoryTypes',
        'description' => 'getDescription',
        'freight_shipping' => 'getFreightShipping',
        'fulfillment_policy_id' => 'getFulfillmentPolicyId',
        'global_shipping' => 'getGlobalShipping',
        'handling_time' => 'getHandlingTime',
        'local_pickup' => 'getLocalPickup',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'pickup_drop_off' => 'getPickupDropOff',
        'shipping_options' => 'getShippingOptions',
        'ship_to_locations' => 'getShipToLocations'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['category_types'] = isset($data['category_types']) ? $data['category_types'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['freight_shipping'] = isset($data['freight_shipping']) ? $data['freight_shipping'] : null;
        $this->container['fulfillment_policy_id'] = isset($data['fulfillment_policy_id']) ? $data['fulfillment_policy_id'] : null;
        $this->container['global_shipping'] = isset($data['global_shipping']) ? $data['global_shipping'] : null;
        $this->container['handling_time'] = isset($data['handling_time']) ? $data['handling_time'] : null;
        $this->container['local_pickup'] = isset($data['local_pickup']) ? $data['local_pickup'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pickup_drop_off'] = isset($data['pickup_drop_off']) ? $data['pickup_drop_off'] : null;
        $this->container['shipping_options'] = isset($data['shipping_options']) ? $data['shipping_options'] : null;
        $this->container['ship_to_locations'] = isset($data['ship_to_locations']) ? $data['ship_to_locations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets category_types
     *
     * @return \Nopolabs\EBay\Sell\Account\Model\CategoryType[]
     */
    public function getCategoryTypes()
    {
        return $this->container['category_types'];
    }

    /**
     * Sets category_types
     *
     * @param \Nopolabs\EBay\Sell\Account\Model\CategoryType[] $category_types The CategoryTypeEnum value to which this policy applies. Used to discern accounts that sell motor vehicles from those that don't. (Currently, each policy can be set to only one categoryTypes value at a time.)
     *
     * @return $this
     */
    public function setCategoryTypes($category_types)
    {
        $this->container['category_types'] = $category_types;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description An optional seller-defined description of the fulfillment policy for internal use (this value is not displayed to end users). Max length: 250
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets freight_shipping
     *
     * @return bool
     */
    public function getFreightShipping()
    {
        return $this->container['freight_shipping'];
    }

    /**
     * Sets freight_shipping
     *
     * @param bool $freight_shipping If set to true, the seller offers freight shipping. Default: false
     *
     * @return $this
     */
    public function setFreightShipping($freight_shipping)
    {
        $this->container['freight_shipping'] = $freight_shipping;

        return $this;
    }

    /**
     * Gets fulfillment_policy_id
     *
     * @return string
     */
    public function getFulfillmentPolicyId()
    {
        return $this->container['fulfillment_policy_id'];
    }

    /**
     * Sets fulfillment_policy_id
     *
     * @param string $fulfillment_policy_id A unique eBay-assigned ID for the fulfillment policy. This ID is generated when the policy is created.
     *
     * @return $this
     */
    public function setFulfillmentPolicyId($fulfillment_policy_id)
    {
        $this->container['fulfillment_policy_id'] = $fulfillment_policy_id;

        return $this;
    }

    /**
     * Gets global_shipping
     *
     * @return bool
     */
    public function getGlobalShipping()
    {
        return $this->container['global_shipping'];
    }

    /**
     * Sets global_shipping
     *
     * @param bool $global_shipping If set to true, the seller has opted-in to the eBay Global Shipping Program and that they use that service for their international shipments. Setting this value automatically sets the international shipping service for the policy to International Priority Shipping and the buyer does not need to set any other shipping services for their INTERNATIONAL shipping options (unless they sell items not covered by the Global Shipping Program). If this value is set to false, the seller is responsible for manually specifying the international shipping services, as described in Setting up worldwide shipping. To opt-in to the Global Shipping Program, log in to eBay and navigate to My Account &gt; Site Preferences &gt; Shipping preferences. Default: false
     *
     * @return $this
     */
    public function setGlobalShipping($global_shipping)
    {
        $this->container['global_shipping'] = $global_shipping;

        return $this;
    }

    /**
     * Gets handling_time
     *
     * @return \Nopolabs\EBay\Sell\Account\Model\TimeDuration
     */
    public function getHandlingTime()
    {
        return $this->container['handling_time'];
    }

    /**
     * Sets handling_time
     *
     * @param \Nopolabs\EBay\Sell\Account\Model\TimeDuration $handling_time handling_time
     *
     * @return $this
     */
    public function setHandlingTime($handling_time)
    {
        $this->container['handling_time'] = $handling_time;

        return $this;
    }

    /**
     * Gets local_pickup
     *
     * @return bool
     */
    public function getLocalPickup()
    {
        return $this->container['local_pickup'];
    }

    /**
     * Sets local_pickup
     *
     * @param bool $local_pickup If set to true, the seller offers local pickup of their items. Local pickup is supported by the Inventory API, and it can be used with Add/Revise/Relist calls. To enable local pickup, a seller (1) must be eligible for local pickup and (2) must set this boolean field to 'true'. Currently, local pickup is available to only large retail merchants and can be applied to only multiple-quantity, fixed-price listings. In addition to setting this field, the merchant must also do the following to enable the &quot;Local Pickup&quot; option on a multiple-quantity, fixed-price listing: Have inventory for the product at one or more physical stores tied to the merchant's account. Sellers can use the createInventoryLocaion method in the Inventory API to associate physical stores to their account and they can then can add inventory to specific store locations. Include the seller-defined SKU value of the product(s) in the request. For single-variation listings, the SKU value is specified in the Item.SKU field and for multiple-variation listings, the SKU value(s) are specified in the Item.Variations.Variation.SKU field(s). Set an immediate payment requirement on the item. The immediate payment feature requires the seller to: Include only one paymentMethods field in the payment policy and set its value to PAYPAL. Include a valid PayPal contact in the recipientAccountReference.referenceId field of the payment policy. Have a valid store location with a complete street address. When a seller is successful at listing an item with the In-Store Pickup feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see the &quot;Available for In-Store Pickup&quot; option on the listing, along with information on the closest store that has the item.Default: false
     *
     * @return $this
     */
    public function setLocalPickup($local_pickup)
    {
        $this->container['local_pickup'] = $local_pickup;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id The ID of the eBay marketplace to which this fulfillment policy applies. If this value is not specified, value defaults to the seller's eBay registration site. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A user-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace. Max length: 64
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pickup_drop_off
     *
     * @return bool
     */
    public function getPickupDropOff()
    {
        return $this->container['pickup_drop_off'];
    }

    /**
     * Sets pickup_drop_off
     *
     * @param bool $pickup_drop_off If set to true, the seller offers the &quot;Click and Collect&quot; feature. Click and Collect is supported by the Inventory API, and it can be used with Add/Revise/Relist calls. To enable &quot;Click and Collect&quot;, a seller (1) must be eligible for Click and Collect and (2) must set this boolean field to 'true'. Currently, Click and Collect is available to only large retail merchants selling in the eBay AU and UK marketplaces. In addition to setting this field, the merchant must also do the following to enable the &quot;Click and Collect&quot; option on a listing: Have inventory for the product at one or more physical stores tied to the merchant's account. Sellers can use the createInventoryLocaion method in the Inventory API to associate physical stores to their account and they can then can add inventory to specific store locations. Set an immediate payment requirement on the item. The immediate payment feature requires the seller to: Set the immediatePay flag in the payment policy to 'true'. Include only one paymentMethods field in the payment policy and set its value to PAYPAL. Include a valid PayPal contact in the recipientAccountReference.referenceId field of the payment policy. Have a valid store location with a complete street address. When a UK merchant successfully lists an item with Click and Collect, prospective buyers within a reasonable distance from one of the merchant's stores (that has stock available) will see the &quot;Available for Click and Collect&quot; option on the listing, along with information on the closest store that has the item.Default: false
     *
     * @return $this
     */
    public function setPickupDropOff($pickup_drop_off)
    {
        $this->container['pickup_drop_off'] = $pickup_drop_off;

        return $this;
    }

    /**
     * Gets shipping_options
     *
     * @return \Nopolabs\EBay\Sell\Account\Model\ShippingOption[]
     */
    public function getShippingOptions()
    {
        return $this->container['shipping_options'];
    }

    /**
     * Sets shipping_options
     *
     * @param \Nopolabs\EBay\Sell\Account\Model\ShippingOption[] $shipping_options A list that defines the seller's shipping configurations for DOMESTIC and INTERNATIONAL order shipments. shippingOptions is a list with a single element if the seller ships to only domestic locations. If the seller also ships internationally, the list contains a second element that defines their international shipping options. Shipping options configure the high-level shipping settings that apply to orders, such as flat-rate or calculated shipping, any rate tables the seller wants to associate with the shipping services, plus other details (such as the shippingServices offered for domestic or international shipments).
     *
     * @return $this
     */
    public function setShippingOptions($shipping_options)
    {
        $this->container['shipping_options'] = $shipping_options;

        return $this;
    }

    /**
     * Gets ship_to_locations
     *
     * @return \Nopolabs\EBay\Sell\Account\Model\RegionSet
     */
    public function getShipToLocations()
    {
        return $this->container['ship_to_locations'];
    }

    /**
     * Sets ship_to_locations
     *
     * @param \Nopolabs\EBay\Sell\Account\Model\RegionSet $ship_to_locations ship_to_locations
     *
     * @return $this
     */
    public function setShipToLocations($ship_to_locations)
    {
        $this->container['ship_to_locations'] = $ship_to_locations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


