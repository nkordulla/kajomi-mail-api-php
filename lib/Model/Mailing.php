<?php
/**
 * Mailing
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
 * Mailing Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Mailing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'mailing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'float',
        'sendername' => 'string',
        'subject' => 'string',
        'description' => 'string',
        'list' => 'float',
        'status' => 'float',
        'mail_type' => 'string',
        'action' => 'string',
        'size' => 'float',
        'datetime' => '\DateTime',
        'amount' => '\Swagger\Client\Model\MailingAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'sendername' => null,
        'subject' => null,
        'description' => null,
        'list' => null,
        'status' => null,
        'mail_type' => null,
        'action' => null,
        'size' => null,
        'datetime' => 'date-time',
        'amount' => null
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
        'sendername' => 'sendername',
        'subject' => 'subject',
        'description' => 'description',
        'list' => 'list',
        'status' => 'status',
        'mail_type' => 'mailType',
        'action' => 'action',
        'size' => 'size',
        'datetime' => 'datetime',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sendername' => 'setSendername',
        'subject' => 'setSubject',
        'description' => 'setDescription',
        'list' => 'setList',
        'status' => 'setStatus',
        'mail_type' => 'setMailType',
        'action' => 'setAction',
        'size' => 'setSize',
        'datetime' => 'setDatetime',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sendername' => 'getSendername',
        'subject' => 'getSubject',
        'description' => 'getDescription',
        'list' => 'getList',
        'status' => 'getStatus',
        'mail_type' => 'getMailType',
        'action' => 'getAction',
        'size' => 'getSize',
        'datetime' => 'getDatetime',
        'amount' => 'getAmount'
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

    const ACTION_PREPARING = 'preparing';
    const ACTION_PREPARING_USER = 'preparingUser';
    const ACTION_MAILING = 'mailing';
    const ACTION_MAILING_STOPPED = 'mailingStopped';
    const ACTION_MAILING_DELETED_UNSENT = 'mailingDeletedUnsent';
    const ACTION_EMPTY = '';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_PREPARING,
            self::ACTION_PREPARING_USER,
            self::ACTION_MAILING,
            self::ACTION_MAILING_STOPPED,
            self::ACTION_MAILING_DELETED_UNSENT,
            self::ACTION_EMPTY,
        ];
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
        $this->container['sendername'] = isset($data['sendername']) ? $data['sendername'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['mail_type'] = isset($data['mail_type']) ? $data['mail_type'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['datetime'] = isset($data['datetime']) ? $data['datetime'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['list'] === null) {
            $invalidProperties[] = "'list' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['mail_type'] === null) {
            $invalidProperties[] = "'mail_type' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['datetime'] === null) {
            $invalidProperties[] = "'datetime' can't be null";
        }
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
     * @param float $id id of the mailing
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sendername
     *
     * @return string
     */
    public function getSendername()
    {
        return $this->container['sendername'];
    }

    /**
     * Sets sendername
     *
     * @param string $sendername the sendername
     *
     * @return $this
     */
    public function setSendername($sendername)
    {
        $this->container['sendername'] = $sendername;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets list
     *
     * @return float
     */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
     * Sets list
     *
     * @param float $list list of the mailing
     *
     * @return $this
     */
    public function setList($list)
    {
        $this->container['list'] = $list;

        return $this;
    }

    /**
     * Gets status
     *
     * @return float
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param float $status status of the mailing. 0=inactive, 1=active, 2=sending, 3=failed, 5=done
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets mail_type
     *
     * @return string
     */
    public function getMailType()
    {
        return $this->container['mail_type'];
    }

    /**
     * Sets mail_type
     *
     * @param string $mail_type the mailType
     *
     * @return $this
     */
    public function setMailType($mail_type)
    {
        $this->container['mail_type'] = $mail_type;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action of the mailing
     *
     * @return $this
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets size
     *
     * @return float
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param float $size size of the mailing if already calculated and set
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->container['datetime'];
    }

    /**
     * Sets datetime
     *
     * @param \DateTime $datetime date of the mailing
     *
     * @return $this
     */
    public function setDatetime($datetime)
    {
        $this->container['datetime'] = $datetime;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \Swagger\Client\Model\MailingAmount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Swagger\Client\Model\MailingAmount $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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


