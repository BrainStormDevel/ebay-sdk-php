<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\HalfFinding\Types;

/**
 *
 * @property \DTS\eBaySDK\HalfFinding\Enums\Type $type
 * @property \DTS\eBaySDK\HalfFinding\Types\Amount $cost
 * @property boolean $expeditedService
 */
class ShippingServiceOptionsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'type' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'type',
        ],
        'cost' => [
            'type'        => 'DTS\eBaySDK\HalfFinding\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'cost',
        ],
        'expeditedService' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'expeditedService',
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/half/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
