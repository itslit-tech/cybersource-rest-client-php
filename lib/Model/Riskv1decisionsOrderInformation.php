<?php
/**
 * Riskv1decisionsOrderInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Riskv1decisionsOrderInformation Class Doc Comment
 *
 * @category    Class
 * @description Contains detailed order-level information.
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1decisionsOrderInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1decisions_orderInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amountDetails' => '\CyberSource\Model\Riskv1decisionsOrderInformationAmountDetails',
        'shippingDetails' => '\CyberSource\Model\Riskv1decisionsOrderInformationShippingDetails',
        'shipTo' => '\CyberSource\Model\Riskv1decisionsOrderInformationShipTo',
        'returnsAccepted' => 'bool',
        'lineItems' => '\CyberSource\Model\Riskv1decisionsOrderInformationLineItems[]',
        'billTo' => '\CyberSource\Model\Riskv1decisionsOrderInformationBillTo',
        'address' => '\CyberSource\Model\Riskv1decisionsOrderInformationAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amountDetails' => null,
        'shippingDetails' => null,
        'shipTo' => null,
        'returnsAccepted' => null,
        'lineItems' => null,
        'billTo' => null,
        'address' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'amountDetails' => 'amountDetails',
        'shippingDetails' => 'shippingDetails',
        'shipTo' => 'shipTo',
        'returnsAccepted' => 'returnsAccepted',
        'lineItems' => 'lineItems',
        'billTo' => 'billTo',
        'address' => 'address'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amountDetails' => 'setAmountDetails',
        'shippingDetails' => 'setShippingDetails',
        'shipTo' => 'setShipTo',
        'returnsAccepted' => 'setReturnsAccepted',
        'lineItems' => 'setLineItems',
        'billTo' => 'setBillTo',
        'address' => 'setAddress'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amountDetails' => 'getAmountDetails',
        'shippingDetails' => 'getShippingDetails',
        'shipTo' => 'getShipTo',
        'returnsAccepted' => 'getReturnsAccepted',
        'lineItems' => 'getLineItems',
        'billTo' => 'getBillTo',
        'address' => 'getAddress'
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
        $this->container['amountDetails'] = isset($data['amountDetails']) ? $data['amountDetails'] : null;
        $this->container['shippingDetails'] = isset($data['shippingDetails']) ? $data['shippingDetails'] : null;
        $this->container['shipTo'] = isset($data['shipTo']) ? $data['shipTo'] : null;
        $this->container['returnsAccepted'] = isset($data['returnsAccepted']) ? $data['returnsAccepted'] : null;
        $this->container['lineItems'] = isset($data['lineItems']) ? $data['lineItems'] : null;
        $this->container['billTo'] = isset($data['billTo']) ? $data['billTo'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
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
     * Gets amountDetails
     * @return \CyberSource\Model\Riskv1decisionsOrderInformationAmountDetails
     */
    public function getAmountDetails()
    {
        return $this->container['amountDetails'];
    }

    /**
     * Sets amountDetails
     * @param \CyberSource\Model\Riskv1decisionsOrderInformationAmountDetails $amountDetails
     * @return $this
     */
    public function setAmountDetails($amountDetails)
    {
        $this->container['amountDetails'] = $amountDetails;

        return $this;
    }

    /**
     * Gets shippingDetails
     * @return \CyberSource\Model\Riskv1decisionsOrderInformationShippingDetails
     */
    public function getShippingDetails()
    {
        return $this->container['shippingDetails'];
    }

    /**
     * Sets shippingDetails
     * @param \CyberSource\Model\Riskv1decisionsOrderInformationShippingDetails $shippingDetails
     * @return $this
     */
    public function setShippingDetails($shippingDetails)
    {
        $this->container['shippingDetails'] = $shippingDetails;

        return $this;
    }

    /**
     * Gets shipTo
     * @return \CyberSource\Model\Riskv1decisionsOrderInformationShipTo
     */
    public function getShipTo()
    {
        return $this->container['shipTo'];
    }

    /**
     * Sets shipTo
     * @param \CyberSource\Model\Riskv1decisionsOrderInformationShipTo $shipTo
     * @return $this
     */
    public function setShipTo($shipTo)
    {
        $this->container['shipTo'] = $shipTo;

        return $this;
    }

    /**
     * Gets returnsAccepted
     * @return bool
     */
    public function getReturnsAccepted()
    {
        return $this->container['returnsAccepted'];
    }

    /**
     * Sets returnsAccepted
     * @param bool $returnsAccepted Boolean that indicates whether returns are accepted for this order. This field can contain one of the following values: - true: Returns are accepted for this order. - false: Returns are not accepted for this order.
     * @return $this
     */
    public function setReturnsAccepted($returnsAccepted)
    {
        $this->container['returnsAccepted'] = $returnsAccepted;

        return $this;
    }

    /**
     * Gets lineItems
     * @return \CyberSource\Model\Riskv1decisionsOrderInformationLineItems[]
     */
    public function getLineItems()
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     * @param \CyberSource\Model\Riskv1decisionsOrderInformationLineItems[] $lineItems This array contains detailed information about individual products in the order.
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets billTo
     * @return \CyberSource\Model\Riskv1decisionsOrderInformationBillTo
     */
    public function getBillTo()
    {
        return $this->container['billTo'];
    }

    /**
     * Sets billTo
     * @param \CyberSource\Model\Riskv1decisionsOrderInformationBillTo $billTo
     * @return $this
     */
    public function setBillTo($billTo)
    {
        $this->container['billTo'] = $billTo;

        return $this;
    }

    /**
     * Gets address
     * @return \CyberSource\Model\Riskv1decisionsOrderInformationAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \CyberSource\Model\Riskv1decisionsOrderInformationAddress $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


