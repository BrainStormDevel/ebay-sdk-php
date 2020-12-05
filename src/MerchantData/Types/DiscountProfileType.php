<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property string $DiscountProfileID
 * @property string $DiscountProfileName
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $EachAdditionalAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $EachAdditionalAmountOff
 * @property double $EachAdditionalPercentOff
 * @property \DTS\eBaySDK\MerchantData\Types\MeasureType $WeightOff
 * @property string $MappedDiscountProfileID
 */
class DiscountProfileType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DiscountProfileID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DiscountProfileID',
        ],
        'DiscountProfileName' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DiscountProfileName',
        ],
        'EachAdditionalAmount' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'EachAdditionalAmount',
        ],
        'EachAdditionalAmountOff' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'EachAdditionalAmountOff',
        ],
        'EachAdditionalPercentOff' => [
            'type'        => 'double',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'EachAdditionalPercentOff',
        ],
        'WeightOff' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'WeightOff',
        ],
        'MappedDiscountProfileID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'MappedDiscountProfileID',
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
