<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property integer $PaisaPayStatus
 * @property boolean $AllowPaymentEdit
 * @property \DTS\eBaySDK\MerchantData\Enums\CurrencyCodeType $BillingCurrency
 * @property boolean $CheckoutEnabled
 * @property boolean $CIPBankAccountStored
 * @property boolean $GoodStanding
 * @property boolean $QualifiesForB2BVAT
 * @property \DTS\eBaySDK\MerchantData\Enums\SellerLevelCodeType $SellerLevel
 * @property \DTS\eBaySDK\MerchantData\Types\AddressType $SellerPaymentAddress
 * @property \DTS\eBaySDK\MerchantData\Types\SchedulingInfoType $SchedulingInfo
 * @property boolean $StoreOwner
 * @property string $StoreURL
 * @property \DTS\eBaySDK\MerchantData\Enums\SellerBusinessCodeType $SellerBusinessType
 * @property boolean $RegisteredBusinessSeller
 * @property \DTS\eBaySDK\MerchantData\Enums\SiteCodeType $StoreSite
 * @property \DTS\eBaySDK\MerchantData\Enums\SellerPaymentMethodCodeType $PaymentMethod
 * @property boolean $CharityRegistered
 * @property boolean $SafePaymentExempt
 * @property integer $PaisaPayEscrowEMIStatus
 * @property \DTS\eBaySDK\MerchantData\Types\CharityAffiliationDetailsType $CharityAffiliationDetails
 * @property double $TransactionPercent
 * @property \DTS\eBaySDK\MerchantData\Types\IntegratedMerchantCreditCardInfoType $IntegratedMerchantCreditCardInfo
 * @property \DTS\eBaySDK\MerchantData\Types\FeatureEligibilityType $FeatureEligibility
 * @property boolean $TopRatedSeller
 * @property \DTS\eBaySDK\MerchantData\Types\TopRatedSellerDetailsType $TopRatedSellerDetails
 * @property \DTS\eBaySDK\MerchantData\Types\RecoupmentPolicyConsentType $RecoupmentPolicyConsent
 * @property boolean $DomesticRateTable
 */
class SellerType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PaisaPayStatus' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PaisaPayStatus',
        ],
        'AllowPaymentEdit' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'AllowPaymentEdit',
        ],
        'BillingCurrency' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BillingCurrency',
        ],
        'CheckoutEnabled' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CheckoutEnabled',
        ],
        'CIPBankAccountStored' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CIPBankAccountStored',
        ],
        'GoodStanding' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'GoodStanding',
        ],
        'QualifiesForB2BVAT' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'QualifiesForB2BVAT',
        ],
        'SellerLevel' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerLevel',
        ],
        'SellerPaymentAddress' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AddressType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerPaymentAddress',
        ],
        'SchedulingInfo' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\SchedulingInfoType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SchedulingInfo',
        ],
        'StoreOwner' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'StoreOwner',
        ],
        'StoreURL' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'StoreURL',
        ],
        'SellerBusinessType' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerBusinessType',
        ],
        'RegisteredBusinessSeller' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'RegisteredBusinessSeller',
        ],
        'StoreSite' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'StoreSite',
        ],
        'PaymentMethod' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PaymentMethod',
        ],
        'CharityRegistered' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CharityRegistered',
        ],
        'SafePaymentExempt' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SafePaymentExempt',
        ],
        'PaisaPayEscrowEMIStatus' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PaisaPayEscrowEMIStatus',
        ],
        'CharityAffiliationDetails' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\CharityAffiliationDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CharityAffiliationDetails',
        ],
        'TransactionPercent' => [
            'type'        => 'double',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TransactionPercent',
        ],
        'IntegratedMerchantCreditCardInfo' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\IntegratedMerchantCreditCardInfoType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'IntegratedMerchantCreditCardInfo',
        ],
        'FeatureEligibility' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\FeatureEligibilityType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'FeatureEligibility',
        ],
        'TopRatedSeller' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TopRatedSeller',
        ],
        'TopRatedSellerDetails' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\TopRatedSellerDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TopRatedSellerDetails',
        ],
        'RecoupmentPolicyConsent' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\RecoupmentPolicyConsentType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'RecoupmentPolicyConsent',
        ],
        'DomesticRateTable' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DomesticRateTable',
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
