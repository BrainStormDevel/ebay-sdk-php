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
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AmountPaid
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AdjustmentAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedAdjustmentAmount
 * @property \DTS\eBaySDK\MerchantData\Types\UserType $Buyer
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedAmountPaid
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedTransactionPrice
 * @property \DateTime $CreatedDate
 * @property \DTS\eBaySDK\MerchantData\Enums\DepositTypeCodeType $DepositType
 * @property \DTS\eBaySDK\MerchantData\Types\ItemType $Item
 * @property integer $QuantityPurchased
 * @property \DTS\eBaySDK\MerchantData\Types\TransactionStatusType $Status
 * @property string $TransactionID
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TransactionPrice
 * @property boolean $BestOfferSale
 * @property integer $VATPercent
 * @property \DTS\eBaySDK\MerchantData\Types\ExternalTransactionType[] $ExternalTransaction
 * @property \DTS\eBaySDK\MerchantData\Types\SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingServiceOptionsType $ShippingServiceSelected
 * @property \DTS\eBaySDK\MerchantData\Enums\PaidStatusCodeType $BuyerPaidStatus
 * @property \DTS\eBaySDK\MerchantData\Enums\PaidStatusCodeType $SellerPaidStatus
 * @property \DateTime $PaidTime
 * @property \DateTime $ShippedTime
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TotalPrice
 * @property \DTS\eBaySDK\MerchantData\Types\FeedbackInfoType $FeedbackLeft
 * @property \DTS\eBaySDK\MerchantData\Types\FeedbackInfoType $FeedbackReceived
 * @property \DTS\eBaySDK\MerchantData\Types\OrderType $ContainingOrder
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FinalValueFee
 * @property \DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
 * @property \DTS\eBaySDK\MerchantData\Types\RefundArrayType $RefundArray
 * @property \DTS\eBaySDK\MerchantData\Enums\SiteCodeType $TransactionSiteID
 * @property \DTS\eBaySDK\MerchantData\Enums\TransactionPlatformCodeType $Platform
 * @property string $CartID
 * @property boolean $SellerContactBuyerByEmail
 * @property string $PayPalEmailAddress
 * @property string $PaisaPayID
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $BuyerGuaranteePrice
 * @property \DTS\eBaySDK\MerchantData\Types\VariationType $Variation
 * @property string $BuyerCheckoutMessage
 * @property \DTS\eBaySDK\MerchantData\Types\TaxesType $Taxes
 * @property boolean $BundlePurchase
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ActualShippingCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ActualHandlingCost
 * @property string $OrderLineItemID
 * @property string $eBayPaymentID
 * @property \DTS\eBaySDK\MerchantData\Types\PaymentHoldDetailType $PaymentHoldDetails
 * @property \DTS\eBaySDK\MerchantData\Types\SellerDiscountsType $SellerDiscounts
 * @property string $CodiceFiscale
 * @property boolean $IsMultiLegShipping
 * @property \DTS\eBaySDK\MerchantData\Types\MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property \DateTime $InvoiceSentTime
 * @property \DTS\eBaySDK\MerchantData\Types\UnpaidItemType $UnpaidItem
 * @property boolean $IntangibleItem
 * @property \DTS\eBaySDK\MerchantData\Types\PaymentsInformationType $MonetaryDetails
 * @property \DTS\eBaySDK\MerchantData\Types\PickupDetailsType $PickupDetails
 * @property \DTS\eBaySDK\MerchantData\Types\PickupMethodSelectedType $PickupMethodSelected
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ShippingConvenienceCharge
 * @property string $LogisticsPlanType
 * @property \DTS\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property string $InventoryReservationID
 * @property string $ExtendedOrderID
 * @property boolean $eBayPlusTransaction
 * @property \DTS\eBaySDK\MerchantData\Types\GiftSummaryType $GiftSummary
 * @property \DTS\eBaySDK\MerchantData\Types\DigitalDeliverySelectedType $DigitalDeliverySelected
 * @property boolean $Gift
 * @property boolean $GuaranteedShipping
 */
