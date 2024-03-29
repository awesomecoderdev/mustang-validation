<?php
/**
 * IZUGFeRDExportableItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mustangserver
 *
 * Mustangproject e-invoice REST server API
 *
 * OpenAPI spec version: v0.7.0
 * Contact: jstaerk@usegroup.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.38
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * IZUGFeRDExportableItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IZUGFeRDExportableItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IZUGFeRDExportableItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'value' => 'float',
'product' => '\Swagger\Client\Model\IZUGFeRDExportableProduct',
'buyer_order_referenced_document_line_id' => 'string',
'price' => 'float',
'quantity' => 'float',
'item_allowances' => '\Swagger\Client\Model\IZUGFeRDAllowanceCharge[]',
'item_charges' => '\Swagger\Client\Model\IZUGFeRDAllowanceCharge[]',
'referenced_documents' => '\Swagger\Client\Model\IReferencedDocument[]',
'basis_quantity' => 'float',
'additional_referenced_document_id' => 'string',
'item_total_allowances' => '\Swagger\Client\Model\IZUGFeRDAllowanceCharge[]',
'detailed_delivery_period_from' => '\DateTime',
'detailed_delivery_period_to' => '\DateTime',
'notes' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'value' => null,
'product' => null,
'buyer_order_referenced_document_line_id' => null,
'price' => null,
'quantity' => null,
'item_allowances' => null,
'item_charges' => null,
'referenced_documents' => null,
'basis_quantity' => null,
'additional_referenced_document_id' => null,
'item_total_allowances' => null,
'detailed_delivery_period_from' => 'date-time',
'detailed_delivery_period_to' => 'date-time',
'notes' => null    ];

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
        'value' => 'value',
'product' => 'product',
'buyer_order_referenced_document_line_id' => 'buyerOrderReferencedDocumentLineID',
'price' => 'price',
'quantity' => 'quantity',
'item_allowances' => 'itemAllowances',
'item_charges' => 'itemCharges',
'referenced_documents' => 'referencedDocuments',
'basis_quantity' => 'basisQuantity',
'additional_referenced_document_id' => 'additionalReferencedDocumentID',
'item_total_allowances' => 'itemTotalAllowances',
'detailed_delivery_period_from' => 'detailedDeliveryPeriodFrom',
'detailed_delivery_period_to' => 'detailedDeliveryPeriodTo',
'notes' => 'notes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
'product' => 'setProduct',
'buyer_order_referenced_document_line_id' => 'setBuyerOrderReferencedDocumentLineId',
'price' => 'setPrice',
'quantity' => 'setQuantity',
'item_allowances' => 'setItemAllowances',
'item_charges' => 'setItemCharges',
'referenced_documents' => 'setReferencedDocuments',
'basis_quantity' => 'setBasisQuantity',
'additional_referenced_document_id' => 'setAdditionalReferencedDocumentId',
'item_total_allowances' => 'setItemTotalAllowances',
'detailed_delivery_period_from' => 'setDetailedDeliveryPeriodFrom',
'detailed_delivery_period_to' => 'setDetailedDeliveryPeriodTo',
'notes' => 'setNotes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
'product' => 'getProduct',
'buyer_order_referenced_document_line_id' => 'getBuyerOrderReferencedDocumentLineId',
'price' => 'getPrice',
'quantity' => 'getQuantity',
'item_allowances' => 'getItemAllowances',
'item_charges' => 'getItemCharges',
'referenced_documents' => 'getReferencedDocuments',
'basis_quantity' => 'getBasisQuantity',
'additional_referenced_document_id' => 'getAdditionalReferencedDocumentId',
'item_total_allowances' => 'getItemTotalAllowances',
'detailed_delivery_period_from' => 'getDetailedDeliveryPeriodFrom',
'detailed_delivery_period_to' => 'getDetailedDeliveryPeriodTo',
'notes' => 'getNotes'    ];

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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['buyer_order_referenced_document_line_id'] = isset($data['buyer_order_referenced_document_line_id']) ? $data['buyer_order_referenced_document_line_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['item_allowances'] = isset($data['item_allowances']) ? $data['item_allowances'] : null;
        $this->container['item_charges'] = isset($data['item_charges']) ? $data['item_charges'] : null;
        $this->container['referenced_documents'] = isset($data['referenced_documents']) ? $data['referenced_documents'] : null;
        $this->container['basis_quantity'] = isset($data['basis_quantity']) ? $data['basis_quantity'] : null;
        $this->container['additional_referenced_document_id'] = isset($data['additional_referenced_document_id']) ? $data['additional_referenced_document_id'] : null;
        $this->container['item_total_allowances'] = isset($data['item_total_allowances']) ? $data['item_total_allowances'] : null;
        $this->container['detailed_delivery_period_from'] = isset($data['detailed_delivery_period_from']) ? $data['detailed_delivery_period_from'] : null;
        $this->container['detailed_delivery_period_to'] = isset($data['detailed_delivery_period_to']) ? $data['detailed_delivery_period_to'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Swagger\Client\Model\IZUGFeRDExportableProduct
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Swagger\Client\Model\IZUGFeRDExportableProduct $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets buyer_order_referenced_document_line_id
     *
     * @return string
     */
    public function getBuyerOrderReferencedDocumentLineId()
    {
        return $this->container['buyer_order_referenced_document_line_id'];
    }

    /**
     * Sets buyer_order_referenced_document_line_id
     *
     * @param string $buyer_order_referenced_document_line_id buyer_order_referenced_document_line_id
     *
     * @return $this
     */
    public function setBuyerOrderReferencedDocumentLineId($buyer_order_referenced_document_line_id)
    {
        $this->container['buyer_order_referenced_document_line_id'] = $buyer_order_referenced_document_line_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets item_allowances
     *
     * @return \Swagger\Client\Model\IZUGFeRDAllowanceCharge[]
     */
    public function getItemAllowances()
    {
        return $this->container['item_allowances'];
    }

    /**
     * Sets item_allowances
     *
     * @param \Swagger\Client\Model\IZUGFeRDAllowanceCharge[] $item_allowances item_allowances
     *
     * @return $this
     */
    public function setItemAllowances($item_allowances)
    {
        $this->container['item_allowances'] = $item_allowances;

        return $this;
    }

    /**
     * Gets item_charges
     *
     * @return \Swagger\Client\Model\IZUGFeRDAllowanceCharge[]
     */
    public function getItemCharges()
    {
        return $this->container['item_charges'];
    }

    /**
     * Sets item_charges
     *
     * @param \Swagger\Client\Model\IZUGFeRDAllowanceCharge[] $item_charges item_charges
     *
     * @return $this
     */
    public function setItemCharges($item_charges)
    {
        $this->container['item_charges'] = $item_charges;

        return $this;
    }

    /**
     * Gets referenced_documents
     *
     * @return \Swagger\Client\Model\IReferencedDocument[]
     */
    public function getReferencedDocuments()
    {
        return $this->container['referenced_documents'];
    }

    /**
     * Sets referenced_documents
     *
     * @param \Swagger\Client\Model\IReferencedDocument[] $referenced_documents referenced_documents
     *
     * @return $this
     */
    public function setReferencedDocuments($referenced_documents)
    {
        $this->container['referenced_documents'] = $referenced_documents;

        return $this;
    }

    /**
     * Gets basis_quantity
     *
     * @return float
     */
    public function getBasisQuantity()
    {
        return $this->container['basis_quantity'];
    }

    /**
     * Sets basis_quantity
     *
     * @param float $basis_quantity basis_quantity
     *
     * @return $this
     */
    public function setBasisQuantity($basis_quantity)
    {
        $this->container['basis_quantity'] = $basis_quantity;

        return $this;
    }

    /**
     * Gets additional_referenced_document_id
     *
     * @return string
     */
    public function getAdditionalReferencedDocumentId()
    {
        return $this->container['additional_referenced_document_id'];
    }

    /**
     * Sets additional_referenced_document_id
     *
     * @param string $additional_referenced_document_id additional_referenced_document_id
     *
     * @return $this
     */
    public function setAdditionalReferencedDocumentId($additional_referenced_document_id)
    {
        $this->container['additional_referenced_document_id'] = $additional_referenced_document_id;

        return $this;
    }

    /**
     * Gets item_total_allowances
     *
     * @return \Swagger\Client\Model\IZUGFeRDAllowanceCharge[]
     */
    public function getItemTotalAllowances()
    {
        return $this->container['item_total_allowances'];
    }

    /**
     * Sets item_total_allowances
     *
     * @param \Swagger\Client\Model\IZUGFeRDAllowanceCharge[] $item_total_allowances item_total_allowances
     *
     * @return $this
     */
    public function setItemTotalAllowances($item_total_allowances)
    {
        $this->container['item_total_allowances'] = $item_total_allowances;

        return $this;
    }

    /**
     * Gets detailed_delivery_period_from
     *
     * @return \DateTime
     */
    public function getDetailedDeliveryPeriodFrom()
    {
        return $this->container['detailed_delivery_period_from'];
    }

    /**
     * Sets detailed_delivery_period_from
     *
     * @param \DateTime $detailed_delivery_period_from detailed_delivery_period_from
     *
     * @return $this
     */
    public function setDetailedDeliveryPeriodFrom($detailed_delivery_period_from)
    {
        $this->container['detailed_delivery_period_from'] = $detailed_delivery_period_from;

        return $this;
    }

    /**
     * Gets detailed_delivery_period_to
     *
     * @return \DateTime
     */
    public function getDetailedDeliveryPeriodTo()
    {
        return $this->container['detailed_delivery_period_to'];
    }

    /**
     * Sets detailed_delivery_period_to
     *
     * @param \DateTime $detailed_delivery_period_to detailed_delivery_period_to
     *
     * @return $this
     */
    public function setDetailedDeliveryPeriodTo($detailed_delivery_period_to)
    {
        $this->container['detailed_delivery_period_to'] = $detailed_delivery_period_to;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string[] $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
