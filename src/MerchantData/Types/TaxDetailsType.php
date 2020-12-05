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
 * @property \DTS\eBaySDK\MerchantData\Enums\TaxTypeCodeType $Imposition
 * @property \DTS\eBaySDK\MerchantData\Enums\TaxDescriptionCodeType $TaxDescription
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TaxAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TaxOnSubtotalAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TaxOnShippingAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TaxOnHandlingAmount
 * @property string $TaxCode
 */
class TaxDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Imposition' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Imposition',
        ],
        'TaxDescription' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TaxDescription',
        ],
        'TaxAmount' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TaxAmount',
        ],
        'TaxOnSubtotalAmount' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TaxOnSubtotalAmount',
        ],
        'TaxOnShippingAmount' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TaxOnShippingAmount',
        ],
        'TaxOnHandlingAmount' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TaxOnHandlingAmount',
        ],
        'TaxCode' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TaxCode',
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