class TransactionType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AmountPaid' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'AmountPaid',
        ],
        'AdjustmentAmount' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'AdjustmentAmount',
        ],
        'ConvertedAdjustmentAmount' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ConvertedAdjustmentAmount',
        ],
        'Buyer' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\UserType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Buyer',
        ],
        'ShippingDetails' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\ShippingDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippingDetails',
        ],
        'ConvertedAmountPaid' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ConvertedAmountPaid',
        ],
        'ConvertedTransactionPrice' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ConvertedTransactionPrice',
        ],
        'CreatedDate' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CreatedDate',
        ],
        'DepositType' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DepositType',
        ],
        'Item' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\ItemType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Item',
        ],
        'QuantityPurchased' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'QuantityPurchased',
        ],
        'Status' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\TransactionStatusType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Status',
        ],
        'TransactionID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TransactionID',
        ],
        'TransactionPrice' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TransactionPrice',
        ],
        'BestOfferSale' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BestOfferSale',
        ],
        'VATPercent' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'VATPercent',
        ],
        'ExternalTransaction' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\ExternalTransactionType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'ExternalTransaction',
        ],
        'SellingManagerProductDetails' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\SellingManagerProductDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellingManagerProductDetails',
        ],
        'ShippingServiceSelected' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\ShippingServiceOptionsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippingServiceSelected',
        ],
        'BuyerPaidStatus' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BuyerPaidStatus',
        ],
        'SellerPaidStatus' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerPaidStatus',
        ],
        'PaidTime' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PaidTime',
        ],
        'ShippedTime' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippedTime',
        ],
        'TotalPrice' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TotalPrice',
        ],
        'FeedbackLeft' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\FeedbackInfoType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'FeedbackLeft',
        ],
        'FeedbackReceived' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\FeedbackInfoType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'FeedbackReceived',
        ],
        'ContainingOrder' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\OrderType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ContainingOrder',
        ],
        'FinalValueFee' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'FinalValueFee',
        ],
        'ListingCheckoutRedirectPreference' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ListingCheckoutRedirectPreference',
        ],
        'RefundArray' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\RefundArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'RefundArray',
        ],
        'TransactionSiteID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TransactionSiteID',
        ],
        'Platform' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Platform',
        ],
        'CartID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CartID',
        ],
        'SellerContactBuyerByEmail' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerContactBuyerByEmail',
        ],
        'PayPalEmailAddress' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PayPalEmailAddress',
        ],
        'PaisaPayID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PaisaPayID',
        ],
        'BuyerGuaranteePrice' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BuyerGuaranteePrice',
        ],
        'Variation' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\VariationType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Variation',
        ],
        'BuyerCheckoutMessage' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BuyerCheckoutMessage',
        ],
        'Taxes' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\TaxesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Taxes',
        ],
        'BundlePurchase' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BundlePurchase',
        ],
        'ActualShippingCost' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ActualShippingCost',
        ],
        'ActualHandlingCost' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ActualHandlingCost',
        ],
        'OrderLineItemID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'OrderLineItemID',
        ],
        'eBayPaymentID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'eBayPaymentID',
        ],
        'PaymentHoldDetails' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\PaymentHoldDetailType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PaymentHoldDetails',
        ],
        'SellerDiscounts' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\SellerDiscountsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerDiscounts',
        ],
        'CodiceFiscale' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CodiceFiscale',
        ],
        'IsMultiLegShipping' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'IsMultiLegShipping',
        ],
        'MultiLegShippingDetails' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\MultiLegShippingDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'MultiLegShippingDetails',
        ],
        'InvoiceSentTime' => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'InvoiceSentTime',
        ],
        'UnpaidItem' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\UnpaidItemType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'UnpaidItem',
        ],
        'IntangibleItem' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'IntangibleItem',
        ],
        'MonetaryDetails' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\PaymentsInformationType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'MonetaryDetails',
        ],
        'PickupDetails' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\PickupDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PickupDetails',
        ],
        'PickupMethodSelected' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\PickupMethodSelectedType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PickupMethodSelected',
        ],
        'ShippingConvenienceCharge' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippingConvenienceCharge',
        ],
        'LogisticsPlanType' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'LogisticsPlanType',
        ],
        'BuyerPackageEnclosures' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BuyerPackageEnclosures',
        ],
        'InventoryReservationID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'InventoryReservationID',
        ],
        'ExtendedOrderID' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ExtendedOrderID',
        ],
        'eBayPlusTransaction' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'eBayPlusTransaction',
        ],
        'GiftSummary' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\GiftSummaryType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'GiftSummary',
        ],
        'DigitalDeliverySelected' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\DigitalDeliverySelectedType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DigitalDeliverySelected',
        ],
        'Gift' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Gift',
        ],
        'GuaranteedShipping' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'GuaranteedShipping',
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
