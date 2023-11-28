<?php
/**
 * DiscountCondition
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
 * DiscountCondition Class Doc Comment
 *
 * @category Class
 * @description Holds rule conditions for when a discount is applicable
 * @package  MedusaWP\MedusaClient\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DiscountCondition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DiscountCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'type' => 'string',
        'operator' => 'string',
        'discount_rule_id' => 'string',
        'discount_rule' => '\MedusaWP\MedusaClient\Store\Model\DiscountRule',
        'products' => '\MedusaWP\MedusaClient\Store\Model\Product[]',
        'product_types' => '\MedusaWP\MedusaClient\Store\Model\ProductType[]',
        'product_tags' => '\MedusaWP\MedusaClient\Store\Model\ProductTag[]',
        'product_collections' => '\MedusaWP\MedusaClient\Store\Model\ProductCollection[]',
        'customer_groups' => '\MedusaWP\MedusaClient\Store\Model\CustomerGroup[]',
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
        'type' => null,
        'operator' => null,
        'discount_rule_id' => null,
        'discount_rule' => null,
        'products' => null,
        'product_types' => null,
        'product_tags' => null,
        'product_collections' => null,
        'customer_groups' => null,
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
		'type' => false,
		'operator' => false,
		'discount_rule_id' => false,
		'discount_rule' => false,
		'products' => false,
		'product_types' => false,
		'product_tags' => false,
		'product_collections' => false,
		'customer_groups' => false,
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
        'type' => 'type',
        'operator' => 'operator',
        'discount_rule_id' => 'discount_rule_id',
        'discount_rule' => 'discount_rule',
        'products' => 'products',
        'product_types' => 'product_types',
        'product_tags' => 'product_tags',
        'product_collections' => 'product_collections',
        'customer_groups' => 'customer_groups',
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
        'type' => 'setType',
        'operator' => 'setOperator',
        'discount_rule_id' => 'setDiscountRuleId',
        'discount_rule' => 'setDiscountRule',
        'products' => 'setProducts',
        'product_types' => 'setProductTypes',
        'product_tags' => 'setProductTags',
        'product_collections' => 'setProductCollections',
        'customer_groups' => 'setCustomerGroups',
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
        'type' => 'getType',
        'operator' => 'getOperator',
        'discount_rule_id' => 'getDiscountRuleId',
        'discount_rule' => 'getDiscountRule',
        'products' => 'getProducts',
        'product_types' => 'getProductTypes',
        'product_tags' => 'getProductTags',
        'product_collections' => 'getProductCollections',
        'customer_groups' => 'getCustomerGroups',
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

    public const TYPE_PRODUCTS = 'products';
    public const TYPE_PRODUCT_TYPES = 'product_types';
    public const TYPE_PRODUCT_COLLECTIONS = 'product_collections';
    public const TYPE_PRODUCT_TAGS = 'product_tags';
    public const TYPE_CUSTOMER_GROUPS = 'customer_groups';
    public const OPERATOR_IN = 'in';
    public const OPERATOR_NOT_IN = 'not_in';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PRODUCTS,
            self::TYPE_PRODUCT_TYPES,
            self::TYPE_PRODUCT_COLLECTIONS,
            self::TYPE_PRODUCT_TAGS,
            self::TYPE_CUSTOMER_GROUPS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_IN,
            self::OPERATOR_NOT_IN,
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('operator', $data ?? [], null);
        $this->setIfExists('discount_rule_id', $data ?? [], null);
        $this->setIfExists('discount_rule', $data ?? [], null);
        $this->setIfExists('products', $data ?? [], null);
        $this->setIfExists('product_types', $data ?? [], null);
        $this->setIfExists('product_tags', $data ?? [], null);
        $this->setIfExists('product_collections', $data ?? [], null);
        $this->setIfExists('customer_groups', $data ?? [], null);
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        $allowedValues = $this->getOperatorAllowableValues();
        if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'operator', must be one of '%s'",
                $this->container['operator'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['discount_rule_id'] === null) {
            $invalidProperties[] = "'discount_rule_id' can't be null";
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
     * @param string $id The discount condition's ID
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of the condition. The type affects the available resources associated with the condition. For example, if the type is `products`, that means the `products` relation will hold the products associated with this condition and other relations will be empty.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator The operator of the condition. `in` indicates that discountable resources are within the specified resources. `not_in` indicates that discountable resources are everything but the specified resources.
     *
     * @return self
     */
    public function setOperator($operator)
    {
        if (is_null($operator)) {
            throw new \InvalidArgumentException('non-nullable operator cannot be null');
        }
        $allowedValues = $this->getOperatorAllowableValues();
        if (!in_array($operator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'operator', must be one of '%s'",
                    $operator,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets discount_rule_id
     *
     * @return string
     */
    public function getDiscountRuleId()
    {
        return $this->container['discount_rule_id'];
    }

    /**
     * Sets discount_rule_id
     *
     * @param string $discount_rule_id The ID of the discount rule associated with the condition
     *
     * @return self
     */
    public function setDiscountRuleId($discount_rule_id)
    {
        if (is_null($discount_rule_id)) {
            throw new \InvalidArgumentException('non-nullable discount_rule_id cannot be null');
        }
        $this->container['discount_rule_id'] = $discount_rule_id;

        return $this;
    }

    /**
     * Gets discount_rule
     *
     * @return \MedusaWP\MedusaClient\Store\Model\DiscountRule|null
     */
    public function getDiscountRule()
    {
        return $this->container['discount_rule'];
    }

    /**
     * Sets discount_rule
     *
     * @param \MedusaWP\MedusaClient\Store\Model\DiscountRule|null $discount_rule discount_rule
     *
     * @return self
     */
    public function setDiscountRule($discount_rule)
    {
        if (is_null($discount_rule)) {
            throw new \InvalidArgumentException('non-nullable discount_rule cannot be null');
        }
        $this->container['discount_rule'] = $discount_rule;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \MedusaWP\MedusaClient\Store\Model\Product[]|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \MedusaWP\MedusaClient\Store\Model\Product[]|null $products products associated with this condition if `type` is `products`.
     *
     * @return self
     */
    public function setProducts($products)
    {
        if (is_null($products)) {
            throw new \InvalidArgumentException('non-nullable products cannot be null');
        }
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets product_types
     *
     * @return \MedusaWP\MedusaClient\Store\Model\ProductType[]|null
     */
    public function getProductTypes()
    {
        return $this->container['product_types'];
    }

    /**
     * Sets product_types
     *
     * @param \MedusaWP\MedusaClient\Store\Model\ProductType[]|null $product_types Product types associated with this condition if `type` is `product_types`.
     *
     * @return self
     */
    public function setProductTypes($product_types)
    {
        if (is_null($product_types)) {
            throw new \InvalidArgumentException('non-nullable product_types cannot be null');
        }
        $this->container['product_types'] = $product_types;

        return $this;
    }

    /**
     * Gets product_tags
     *
     * @return \MedusaWP\MedusaClient\Store\Model\ProductTag[]|null
     */
    public function getProductTags()
    {
        return $this->container['product_tags'];
    }

    /**
     * Sets product_tags
     *
     * @param \MedusaWP\MedusaClient\Store\Model\ProductTag[]|null $product_tags Product tags associated with this condition if `type` is `product_tags`.
     *
     * @return self
     */
    public function setProductTags($product_tags)
    {
        if (is_null($product_tags)) {
            throw new \InvalidArgumentException('non-nullable product_tags cannot be null');
        }
        $this->container['product_tags'] = $product_tags;

        return $this;
    }

    /**
     * Gets product_collections
     *
     * @return \MedusaWP\MedusaClient\Store\Model\ProductCollection[]|null
     */
    public function getProductCollections()
    {
        return $this->container['product_collections'];
    }

    /**
     * Sets product_collections
     *
     * @param \MedusaWP\MedusaClient\Store\Model\ProductCollection[]|null $product_collections Product collections associated with this condition if `type` is `product_collections`.
     *
     * @return self
     */
    public function setProductCollections($product_collections)
    {
        if (is_null($product_collections)) {
            throw new \InvalidArgumentException('non-nullable product_collections cannot be null');
        }
        $this->container['product_collections'] = $product_collections;

        return $this;
    }

    /**
     * Gets customer_groups
     *
     * @return \MedusaWP\MedusaClient\Store\Model\CustomerGroup[]|null
     */
    public function getCustomerGroups()
    {
        return $this->container['customer_groups'];
    }

    /**
     * Sets customer_groups
     *
     * @param \MedusaWP\MedusaClient\Store\Model\CustomerGroup[]|null $customer_groups Customer groups associated with this condition if `type` is `customer_groups`.
     *
     * @return self
     */
    public function setCustomerGroups($customer_groups)
    {
        if (is_null($customer_groups)) {
            throw new \InvalidArgumentException('non-nullable customer_groups cannot be null');
        }
        $this->container['customer_groups'] = $customer_groups;

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

