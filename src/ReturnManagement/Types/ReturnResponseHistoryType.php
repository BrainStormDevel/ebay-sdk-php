<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\ReturnManagement\Types;

/**
 *
 * @property string $note
 * @property \DTS\eBaySDK\ReturnManagement\Types\ReturnUserType $author
 * @property \DTS\eBaySDK\ReturnManagement\Types\ActivityDetailType $activityDetail
 * @property \DateTime $creationDate
 */
class ReturnResponseHistoryType extends \DTS\eBaySDK\Types\BaseType
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
            'type'        => 'DTS\eBaySDK\ReturnManagement\Types\ReturnUserType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'author',
        ],
        'activityDetail' => [
            'type'        => 'DTS\eBaySDK\ReturnManagement\Types\ActivityDetailType',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
