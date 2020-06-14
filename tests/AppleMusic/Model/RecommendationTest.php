<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Recommendation;
use DateTime;
use PHPUnit\Framework\TestCase;

class RecommendationTest extends TestCase
{
    protected $recommendation;

    public function setUp()
    {
        $this->recommendation = new Recommendation();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->recommendation->getId());
        $this->assertEmpty($this->recommendation->getHref());
        $this->assertEquals('personal-recommendation', $this->recommendation->getType());
        $this->assertEmpty($this->recommendation->getRelationships());
        $this->assertFalse($this->recommendation->getIsGroupRecommendation());
        $this->assertNull($this->recommendation->getNextUpdateDate());
        $this->assertEmpty($this->recommendation->getReason());
        $this->assertEmpty($this->recommendation->getResourceTypes());
        $this->assertEmpty($this->recommendation->getTitle());
    }

    public function testIsGroupRecommendationSetterGetter()
    {
        $this->recommendation->setIsGroupRecommendation(true);
        $this->assertTrue($this->recommendation->getIsGroupRecommendation());
    }

    public function testNextUpdateDateSetterGetter()
    {
        $nextUpdateDate = new DateTime('2020-06-13T22:59:14Z');
        $this->recommendation->setNextUpdateDate($nextUpdateDate);
        $this->assertEquals($nextUpdateDate, $this->recommendation->getNextUpdateDate());
    }

    public function testReasonSetterGetter()
    {
        $resourceTypes = [
            'playlists',
        ];
        $this->recommendation->setResourceTypes($resourceTypes);
        $this->assertEquals($resourceTypes, $this->recommendation->getResourceTypes());
    }

    public function testResourceTypeSetterGetter()
    {
        $this->recommendation->setReason('Reason');
        $this->assertEquals('Reason', $this->recommendation->getReason());
    }

    public function testTitleSetterGetter()
    {
        $this->recommendation->setTitle('Made For You');
        $this->assertEquals('Made For You', $this->recommendation->getTitle());
    }
}
