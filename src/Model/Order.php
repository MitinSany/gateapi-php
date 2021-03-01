<?php
/**
 * Order
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * Order Class Doc Comment
 *
 * @category    Class
 * @description Spot order details
 * @package     GateApi
 * @author      GateIO
 * @link        https://www.gate.io
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'text' => 'string',
        'create_time' => 'string',
        'update_time' => 'string',
        'status' => 'string',
        'currency_pair' => 'string',
        'type' => 'string',
        'account' => 'string',
        'side' => 'string',
        'amount' => 'string',
        'price' => 'string',
        'time_in_force' => 'string',
        'iceberg' => 'string',
        'auto_borrow' => 'bool',
        'left' => 'string',
        'fill_price' => 'string',
        'filled_total' => 'string',
        'fee' => 'string',
        'fee_currency' => 'string',
        'point_fee' => 'string',
        'gt_fee' => 'string',
        'gt_discount' => 'bool',
        'rebated_fee' => 'string',
        'rebated_fee_currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'text' => null,
        'create_time' => null,
        'update_time' => null,
        'status' => null,
        'currency_pair' => null,
        'type' => null,
        'account' => null,
        'side' => null,
        'amount' => null,
        'price' => null,
        'time_in_force' => null,
        'iceberg' => null,
        'auto_borrow' => null,
        'left' => null,
        'fill_price' => null,
        'filled_total' => null,
        'fee' => null,
        'fee_currency' => null,
        'point_fee' => null,
        'gt_fee' => null,
        'gt_discount' => null,
        'rebated_fee' => null,
        'rebated_fee_currency' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'text' => 'text',
        'create_time' => 'create_time',
        'update_time' => 'update_time',
        'status' => 'status',
        'currency_pair' => 'currency_pair',
        'type' => 'type',
        'account' => 'account',
        'side' => 'side',
        'amount' => 'amount',
        'price' => 'price',
        'time_in_force' => 'time_in_force',
        'iceberg' => 'iceberg',
        'auto_borrow' => 'auto_borrow',
        'left' => 'left',
        'fill_price' => 'fill_price',
        'filled_total' => 'filled_total',
        'fee' => 'fee',
        'fee_currency' => 'fee_currency',
        'point_fee' => 'point_fee',
        'gt_fee' => 'gt_fee',
        'gt_discount' => 'gt_discount',
        'rebated_fee' => 'rebated_fee',
        'rebated_fee_currency' => 'rebated_fee_currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'text' => 'setText',
        'create_time' => 'setCreateTime',
        'update_time' => 'setUpdateTime',
        'status' => 'setStatus',
        'currency_pair' => 'setCurrencyPair',
        'type' => 'setType',
        'account' => 'setAccount',
        'side' => 'setSide',
        'amount' => 'setAmount',
        'price' => 'setPrice',
        'time_in_force' => 'setTimeInForce',
        'iceberg' => 'setIceberg',
        'auto_borrow' => 'setAutoBorrow',
        'left' => 'setLeft',
        'fill_price' => 'setFillPrice',
        'filled_total' => 'setFilledTotal',
        'fee' => 'setFee',
        'fee_currency' => 'setFeeCurrency',
        'point_fee' => 'setPointFee',
        'gt_fee' => 'setGtFee',
        'gt_discount' => 'setGtDiscount',
        'rebated_fee' => 'setRebatedFee',
        'rebated_fee_currency' => 'setRebatedFeeCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'text' => 'getText',
        'create_time' => 'getCreateTime',
        'update_time' => 'getUpdateTime',
        'status' => 'getStatus',
        'currency_pair' => 'getCurrencyPair',
        'type' => 'getType',
        'account' => 'getAccount',
        'side' => 'getSide',
        'amount' => 'getAmount',
        'price' => 'getPrice',
        'time_in_force' => 'getTimeInForce',
        'iceberg' => 'getIceberg',
        'auto_borrow' => 'getAutoBorrow',
        'left' => 'getLeft',
        'fill_price' => 'getFillPrice',
        'filled_total' => 'getFilledTotal',
        'fee' => 'getFee',
        'fee_currency' => 'getFeeCurrency',
        'point_fee' => 'getPointFee',
        'gt_fee' => 'getGtFee',
        'gt_discount' => 'getGtDiscount',
        'rebated_fee' => 'getRebatedFee',
        'rebated_fee_currency' => 'getRebatedFeeCurrency'
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
        return self::$openAPIModelName;
    }

    const STATUS_OPEN = 'open';
    const STATUS_CLOSED = 'closed';
    const STATUS_CANCELLED = 'cancelled';
    const TYPE_LIMIT = 'limit';
    const ACCOUNT_SPOT = 'spot';
    const ACCOUNT_MARGIN = 'margin';
    const SIDE_BUY = 'buy';
    const SIDE_SELL = 'sell';
    const TIME_IN_FORCE_GTC = 'gtc';
    const TIME_IN_FORCE_IOC = 'ioc';
    const TIME_IN_FORCE_POC = 'poc';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_CLOSED,
            self::STATUS_CANCELLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_LIMIT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountAllowableValues()
    {
        return [
            self::ACCOUNT_SPOT,
            self::ACCOUNT_MARGIN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSideAllowableValues()
    {
        return [
            self::SIDE_BUY,
            self::SIDE_SELL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTimeInForceAllowableValues()
    {
        return [
            self::TIME_IN_FORCE_GTC,
            self::TIME_IN_FORCE_IOC,
            self::TIME_IN_FORCE_POC,
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['currency_pair'] = isset($data['currency_pair']) ? $data['currency_pair'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'limit';
        $this->container['account'] = isset($data['account']) ? $data['account'] : 'spot';
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['time_in_force'] = isset($data['time_in_force']) ? $data['time_in_force'] : 'gtc';
        $this->container['iceberg'] = isset($data['iceberg']) ? $data['iceberg'] : null;
        $this->container['auto_borrow'] = isset($data['auto_borrow']) ? $data['auto_borrow'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['fill_price'] = isset($data['fill_price']) ? $data['fill_price'] : null;
        $this->container['filled_total'] = isset($data['filled_total']) ? $data['filled_total'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['fee_currency'] = isset($data['fee_currency']) ? $data['fee_currency'] : null;
        $this->container['point_fee'] = isset($data['point_fee']) ? $data['point_fee'] : null;
        $this->container['gt_fee'] = isset($data['gt_fee']) ? $data['gt_fee'] : null;
        $this->container['gt_discount'] = isset($data['gt_discount']) ? $data['gt_discount'] : null;
        $this->container['rebated_fee'] = isset($data['rebated_fee']) ? $data['rebated_fee'] : null;
        $this->container['rebated_fee_currency'] = isset($data['rebated_fee_currency']) ? $data['rebated_fee_currency'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['currency_pair'] === null) {
            $invalidProperties[] = "'currency_pair' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAccountAllowableValues();
        if (!is_null($this->container['account']) && !in_array($this->container['account'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'account', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['side'] === null) {
            $invalidProperties[] = "'side' can't be null";
        }
        $allowedValues = $this->getSideAllowableValues();
        if (!is_null($this->container['side']) && !in_array($this->container['side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'side', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        $allowedValues = $this->getTimeInForceAllowableValues();
        if (!is_null($this->container['time_in_force']) && !in_array($this->container['time_in_force'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'time_in_force', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Order ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text User defined information. If not empty, must follow the rules below:  1. prefixed with `t-` 2. no longer than 28 bytes without `t-` prefix 3. can only include 0-9, A-Z, a-z, underscore(_), hyphen(-) or dot(.)
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string|null $create_time Order creation time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string|null $update_time Order last modification time
     *
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Order status  - `open`: to be filled - `closed`: filled - `cancelled`: cancelled
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets currency_pair
     *
     * @return string
     */
    public function getCurrencyPair()
    {
        return $this->container['currency_pair'];
    }

    /**
     * Sets currency_pair
     *
     * @param string $currency_pair Currency pair
     *
     * @return $this
     */
    public function setCurrencyPair($currency_pair)
    {
        $this->container['currency_pair'] = $currency_pair;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Order type. limit - limit order
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets account
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string|null $account Account type. spot - use spot account; margin - use margin account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $allowedValues = $this->getAccountAllowableValues();
        if (!is_null($account) && !in_array($account, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'account', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets side
     *
     * @return string
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param string $side Order side
     *
     * @return $this
     */
    public function setSide($side)
    {
        $allowedValues = $this->getSideAllowableValues();
        if (!in_array($side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'side', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Trade amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price Order price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets time_in_force
     *
     * @return string|null
     */
    public function getTimeInForce()
    {
        return $this->container['time_in_force'];
    }

    /**
     * Sets time_in_force
     *
     * @param string|null $time_in_force Time in force  - gtc: GoodTillCancelled - ioc: ImmediateOrCancelled, taker only - poc: PendingOrCancelled, makes a post-only order that always enjoys a maker fee
     *
     * @return $this
     */
    public function setTimeInForce($time_in_force)
    {
        $allowedValues = $this->getTimeInForceAllowableValues();
        if (!is_null($time_in_force) && !in_array($time_in_force, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'time_in_force', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['time_in_force'] = $time_in_force;

        return $this;
    }

    /**
     * Gets iceberg
     *
     * @return string|null
     */
    public function getIceberg()
    {
        return $this->container['iceberg'];
    }

    /**
     * Sets iceberg
     *
     * @param string|null $iceberg Amount to display for the iceberg order. Null or 0 for normal orders. Set to -1 to hide the amount totally
     *
     * @return $this
     */
    public function setIceberg($iceberg)
    {
        $this->container['iceberg'] = $iceberg;

        return $this;
    }

    /**
     * Gets auto_borrow
     *
     * @return bool|null
     */
    public function getAutoBorrow()
    {
        return $this->container['auto_borrow'];
    }

    /**
     * Sets auto_borrow
     *
     * @param bool|null $auto_borrow Used in margin trading(i.e. `account` is `margin`) to allow automatic loan of insufficient part if balance is not enough.
     *
     * @return $this
     */
    public function setAutoBorrow($auto_borrow)
    {
        $this->container['auto_borrow'] = $auto_borrow;

        return $this;
    }

    /**
     * Gets left
     *
     * @return string|null
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param string|null $left Amount left to fill
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets fill_price
     *
     * @return string|null
     */
    public function getFillPrice()
    {
        return $this->container['fill_price'];
    }

    /**
     * Sets fill_price
     *
     * @param string|null $fill_price Total filled in quote currency. Deprecated in favor of `filled_total`
     *
     * @return $this
     */
    public function setFillPrice($fill_price)
    {
        $this->container['fill_price'] = $fill_price;

        return $this;
    }

    /**
     * Gets filled_total
     *
     * @return string|null
     */
    public function getFilledTotal()
    {
        return $this->container['filled_total'];
    }

    /**
     * Sets filled_total
     *
     * @param string|null $filled_total Total filled in quote currency
     *
     * @return $this
     */
    public function setFilledTotal($filled_total)
    {
        $this->container['filled_total'] = $filled_total;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string|null $fee Fee deducted
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets fee_currency
     *
     * @return string|null
     */
    public function getFeeCurrency()
    {
        return $this->container['fee_currency'];
    }

    /**
     * Sets fee_currency
     *
     * @param string|null $fee_currency Fee currency unit
     *
     * @return $this
     */
    public function setFeeCurrency($fee_currency)
    {
        $this->container['fee_currency'] = $fee_currency;

        return $this;
    }

    /**
     * Gets point_fee
     *
     * @return string|null
     */
    public function getPointFee()
    {
        return $this->container['point_fee'];
    }

    /**
     * Sets point_fee
     *
     * @param string|null $point_fee Point used to deduct fee
     *
     * @return $this
     */
    public function setPointFee($point_fee)
    {
        $this->container['point_fee'] = $point_fee;

        return $this;
    }

    /**
     * Gets gt_fee
     *
     * @return string|null
     */
    public function getGtFee()
    {
        return $this->container['gt_fee'];
    }

    /**
     * Sets gt_fee
     *
     * @param string|null $gt_fee GT used to deduct fee
     *
     * @return $this
     */
    public function setGtFee($gt_fee)
    {
        $this->container['gt_fee'] = $gt_fee;

        return $this;
    }

    /**
     * Gets gt_discount
     *
     * @return bool|null
     */
    public function getGtDiscount()
    {
        return $this->container['gt_discount'];
    }

    /**
     * Sets gt_discount
     *
     * @param bool|null $gt_discount Whether GT fee discount is used
     *
     * @return $this
     */
    public function setGtDiscount($gt_discount)
    {
        $this->container['gt_discount'] = $gt_discount;

        return $this;
    }

    /**
     * Gets rebated_fee
     *
     * @return string|null
     */
    public function getRebatedFee()
    {
        return $this->container['rebated_fee'];
    }

    /**
     * Sets rebated_fee
     *
     * @param string|null $rebated_fee Rebated fee
     *
     * @return $this
     */
    public function setRebatedFee($rebated_fee)
    {
        $this->container['rebated_fee'] = $rebated_fee;

        return $this;
    }

    /**
     * Gets rebated_fee_currency
     *
     * @return string|null
     */
    public function getRebatedFeeCurrency()
    {
        return $this->container['rebated_fee_currency'];
    }

    /**
     * Sets rebated_fee_currency
     *
     * @param string|null $rebated_fee_currency Rebated fee currency unit
     *
     * @return $this
     */
    public function setRebatedFeeCurrency($rebated_fee_currency)
    {
        $this->container['rebated_fee_currency'] = $rebated_fee_currency;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


