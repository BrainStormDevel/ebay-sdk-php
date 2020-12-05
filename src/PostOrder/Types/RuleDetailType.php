<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property \DTS\eBaySDK\PostOrder\Types\RuleActionDetailType $actionDetail
 * @property \DTS\eBaySDK\PostOrder\Types\RuleConditionDetailType[] $condition
 * @property \DTS\eBaySDK\PostOrder\Types\RuleSummaryType $ruleSummary
 */
class RuleDetailType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'actionDetail' => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\RuleActionDetailType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'actionDetail',
        ],
        'condition' => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\RuleConditionDetailType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'condition',
        ],
        'ruleSummary' => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\RuleSummaryType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ruleSummary',
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
