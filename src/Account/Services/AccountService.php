<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Account\Services;

class AccountService extends \DTS\eBaySDK\Account\Services\AccountBaseService
{
    public const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'CreateAFulfillmentPolicy' => [
            'method'        => 'POST',
            'resource'      => 'fulfillment_policy',
            'responseClass' => '\DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestResponse',
            'params'        => [
            ],
        ],
        'DeleteAFulfillmentPolicy' => [
            'method'        => 'DELETE',
            'resource'      => 'fulfillment_policy/{fulfillmentPolicyId}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestResponse',
            'params'        => [
                'fulfillmentPolicyId' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetFulfillmentPoliciesByMarketplace' => [
            'method'        => 'GET',
            'resource'      => 'fulfillment_policy',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestResponse',
            'params'        => [
                'marketplace_id' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetAFulfillmentPolicyByID' => [
            'method'        => 'GET',
            'resource'      => 'fulfillment_policy/{fulfillmentPolicyId}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse',
            'params'        => [
                'fulfillmentPolicyId' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetAFulfillmentPolicyByName' => [
            'method'        => 'GET',
            'resource'      => 'fulfillment_policy/get_by_policy_name',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestResponse',
            'params'        => [
                'marketplace_id' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
                'name' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'UpdateAFulfillmentPolicy' => [
            'method'        => 'PUT',
            'resource'      => 'fulfillment_policy/{fulfillmentPolicyId}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestResponse',
            'params'        => [
                'fulfillmentPolicyId' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'CreateAPaymentPolicy' => [
            'method'        => 'POST',
            'resource'      => 'payment_policy',
            'responseClass' => '\DTS\eBaySDK\Account\Types\CreateAPaymentPolicyRestResponse',
            'params'        => [
            ],
        ],
        'DeleteAPaymentPolicy' => [
            'method'        => 'DELETE',
            'resource'      => 'payment_policy/{payment_policy_id}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\DeleteAPaymentPolicyRestResponse',
            'params'        => [
                'payment_policy_id' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetPaymentPoliciesByMarketplace' => [
            'method'        => 'GET',
            'resource'      => 'payment_policy',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestResponse',
            'params'        => [
                'marketplace_id' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetAPaymentPolicyByID' => [
            'method'        => 'GET',
            'resource'      => 'payment_policy/{paymentPolicyId}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse',
            'params'        => [
                'paymentPolicyId' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetAPaymentPolicyByName' => [
            'method'        => 'GET',
            'resource'      => 'payment_policy/get_by_policy_name',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestResponse',
            'params'        => [
                'marketplace_id' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
                'name' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'UpdateAPaymentPolicy' => [
            'method'        => 'PUT',
            'resource'      => 'payment_policy/{payment_policy_id}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\UpdateAPaymentPolicyRestResponse',
            'params'        => [
                'payment_policy_id' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetAccountPrivileges' => [
            'method'        => 'GET',
            'resource'      => 'privilege',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetAccountPrivilegesRestResponse',
            'params'        => [
            ],
        ],
        'GetOptedInPrograms' => [
            'method'        => 'GET',
            'resource'      => 'program/get_opted_in_programs',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetOptedInProgramsRestResponse',
            'params'        => [
            ],
        ],
        'OptInToProgram' => [
            'method'        => 'POST',
            'resource'      => 'program/opt_in',
            'responseClass' => '\DTS\eBaySDK\Account\Types\OptInToProgramRestResponse',
            'params'        => [
            ],
        ],
        'OptOutOfProgram' => [
            'method'        => 'POST',
            'resource'      => 'program/opt_out',
            'responseClass' => '\DTS\eBaySDK\Account\Types\OptOutOfProgramRestResponse',
            'params'        => [
            ],
        ],
        'GetShippingRateTables' => [
            'method'        => 'POST',
            'resource'      => 'rate_table',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetShippingRateTablesRestResponse',
            'params'        => [
                'country_code' => [
                    'valid' => ['string'],
                ],
            ],
        ],
        'CreateAReturnPolicy' => [
            'method'        => 'POST',
            'resource'      => 'return_policy',
            'responseClass' => '\DTS\eBaySDK\Account\Types\CreateAReturnPolicyRestResponse',
            'params'        => [
            ],
        ],
        'DeleteAReturnPolicy' => [
            'method'        => 'DELETE',
            'resource'      => 'return_policy/{return_policy_id}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\DeleteAReturnPolicyRestResponse',
            'params'        => [
                'return_policy_id' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetReturnPoliciesByMarketplace' => [
            'method'        => 'GET',
            'resource'      => 'return_policy',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestResponse',
            'params'        => [
                'marketplace_id' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetAReturnPolicyByID' => [
            'method'        => 'GET',
            'resource'      => 'return_policy/{returnPolicyId}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetAReturnPolicyByIDRestResponse',
            'params'        => [
                'returnPolicyId' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetAReturnPolicyByName' => [
            'method'        => 'GET',
            'resource'      => 'return_policy/get_by_policy_name',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetAReturnPolicyByNameRestResponse',
            'params'        => [
                'marketplace_id' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
                'name' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'UpdateAReturnPolicy' => [
            'method'        => 'PUT',
            'resource'      => 'return_policy/{return_policy_id}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse',
            'params'        => [
                'return_policy_id' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'CreateASalesTaxTable' => [
            'method'        => 'PUT',
            'resource'      => 'sales_tax/{countryCode}/{jurisdictionId}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\CreateASalesTaxTableRestResponse',
            'params'        => [
                'countryCode' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
                'jurisdictionId' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'DeleteASalesTaxTable' => [
            'method'        => 'DELETE',
            'resource'      => 'sales_tax/{countryCode}/{jurisdictionId}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\DeleteASalesTaxTableRestResponse',
            'params'        => [
                'countryCode' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
                'jurisdictionId' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetASalesTaxTable' => [
            'method'        => 'GET',
            'resource'      => 'sales_tax/{countryCode}/{jurisdictionId}',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetASalesTaxTableRestResponse',
            'params'        => [
                'countryCode' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
                'jurisdictionId' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
        'GetAllSalesTaxTables' => [
            'method'        => 'GET',
            'resource'      => 'sales_tax',
            'responseClass' => '\DTS\eBaySDK\Account\Types\GetAllSalesTaxTablesRestResponse',
            'params'        => [
                'country_code' => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
            ],
        ],
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestResponse
     */
    public function createAFulfillmentPolicy(\DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request)
    {
        return $this->createAFulfillmentPolicyAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAFulfillmentPolicyAsync(\DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('CreateAFulfillmentPolicy', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestResponse
     */
    public function deleteAFulfillmentPolicy(\DTS\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request)
    {
        return $this->deleteAFulfillmentPolicyAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAFulfillmentPolicyAsync(\DTS\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('DeleteAFulfillmentPolicy', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestResponse
     */
    public function getFulfillmentPoliciesByMarketplace(\DTS\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->getFulfillmentPoliciesByMarketplaceAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFulfillmentPoliciesByMarketplaceAsync(\DTS\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->callOperationAsync('GetFulfillmentPoliciesByMarketplace', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse
     */
    public function getAFulfillmentPolicyByID(\DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request)
    {
        return $this->getAFulfillmentPolicyByIDAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAFulfillmentPolicyByIDAsync(\DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request)
    {
        return $this->callOperationAsync('GetAFulfillmentPolicyByID', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestResponse
     */
    public function getAFulfillmentPolicyByName(\DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request)
    {
        return $this->getAFulfillmentPolicyByNameAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAFulfillmentPolicyByNameAsync(\DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request)
    {
        return $this->callOperationAsync('GetAFulfillmentPolicyByName', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestResponse
     */
    public function updateAFulfillmentPolicy(\DTS\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request)
    {
        return $this->updateAFulfillmentPolicyAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAFulfillmentPolicyAsync(\DTS\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('UpdateAFulfillmentPolicy', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\CreateAPaymentPolicyRestResponse
     */
    public function createAPaymentPolicy(\DTS\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request)
    {
        return $this->createAPaymentPolicyAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAPaymentPolicyAsync(\DTS\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('CreateAPaymentPolicy', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\DeleteAPaymentPolicyRestResponse
     */
    public function deleteAPaymentPolicy(\DTS\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request)
    {
        return $this->deleteAPaymentPolicyAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAPaymentPolicyAsync(\DTS\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('DeleteAPaymentPolicy', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestResponse
     */
    public function getPaymentPoliciesByMarketplace(\DTS\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->getPaymentPoliciesByMarketplaceAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentPoliciesByMarketplaceAsync(\DTS\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->callOperationAsync('GetPaymentPoliciesByMarketplace', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse
     */
    public function getAPaymentPolicyByID(\DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request)
    {
        return $this->getAPaymentPolicyByIDAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAPaymentPolicyByIDAsync(\DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request)
    {
        return $this->callOperationAsync('GetAPaymentPolicyByID', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestResponse
     */
    public function getAPaymentPolicyByName(\DTS\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request)
    {
        return $this->getAPaymentPolicyByNameAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAPaymentPolicyByNameAsync(\DTS\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request)
    {
        return $this->callOperationAsync('GetAPaymentPolicyByName', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\UpdateAPaymentPolicyRestResponse
     */
    public function updateAPaymentPolicy(\DTS\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request)
    {
        return $this->updateAPaymentPolicyAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAPaymentPolicyAsync(\DTS\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('UpdateAPaymentPolicy', $request);
    }

    /**
     * @return \DTS\eBaySDK\Account\Types\GetAccountPrivilegesRestResponse
     */
    public function getAccountPrivileges()
    {
        return $this->getAccountPrivilegesAsync()->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountPrivilegesAsync()
    {
        return $this->callOperationAsync('GetAccountPrivileges');
    }

    /**
     * @return \DTS\eBaySDK\Account\Types\GetOptedInProgramsRestResponse
     */
    public function getOptedInPrograms()
    {
        return $this->getOptedInProgramsAsync()->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOptedInProgramsAsync()
    {
        return $this->callOperationAsync('GetOptedInPrograms');
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\OptInToProgramRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\OptInToProgramRestResponse
     */
    public function optInToProgram(\DTS\eBaySDK\Account\Types\OptInToProgramRestRequest $request)
    {
        return $this->optInToProgramAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\OptInToProgramRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function optInToProgramAsync(\DTS\eBaySDK\Account\Types\OptInToProgramRestRequest $request)
    {
        return $this->callOperationAsync('OptInToProgram', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\OptOutOfProgramRestResponse
     */
    public function optOutOfProgram(\DTS\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request)
    {
        return $this->optOutOfProgramAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function optOutOfProgramAsync(\DTS\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request)
    {
        return $this->callOperationAsync('OptOutOfProgram', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetShippingRateTablesRestResponse
     */
    public function getShippingRateTables(\DTS\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request)
    {
        return $this->getShippingRateTablesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShippingRateTablesAsync(\DTS\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request)
    {
        return $this->callOperationAsync('GetShippingRateTables', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\CreateAReturnPolicyRestResponse
     */
    public function createAReturnPolicy(\DTS\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request)
    {
        return $this->createAReturnPolicyAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAReturnPolicyAsync(\DTS\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request)
    {
        return $this->callOperationAsync('CreateAReturnPolicy', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\DeleteAReturnPolicyRestResponse
     */
    public function deleteAReturnPolicy(\DTS\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request)
    {
        return $this->deleteAReturnPolicyAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAReturnPolicyAsync(\DTS\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request)
    {
        return $this->callOperationAsync('DeleteAReturnPolicy', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestResponse
     */
    public function getReturnPoliciesByMarketplace(\DTS\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request)
    {
        return $this->getReturnPoliciesByMarketplaceAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReturnPoliciesByMarketplaceAsync(\DTS\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request)
    {
        return $this->callOperationAsync('GetReturnPoliciesByMarketplace', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetAReturnPolicyByIDRestResponse
     */
    public function getAReturnPolicyByID(\DTS\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request)
    {
        return $this->getAReturnPolicyByIDAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAReturnPolicyByIDAsync(\DTS\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request)
    {
        return $this->callOperationAsync('GetAReturnPolicyByID', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetAReturnPolicyByNameRestResponse
     */
    public function getAReturnPolicyByName(\DTS\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request)
    {
        return $this->getAReturnPolicyByNameAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAReturnPolicyByNameAsync(\DTS\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request)
    {
        return $this->callOperationAsync('GetAReturnPolicyByName', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse
     */
    public function updateAReturnPolicy(\DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request)
    {
        return $this->updateAReturnPolicyAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAReturnPolicyAsync(\DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request)
    {
        return $this->callOperationAsync('UpdateAReturnPolicy', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\CreateASalesTaxTableRestResponse
     */
    public function createASalesTaxTable(\DTS\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request)
    {
        return $this->createASalesTaxTableAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createASalesTaxTableAsync(\DTS\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request)
    {
        return $this->callOperationAsync('CreateASalesTaxTable', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\DeleteASalesTaxTableRestResponse
     */
    public function deleteASalesTaxTable(\DTS\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request)
    {
        return $this->deleteASalesTaxTableAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteASalesTaxTableAsync(\DTS\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request)
    {
        return $this->callOperationAsync('DeleteASalesTaxTable', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetASalesTaxTableRestResponse
     */
    public function getASalesTaxTable(\DTS\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request)
    {
        return $this->getASalesTaxTableAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getASalesTaxTableAsync(\DTS\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request)
    {
        return $this->callOperationAsync('GetASalesTaxTable', $request);
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request
     * @return \DTS\eBaySDK\Account\Types\GetAllSalesTaxTablesRestResponse
     */
    public function getAllSalesTaxTables(\DTS\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request)
    {
        return $this->getAllSalesTaxTablesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllSalesTaxTablesAsync(\DTS\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request)
    {
        return $this->callOperationAsync('GetAllSalesTaxTables', $request);
    }
}
