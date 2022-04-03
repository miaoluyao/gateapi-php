<?php
/**
 * OptionsContract
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
 * Welcome to Gate.io API  APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
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
 * OptionsContract Class Doc Comment
 *
 * @category    Class
 * @description Futures contract details
 * @package     GateApi
 * @author      GateIO
 * @link        https://www.gate.io
 */
class OptionsContract implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'OptionsContract';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'name' => 'string',
        'tag' => 'string',
        'create_time' => 'double',
        'expiration_time' => 'double',
        'is_call' => 'bool',
        'multiplier' => 'string',
        'underlying' => 'string',
        'underlying_price' => 'string',
        'last_price' => 'string',
        'mark_price' => 'string',
        'index_price' => 'string',
        'maker_fee_rate' => 'string',
        'taker_fee_rate' => 'string',
        'order_price_round' => 'string',
        'mark_price_round' => 'string',
        'order_size_min' => 'int',
        'order_size_max' => 'int',
        'order_price_deviate' => 'string',
        'ref_discount_rate' => 'string',
        'ref_rebate_rate' => 'string',
        'orderbook_id' => 'int',
        'trade_id' => 'int',
        'trade_size' => 'int',
        'position_size' => 'int',
        'orders_limit' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'name' => null,
        'tag' => null,
        'create_time' => 'double',
        'expiration_time' => 'double',
        'is_call' => null,
        'multiplier' => null,
        'underlying' => null,
        'underlying_price' => null,
        'last_price' => null,
        'mark_price' => null,
        'index_price' => null,
        'maker_fee_rate' => null,
        'taker_fee_rate' => null,
        'order_price_round' => null,
        'mark_price_round' => null,
        'order_size_min' => 'int64',
        'order_size_max' => 'int64',
        'order_price_deviate' => null,
        'ref_discount_rate' => null,
        'ref_rebate_rate' => null,
        'orderbook_id' => 'int64',
        'trade_id' => 'int64',
        'trade_size' => 'int64',
        'position_size' => 'int64',
        'orders_limit' => null
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
        'name' => 'name',
        'tag' => 'tag',
        'create_time' => 'create_time',
        'expiration_time' => 'expiration_time',
        'is_call' => 'is_call',
        'multiplier' => 'multiplier',
        'underlying' => 'underlying',
        'underlying_price' => 'underlying_price',
        'last_price' => 'last_price',
        'mark_price' => 'mark_price',
        'index_price' => 'index_price',
        'maker_fee_rate' => 'maker_fee_rate',
        'taker_fee_rate' => 'taker_fee_rate',
        'order_price_round' => 'order_price_round',
        'mark_price_round' => 'mark_price_round',
        'order_size_min' => 'order_size_min',
        'order_size_max' => 'order_size_max',
        'order_price_deviate' => 'order_price_deviate',
        'ref_discount_rate' => 'ref_discount_rate',
        'ref_rebate_rate' => 'ref_rebate_rate',
        'orderbook_id' => 'orderbook_id',
        'trade_id' => 'trade_id',
        'trade_size' => 'trade_size',
        'position_size' => 'position_size',
        'orders_limit' => 'orders_limit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'tag' => 'setTag',
        'create_time' => 'setCreateTime',
        'expiration_time' => 'setExpirationTime',
        'is_call' => 'setIsCall',
        'multiplier' => 'setMultiplier',
        'underlying' => 'setUnderlying',
        'underlying_price' => 'setUnderlyingPrice',
        'last_price' => 'setLastPrice',
        'mark_price' => 'setMarkPrice',
        'index_price' => 'setIndexPrice',
        'maker_fee_rate' => 'setMakerFeeRate',
        'taker_fee_rate' => 'setTakerFeeRate',
        'order_price_round' => 'setOrderPriceRound',
        'mark_price_round' => 'setMarkPriceRound',
        'order_size_min' => 'setOrderSizeMin',
        'order_size_max' => 'setOrderSizeMax',
        'order_price_deviate' => 'setOrderPriceDeviate',
        'ref_discount_rate' => 'setRefDiscountRate',
        'ref_rebate_rate' => 'setRefRebateRate',
        'orderbook_id' => 'setOrderbookId',
        'trade_id' => 'setTradeId',
        'trade_size' => 'setTradeSize',
        'position_size' => 'setPositionSize',
        'orders_limit' => 'setOrdersLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'tag' => 'getTag',
        'create_time' => 'getCreateTime',
        'expiration_time' => 'getExpirationTime',
        'is_call' => 'getIsCall',
        'multiplier' => 'getMultiplier',
        'underlying' => 'getUnderlying',
        'underlying_price' => 'getUnderlyingPrice',
        'last_price' => 'getLastPrice',
        'mark_price' => 'getMarkPrice',
        'index_price' => 'getIndexPrice',
        'maker_fee_rate' => 'getMakerFeeRate',
        'taker_fee_rate' => 'getTakerFeeRate',
        'order_price_round' => 'getOrderPriceRound',
        'mark_price_round' => 'getMarkPriceRound',
        'order_size_min' => 'getOrderSizeMin',
        'order_size_max' => 'getOrderSizeMax',
        'order_price_deviate' => 'getOrderPriceDeviate',
        'ref_discount_rate' => 'getRefDiscountRate',
        'ref_rebate_rate' => 'getRefRebateRate',
        'orderbook_id' => 'getOrderbookId',
        'trade_id' => 'getTradeId',
        'trade_size' => 'getTradeSize',
        'position_size' => 'getPositionSize',
        'orders_limit' => 'getOrdersLimit'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['expiration_time'] = isset($data['expiration_time']) ? $data['expiration_time'] : null;
        $this->container['is_call'] = isset($data['is_call']) ? $data['is_call'] : null;
        $this->container['multiplier'] = isset($data['multiplier']) ? $data['multiplier'] : null;
        $this->container['underlying'] = isset($data['underlying']) ? $data['underlying'] : null;
        $this->container['underlying_price'] = isset($data['underlying_price']) ? $data['underlying_price'] : null;
        $this->container['last_price'] = isset($data['last_price']) ? $data['last_price'] : null;
        $this->container['mark_price'] = isset($data['mark_price']) ? $data['mark_price'] : null;
        $this->container['index_price'] = isset($data['index_price']) ? $data['index_price'] : null;
        $this->container['maker_fee_rate'] = isset($data['maker_fee_rate']) ? $data['maker_fee_rate'] : null;
        $this->container['taker_fee_rate'] = isset($data['taker_fee_rate']) ? $data['taker_fee_rate'] : null;
        $this->container['order_price_round'] = isset($data['order_price_round']) ? $data['order_price_round'] : null;
        $this->container['mark_price_round'] = isset($data['mark_price_round']) ? $data['mark_price_round'] : null;
        $this->container['order_size_min'] = isset($data['order_size_min']) ? $data['order_size_min'] : null;
        $this->container['order_size_max'] = isset($data['order_size_max']) ? $data['order_size_max'] : null;
        $this->container['order_price_deviate'] = isset($data['order_price_deviate']) ? $data['order_price_deviate'] : null;
        $this->container['ref_discount_rate'] = isset($data['ref_discount_rate']) ? $data['ref_discount_rate'] : null;
        $this->container['ref_rebate_rate'] = isset($data['ref_rebate_rate']) ? $data['ref_rebate_rate'] : null;
        $this->container['orderbook_id'] = isset($data['orderbook_id']) ? $data['orderbook_id'] : null;
        $this->container['trade_id'] = isset($data['trade_id']) ? $data['trade_id'] : null;
        $this->container['trade_size'] = isset($data['trade_size']) ? $data['trade_size'] : null;
        $this->container['position_size'] = isset($data['position_size']) ? $data['position_size'] : null;
        $this->container['orders_limit'] = isset($data['orders_limit']) ? $data['orders_limit'] : null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Futures contract
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string|null $tag 标记
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return double|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param double|null $create_time Creation time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets expiration_time
     *
     * @return double|null
     */
    public function getExpirationTime()
    {
        return $this->container['expiration_time'];
    }

    /**
     * Sets expiration_time
     *
     * @param double|null $expiration_time Expiration time
     *
     * @return $this
     */
    public function setExpirationTime($expiration_time)
    {
        $this->container['expiration_time'] = $expiration_time;

        return $this;
    }

    /**
     * Gets is_call
     *
     * @return bool|null
     */
    public function getIsCall()
    {
        return $this->container['is_call'];
    }

    /**
     * Sets is_call
     *
     * @param bool|null $is_call `true` means call options, while `false` is put options
     *
     * @return $this
     */
    public function setIsCall($is_call)
    {
        $this->container['is_call'] = $is_call;

        return $this;
    }

    /**
     * Gets multiplier
     *
     * @return string|null
     */
    public function getMultiplier()
    {
        return $this->container['multiplier'];
    }

    /**
     * Sets multiplier
     *
     * @param string|null $multiplier Multiplier used in converting from invoicing to settlement currency
     *
     * @return $this
     */
    public function setMultiplier($multiplier)
    {
        $this->container['multiplier'] = $multiplier;

        return $this;
    }

    /**
     * Gets underlying
     *
     * @return string|null
     */
    public function getUnderlying()
    {
        return $this->container['underlying'];
    }

    /**
     * Sets underlying
     *
     * @param string|null $underlying Underlying
     *
     * @return $this
     */
    public function setUnderlying($underlying)
    {
        $this->container['underlying'] = $underlying;

        return $this;
    }

    /**
     * Gets underlying_price
     *
     * @return string|null
     */
    public function getUnderlyingPrice()
    {
        return $this->container['underlying_price'];
    }

    /**
     * Sets underlying_price
     *
     * @param string|null $underlying_price Underlying price
     *
     * @return $this
     */
    public function setUnderlyingPrice($underlying_price)
    {
        $this->container['underlying_price'] = $underlying_price;

        return $this;
    }

    /**
     * Gets last_price
     *
     * @return string|null
     */
    public function getLastPrice()
    {
        return $this->container['last_price'];
    }

    /**
     * Sets last_price
     *
     * @param string|null $last_price Last trading price
     *
     * @return $this
     */
    public function setLastPrice($last_price)
    {
        $this->container['last_price'] = $last_price;

        return $this;
    }

    /**
     * Gets mark_price
     *
     * @return string|null
     */
    public function getMarkPrice()
    {
        return $this->container['mark_price'];
    }

    /**
     * Sets mark_price
     *
     * @param string|null $mark_price Current mark price
     *
     * @return $this
     */
    public function setMarkPrice($mark_price)
    {
        $this->container['mark_price'] = $mark_price;

        return $this;
    }

    /**
     * Gets index_price
     *
     * @return string|null
     */
    public function getIndexPrice()
    {
        return $this->container['index_price'];
    }

    /**
     * Sets index_price
     *
     * @param string|null $index_price Current index price
     *
     * @return $this
     */
    public function setIndexPrice($index_price)
    {
        $this->container['index_price'] = $index_price;

        return $this;
    }

    /**
     * Gets maker_fee_rate
     *
     * @return string|null
     */
    public function getMakerFeeRate()
    {
        return $this->container['maker_fee_rate'];
    }

    /**
     * Sets maker_fee_rate
     *
     * @param string|null $maker_fee_rate Maker fee rate, where negative means rebate
     *
     * @return $this
     */
    public function setMakerFeeRate($maker_fee_rate)
    {
        $this->container['maker_fee_rate'] = $maker_fee_rate;

        return $this;
    }

    /**
     * Gets taker_fee_rate
     *
     * @return string|null
     */
    public function getTakerFeeRate()
    {
        return $this->container['taker_fee_rate'];
    }

    /**
     * Sets taker_fee_rate
     *
     * @param string|null $taker_fee_rate Taker fee rate
     *
     * @return $this
     */
    public function setTakerFeeRate($taker_fee_rate)
    {
        $this->container['taker_fee_rate'] = $taker_fee_rate;

        return $this;
    }

    /**
     * Gets order_price_round
     *
     * @return string|null
     */
    public function getOrderPriceRound()
    {
        return $this->container['order_price_round'];
    }

    /**
     * Sets order_price_round
     *
     * @param string|null $order_price_round Minimum order price increment
     *
     * @return $this
     */
    public function setOrderPriceRound($order_price_round)
    {
        $this->container['order_price_round'] = $order_price_round;

        return $this;
    }

    /**
     * Gets mark_price_round
     *
     * @return string|null
     */
    public function getMarkPriceRound()
    {
        return $this->container['mark_price_round'];
    }

    /**
     * Sets mark_price_round
     *
     * @param string|null $mark_price_round Minimum mark price increment
     *
     * @return $this
     */
    public function setMarkPriceRound($mark_price_round)
    {
        $this->container['mark_price_round'] = $mark_price_round;

        return $this;
    }

    /**
     * Gets order_size_min
     *
     * @return int|null
     */
    public function getOrderSizeMin()
    {
        return $this->container['order_size_min'];
    }

    /**
     * Sets order_size_min
     *
     * @param int|null $order_size_min Minimum order size the contract allowed
     *
     * @return $this
     */
    public function setOrderSizeMin($order_size_min)
    {
        $this->container['order_size_min'] = $order_size_min;

        return $this;
    }

    /**
     * Gets order_size_max
     *
     * @return int|null
     */
    public function getOrderSizeMax()
    {
        return $this->container['order_size_max'];
    }

    /**
     * Sets order_size_max
     *
     * @param int|null $order_size_max Maximum order size the contract allowed
     *
     * @return $this
     */
    public function setOrderSizeMax($order_size_max)
    {
        $this->container['order_size_max'] = $order_size_max;

        return $this;
    }

    /**
     * Gets order_price_deviate
     *
     * @return string|null
     */
    public function getOrderPriceDeviate()
    {
        return $this->container['order_price_deviate'];
    }

    /**
     * Sets order_price_deviate
     *
     * @param string|null $order_price_deviate deviation between order price and current index price. If price of an order is denoted as order_price, it must meet the following condition:      abs(order_price - mark_price) <= mark_price * order_price_deviate
     *
     * @return $this
     */
    public function setOrderPriceDeviate($order_price_deviate)
    {
        $this->container['order_price_deviate'] = $order_price_deviate;

        return $this;
    }

    /**
     * Gets ref_discount_rate
     *
     * @return string|null
     */
    public function getRefDiscountRate()
    {
        return $this->container['ref_discount_rate'];
    }

    /**
     * Sets ref_discount_rate
     *
     * @param string|null $ref_discount_rate Referral fee rate discount
     *
     * @return $this
     */
    public function setRefDiscountRate($ref_discount_rate)
    {
        $this->container['ref_discount_rate'] = $ref_discount_rate;

        return $this;
    }

    /**
     * Gets ref_rebate_rate
     *
     * @return string|null
     */
    public function getRefRebateRate()
    {
        return $this->container['ref_rebate_rate'];
    }

    /**
     * Sets ref_rebate_rate
     *
     * @param string|null $ref_rebate_rate Referrer commission rate
     *
     * @return $this
     */
    public function setRefRebateRate($ref_rebate_rate)
    {
        $this->container['ref_rebate_rate'] = $ref_rebate_rate;

        return $this;
    }

    /**
     * Gets orderbook_id
     *
     * @return int|null
     */
    public function getOrderbookId()
    {
        return $this->container['orderbook_id'];
    }

    /**
     * Sets orderbook_id
     *
     * @param int|null $orderbook_id Current orderbook ID
     *
     * @return $this
     */
    public function setOrderbookId($orderbook_id)
    {
        $this->container['orderbook_id'] = $orderbook_id;

        return $this;
    }

    /**
     * Gets trade_id
     *
     * @return int|null
     */
    public function getTradeId()
    {
        return $this->container['trade_id'];
    }

    /**
     * Sets trade_id
     *
     * @param int|null $trade_id Current trade ID
     *
     * @return $this
     */
    public function setTradeId($trade_id)
    {
        $this->container['trade_id'] = $trade_id;

        return $this;
    }

    /**
     * Gets trade_size
     *
     * @return int|null
     */
    public function getTradeSize()
    {
        return $this->container['trade_size'];
    }

    /**
     * Sets trade_size
     *
     * @param int|null $trade_size Historical accumulated trade size
     *
     * @return $this
     */
    public function setTradeSize($trade_size)
    {
        $this->container['trade_size'] = $trade_size;

        return $this;
    }

    /**
     * Gets position_size
     *
     * @return int|null
     */
    public function getPositionSize()
    {
        return $this->container['position_size'];
    }

    /**
     * Sets position_size
     *
     * @param int|null $position_size Current total long position size
     *
     * @return $this
     */
    public function setPositionSize($position_size)
    {
        $this->container['position_size'] = $position_size;

        return $this;
    }

    /**
     * Gets orders_limit
     *
     * @return int|null
     */
    public function getOrdersLimit()
    {
        return $this->container['orders_limit'];
    }

    /**
     * Sets orders_limit
     *
     * @param int|null $orders_limit Maximum number of open orders
     *
     * @return $this
     */
    public function setOrdersLimit($orders_limit)
    {
        $this->container['orders_limit'] = $orders_limit;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


