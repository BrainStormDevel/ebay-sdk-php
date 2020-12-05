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
 * @property string $DomainName
 * @property string $DetailsURL
 * @property boolean $DisplayStockPhotos
 * @property \DTS\eBaySDK\Shopping\Types\ProductIDType[] $ProductID
 * @property integer $ItemCount
 * @property \DTS\eBaySDK\Shopping\Types\NameValueListArrayType $ItemSpecifics
 * @property integer $ReviewCount
 * @property string $StockPhotoURL
 * @property string $Title
 * @property \DTS\eBaySDK\Shopping\Enums\ProductStateCodeType $ProductState
 */
class CatalogProductType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DomainName' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DomainName',
        ],
        'DetailsURL' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DetailsURL',
        ],
        'DisplayStockPhotos' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DisplayStockPhotos',
        ],
        'ProductID' => [
            'type'        => 'DTS\eBaySDK\Shopping\Types\ProductIDType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'ProductID',
        ],
        'ItemCount' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ItemCount',
        ],
        'ItemSpecifics' => [
            'type'        => 'DTS\eBaySDK\Shopping\Types\NameValueListArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ItemSpecifics',
        ],
        'ReviewCount' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ReviewCount',
        ],
        'StockPhotoURL' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'StockPhotoURL',
        ],
        'Title' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Title',
        ],
        'ProductState' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ProductState',
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
