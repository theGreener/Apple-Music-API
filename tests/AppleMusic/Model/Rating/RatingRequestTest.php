<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Rating\RatingRequest;
use PHPUnit\Framework\TestCase;

class RatingRequestTest extends TestCase
{
    protected $ratingRequest;

    public function setUp()
    {
        $this->ratingRequest = new RatingRequest();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->ratingRequest->getId());
        $this->assertEmpty($this->ratingRequest->getHref());
        $this->assertEquals('rating', $this->ratingRequest->getType());
        $this->assertEmpty($this->ratingRequest->getRelationships());
        $this->assertEquals(-1, $this->ratingRequest->getValue());
    }

    public function testValueSetterGetter()
    {
        $this->ratingRequest->setValue(1);
        $this->assertEquals(1, $this->ratingRequest->getValue());
    }
}
