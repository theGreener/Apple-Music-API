<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Common\Storefront;
use PHPUnit\Framework\TestCase;

class StorefrontTest extends TestCase
{
    protected $storefront;

    public function setUp()
    {
        $this->storefront = new Storefront();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->storefront->getId());
        $this->assertEmpty($this->storefront->getHref());
        $this->assertEquals('storefronts', $this->storefront->getType());
        $this->assertEmpty($this->storefront->getRelationships());
        $this->assertEmpty($this->storefront->getDefaultLanguageTag());
        $this->assertEmpty($this->storefront->getSupportedLanguageTags());
        $this->assertEmpty($this->storefront->getExplicitContentPolicy());
        $this->assertEmpty($this->storefront->getName());
    }

    public function testDefaultLanguageTagSetterGetter()
    {
        $this->storefront->setDefaultLanguageTag('en-GB');
        $this->assertEquals('en-GB', $this->storefront->getDefaultLanguageTag());
    }

    public function testSupportedLanguageTagsSetterGetter()
    {
        $languageTags = [
            'en-GB',
            'en-US',
        ];

        $this->storefront->setSupportedLanguageTags($languageTags);
        $this->assertContains('en-GB', $this->storefront->getSupportedLanguageTags());
        $this->assertContains('en-US', $this->storefront->getSupportedLanguageTags());
    }

    public function testExplicitContentPolicySetterGetter()
    {
        $this->storefront->setExplicitContentPolicy('allowed');
        $this->assertEquals('allowed', $this->storefront->getExplicitContentPolicy());
    }

    public function testNameSetterGetter()
    {
        $this->storefront->setName('United Kingdom');
        $this->assertEquals('United Kingdom', $this->storefront->getName());
    }
}
