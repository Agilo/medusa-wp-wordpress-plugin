<?php
/**
 * ShippingOption
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
 * ShippingOption Class Doc Comment
 *
 * @category Class
 * @description A Shipping Option represents a way in which an Order or Return can be shipped. Shipping Options have an associated Fulfillment Provider that will be used when the fulfillment of an Order is initiated. Shipping Options themselves cannot be added to Carts, but serve as a template for Shipping Methods. This distinction makes it possible to customize individual Shipping Methods with additional information.
 * @package  MedusaWP\MedusaClient\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShippingOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'region_id' => 'string',
        'region' => '\MedusaWP\MedusaClient\Store\Model\Region',
        'profile_id' => 'string',
        'profile' => '\MedusaWP\MedusaClient\Store\Model\ShippingProfile',
        'provider_id' => 'string',
        'provider' => '\MedusaWP\MedusaClient\Store\Model\FulfillmentProvider',
        'price_type' => 'string',
        'amount' => 'int',
        'is_return' => 'bool',
        'admin_only' => 'bool',
        'requirements' => '\MedusaWP\MedusaClient\Store\Model\ShippingOptionRequirement[]',
        'data' => 'object',
        'includes_tax' => 'bool',
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
        'name' => null,
        'region_id' => null,
        'region' => null,
        'profile_id' => null,
        'profile' => null,
        'provider_id' => null,
        'provider' => null,
        'price_type' => null,
        'amount' => null,
        'is_return' => null,
        'admin_only' => null,
        'requirements' => null,
        'data' => null,
        'includes_tax' => null,
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
		'name' => false,
		'region_id' => false,
		'region' => false,
		'profile_id' => false,
		'profile' => false,
		'provider_id' => false,
		'provider' => false,
		'price_type' => false,
		'amount' => true,
		'is_return' => false,
		'admin_only' => false,
		'requirements' => false,
		'data' => false,
		'includes_tax' => false,
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
        'name' => 'name',
        'region_id' => 'region_id',
        'region' => 'region',
        'profile_id' => 'profile_id',
        'profile' => 'profile',
        'provider_id' => 'provider_id',
        'provider' => 'provider',
        'price_type' => 'price_type',
        'amount' => 'amount',
        'is_return' => 'is_return',
        'admin_only' => 'admin_only',
        'requirements' => 'requirements',
        'data' => 'data',
        'includes_tax' => 'includes_tax',
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
        'name' => 'setName',
        'region_id' => 'setRegionId',
        'region' => 'setRegion',
        'profile_id' => 'setProfileId',
        'profile' => 'setProfile',
        'provider_id' => 'setProviderId',
        'provider' => 'setProvider',
        'price_type' => 'setPriceType',
        'amount' => 'setAmount',
        'is_return' => 'setIsReturn',
        'admin_only' => 'setAdminOnly',
        'requirements' => 'setRequirements',
        'data' => 'setData',
        'includes_tax' => 'setIncludesTax',
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
        'name' => 'getName',
        'region_id' => 'getRegionId',
        'region' => 'getRegion',
        'profile_id' => 'getProfileId',
        'profile' => 'getProfile',
        'provider_id' => 'getProviderId',
        'provider' => 'getProvider',
        'price_type' => 'getPriceType',
        'amount' => 'getAmount',
        'is_return' => 'getIsReturn',
        'admin_only' => 'getAdminOnly',
        'requirements' => 'getRequirements',
        'data' => 'getData',
        'includes_tax' => 'getIncludesTax',
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

    public const PRICE_TYPE_FLAT_RATE = 'flat_rate';
    public const PRICE_TYPE_CALCULATED = 'calculated';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriceTypeAllowableValues()
    {
        return [
            self::PRICE_TYPE_FLAT_RATE,
            self::PRICE_TYPE_CALCULATED,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('region_id', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('profile_id', $data ?? [], null);
        $this->setIfExists('profile', $data ?? [], null);
        $this->setIfExists('provider_id', $data ?? [], null);
        $this->setIfExists('provider', $data ?? [], null);
        $this->setIfExists('price_type', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('is_return', $data ?? [], false);
        $this->setIfExists('admin_only', $data ?? [], false);
        $this->setIfExists('requirements', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('includes_tax', $data ?? [], false);
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['region_id'] === null) {
            $invalidProperties[] = "'region_id' can't be null";
        }
        if ($this->container['profile_id'] === null) {
            $invalidProperties[] = "'profile_id' can't be null";
        }
        if ($this->container['provider_id'] === null) {
            $invalidProperties[] = "'provider_id' can't be null";
        }
        if ($this->container['price_type'] === null) {
            $invalidProperties[] = "'price_type' can't be null";
        }
        $allowedValues = $this->getPriceTypeAllowableValues();
        if (!is_null($this->container['price_type']) && !in_array($this->container['price_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'price_type', must be one of '%s'",
                $this->container['price_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['is_return'] === null) {
            $invalidProperties[] = "'is_return' can't be null";
        }
        if ($this->container['admin_only'] === null) {
            $invalidProperties[] = "'admin_only' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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
     * @param string $id The shipping option's ID
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name given to the Shipping Option - this may be displayed to the Customer.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

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
     * @param string $region_id The ID of the region this shipping option can be used in.
     *
     * @return self
     */
    public function setRegionId($region_id)
    {
        if (is_null($region_id)) {
            throw new \InvalidArgumentException('non-nullable region_id cannot be null');
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
     * Gets profile_id
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string $profile_id The ID of the Shipping Profile that the shipping option belongs to.
     *
     * @return self
     */
    public function setProfileId($profile_id)
    {
        if (is_null($profile_id)) {
            throw new \InvalidArgumentException('non-nullable profile_id cannot be null');
        }
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return \MedusaWP\MedusaClient\Store\Model\ShippingProfile|null
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param \MedusaWP\MedusaClient\Store\Model\ShippingProfile|null $profile profile
     *
     * @return self
     */
    public function setProfile($profile)
    {
        if (is_null($profile)) {
            throw new \InvalidArgumentException('non-nullable profile cannot be null');
        }
        $this->container['profile'] = $profile;

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
     * @param string $provider_id The ID of the fulfillment provider that will be used to later to process the shipping method created from this shipping option and its fulfillments.
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
     * Gets provider
     *
     * @return \MedusaWP\MedusaClient\Store\Model\FulfillmentProvider|null
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param \MedusaWP\MedusaClient\Store\Model\FulfillmentProvider|null $provider provider
     *
     * @return self
     */
    public function setProvider($provider)
    {
        if (is_null($provider)) {
            throw new \InvalidArgumentException('non-nullable provider cannot be null');
        }
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets price_type
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->container['price_type'];
    }

    /**
     * Sets price_type
     *
     * @param string $price_type The type of pricing calculation that is used when creatin Shipping Methods from the Shipping Option. Can be `flat_rate` for fixed prices or `calculated` if the Fulfillment Provider can provide price calulations.
     *
     * @return self
     */
    public function setPriceType($price_type)
    {
        if (is_null($price_type)) {
            throw new \InvalidArgumentException('non-nullable price_type cannot be null');
        }
        $allowedValues = $this->getPriceTypeAllowableValues();
        if (!in_array($price_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'price_type', must be one of '%s'",
                    $price_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['price_type'] = $price_type;

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
     * @param int $amount The amount to charge for shipping when the Shipping Option price type is `flat_rate`.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            array_push($this->openAPINullablesSetToNull, 'amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets is_return
     *
     * @return bool
     */
    public function getIsReturn()
    {
        return $this->container['is_return'];
    }

    /**
     * Sets is_return
     *
     * @param bool $is_return Flag to indicate if the Shipping Option can be used for Return shipments.
     *
     * @return self
     */
    public function setIsReturn($is_return)
    {
        if (is_null($is_return)) {
            throw new \InvalidArgumentException('non-nullable is_return cannot be null');
        }
        $this->container['is_return'] = $is_return;

        return $this;
    }

    /**
     * Gets admin_only
     *
     * @return bool
     */
    public function getAdminOnly()
    {
        return $this->container['admin_only'];
    }

    /**
     * Sets admin_only
     *
     * @param bool $admin_only Flag to indicate if the Shipping Option usage is restricted to admin users.
     *
     * @return self
     */
    public function setAdminOnly($admin_only)
    {
        if (is_null($admin_only)) {
            throw new \InvalidArgumentException('non-nullable admin_only cannot be null');
        }
        $this->container['admin_only'] = $admin_only;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return \MedusaWP\MedusaClient\Store\Model\ShippingOptionRequirement[]|null
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param \MedusaWP\MedusaClient\Store\Model\ShippingOptionRequirement[]|null $requirements The details of the requirements that must be satisfied for the Shipping Option to be available for usage in a Cart.
     *
     * @return self
     */
    public function setRequirements($requirements)
    {
        if (is_null($requirements)) {
            throw new \InvalidArgumentException('non-nullable requirements cannot be null');
        }
        $this->container['requirements'] = $requirements;

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
     * @param object $data The data needed for the Fulfillment Provider to identify the Shipping Option.
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
     * Gets includes_tax
     *
     * @return bool|null
     */
    public function getIncludesTax()
    {
        return $this->container['includes_tax'];
    }

    /**
     * Sets includes_tax
     *
     * @param bool|null $includes_tax Whether the shipping option price include tax
     *
     * @return self
     */
    public function setIncludesTax($includes_tax)
    {
        if (is_null($includes_tax)) {
            throw new \InvalidArgumentException('non-nullable includes_tax cannot be null');
        }
        $this->container['includes_tax'] = $includes_tax;

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


