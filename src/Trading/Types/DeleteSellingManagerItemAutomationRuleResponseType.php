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
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerAutoListType $AutomatedListingRule
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerAutoRelistType $AutomatedRelistingRule
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
 * @property \DTS\eBaySDK\Trading\Types\FeesType $Fees
 */
class DeleteSellingManagerItemAutomationRuleResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AutomatedListingRule' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellingManagerAutoListType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'AutomatedListingRule',
        ],
        'AutomatedRelistingRule' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellingManagerAutoRelistType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'AutomatedRelistingRule',
        ],
        'AutomatedSecondChanceOfferRule' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellingManagerAutoSecondChanceOfferType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'AutomatedSecondChanceOfferRule',
        ],
        'Fees' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\FeesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Fees',
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
