<?php
/**
 * IReferencedDocument
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
 * IReferencedDocument Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IReferencedDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IReferencedDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type_code' => 'string',
'issuer_assigned_id' => 'string',
'reference_type_code' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type_code' => null,
'issuer_assigned_id' => null,
'reference_type_code' => null    ];

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
        'type_code' => 'typeCode',
'issuer_assigned_id' => 'issuerAssignedID',
'reference_type_code' => 'referenceTypeCode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_code' => 'setTypeCode',
'issuer_assigned_id' => 'setIssuerAssignedId',
'reference_type_code' => 'setReferenceTypeCode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_code' => 'getTypeCode',
'issuer_assigned_id' => 'getIssuerAssignedId',
'reference_type_code' => 'getReferenceTypeCode'    ];

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
        $this->container['type_code'] = isset($data['type_code']) ? $data['type_code'] : null;
        $this->container['issuer_assigned_id'] = isset($data['issuer_assigned_id']) ? $data['issuer_assigned_id'] : null;
        $this->container['reference_type_code'] = isset($data['reference_type_code']) ? $data['reference_type_code'] : null;
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
     * Gets type_code
     *
     * @return string
     */
    public function getTypeCode()
    {
        return $this->container['type_code'];
    }

    /**
     * Sets type_code
     *
     * @param string $type_code type_code
     *
     * @return $this
     */
    public function setTypeCode($type_code)
    {
        $this->container['type_code'] = $type_code;

        return $this;
    }

    /**
     * Gets issuer_assigned_id
     *
     * @return string
     */
    public function getIssuerAssignedId()
    {
        return $this->container['issuer_assigned_id'];
    }

    /**
     * Sets issuer_assigned_id
     *
     * @param string $issuer_assigned_id issuer_assigned_id
     *
     * @return $this
     */
    public function setIssuerAssignedId($issuer_assigned_id)
    {
        $this->container['issuer_assigned_id'] = $issuer_assigned_id;

        return $this;
    }

    /**
     * Gets reference_type_code
     *
     * @return string
     */
    public function getReferenceTypeCode()
    {
        return $this->container['reference_type_code'];
    }

    /**
     * Sets reference_type_code
     *
     * @param string $reference_type_code reference_type_code
     *
     * @return $this
     */
    public function setReferenceTypeCode($reference_type_code)
    {
        $this->container['reference_type_code'] = $reference_type_code;

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
