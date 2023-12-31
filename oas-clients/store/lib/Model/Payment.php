<?php
/**
 * Payment
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MedusaWP\MedusaClient\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Medusa Storefront API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MedusaWP\MedusaClient\Store\Model;

use \ArrayAccess;
use \MedusaWP\MedusaClient\Store\ObjectSerializer;

/**
 * Payment Class Doc Comment
 *
 * @category Class
 * @description A payment is originally created from a payment session. Once a payment session is authorized, the payment is created to represent the authorized amount with a given payment method. Payments can be captured, canceled or refunded. Payments can be made towards orders, swaps, order edits, or other resources.
 * @package  MedusaWP\MedusaClient\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Payment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'swap_id' => 'string',
        'swap' => '\MedusaWP\MedusaClient\Store\Model\Swap',
        'cart_id' => 'string',
        'cart' => '\MedusaWP\MedusaClient\Store\Model\Cart',
        'order_id' => 'string',
        'order' => '\MedusaWP\MedusaClient\Store\Model\Order',
        'amount' => 'int',
        'currency_code' => 'string',
        'currency' => '\MedusaWP\MedusaClient\Store\Model\Currency',
        'amount_refunded' => 'int',
        'provider_id' => 'string',
        'data' => 'object',
        'captured_at' => '\DateTime',
        'canceled_at' => '\DateTime',
        'idempotency_key' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'swap_id' => null,
        'swap' => null,
        'cart_id' => null,
        'cart' => null,
        'order_id' => null,
        'order' => null,
        'amount' => null,
        'currency_code' => null,
        'currency' => null,
        'amount_refunded' => null,
        'provider_id' => null,
        'data' => null,
        'captured_at' => 'date-time',
        'canceled_at' => 'date-time',
        'idempotency_key' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'swap_id' => true,
		'swap' => false,
		'cart_id' => true,
		'cart' => false,
		'order_id' => true,
		'order' => false,
		'amount' => false,
		'currency_code' => false,
		'currency' => false,
		'amount_refunded' => false,
		'provider_id' => false,
		'data' => false,
		'captured_at' => true,
		'canceled_at' => true,
		'idempotency_key' => true,
		'created_at' => false,
		'updated_at' => false,
		'metadata' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'swap_id' => 'swap_id',
        'swap' => 'swap',
        'cart_id' => 'cart_id',
        'cart' => 'cart',
        'order_id' => 'order_id',
        'order' => 'order',
        'amount' => 'amount',
        'currency_code' => 'currency_code',
        'currency' => 'currency',
        'amount_refunded' => 'amount_refunded',
        'provider_id' => 'provider_id',
        'data' => 'data',
        'captured_at' => 'captured_at',
        'canceled_at' => 'canceled_at',
        'idempotency_key' => 'idempotency_key',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'swap_id' => 'setSwapId',
        'swap' => 'setSwap',
        'cart_id' => 'setCartId',
        'cart' => 'setCart',
        'order_id' => 'setOrderId',
        'order' => 'setOrder',
        'amount' => 'setAmount',
        'currency_code' => 'setCurrencyCode',
        'currency' => 'setCurrency',
        'amount_refunded' => 'setAmountRefunded',
        'provider_id' => 'setProviderId',
        'data' => 'setData',
        'captured_at' => 'setCapturedAt',
        'canceled_at' => 'setCanceledAt',
        'idempotency_key' => 'setIdempotencyKey',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'swap_id' => 'getSwapId',
        'swap' => 'getSwap',
        'cart_id' => 'getCartId',
        'cart' => 'getCart',
        'order_id' => 'getOrderId',
        'order' => 'getOrder',
        'amount' => 'getAmount',
        'currency_code' => 'getCurrencyCode',
        'currency' => 'getCurrency',
        'amount_refunded' => 'getAmountRefunded',
        'provider_id' => 'getProviderId',
        'data' => 'getData',
        'captured_at' => 'getCapturedAt',
        'canceled_at' => 'getCanceledAt',
        'idempotency_key' => 'getIdempotencyKey',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'metadata' => 'getMetadata'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('swap_id', $data ?? [], null);
        $this->setIfExists('swap', $data ?? [], null);
        $this->setIfExists('cart_id', $data ?? [], null);
        $this->setIfExists('cart', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('amount_refunded', $data ?? [], 0);
        $this->setIfExists('provider_id', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('captured_at', $data ?? [], null);
        $this->setIfExists('canceled_at', $data ?? [], null);
        $this->setIfExists('idempotency_key', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
        if ($this->container['swap_id'] === null) {
            $invalidProperties[] = "'swap_id' can't be null";
        }
        if ($this->container['cart_id'] === null) {
            $invalidProperties[] = "'cart_id' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['amount_refunded'] === null) {
            $invalidProperties[] = "'amount_refunded' can't be null";
        }
        if ($this->container['provider_id'] === null) {
            $invalidProperties[] = "'provider_id' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
        }
        if ($this->container['captured_at'] === null) {
            $invalidProperties[] = "'captured_at' can't be null";
        }
        if ($this->container['canceled_at'] === null) {
            $invalidProperties[] = "'canceled_at' can't be null";
        }
        if ($this->container['idempotency_key'] === null) {
            $invalidProperties[] = "'idempotency_key' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The payment's ID
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets swap_id
     *
     * @return string
     */
    public function getSwapId()
    {
        return $this->container['swap_id'];
    }

    /**
     * Sets swap_id
     *
     * @param string $swap_id The ID of the swap that this payment was potentially created for.
     *
     * @return self
     */
    public function setSwapId($swap_id)
    {
        if (is_null($swap_id)) {
            array_push($this->openAPINullablesSetToNull, 'swap_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('swap_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['swap_id'] = $swap_id;

        return $this;
    }

    /**
     * Gets swap
     *
     * @return \MedusaWP\MedusaClient\Store\Model\Swap|null
     */
    public function getSwap()
    {
        return $this->container['swap'];
    }

    /**
     * Sets swap
     *
     * @param \MedusaWP\MedusaClient\Store\Model\Swap|null $swap swap
     *
     * @return self
     */
    public function setSwap($swap)
    {
        if (is_null($swap)) {
            throw new \InvalidArgumentException('non-nullable swap cannot be null');
        }
        $this->container['swap'] = $swap;

        return $this;
    }

    /**
     * Gets cart_id
     *
     * @return string
     */
    public function getCartId()
    {
        return $this->container['cart_id'];
    }

    /**
     * Sets cart_id
     *
     * @param string $cart_id The ID of the cart that the payment session was potentially created for.
     *
     * @return self
     */
    public function setCartId($cart_id)
    {
        if (is_null($cart_id)) {
            array_push($this->openAPINullablesSetToNull, 'cart_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cart_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cart_id'] = $cart_id;

        return $this;
    }

    /**
     * Gets cart
     *
     * @return \MedusaWP\MedusaClient\Store\Model\Cart|null
     */
    public function getCart()
    {
        return $this->container['cart'];
    }

    /**
     * Sets cart
     *
     * @param \MedusaWP\MedusaClient\Store\Model\Cart|null $cart cart
     *
     * @return self
     */
    public function setCart($cart)
    {
        if (is_null($cart)) {
            throw new \InvalidArgumentException('non-nullable cart cannot be null');
        }
        $this->container['cart'] = $cart;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id The ID of the order that the payment session was potentially created for.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            array_push($this->openAPINullablesSetToNull, 'order_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \MedusaWP\MedusaClient\Store\Model\Order|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \MedusaWP\MedusaClient\Store\Model\Order|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The amount that the Payment has been authorized for.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code The 3 character ISO currency code of the payment.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \MedusaWP\MedusaClient\Store\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \MedusaWP\MedusaClient\Store\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets amount_refunded
     *
     * @return int
     */
    public function getAmountRefunded()
    {
        return $this->container['amount_refunded'];
    }

    /**
     * Sets amount_refunded
     *
     * @param int $amount_refunded The amount of the original Payment amount that has been refunded back to the Customer.
     *
     * @return self
     */
    public function setAmountRefunded($amount_refunded)
    {
        if (is_null($amount_refunded)) {
            throw new \InvalidArgumentException('non-nullable amount_refunded cannot be null');
        }
        $this->container['amount_refunded'] = $amount_refunded;

        return $this;
    }

    /**
     * Gets provider_id
     *
     * @return string
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     * @param string $provider_id The id of the Payment Provider that is responsible for the Payment
     *
     * @return self
     */
    public function setProviderId($provider_id)
    {
        if (is_null($provider_id)) {
            throw new \InvalidArgumentException('non-nullable provider_id cannot be null');
        }
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets data
     *
     * @return object
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param object $data The data required for the Payment Provider to identify, modify and process the Payment. Typically this will be an object that holds an id to the external payment session, but can be an empty object if the Payment Provider doesn't hold any state.
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets captured_at
     *
     * @return \DateTime
     */
    public function getCapturedAt()
    {
        return $this->container['captured_at'];
    }

    /**
     * Sets captured_at
     *
     * @param \DateTime $captured_at The date with timezone at which the Payment was captured.
     *
     * @return self
     */
    public function setCapturedAt($captured_at)
    {
        if (is_null($captured_at)) {
            array_push($this->openAPINullablesSetToNull, 'captured_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('captured_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['captured_at'] = $captured_at;

        return $this;
    }

    /**
     * Gets canceled_at
     *
     * @return \DateTime
     */
    public function getCanceledAt()
    {
        return $this->container['canceled_at'];
    }

    /**
     * Sets canceled_at
     *
     * @param \DateTime $canceled_at The date with timezone at which the Payment was canceled.
     *
     * @return self
     */
    public function setCanceledAt($canceled_at)
    {
        if (is_null($canceled_at)) {
            array_push($this->openAPINullablesSetToNull, 'canceled_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('canceled_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['canceled_at'] = $canceled_at;

        return $this;
    }

    /**
     * Gets idempotency_key
     *
     * @return string
     */
    public function getIdempotencyKey()
    {
        return $this->container['idempotency_key'];
    }

    /**
     * Sets idempotency_key
     *
     * @param string $idempotency_key Randomly generated key used to continue the completion of a payment in case of failure.
     *
     * @return self
     */
    public function setIdempotencyKey($idempotency_key)
    {
        if (is_null($idempotency_key)) {
            array_push($this->openAPINullablesSetToNull, 'idempotency_key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('idempotency_key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['idempotency_key'] = $idempotency_key;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The date with timezone at which the resource was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The date with timezone at which the resource was updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object $metadata An optional key-value map with additional details
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            array_push($this->openAPINullablesSetToNull, 'metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['metadata'] = $metadata;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


