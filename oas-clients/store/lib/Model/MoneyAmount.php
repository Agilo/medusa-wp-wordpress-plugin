<?php
/**
 * MoneyAmount
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
 * MoneyAmount Class Doc Comment
 *
 * @category Class
 * @description A Money Amount represent a price amount, for example, a product variant&#39;s price or a price in a price list. Each Money Amount either has a Currency or Region associated with it to indicate the pricing in a given Currency or, for fully region-based pricing, the given price in a specific Region. If region-based pricing is used, the amount will be in the currency defined for the Region.
 * @package  MedusaWP\MedusaClient\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MoneyAmount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MoneyAmount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'currency_code' => 'string',
        'currency' => '\MedusaWP\MedusaClient\Store\Model\Currency',
        'amount' => 'int',
        'min_quantity' => 'int',
        'max_quantity' => 'int',
        'price_list_id' => 'string',
        'price_list' => '\MedusaWP\MedusaClient\Store\Model\PriceList',
        'variant_id' => 'string',
        'variant' => '\MedusaWP\MedusaClient\Store\Model\ProductVariant',
        'region_id' => 'string',
        'region' => '\MedusaWP\MedusaClient\Store\Model\Region',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'deleted_at' => '\DateTime'
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
        'currency_code' => null,
        'currency' => null,
        'amount' => null,
        'min_quantity' => null,
        'max_quantity' => null,
        'price_list_id' => null,
        'price_list' => null,
        'variant_id' => null,
        'variant' => null,
        'region_id' => null,
        'region' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'deleted_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'currency_code' => false,
		'currency' => false,
		'amount' => false,
		'min_quantity' => true,
		'max_quantity' => true,
		'price_list_id' => true,
		'price_list' => false,
		'variant_id' => true,
		'variant' => false,
		'region_id' => true,
		'region' => false,
		'created_at' => false,
		'updated_at' => false,
		'deleted_at' => true
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
        'currency_code' => 'currency_code',
        'currency' => 'currency',
        'amount' => 'amount',
        'min_quantity' => 'min_quantity',
        'max_quantity' => 'max_quantity',
        'price_list_id' => 'price_list_id',
        'price_list' => 'price_list',
        'variant_id' => 'variant_id',
        'variant' => 'variant',
        'region_id' => 'region_id',
        'region' => 'region',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'currency_code' => 'setCurrencyCode',
        'currency' => 'setCurrency',
        'amount' => 'setAmount',
        'min_quantity' => 'setMinQuantity',
        'max_quantity' => 'setMaxQuantity',
        'price_list_id' => 'setPriceListId',
        'price_list' => 'setPriceList',
        'variant_id' => 'setVariantId',
        'variant' => 'setVariant',
        'region_id' => 'setRegionId',
        'region' => 'setRegion',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'deleted_at' => 'setDeletedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'currency_code' => 'getCurrencyCode',
        'currency' => 'getCurrency',
        'amount' => 'getAmount',
        'min_quantity' => 'getMinQuantity',
        'max_quantity' => 'getMaxQuantity',
        'price_list_id' => 'getPriceListId',
        'price_list' => 'getPriceList',
        'variant_id' => 'getVariantId',
        'variant' => 'getVariant',
        'region_id' => 'getRegionId',
        'region' => 'getRegion',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'deleted_at' => 'getDeletedAt'
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
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('min_quantity', $data ?? [], null);
        $this->setIfExists('max_quantity', $data ?? [], null);
        $this->setIfExists('price_list_id', $data ?? [], null);
        $this->setIfExists('price_list', $data ?? [], null);
        $this->setIfExists('variant_id', $data ?? [], null);
        $this->setIfExists('variant', $data ?? [], null);
        $this->setIfExists('region_id', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
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
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['min_quantity'] === null) {
            $invalidProperties[] = "'min_quantity' can't be null";
        }
        if ($this->container['max_quantity'] === null) {
            $invalidProperties[] = "'max_quantity' can't be null";
        }
        if ($this->container['price_list_id'] === null) {
            $invalidProperties[] = "'price_list_id' can't be null";
        }
        if ($this->container['variant_id'] === null) {
            $invalidProperties[] = "'variant_id' can't be null";
        }
        if ($this->container['region_id'] === null) {
            $invalidProperties[] = "'region_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['deleted_at'] === null) {
            $invalidProperties[] = "'deleted_at' can't be null";
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
     * @param string $id The money amount's ID
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
     * @param string $currency_code The 3 character currency code that the money amount may belong to.
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
     * @param int $amount The amount in the smallest currecny unit (e.g. cents 100 cents to charge $1) that the Product Variant will cost.
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
     * Gets min_quantity
     *
     * @return int
     */
    public function getMinQuantity()
    {
        return $this->container['min_quantity'];
    }

    /**
     * Sets min_quantity
     *
     * @param int $min_quantity The minimum quantity that the Money Amount applies to. If this value is not set, the Money Amount applies to all quantities.
     *
     * @return self
     */
    public function setMinQuantity($min_quantity)
    {
        if (is_null($min_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'min_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_quantity'] = $min_quantity;

        return $this;
    }

    /**
     * Gets max_quantity
     *
     * @return int
     */
    public function getMaxQuantity()
    {
        return $this->container['max_quantity'];
    }

    /**
     * Sets max_quantity
     *
     * @param int $max_quantity The maximum quantity that the Money Amount applies to. If this value is not set, the Money Amount applies to all quantities.
     *
     * @return self
     */
    public function setMaxQuantity($max_quantity)
    {
        if (is_null($max_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'max_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_quantity'] = $max_quantity;

        return $this;
    }

    /**
     * Gets price_list_id
     *
     * @return string
     */
    public function getPriceListId()
    {
        return $this->container['price_list_id'];
    }

    /**
     * Sets price_list_id
     *
     * @param string $price_list_id The ID of the price list that the money amount may belong to.
     *
     * @return self
     */
    public function setPriceListId($price_list_id)
    {
        if (is_null($price_list_id)) {
            array_push($this->openAPINullablesSetToNull, 'price_list_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price_list_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price_list_id'] = $price_list_id;

        return $this;
    }

    /**
     * Gets price_list
     *
     * @return \MedusaWP\MedusaClient\Store\Model\PriceList|null
     */
    public function getPriceList()
    {
        return $this->container['price_list'];
    }

    /**
     * Sets price_list
     *
     * @param \MedusaWP\MedusaClient\Store\Model\PriceList|null $price_list price_list
     *
     * @return self
     */
    public function setPriceList($price_list)
    {
        if (is_null($price_list)) {
            throw new \InvalidArgumentException('non-nullable price_list cannot be null');
        }
        $this->container['price_list'] = $price_list;

        return $this;
    }

    /**
     * Gets variant_id
     *
     * @return string
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     *
     * @param string $variant_id The ID of the Product Variant contained in the Line Item.
     *
     * @return self
     */
    public function setVariantId($variant_id)
    {
        if (is_null($variant_id)) {
            array_push($this->openAPINullablesSetToNull, 'variant_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('variant_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets variant
     *
     * @return \MedusaWP\MedusaClient\Store\Model\ProductVariant|null
     */
    public function getVariant()
    {
        return $this->container['variant'];
    }

    /**
     * Sets variant
     *
     * @param \MedusaWP\MedusaClient\Store\Model\ProductVariant|null $variant variant
     *
     * @return self
     */
    public function setVariant($variant)
    {
        if (is_null($variant)) {
            throw new \InvalidArgumentException('non-nullable variant cannot be null');
        }
        $this->container['variant'] = $variant;

        return $this;
    }

    /**
     * Gets region_id
     *
     * @return string
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param string $region_id The region's ID
     *
     * @return self
     */
    public function setRegionId($region_id)
    {
        if (is_null($region_id)) {
            array_push($this->openAPINullablesSetToNull, 'region_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('region_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets region
     *
     * @return \MedusaWP\MedusaClient\Store\Model\Region|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param \MedusaWP\MedusaClient\Store\Model\Region|null $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

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
     * Gets deleted_at
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime $deleted_at The date with timezone at which the resource was deleted.
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        if (is_null($deleted_at)) {
            array_push($this->openAPINullablesSetToNull, 'deleted_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deleted_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deleted_at'] = $deleted_at;

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


