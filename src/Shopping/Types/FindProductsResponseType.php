<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property integer $ApproximatePages
 * @property boolean $MoreResults
 * @property \DTS\eBaySDK\Shopping\Types\DomainHistogramType $DomainHistogram
 * @property integer $PageNumber
 * @property \DTS\eBaySDK\Shopping\Types\CatalogProductType[] $Product
 * @property integer $TotalProducts
 * @property boolean $DuplicateItems
 */
class FindProductsResponseType extends \DTS\eBaySDK\Shopping\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ApproximatePages' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ApproximatePages',
        ],
        'MoreResults' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'MoreResults',
        ],
        'DomainHistogram' => [
            'type'        => 'DTS\eBaySDK\Shopping\Types\DomainHistogramType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DomainHistogram',
        ],
        'PageNumber' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PageNumber',
        ],
        'Product' => [
            'type'        => 'DTS\eBaySDK\Shopping\Types\CatalogProductType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'Product',
        ],
        'TotalProducts' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TotalProducts',
        ],
        'DuplicateItems' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DuplicateItems',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
