<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Account\Types;

/**
 *
 * @property \DTS\eBaySDK\Account\Types\ExternalPaymentMethod $acceptedPaymentMethods
 * @property string $accountCreationDate
 * @property \DTS\eBaySDK\Account\Types\ExternalPaymentMethod $billingPaymentMethods
 * @property \DTS\eBaySDK\Account\Types\InventorySizing $inventorySizing
 * @property string $merchantCategoryCode
 * @property \DTS\eBaySDK\Account\Enums\CurrencyCodeEnum $primaryCurrency
 * @property \DTS\eBaySDK\Account\Types\ReturnSnapshot $returnSnapshots
 * @property string $sicCode
 * @property \DTS\eBaySDK\Account\Types\TransactionVolume $transactionVolume
 */
class MerchantExternalProfile extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'acceptedPaymentMethods' => [
            'type'        => 'DTS\eBaySDK\Account\Types\ExternalPaymentMethod',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'acceptedPaymentMethods',
        ],
        'accountCreationDate' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'accountCreationDate',
        ],
        'billingPaymentMethods' => [
            'type'        => 'DTS\eBaySDK\Account\Types\ExternalPaymentMethod',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'billingPaymentMethods',
        ],
        'inventorySizing' => [
            'type'        => 'DTS\eBaySDK\Account\Types\InventorySizing',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'inventorySizing',
        ],
        'merchantCategoryCode' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'merchantCategoryCode',
        ],
        'primaryCurrency' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'primaryCurrency',
        ],
        'returnSnapshots' => [
            'type'        => 'DTS\eBaySDK\Account\Types\ReturnSnapshot',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnSnapshots',
        ],
        'sicCode' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sicCode',
        ],
        'transactionVolume' => [
            'type'        => 'DTS\eBaySDK\Account\Types\TransactionVolume',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'transactionVolume',
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
