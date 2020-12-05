<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Catalog\Types;

/**
 *
 * @property \DTS\eBaySDK\Catalog\Types\ProductMetadataAspect[] $aspects
 * @property \DTS\eBaySDK\Catalog\Types\ProductIdentifierForProductMetadata $brand
 * @property \DTS\eBaySDK\Catalog\Types\ProductIdentifierForProductMetadata $mpn
 */
class ProductMetadata extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspects' => [
            'type'        => 'DTS\eBaySDK\Catalog\Types\ProductMetadataAspect',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'aspects',
        ],
        'brand' => [
            'type'        => 'DTS\eBaySDK\Catalog\Types\ProductIdentifierForProductMetadata',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'brand',
        ],
        'mpn' => [
            'type'        => 'DTS\eBaySDK\Catalog\Types\ProductIdentifierForProductMetadata',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'mpn',
        ],
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
