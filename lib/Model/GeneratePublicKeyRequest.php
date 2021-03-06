<?php
/**
 * GeneratePublicKeyRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
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
 * GeneratePublicKeyRequest Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GeneratePublicKeyRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'generatePublicKeyRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'encryptionType' => 'string',
        'targetOrigin' => 'string',
        'unmaskedLeft' => 'int',
        'unmaskedRight' => 'int',
        'enableBillingAddress' => 'bool',
        'currency' => 'string',
        'enableAutoAuth' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'encryptionType' => null,
        'targetOrigin' => null,
        'unmaskedLeft' => null,
        'unmaskedRight' => null,
        'enableBillingAddress' => null,
        'currency' => null,
        'enableAutoAuth' => null
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
        'encryptionType' => 'encryptionType',
        'targetOrigin' => 'targetOrigin',
        'unmaskedLeft' => 'unmaskedLeft',
        'unmaskedRight' => 'unmaskedRight',
        'enableBillingAddress' => 'enableBillingAddress',
        'currency' => 'currency',
        'enableAutoAuth' => 'enableAutoAuth'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'encryptionType' => 'setEncryptionType',
        'targetOrigin' => 'setTargetOrigin',
        'unmaskedLeft' => 'setUnmaskedLeft',
        'unmaskedRight' => 'setUnmaskedRight',
        'enableBillingAddress' => 'setEnableBillingAddress',
        'currency' => 'setCurrency',
        'enableAutoAuth' => 'setEnableAutoAuth'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'encryptionType' => 'getEncryptionType',
        'targetOrigin' => 'getTargetOrigin',
        'unmaskedLeft' => 'getUnmaskedLeft',
        'unmaskedRight' => 'getUnmaskedRight',
        'enableBillingAddress' => 'getEnableBillingAddress',
        'currency' => 'getCurrency',
        'enableAutoAuth' => 'getEnableAutoAuth'
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
        $this->container['encryptionType'] = isset($data['encryptionType']) ? $data['encryptionType'] : null;
        $this->container['targetOrigin'] = isset($data['targetOrigin']) ? $data['targetOrigin'] : null;
        $this->container['unmaskedLeft'] = isset($data['unmaskedLeft']) ? $data['unmaskedLeft'] : null;
        $this->container['unmaskedRight'] = isset($data['unmaskedRight']) ? $data['unmaskedRight'] : null;
        $this->container['enableBillingAddress'] = isset($data['enableBillingAddress']) ? $data['enableBillingAddress'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['enableAutoAuth'] = isset($data['enableAutoAuth']) ? $data['enableAutoAuth'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['encryptionType'] === null) {
            $invalid_properties[] = "'encryptionType' can't be null";
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

        if ($this->container['encryptionType'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets encryptionType
     * @return string
     */
    public function getEncryptionType()
    {
        return $this->container['encryptionType'];
    }

    /**
     * Sets encryptionType
     * @param string $encryptionType How the card number should be encrypted in the subsequent Tokenize Card request. Possible values are RsaOaep256 or None (if using this value the card number must be in plain text when included in the Tokenize Card request). The Tokenize Card request uses a secure connection (TLS 1.2+) regardless of what encryption type is specified.
     * @return $this
     */
    public function setEncryptionType($encryptionType)
    {
        $this->container['encryptionType'] = $encryptionType;

        return $this;
    }

    /**
     * Gets targetOrigin
     * @return string
     */
    public function getTargetOrigin()
    {
        return $this->container['targetOrigin'];
    }

    /**
     * Sets targetOrigin
     * @param string $targetOrigin This should only be used if using the Microform implementation. This is the protocol, URL, and if used, port number of the page that will host the Microform. Unless using http://localhost, the protocol must be https://. For example, if serving Microform on example.com, the targetOrigin is https://example.com The value is used to restrict the frame ancestor of the Microform. If there is a mismatch between this value and the frame ancestor, the Microfrom will not load.
     * @return $this
     */
    public function setTargetOrigin($targetOrigin)
    {
        $this->container['targetOrigin'] = $targetOrigin;

        return $this;
    }

    /**
     * Gets unmaskedLeft
     * @return int
     */
    public function getUnmaskedLeft()
    {
        return $this->container['unmaskedLeft'];
    }

    /**
     * Sets unmaskedLeft
     * @param int $unmaskedLeft Specifies the number of card number digits to be returned un-masked from the left. For example, setting this value to 6 will return: 411111XXXXXXXXXX Default value: 6 Maximum value: 6
     * @return $this
     */
    public function setUnmaskedLeft($unmaskedLeft)
    {
        $this->container['unmaskedLeft'] = $unmaskedLeft;

        return $this;
    }

    /**
     * Gets unmaskedRight
     * @return int
     */
    public function getUnmaskedRight()
    {
        return $this->container['unmaskedRight'];
    }

    /**
     * Sets unmaskedRight
     * @param int $unmaskedRight Specifies the number of card number digits to be returned un-masked from the right. For example, setting this value to 4 will return: 411111XXXXXX1111 Default value: 4 Maximum value: 4
     * @return $this
     */
    public function setUnmaskedRight($unmaskedRight)
    {
        $this->container['unmaskedRight'] = $unmaskedRight;

        return $this;
    }

    /**
     * Gets enableBillingAddress
     * @return bool
     */
    public function getEnableBillingAddress()
    {
        return $this->container['enableBillingAddress'];
    }

    /**
     * Sets enableBillingAddress
     * @param bool $enableBillingAddress Specifies whether or not 'dummy' address data should be specified in the create token request. If you have 'Relaxed AVS' enabled for your MID, this value can be set to False.Default value: true
     * @return $this
     */
    public function setEnableBillingAddress($enableBillingAddress)
    {
        $this->container['enableBillingAddress'] = $enableBillingAddress;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Three character ISO currency code to be associated with the token. Required for legacy integrations. Default value: USD.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets enableAutoAuth
     * @return bool
     */
    public function getEnableAutoAuth()
    {
        return $this->container['enableAutoAuth'];
    }

    /**
     * Sets enableAutoAuth
     * @param bool $enableAutoAuth Specifies whether or not an account verification authorization ($0 Authorization) is carried out on token creation. Default is false, as it is assumed a full or zero amount authorization will be carried out in a separate call from your server.
     * @return $this
     */
    public function setEnableAutoAuth($enableAutoAuth)
    {
        $this->container['enableAutoAuth'] = $enableAutoAuth;

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


