<?php
/**
 * ShippingService
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
 * ShippingService Class Doc Comment
 *
 * @category Class
 * @description A complex type that defines the available shipping services offered in the parent &lt;b&gt;shippingOptions&lt;/b&gt; container. The shipping services specified here must be able to accommodate the &lt;b&gt;optionType&lt;/b&gt; defined in the parent &lt;b&gt;shippingOption&lt;/b&gt; container (either DOMESTIC or INTERNATIONAL). &lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Tip:&lt;/b&gt; For more on setting up shipping services, see &lt;a href&#x3D;\&quot;/api-docs/sell/static/seller-accounts/ht_shipping-free.html#shippingServices\&quot;&gt;Setting the shipping carrier and shipping service values&lt;/a&gt;.&lt;/p&gt;
 * @package  Nopolabs\EBay\Sell\Account
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingService implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_shipping_cost' => '\Nopolabs\EBay\Sell\Account\Model\Amount',
        'buyer_responsible_for_pickup' => 'bool',
        'buyer_responsible_for_shipping' => 'bool',
        'cash_on_delivery_fee' => '\Nopolabs\EBay\Sell\Account\Model\Amount',
        'free_shipping' => 'bool',
        'shipping_carrier_code' => 'string',
        'shipping_cost' => '\Nopolabs\EBay\Sell\Account\Model\Amount',
        'shipping_service_code' => 'string',
        'ship_to_locations' => '\Nopolabs\EBay\Sell\Account\Model\RegionSet',
        'sort_order' => 'int',
        'surcharge' => '\Nopolabs\EBay\Sell\Account\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_shipping_cost' => null,
        'buyer_responsible_for_pickup' => null,
        'buyer_responsible_for_shipping' => null,
        'cash_on_delivery_fee' => null,
        'free_shipping' => null,
        'shipping_carrier_code' => null,
        'shipping_cost' => null,
        'shipping_service_code' => null,
        'ship_to_locations' => null,
        'sort_order' => null,
        'surcharge' => null
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
        'additional_shipping_cost' => 'additionalShippingCost',
        'buyer_responsible_for_pickup' => 'buyerResponsibleForPickup',
        'buyer_responsible_for_shipping' => 'buyerResponsibleForShipping',
        'cash_on_delivery_fee' => 'cashOnDeliveryFee',
        'free_shipping' => 'freeShipping',
        'shipping_carrier_code' => 'shippingCarrierCode',
        'shipping_cost' => 'shippingCost',
        'shipping_service_code' => 'shippingServiceCode',
        'ship_to_locations' => 'shipToLocations',
        'sort_order' => 'sortOrder',
        'surcharge' => 'surcharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_shipping_cost' => 'setAdditionalShippingCost',
        'buyer_responsible_for_pickup' => 'setBuyerResponsibleForPickup',
        'buyer_responsible_for_shipping' => 'setBuyerResponsibleForShipping',
        'cash_on_delivery_fee' => 'setCashOnDeliveryFee',
        'free_shipping' => 'setFreeShipping',
        'shipping_carrier_code' => 'setShippingCarrierCode',
        'shipping_cost' => 'setShippingCost',
        'shipping_service_code' => 'setShippingServiceCode',
        'ship_to_locations' => 'setShipToLocations',
        'sort_order' => 'setSortOrder',
        'surcharge' => 'setSurcharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_shipping_cost' => 'getAdditionalShippingCost',
        'buyer_responsible_for_pickup' => 'getBuyerResponsibleForPickup',
        'buyer_responsible_for_shipping' => 'getBuyerResponsibleForShipping',
        'cash_on_delivery_fee' => 'getCashOnDeliveryFee',
        'free_shipping' => 'getFreeShipping',
        'shipping_carrier_code' => 'getShippingCarrierCode',
        'shipping_cost' => 'getShippingCost',
        'shipping_service_code' => 'getShippingServiceCode',
        'ship_to_locations' => 'getShipToLocations',
        'sort_order' => 'getSortOrder',
        'surcharge' => 'getSurcharge'
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
        $this->container['additional_shipping_cost'] = isset($data['additional_shipping_cost']) ? $data['additional_shipping_cost'] : null;
        $this->container['buyer_responsible_for_pickup'] = isset($data['buyer_responsible_for_pickup']) ? $data['buyer_responsible_for_pickup'] : null;
        $this->container['buyer_responsible_for_shipping'] = isset($data['buyer_responsible_for_shipping']) ? $data['buyer_responsible_for_shipping'] : null;
        $this->container['cash_on_delivery_fee'] = isset($data['cash_on_delivery_fee']) ? $data['cash_on_delivery_fee'] : null;
        $this->container['free_shipping'] = isset($data['free_shipping']) ? $data['free_shipping'] : null;
        $this->container['shipping_carrier_code'] = isset($data['shipping_carrier_code']) ? $data['shipping_carrier_code'] : null;
        $this->container['shipping_cost'] = isset($data['shipping_cost']) ? $data['shipping_cost'] : null;
        $this->container['shipping_service_code'] = isset($data['shipping_service_code']) ? $data['shipping_service_code'] : null;
        $this->container['ship_to_locations'] = isset($data['ship_to_locations']) ? $data['ship_to_locations'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['surcharge'] = isset($data['surcharge']) ? $data['surcharge'] : null;
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
     * Gets additional_shipping_cost
     *
     * @return \Nopolabs\EBay\Sell\Account\Model\Amount
     */
    public function getAdditionalShippingCost()
    {
        return $this->container['additional_shipping_cost'];
    }

    /**
     * Sets additional_shipping_cost
     *
     * @param \Nopolabs\EBay\Sell\Account\Model\Amount $additional_shipping_cost additional_shipping_cost
     *
     * @return $this
     */
    public function setAdditionalShippingCost($additional_shipping_cost)
    {
        $this->container['additional_shipping_cost'] = $additional_shipping_cost;

        return $this;
    }

    /**
     * Gets buyer_responsible_for_pickup
     *
     * @return bool
     */
    public function getBuyerResponsibleForPickup()
    {
        return $this->container['buyer_responsible_for_pickup'];
    }

    /**
     * Sets buyer_responsible_for_pickup
     *
     * @param bool $buyer_responsible_for_pickup This field is only applicable to vehicle categories on eBay Motors (US and Canada). If set to true, the buyer is responsible for picking up the vehicle. Otherwise, the seller should specify the vehicle pickup arrangements in the item description. The seller cannot modify this flag if the vehicle has bids or if the listing ends within 12 hours. Default: false
     *
     * @return $this
     */
    public function setBuyerResponsibleForPickup($buyer_responsible_for_pickup)
    {
        $this->container['buyer_responsible_for_pickup'] = $buyer_responsible_for_pickup;

        return $this;
    }

    /**
     * Gets buyer_responsible_for_shipping
     *
     * @return bool
     */
    public function getBuyerResponsibleForShipping()
    {
        return $this->container['buyer_responsible_for_shipping'];
    }

    /**
     * Sets buyer_responsible_for_shipping
     *
     * @param bool $buyer_responsible_for_shipping This field is applicable for only items listed in vehicle categories on eBay Motors (US and Canada). If set to true, the buyer is responsible for the shipment of the vehicle. Otherwise, the seller should specify the vehicle shipping arrangements in the item description. The seller cannot modify this flag if the vehicle has bids or if the listing ends within 12 hours. Default: false
     *
     * @return $this
     */
    public function setBuyerResponsibleForShipping($buyer_responsible_for_shipping)
    {
        $this->container['buyer_responsible_for_shipping'] = $buyer_responsible_for_shipping;

        return $this;
    }

    /**
     * Gets cash_on_delivery_fee
     *
     * @return \Nopolabs\EBay\Sell\Account\Model\Amount
     */
    public function getCashOnDeliveryFee()
    {
        return $this->container['cash_on_delivery_fee'];
    }

    /**
     * Sets cash_on_delivery_fee
     *
     * @param \Nopolabs\EBay\Sell\Account\Model\Amount $cash_on_delivery_fee cash_on_delivery_fee
     *
     * @return $this
     */
    public function setCashOnDeliveryFee($cash_on_delivery_fee)
    {
        $this->container['cash_on_delivery_fee'] = $cash_on_delivery_fee;

        return $this;
    }

    /**
     * Gets free_shipping
     *
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->container['free_shipping'];
    }

    /**
     * Sets free_shipping
     *
     * @param bool $free_shipping If set to true, the seller offers free shipping to the buyer. This field can only be included and set to 'true' for the first domestic shipping service option specified in the shippingServices container (it is ignored if set for subsequent shipping services). The first specified shipping service option has a sortOrder value of 1 or (if the sortOrderId field is not used) it is the shipping service option that's specified first in the shippingServices container.
     *
     * @return $this
     */
    public function setFreeShipping($free_shipping)
    {
        $this->container['free_shipping'] = $free_shipping;

        return $this;
    }

    /**
     * Gets shipping_carrier_code
     *
     * @return string
     */
    public function getShippingCarrierCode()
    {
        return $this->container['shipping_carrier_code'];
    }

    /**
     * Sets shipping_carrier_code
     *
     * @param string $shipping_carrier_code The shipping carrier, such as 'USPS', 'FedEx', 'UPS', and so on.
     *
     * @return $this
     */
    public function setShippingCarrierCode($shipping_carrier_code)
    {
        $this->container['shipping_carrier_code'] = $shipping_carrier_code;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return \Nopolabs\EBay\Sell\Account\Model\Amount
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param \Nopolabs\EBay\Sell\Account\Model\Amount $shipping_cost shipping_cost
     *
     * @return $this
     */
    public function setShippingCost($shipping_cost)
    {
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets shipping_service_code
     *
     * @return string
     */
    public function getShippingServiceCode()
    {
        return $this->container['shipping_service_code'];
    }

    /**
     * Sets shipping_service_code
     *
     * @param string $shipping_service_code The shipping service that the shipping carrier uses to ship an item. For example, an overnight, two-day delivery, or other type of service. For details on configuring shipping services, see Setting the shipping carrier and shipping service values.
     *
     * @return $this
     */
    public function setShippingServiceCode($shipping_service_code)
    {
        $this->container['shipping_service_code'] = $shipping_service_code;

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
     * Gets sort_order
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int $sort_order This integer value controls the order that this shipping service option appears in the View Item and Checkout pages, as related to the other specified shipping service options. Sellers can specify up to four domestic shipping services (in four separate shippingService containers), so valid values are 1, 2, 3, and 4. A shipping service option with a sortOrder value of '1' appears at the top of View Item and Checkout pages. Conversely, a shipping service option with a sortOrder value of '4' appears at the bottom of the list. Sellers can specify up to five international shipping services (in five separate shippingService containers, so valid values for international shipping services are 1, 2, 3, 4, and 5. Similarly to domestic shipping service options, the sortOrder value of a international shipping service option controls the placement of that shipping service option in the View Item and Checkout pages. Set up different domestic and international services by configuring two shippingOptions containers, where you set shippingOptions.optionType to either DOMESTIC or INTERNATIONAL to indicate the area supported by the listed shipping services. If the sortOrder field is not supplied, the order of domestic and international shipping service options is determined by the order in which they are listed in the API call. Min: 1. Max: 4 (for domestic shipping service) or 5 (for international shipping service).
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets surcharge
     *
     * @return \Nopolabs\EBay\Sell\Account\Model\Amount
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     *
     * @param \Nopolabs\EBay\Sell\Account\Model\Amount $surcharge surcharge
     *
     * @return $this
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

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


