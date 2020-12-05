<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Analytics\Types;

/**
 *
 * @property \DTS\eBaySDK\Analytics\Enums\StandardsLevelEnum $level
 * @property string $lookbackEndDate
 * @property string $lookbackStartDate
 * @property string $metricKey
 * @property string $name
 * @property mixed $thresholdLowerBound
 * @property string $thresholdMetaData
 * @property mixed $thresholdUpperBound
 * @property \DTS\eBaySDK\Analytics\Enums\DataTypeEnum $type
 * @property mixed $value
 */
class Metric extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'level' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'level',
        ],
        'lookbackEndDate' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'lookbackEndDate',
        ],
        'lookbackStartDate' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'lookbackStartDate',
        ],
        'metricKey' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'metricKey',
        ],
        'name' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'name',
        ],
        'thresholdLowerBound' => [
            'type'        => 'any',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'thresholdLowerBound',
        ],
        'thresholdMetaData' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'thresholdMetaData',
        ],
        'thresholdUpperBound' => [
            'type'        => 'any',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'thresholdUpperBound',
        ],
        'type' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'type',
        ],
        'value' => [
            'type'        => 'any',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'value',
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
