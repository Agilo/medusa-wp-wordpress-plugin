<?php
/**
 * ModelReturn
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
 * ModelReturn Class Doc Comment
 *
 * @category Class
 * @description A Return holds information about Line Items that a Customer wishes to send back, along with how the items will be returned. Returns can also be used as part of a Swap or a Claim.
 * @package  MedusaWP\MedusaClient\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModelReturn implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Return';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'status' => 'string',
        'items' => '\MedusaWP\MedusaClient\Store\Model\ReturnItem[]',
        'swap_id' => 'string',
        'swap' => '\MedusaWP\MedusaClient\Store\Model\Swap',
        'claim_order_id' => 'string',
        'claim_order' => '\MedusaWP\MedusaClient\Store\Model\ClaimOrder',
        'order_id' => 'string',
        'order' => '\MedusaWP\MedusaClient\Store\Model\Order',
        'shipping_method' => '\MedusaWP\MedusaClient\Store\Model\ShippingMethod',
        'shipping_data' => 'object',
        'location_id' => 'string',
        'refund_amount' => 'int',
        'no_notification' => 'bool',
        'idempotency_key' => 'string',
        'received_at' => '\DateTime',
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
        'status' => null,
        'items' => null,
        'swap_id' => null,
        'swap' => null,
        'claim_order_id' => null,
        'claim_order' => null,
        'order_id' => null,
        'order' => null,
        'shipping_method' => null,
        'shipping_data' => null,
        'location_id' => null,
        'refund_amount' => null,
        'no_notification' => null,
        'idempotency_key' => null,
        'received_at' => 'date-time',
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
		'status' => false,
		'items' => false,
		'swap_id' => true,
		'swap' => false,
		'claim_order_id' => true,
		'claim_order' => false,
		'order_id' => true,
		'order' => false,
		'shipping_method' => false,
		'shipping_data' => true,
		'location_id' => true,
		'refund_amount' => false,
		'no_notification' => true,
		'idempotency_key' => true,
		'received_at' => true,
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
        'status' => 'status',
        'items' => 'items',
        'swap_id' => 'swap_id',
        'swap' => 'swap',
        'claim_order_id' => 'claim_order_id',
        'claim_order' => 'claim_order',
        'order_id' => 'order_id',
        'order' => 'order',
        'shipping_method' => 'shipping_method',
        'shipping_data' => 'shipping_data',
        'location_id' => 'location_id',
        'refund_amount' => 'refund_amount',
        'no_notification' => 'no_notification',
        'idempotency_key' => 'idempotency_key',
        'received_at' => 'received_at',
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
        'status' => 'setStatus',
        'items' => 'setItems',
        'swap_id' => 'setSwapId',
        'swap' => 'setSwap',
        'claim_order_id' => 'setClaimOrderId',
        'claim_order' => 'setClaimOrder',
        'order_id' => 'setOrderId',
        'order' => 'setOrder',
        'shipping_method' => 'setShippingMethod',
        'shipping_data' => 'setShippingData',
        'location_id' => 'setLocationId',
        'refund_amount' => 'setRefundAmount',
        'no_notification' => 'setNoNotification',
        'idempotency_key' => 'setIdempotencyKey',
        'received_at' => 'setReceivedAt',
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
        'status' => 'getStatus',
        'items' => 'getItems',
        'swap_id' => 'getSwapId',
        'swap' => 'getSwap',
        'claim_order_id' => 'getClaimOrderId',
        'claim_order' => 'getClaimOrder',
        'order_id' => 'getOrderId',
        'order' => 'getOrder',
        'shipping_method' => 'getShippingMethod',
        'shipping_data' => 'getShippingData',
        'location_id' => 'getLocationId',
        'refund_amount' => 'getRefundAmount',
        'no_notification' => 'getNoNotification',
        'idempotency_key' => 'getIdempotencyKey',
        'received_at' => 'getReceivedAt',
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

    public const STATUS_REQUESTED = 'requested';
    public const STATUS_RECEIVED = 'received';
    public const STATUS_REQUIRES_ACTION = 'requires_action';
    public const STATUS_CANCELED = 'canceled';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_REQUESTED,
            self::STATUS_RECEIVED,
            self::STATUS_REQUIRES_ACTION,
            self::STATUS_CANCELED,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], 'requested');
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('swap_id', $data ?? [], null);
        $this->setIfExists('swap', $data ?? [], null);
        $this->setIfExists('claim_order_id', $data ?? [], null);
        $this->setIfExists('claim_order', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('shipping_method', $data ?? [], null);
        $this->setIfExists('shipping_data', $data ?? [], null);
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('refund_amount', $data ?? [], null);
        $this->setIfExists('no_notification', $data ?? [], null);
        $this->setIfExists('idempotency_key', $data ?? [], null);
        $this->setIfExists('received_at', $data ?? [], null);
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['swap_id'] === null) {
            $invalidProperties[] = "'swap_id' can't be null";
        }
        if ($this->container['claim_order_id'] === null) {
            $invalidProperties[] = "'claim_order_id' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['shipping_data'] === null) {
            $invalidProperties[] = "'shipping_data' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['refund_amount'] === null) {
            $invalidProperties[] = "'refund_amount' can't be null";
        }
        if ($this->container['no_notification'] === null) {
            $invalidProperties[] = "'no_notification' can't be null";
        }
        if ($this->container['idempotency_key'] === null) {
            $invalidProperties[] = "'idempotency_key' can't be null";
        }
        if ($this->container['received_at'] === null) {
            $invalidProperties[] = "'received_at' can't be null";
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
     * @param string $id The return's ID
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the Return.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \MedusaWP\MedusaClient\Store\Model\ReturnItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \MedusaWP\MedusaClient\Store\Model\ReturnItem[]|null $items The details of the items that the customer is returning.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

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
     * @param string $swap_id The ID of the swap that the return may belong to.
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
     * Gets claim_order_id
     *
     * @return string
     */
    public function getClaimOrderId()
    {
        return $this->container['claim_order_id'];
    }

    /**
     * Sets claim_order_id
     *
     * @param string $claim_order_id The ID of the claim that the return may belong to.
     *
     * @return self
     */
    public function setClaimOrderId($claim_order_id)
    {
        if (is_null($claim_order_id)) {
            array_push($this->openAPINullablesSetToNull, 'claim_order_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('claim_order_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['claim_order_id'] = $claim_order_id;

        return $this;
    }

    /**
     * Gets claim_order
     *
     * @return \MedusaWP\MedusaClient\Store\Model\ClaimOrder|null
     */
    public function getClaimOrder()
    {
        return $this->container['claim_order'];
    }

    /**
     * Sets claim_order
     *
     * @param \MedusaWP\MedusaClient\Store\Model\ClaimOrder|null $claim_order claim_order
     *
     * @return self
     */
    public function setClaimOrder($claim_order)
    {
        if (is_null($claim_order)) {
            throw new \InvalidArgumentException('non-nullable claim_order cannot be null');
        }
        $this->container['claim_order'] = $claim_order;

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
     * @param string $order_id The ID of the order that the return was created for.
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
     * Gets shipping_method
     *
     * @return \MedusaWP\MedusaClient\Store\Model\ShippingMethod|null
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param \MedusaWP\MedusaClient\Store\Model\ShippingMethod|null $shipping_method shipping_method
     *
     * @return self
     */
    public function setShippingMethod($shipping_method)
    {
        if (is_null($shipping_method)) {
            throw new \InvalidArgumentException('non-nullable shipping_method cannot be null');
        }
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets shipping_data
     *
     * @return object
     */
    public function getShippingData()
    {
        return $this->container['shipping_data'];
    }

    /**
     * Sets shipping_data
     *
     * @param object $shipping_data Data about the return shipment as provided by the Fulfilment Provider that handles the return shipment.
     *
     * @return self
     */
    public function setShippingData($shipping_data)
    {
        if (is_null($shipping_data)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_data'] = $shipping_data;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param string $location_id The ID of the stock location the return will be added back.
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        if (is_null($location_id)) {
            array_push($this->openAPINullablesSetToNull, 'location_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('location_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets refund_amount
     *
     * @return int
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     *
     * @param int $refund_amount The amount that should be refunded as a result of the return.
     *
     * @return self
     */
    public function setRefundAmount($refund_amount)
    {
        if (is_null($refund_amount)) {
            throw new \InvalidArgumentException('non-nullable refund_amount cannot be null');
        }
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets no_notification
     *
     * @return bool
     */
    public function getNoNotification()
    {
        return $this->container['no_notification'];
    }

    /**
     * Sets no_notification
     *
     * @param bool $no_notification When set to true, no notification will be sent related to this return.
     *
     * @return self
     */
    public function setNoNotification($no_notification)
    {
        if (is_null($no_notification)) {
            array_push($this->openAPINullablesSetToNull, 'no_notification');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('no_notification', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['no_notification'] = $no_notification;

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
     * @param string $idempotency_key Randomly generated key used to continue the completion of the return in case of failure.
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
     * Gets received_at
     *
     * @return \DateTime
     */
    public function getReceivedAt()
    {
        return $this->container['received_at'];
    }

    /**
     * Sets received_at
     *
     * @param \DateTime $received_at The date with timezone at which the return was received.
     *
     * @return self
     */
    public function setReceivedAt($received_at)
    {
        if (is_null($received_at)) {
            array_push($this->openAPINullablesSetToNull, 'received_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('received_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['received_at'] = $received_at;

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

