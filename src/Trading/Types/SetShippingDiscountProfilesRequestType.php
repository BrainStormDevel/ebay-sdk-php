<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $CurrencyID
 * @property \DTS\eBaySDK\Trading\Enums\CombinedPaymentPeriodCodeType $CombinedDuration
 * @property \DTS\eBaySDK\Trading\Enums\ModifyActionCodeType $ModifyActionCode
 * @property \DTS\eBaySDK\Trading\Types\FlatShippingDiscountType $FlatShippingDiscount
 * @property \DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property \DTS\eBaySDK\Trading\Types\CalculatedHandlingDiscountType $CalculatedHandlingDiscount
 * @property \DTS\eBaySDK\Trading\Types\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 */
class SetShippingDiscountProfilesRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CurrencyID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CurrencyID',
        ],
        'CombinedDuration' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CombinedDuration',
        ],
        'ModifyActionCode' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ModifyActionCode',
        ],
        'FlatShippingDiscount' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\FlatShippingDiscountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'FlatShippingDiscount',
        ],
        'CalculatedShippingDiscount' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CalculatedShippingDiscount',
        ],
        'CalculatedHandlingDiscount' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\CalculatedHandlingDiscountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CalculatedHandlingDiscount',
        ],
        'PromotionalShippingDiscountDetails' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\PromotionalShippingDiscountDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PromotionalShippingDiscountDetails',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'SetShippingDiscountProfilesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
