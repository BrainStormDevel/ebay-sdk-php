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
 * @property integer $SaleTemplateID
 * @property \DTS\eBaySDK\Trading\Types\FeesType $Fees
 * @property string $CategoryID
 * @property string $Category2ID
 * @property boolean $VerifyOnly
 * @property string $SaleTemplateName
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerProductDetailsType $SellingManagerProductDetails
 */
class ReviseSellingManagerTemplateResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SaleTemplateID' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SaleTemplateID',
        ],
        'Fees' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\FeesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Fees',
        ],
        'CategoryID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CategoryID',
        ],
        'Category2ID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Category2ID',
        ],
        'VerifyOnly' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'VerifyOnly',
        ],
        'SaleTemplateName' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SaleTemplateName',
        ],
        'SellingManagerProductDetails' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellingManagerProductDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellingManagerProductDetails',
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
