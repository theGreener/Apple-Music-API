<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Rating\Rating;
use PHPUnit\Framework\TestCase;

class RatingTest extends TestCase
{
    protected $rating;

    public function setUp()
    {
        $this->rating = new Rating();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->rating->getId());
        $this->assertEmpty($this->rating->getHref());
        $this->assertEquals('ratings', $this->rating->getType());
        $this->assertEmpty($this->rating->getRelationships());
        $this->assertEquals(-1, $this->rating->getValue());
    }

    public function testValueSetterGetter()
    {
        $this->rating->setValue(1);
        $this->assertEquals(1, $this->rating->getValue());
    }
}
