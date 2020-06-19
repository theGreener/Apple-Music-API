<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Curator\Curator;
use PHPUnit\Framework\TestCase;

class CuratorTest extends TestCase
{
    protected $curator;

    public function setUp()
    {
        $this->curator = new Curator();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->curator->getId());
        $this->assertEmpty($this->curator->getHref());
        $this->assertEquals('curators', $this->curator->getType());
        $this->assertEmpty($this->curator->getRelationships());
        $this->assertNull($this->curator->getArtwork());
        $this->assertNull($this->curator->getEditorialNotes());
        $this->assertEquals('', $this->curator->getName());
        $this->assertEquals('', $this->curator->getUrl());
    }
}
