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
 * @property string $BestOfferID
 * @property \DateTime $ExpirationTime
 * @property \DTS\eBaySDK\Trading\Types\UserType $Buyer
 * @property \DTS\eBaySDK\Trading\Types\AmountType $Price
 * @property \DTS\eBaySDK\Trading\Enums\BestOfferStatusCodeType $Status
 * @property integer $Quantity
 * @property string $BuyerMessage
 * @property string $SellerMessage
 * @property \DTS\eBaySDK\Trading\Enums\BestOfferTypeCodeType $BestOfferCodeType
 * @property string $CallStatus
 */
class BestOfferType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BestOfferID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BestOfferID',
        ],
        'ExpirationTime' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ExpirationTime',
        ],
        'Buyer' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\UserType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Buyer',
        ],
        'Price' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Price',
        ],
        'Status' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Status',
        ],
        'Quantity' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Quantity',
        ],
        'BuyerMessage' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BuyerMessage',
        ],
        'SellerMessage' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerMessage',
        ],
        'BestOfferCodeType' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BestOfferCodeType',
        ],
        'CallStatus' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CallStatus',
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
