<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Shopping\Enums;

use DTS\eBaySDK\Shopping\Enums\ProductIDCodeType;

class ProductIDCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductIDCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\ProductIDCodeType', $this->obj);
    }
}