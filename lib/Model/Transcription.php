<?php
/**
 * Transcription
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FullContact APIs
 *
 * Lookup and enrich individuals by sending any identifiers you may already have, such as an email address, Twitter handle or phone number. These identifiers will then be used to locate and return any additional information we may have, such as a person’s name and social handles.
 *
 * OpenAPI spec version: 3.0.0-oas3
 * Contact: support@fullcontact.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
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
 * Transcription Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Transcription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Transcription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'last_webhook_attempt' => 'string',
'v_card_url' => 'string',
'unverified_v_card_url' => 'string',
'id' => 'string',
'webhook_attempts' => 'BigDecimal',
'webhook_url' => 'string',
'quality' => 'string',
'submitted' => 'string',
'contact' => '\Swagger\Client\Model\TranscribedContact',
'unverified_fields' => 'string[]',
'unverified_contact' => '\Swagger\Client\Model\TranscribedContact'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'last_webhook_attempt' => null,
'v_card_url' => null,
'unverified_v_card_url' => null,
'id' => null,
'webhook_attempts' => null,
'webhook_url' => null,
'quality' => null,
'submitted' => null,
'contact' => null,
'unverified_fields' => null,
'unverified_contact' => null    ];

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
        'last_webhook_attempt' => 'lastWebhookAttempt',
'v_card_url' => 'vCardUrl',
'unverified_v_card_url' => 'unverifiedVCardUrl',
'id' => 'id',
'webhook_attempts' => 'webhookAttempts',
'webhook_url' => 'webhookUrl',
'quality' => 'quality',
'submitted' => 'submitted',
'contact' => 'contact',
'unverified_fields' => 'unverifiedFields',
'unverified_contact' => 'unverifiedContact'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_webhook_attempt' => 'setLastWebhookAttempt',
'v_card_url' => 'setVCardUrl',
'unverified_v_card_url' => 'setUnverifiedVCardUrl',
'id' => 'setId',
'webhook_attempts' => 'setWebhookAttempts',
'webhook_url' => 'setWebhookUrl',
'quality' => 'setQuality',
'submitted' => 'setSubmitted',
'contact' => 'setContact',
'unverified_fields' => 'setUnverifiedFields',
'unverified_contact' => 'setUnverifiedContact'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_webhook_attempt' => 'getLastWebhookAttempt',
'v_card_url' => 'getVCardUrl',
'unverified_v_card_url' => 'getUnverifiedVCardUrl',
'id' => 'getId',
'webhook_attempts' => 'getWebhookAttempts',
'webhook_url' => 'getWebhookUrl',
'quality' => 'getQuality',
'submitted' => 'getSubmitted',
'contact' => 'getContact',
'unverified_fields' => 'getUnverifiedFields',
'unverified_contact' => 'getUnverifiedContact'    ];

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
        $this->container['last_webhook_attempt'] = isset($data['last_webhook_attempt']) ? $data['last_webhook_attempt'] : null;
        $this->container['v_card_url'] = isset($data['v_card_url']) ? $data['v_card_url'] : null;
        $this->container['unverified_v_card_url'] = isset($data['unverified_v_card_url']) ? $data['unverified_v_card_url'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['webhook_attempts'] = isset($data['webhook_attempts']) ? $data['webhook_attempts'] : null;
        $this->container['webhook_url'] = isset($data['webhook_url']) ? $data['webhook_url'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['submitted'] = isset($data['submitted']) ? $data['submitted'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['unverified_fields'] = isset($data['unverified_fields']) ? $data['unverified_fields'] : null;
        $this->container['unverified_contact'] = isset($data['unverified_contact']) ? $data['unverified_contact'] : null;
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
     * Gets last_webhook_attempt
     *
     * @return string
     */
    public function getLastWebhookAttempt()
    {
        return $this->container['last_webhook_attempt'];
    }

    /**
     * Sets last_webhook_attempt
     *
     * @param string $last_webhook_attempt last_webhook_attempt
     *
     * @return $this
     */
    public function setLastWebhookAttempt($last_webhook_attempt)
    {
        $this->container['last_webhook_attempt'] = $last_webhook_attempt;

        return $this;
    }

    /**
     * Gets v_card_url
     *
     * @return string
     */
    public function getVCardUrl()
    {
        return $this->container['v_card_url'];
    }

    /**
     * Sets v_card_url
     *
     * @param string $v_card_url v_card_url
     *
     * @return $this
     */
    public function setVCardUrl($v_card_url)
    {
        $this->container['v_card_url'] = $v_card_url;

        return $this;
    }

    /**
     * Gets unverified_v_card_url
     *
     * @return string
     */
    public function getUnverifiedVCardUrl()
    {
        return $this->container['unverified_v_card_url'];
    }

    /**
     * Sets unverified_v_card_url
     *
     * @param string $unverified_v_card_url unverified_v_card_url
     *
     * @return $this
     */
    public function setUnverifiedVCardUrl($unverified_v_card_url)
    {
        $this->container['unverified_v_card_url'] = $unverified_v_card_url;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets webhook_attempts
     *
     * @return BigDecimal
     */
    public function getWebhookAttempts()
    {
        return $this->container['webhook_attempts'];
    }

    /**
     * Sets webhook_attempts
     *
     * @param BigDecimal $webhook_attempts webhook_attempts
     *
     * @return $this
     */
    public function setWebhookAttempts($webhook_attempts)
    {
        $this->container['webhook_attempts'] = $webhook_attempts;

        return $this;
    }

    /**
     * Gets webhook_url
     *
     * @return string
     */
    public function getWebhookUrl()
    {
        return $this->container['webhook_url'];
    }

    /**
     * Sets webhook_url
     *
     * @param string $webhook_url webhook_url
     *
     * @return $this
     */
    public function setWebhookUrl($webhook_url)
    {
        $this->container['webhook_url'] = $webhook_url;

        return $this;
    }

    /**
     * Gets quality
     *
     * @return string
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     *
     * @param string $quality quality
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

        return $this;
    }

    /**
     * Gets submitted
     *
     * @return string
     */
    public function getSubmitted()
    {
        return $this->container['submitted'];
    }

    /**
     * Sets submitted
     *
     * @param string $submitted submitted
     *
     * @return $this
     */
    public function setSubmitted($submitted)
    {
        $this->container['submitted'] = $submitted;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Swagger\Client\Model\TranscribedContact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Swagger\Client\Model\TranscribedContact $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets unverified_fields
     *
     * @return string[]
     */
    public function getUnverifiedFields()
    {
        return $this->container['unverified_fields'];
    }

    /**
     * Sets unverified_fields
     *
     * @param string[] $unverified_fields unverified_fields
     *
     * @return $this
     */
    public function setUnverifiedFields($unverified_fields)
    {
        $this->container['unverified_fields'] = $unverified_fields;

        return $this;
    }

    /**
     * Gets unverified_contact
     *
     * @return \Swagger\Client\Model\TranscribedContact
     */
    public function getUnverifiedContact()
    {
        return $this->container['unverified_contact'];
    }

    /**
     * Sets unverified_contact
     *
     * @param \Swagger\Client\Model\TranscribedContact $unverified_contact unverified_contact
     *
     * @return $this
     */
    public function setUnverifiedContact($unverified_contact)
    {
        $this->container['unverified_contact'] = $unverified_contact;

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
