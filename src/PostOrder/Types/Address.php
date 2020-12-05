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
 * @property string $addressLine1
 * @property string $addressLine2
 * @property \DTS\eBaySDK\PostOrder\Enums\AddressTypeEnum $addressType
 * @property string $city
 * @property \DTS\eBaySDK\PostOrder\Enums\CountryCodeEnum $country
 * @property string $county
 * @property boolean $isTransliterated
 * @property string $nationalRegion
 * @property string $postalCode
 * @property \DTS\eBaySDK\PostOrder\Enums\LanguageScriptEnum $script
 * @property string $stateOrProvince
 * @property \DTS\eBaySDK\PostOrder\Enums\LanguageScriptEnum $transliteratedFromScript
 * @property \DTS\eBaySDK\PostOrder\Enums\WorldRegionEnum $worldRegion
 */
class Address extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'addressLine1' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'addressLine1',
        ],
        'addressLine2' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'addressLine2',
        ],
        'addressType' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'addressType',
        ],
        'city' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'city',
        ],
        'country' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'country',
        ],
        'county' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'county',
        ],
        'isTransliterated' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'isTransliterated',
        ],
        'nationalRegion' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'nationalRegion',
        ],
        'postalCode' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'postalCode',
        ],
        'script' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'script',
        ],
        'stateOrProvince' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'stateOrProvince',
        ],
        'transliteratedFromScript' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'transliteratedFromScript',
        ],
        'worldRegion' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'worldRegion',
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
