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
 * @property string $itemID
 * @property string $itemURL
 * @property integer $quantity
 * @property \DTS\eBaySDK\HalfFinding\Types\UserType $seller
 * @property \DTS\eBaySDK\HalfFinding\Types\Amount $price
 * @property \DTS\eBaySDK\HalfFinding\Types\RentalAmount[] $rentalPrice
 * @property \DTS\eBaySDK\HalfFinding\Types\ShippingServiceOptionsType[] $shippingService
 * @property string $itemLocation
 * @property string $excludedShippingAreas
 * @property \DTS\eBaySDK\HalfFinding\Enums\HalfItemConditionCodeType $condition
 * @property string $comments
 * @property string $description
 * @property \DTS\eBaySDK\HalfFinding\Types\StorefrontType $storefront
 */
class ItemType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'itemID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'itemID',
        ],
        'itemURL' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'itemURL',
        ],
        'quantity' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'quantity',
        ],
        'seller' => [
            'type'        => 'DTS\eBaySDK\HalfFinding\Types\UserType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'seller',
        ],
        'price' => [
            'type'        => 'DTS\eBaySDK\HalfFinding\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'price',
        ],
        'rentalPrice' => [
            'type'        => 'DTS\eBaySDK\HalfFinding\Types\RentalAmount',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'rentalPrice',
        ],
        'shippingService' => [
            'type'        => 'DTS\eBaySDK\HalfFinding\Types\ShippingServiceOptionsType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'shippingService',
        ],
        'itemLocation' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'itemLocation',
        ],
        'excludedShippingAreas' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'excludedShippingAreas',
        ],
        'condition' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'condition',
        ],
        'comments' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'comments',
        ],
        'description' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'description',
        ],
        'storefront' => [
            'type'        => 'DTS\eBaySDK\HalfFinding\Types\StorefrontType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'storefront',
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
