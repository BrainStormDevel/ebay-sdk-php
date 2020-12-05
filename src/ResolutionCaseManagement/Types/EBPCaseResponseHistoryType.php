<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\ResolutionCaseManagement\Types;

/**
 *
 * @property string $note
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType $author
 * @property string $activity
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ActivityDetailType $activityDetail
 * @property \DateTime $creationDate
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ResponseHistoryAttributesType $attributes
 */
class EBPCaseResponseHistoryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'note' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'note',
        ],
        'author' => [
            'type'        => 'DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'author',
        ],
        'activity' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'activity',
        ],
        'activityDetail' => [
            'type'        => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ActivityDetailType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'activityDetail',
        ],
        'creationDate' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'creationDate',
        ],
        'attributes' => [
            'type'        => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ResponseHistoryAttributesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'attributes',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
