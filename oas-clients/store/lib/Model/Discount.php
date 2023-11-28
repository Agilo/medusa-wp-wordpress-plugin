<?php
/**
 * Discount
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
 * Discount Class Doc Comment
 *
 * @category Class
 * @description A discount can be applied to a cart for promotional purposes.
 * @package  MedusaWP\MedusaClient\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Discount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Discount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'code' => 'string',
        'is_dynamic' => 'bool',
        'rule_id' => 'string',
        'rule' => '\MedusaWP\MedusaClient\Store\Model\DiscountRule',
        'is_disabled' => 'bool',
        'parent_discount_id' => 'string',
        'parent_discount' => '\MedusaWP\MedusaClient\Store\Model\Discount',
        'starts_at' => '\DateTime',
        'ends_at' => '\DateTime',
        'valid_duration' => 'string',
        'regions' => '\MedusaWP\MedusaClient\Store\Model\Region[]',
        'usage_limit' => 'int',
        'usage_count' => 'int',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'deleted_at' => '\DateTime',
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
        'code' => null,
        'is_dynamic' => null,
        'rule_id' => null,
        'rule' => null,
        'is_disabled' => null,
        'parent_discount_id' => null,
        'parent_discount' => null,
        'starts_at' => 'date-time',
        'ends_at' => 'date-time',
        'valid_duration' => null,
        'regions' => null,
        'usage_limit' => null,
        'usage_count' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'deleted_at' => 'date-time',
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'code' => false,
		'is_dynamic' => false,
		'rule_id' => true,
		'rule' => false,
		'is_disabled' => false,
		'parent_discount_id' => true,
		'parent_discount' => false,
		'starts_at' => false,
		'ends_at' => true,
		'valid_duration' => true,
		'regions' => false,
		'usage_limit' => true,
		'usage_count' => false,
		'created_at' => false,
		'updated_at' => false,
		'deleted_at' => true,
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
        'code' => 'code',
        'is_dynamic' => 'is_dynamic',
        'rule_id' => 'rule_id',
        'rule' => 'rule',
        'is_disabled' => 'is_disabled',
        'parent_discount_id' => 'parent_discount_id',
        'parent_discount' => 'parent_discount',
        'starts_at' => 'starts_at',
        'ends_at' => 'ends_at',
        'valid_duration' => 'valid_duration',
        'regions' => 'regions',
        'usage_limit' => 'usage_limit',
        'usage_count' => 'usage_count',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'code' => 'setCode',
        'is_dynamic' => 'setIsDynamic',
        'rule_id' => 'setRuleId',
        'rule' => 'setRule',
        'is_disabled' => 'setIsDisabled',
        'parent_discount_id' => 'setParentDiscountId',
        'parent_discount' => 'setParentDiscount',
        'starts_at' => 'setStartsAt',
        'ends_at' => 'setEndsAt',
        'valid_duration' => 'setValidDuration',
        'regions' => 'setRegions',
        'usage_limit' => 'setUsageLimit',
        'usage_count' => 'setUsageCount',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'deleted_at' => 'setDeletedAt',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'code' => 'getCode',
        'is_dynamic' => 'getIsDynamic',
        'rule_id' => 'getRuleId',
        'rule' => 'getRule',
        'is_disabled' => 'getIsDisabled',
        'parent_discount_id' => 'getParentDiscountId',
        'parent_discount' => 'getParentDiscount',
        'starts_at' => 'getStartsAt',
        'ends_at' => 'getEndsAt',
        'valid_duration' => 'getValidDuration',
        'regions' => 'getRegions',
        'usage_limit' => 'getUsageLimit',
        'usage_count' => 'getUsageCount',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'deleted_at' => 'getDeletedAt',
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('is_dynamic', $data ?? [], null);
        $this->setIfExists('rule_id', $data ?? [], null);
        $this->setIfExists('rule', $data ?? [], null);
        $this->setIfExists('is_disabled', $data ?? [], null);
        $this->setIfExists('parent_discount_id', $data ?? [], null);
        $this->setIfExists('parent_discount', $data ?? [], null);
        $this->setIfExists('starts_at', $data ?? [], null);
        $this->setIfExists('ends_at', $data ?? [], null);
        $this->setIfExists('valid_duration', $data ?? [], null);
        $this->setIfExists('regions', $data ?? [], null);
        $this->setIfExists('usage_limit', $data ?? [], null);
        $this->setIfExists('usage_count', $data ?? [], 0);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
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
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['is_dynamic'] === null) {
            $invalidProperties[] = "'is_dynamic' can't be null";
        }
        if ($this->container['rule_id'] === null) {
            $invalidProperties[] = "'rule_id' can't be null";
        }
        if ($this->container['is_disabled'] === null) {
            $invalidProperties[] = "'is_disabled' can't be null";
        }
        if ($this->container['parent_discount_id'] === null) {
            $invalidProperties[] = "'parent_discount_id' can't be null";
        }
        if ($this->container['starts_at'] === null) {
            $invalidProperties[] = "'starts_at' can't be null";
        }
        if ($this->container['ends_at'] === null) {
            $invalidProperties[] = "'ends_at' can't be null";
        }
        if ($this->container['valid_duration'] === null) {
            $invalidProperties[] = "'valid_duration' can't be null";
        }
        if ($this->container['usage_limit'] === null) {
            $invalidProperties[] = "'usage_limit' can't be null";
        }
        if ($this->container['usage_count'] === null) {
            $invalidProperties[] = "'usage_count' can't be null";
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
     * @param string $id The discount's ID
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code A unique code for the discount - this will be used by the customer to apply the discount
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets is_dynamic
     *
     * @return bool
     */
    public function getIsDynamic()
    {
        return $this->container['is_dynamic'];
    }

    /**
     * Sets is_dynamic
     *
     * @param bool $is_dynamic A flag to indicate if multiple instances of the discount can be generated. I.e. for newsletter discounts
     *
     * @return self
     */
    public function setIsDynamic($is_dynamic)
    {
        if (is_null($is_dynamic)) {
            throw new \InvalidArgumentException('non-nullable is_dynamic cannot be null');
        }
        $this->container['is_dynamic'] = $is_dynamic;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return string
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param string $rule_id The ID of the discount rule that defines how the discount will be applied to a cart.
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {
        if (is_null($rule_id)) {
            array_push($this->openAPINullablesSetToNull, 'rule_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rule_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets rule
     *
     * @return \MedusaWP\MedusaClient\Store\Model\DiscountRule|null
     */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
     * Sets rule
     *
     * @param \MedusaWP\MedusaClient\Store\Model\DiscountRule|null $rule rule
     *
     * @return self
     */
    public function setRule($rule)
    {
        if (is_null($rule)) {
            throw new \InvalidArgumentException('non-nullable rule cannot be null');
        }
        $this->container['rule'] = $rule;

        return $this;
    }

    /**
     * Gets is_disabled
     *
     * @return bool
     */
    public function getIsDisabled()
    {
        return $this->container['is_disabled'];
    }

    /**
     * Sets is_disabled
     *
     * @param bool $is_disabled Whether the Discount has been disabled. Disabled discounts cannot be applied to carts
     *
     * @return self
     */
    public function setIsDisabled($is_disabled)
    {
        if (is_null($is_disabled)) {
            throw new \InvalidArgumentException('non-nullable is_disabled cannot be null');
        }
        $this->container['is_disabled'] = $is_disabled;

        return $this;
    }

    /**
     * Gets parent_discount_id
     *
     * @return string
     */
    public function getParentDiscountId()
    {
        return $this->container['parent_discount_id'];
    }

    /**
     * Sets parent_discount_id
     *
     * @param string $parent_discount_id The Discount that the discount was created from. This will always be a dynamic discount
     *
     * @return self
     */
    public function setParentDiscountId($parent_discount_id)
    {
        if (is_null($parent_discount_id)) {
            array_push($this->openAPINullablesSetToNull, 'parent_discount_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent_discount_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parent_discount_id'] = $parent_discount_id;

        return $this;
    }

    /**
     * Gets parent_discount
     *
     * @return \MedusaWP\MedusaClient\Store\Model\Discount|null
     */
    public function getParentDiscount()
    {
        return $this->container['parent_discount'];
    }

    /**
     * Sets parent_discount
     *
     * @param \MedusaWP\MedusaClient\Store\Model\Discount|null $parent_discount parent_discount
     *
     * @return self
     */
    public function setParentDiscount($parent_discount)
    {
        if (is_null($parent_discount)) {
            throw new \InvalidArgumentException('non-nullable parent_discount cannot be null');
        }
        $this->container['parent_discount'] = $parent_discount;

        return $this;
    }

    /**
     * Gets starts_at
     *
     * @return \DateTime
     */
    public function getStartsAt()
    {
        return $this->container['starts_at'];
    }

    /**
     * Sets starts_at
     *
     * @param \DateTime $starts_at The time at which the discount can be used.
     *
     * @return self
     */
    public function setStartsAt($starts_at)
    {
        if (is_null($starts_at)) {
            throw new \InvalidArgumentException('non-nullable starts_at cannot be null');
        }
        $this->container['starts_at'] = $starts_at;

        return $this;
    }

    /**
     * Gets ends_at
     *
     * @return \DateTime
     */
    public function getEndsAt()
    {
        return $this->container['ends_at'];
    }

    /**
     * Sets ends_at
     *
     * @param \DateTime $ends_at The time at which the discount can no longer be used.
     *
     * @return self
     */
    public function setEndsAt($ends_at)
    {
        if (is_null($ends_at)) {
            array_push($this->openAPINullablesSetToNull, 'ends_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ends_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ends_at'] = $ends_at;

        return $this;
    }

    /**
     * Gets valid_duration
     *
     * @return string
     */
    public function getValidDuration()
    {
        return $this->container['valid_duration'];
    }

    /**
     * Sets valid_duration
     *
     * @param string $valid_duration Duration the discount runs between
     *
     * @return self
     */
    public function setValidDuration($valid_duration)
    {
        if (is_null($valid_duration)) {
            array_push($this->openAPINullablesSetToNull, 'valid_duration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('valid_duration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['valid_duration'] = $valid_duration;

        return $this;
    }

    /**
     * Gets regions
     *
     * @return \MedusaWP\MedusaClient\Store\Model\Region[]|null
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param \MedusaWP\MedusaClient\Store\Model\Region[]|null $regions The details of the regions in which the Discount can be used.
     *
     * @return self
     */
    public function setRegions($regions)
    {
        if (is_null($regions)) {
            throw new \InvalidArgumentException('non-nullable regions cannot be null');
        }
        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets usage_limit
     *
     * @return int
     */
    public function getUsageLimit()
    {
        return $this->container['usage_limit'];
    }

    /**
     * Sets usage_limit
     *
     * @param int $usage_limit The maximum number of times that a discount can be used.
     *
     * @return self
     */
    public function setUsageLimit($usage_limit)
    {
        if (is_null($usage_limit)) {
            array_push($this->openAPINullablesSetToNull, 'usage_limit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('usage_limit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['usage_limit'] = $usage_limit;

        return $this;
    }

    /**
     * Gets usage_count
     *
     * @return int
     */
    public function getUsageCount()
    {
        return $this->container['usage_count'];
    }

    /**
     * Sets usage_count
     *
     * @param int $usage_count The number of times a discount has been used.
     *
     * @return self
     */
    public function setUsageCount($usage_count)
    {
        if (is_null($usage_count)) {
            throw new \InvalidArgumentException('non-nullable usage_count cannot be null');
        }
        $this->container['usage_count'] = $usage_count;

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

