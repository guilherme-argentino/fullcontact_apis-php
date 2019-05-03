<?php
/**
 * ContactsSearchRequest
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
 * ContactsSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactsSearchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactsSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'search_query' => 'string',
'search_cursor' => 'string',
'tag_ids' => 'string[]',
'team_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'search_query' => null,
'search_cursor' => null,
'tag_ids' => null,
'team_id' => null    ];

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
        'search_query' => 'searchQuery',
'search_cursor' => 'searchCursor',
'tag_ids' => 'tagIds',
'team_id' => 'teamId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search_query' => 'setSearchQuery',
'search_cursor' => 'setSearchCursor',
'tag_ids' => 'setTagIds',
'team_id' => 'setTeamId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search_query' => 'getSearchQuery',
'search_cursor' => 'getSearchCursor',
'tag_ids' => 'getTagIds',
'team_id' => 'getTeamId'    ];

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
        $this->container['search_query'] = isset($data['search_query']) ? $data['search_query'] : null;
        $this->container['search_cursor'] = isset($data['search_cursor']) ? $data['search_cursor'] : null;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['team_id'] = isset($data['team_id']) ? $data['team_id'] : null;
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
     * Gets search_query
     *
     * @return string
     */
    public function getSearchQuery()
    {
        return $this->container['search_query'];
    }

    /**
     * Sets search_query
     *
     * @param string $search_query search_query
     *
     * @return $this
     */
    public function setSearchQuery($search_query)
    {
        $this->container['search_query'] = $search_query;

        return $this;
    }

    /**
     * Gets search_cursor
     *
     * @return string
     */
    public function getSearchCursor()
    {
        return $this->container['search_cursor'];
    }

    /**
     * Sets search_cursor
     *
     * @param string $search_cursor search_cursor
     *
     * @return $this
     */
    public function setSearchCursor($search_cursor)
    {
        $this->container['search_cursor'] = $search_cursor;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return string[]
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param string[] $tag_ids tag_ids
     *
     * @return $this
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets team_id
     *
     * @return string
     */
    public function getTeamId()
    {
        return $this->container['team_id'];
    }

    /**
     * Sets team_id
     *
     * @param string $team_id team_id
     *
     * @return $this
     */
    public function setTeamId($team_id)
    {
        $this->container['team_id'] = $team_id;

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
