<?php
/**
 * TransactionMailCreatePostResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Overview  nextgen.kajomigenerator.de
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8-SNAPSHOT
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
 * TransactionMailCreatePostResult Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionMailCreatePostResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'transactionMailCreatePostResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'float',
        'senderemail' => 'string',
        'rcptemail' => 'string',
        'subject' => 'string',
        'sent_id' => 'float',
        'class_name' => 'string',
        'attachments' => '\Swagger\Client\Model\TransactionMailCreatePostResultAttachments[]',
        'guid' => 'string',
        'mailing' => '\Swagger\Client\Model\TransactionMailing'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'senderemail' => null,
        'rcptemail' => null,
        'subject' => null,
        'sent_id' => null,
        'class_name' => null,
        'attachments' => null,
        'guid' => null,
        'mailing' => null
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
        'id' => 'id',
        'senderemail' => 'senderemail',
        'rcptemail' => 'rcptemail',
        'subject' => 'subject',
        'sent_id' => 'sent_id',
        'class_name' => 'class_name',
        'attachments' => 'attachments',
        'guid' => 'guid',
        'mailing' => 'mailing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'senderemail' => 'setSenderemail',
        'rcptemail' => 'setRcptemail',
        'subject' => 'setSubject',
        'sent_id' => 'setSentId',
        'class_name' => 'setClassName',
        'attachments' => 'setAttachments',
        'guid' => 'setGuid',
        'mailing' => 'setMailing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'senderemail' => 'getSenderemail',
        'rcptemail' => 'getRcptemail',
        'subject' => 'getSubject',
        'sent_id' => 'getSentId',
        'class_name' => 'getClassName',
        'attachments' => 'getAttachments',
        'guid' => 'getGuid',
        'mailing' => 'getMailing'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['senderemail'] = isset($data['senderemail']) ? $data['senderemail'] : null;
        $this->container['rcptemail'] = isset($data['rcptemail']) ? $data['rcptemail'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['sent_id'] = isset($data['sent_id']) ? $data['sent_id'] : null;
        $this->container['class_name'] = isset($data['class_name']) ? $data['class_name'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['mailing'] = isset($data['mailing']) ? $data['mailing'] : null;
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
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets senderemail
     *
     * @return string
     */
    public function getSenderemail()
    {
        return $this->container['senderemail'];
    }

    /**
     * Sets senderemail
     *
     * @param string $senderemail senderemail
     *
     * @return $this
     */
    public function setSenderemail($senderemail)
    {
        $this->container['senderemail'] = $senderemail;

        return $this;
    }

    /**
     * Gets rcptemail
     *
     * @return string
     */
    public function getRcptemail()
    {
        return $this->container['rcptemail'];
    }

    /**
     * Sets rcptemail
     *
     * @param string $rcptemail mail of user
     *
     * @return $this
     */
    public function setRcptemail($rcptemail)
    {
        $this->container['rcptemail'] = $rcptemail;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets sent_id
     *
     * @return float
     */
    public function getSentId()
    {
        return $this->container['sent_id'];
    }

    /**
     * Sets sent_id
     *
     * @param float $sent_id the send_id representation for all the bundeled TransactionMails of this class
     *
     * @return $this
     */
    public function setSentId($sent_id)
    {
        $this->container['sent_id'] = $sent_id;

        return $this;
    }

    /**
     * Gets class_name
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->container['class_name'];
    }

    /**
     * Sets class_name
     *
     * @param string $class_name the classname
     *
     * @return $this
     */
    public function setClassName($class_name)
    {
        $this->container['class_name'] = $class_name;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Swagger\Client\Model\TransactionMailCreatePostResultAttachments[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Swagger\Client\Model\TransactionMailCreatePostResultAttachments[] $attachments the attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
     * Sets guid
     *
     * @param string $guid guid of the transaction mail can be used for querying the server feedback. used for get request
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /**
     * Gets mailing
     *
     * @return \Swagger\Client\Model\TransactionMailing
     */
    public function getMailing()
    {
        return $this->container['mailing'];
    }

    /**
     * Sets mailing
     *
     * @param \Swagger\Client\Model\TransactionMailing $mailing Mail to send
     *
     * @return $this
     */
    public function setMailing($mailing)
    {
        $this->container['mailing'] = $mailing;

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

