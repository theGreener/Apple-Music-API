<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Storefront;
use AppleMusic\Model\StorefrontResponse;
use PHPUnit\Framework\TestCase;

class StorefrontResponseTest extends TestCase
{
    protected $storefrontResponse;

    public function setUp()
    {
        $this->storefrontResponse = new StorefrontResponse();
    }

    public function testDefaultValues()
    {
        $this->assertNull($this->storefrontResponse->getData());
        $this->assertNull($this->storefrontResponse->getErrors());
        $this->assertEmpty($this->storefrontResponse->getHref());
        $this->assertEmpty($this->storefrontResponse->getNext());
        $this->assertNull($this->storefrontResponse->getResults());
    }

    public function testDataSetterGetter()
    {
        $storefront = new Storefront();
        $this->storefrontResponse->setData([$storefront]);
        $this->assertContains($storefront, $this->storefrontResponse->getData());
    }
}
