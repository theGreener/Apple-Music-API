<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Album;
use AppleMusic\Model\Relationship;
use PHPUnit\Framework\TestCase;

class RelationshipTest extends TestCase
{
    protected $relationship;

    public function setUp()
    {
        $this->relationship = new Relationship();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->relationship->getHref());
        $this->assertEmpty($this->relationship->getData());
        $this->assertEmpty($this->relationship->getNext());
    }

    public function testHrefSetterGetter()
    {
        $this->relationship->setHref('/v1/me/library/albums/l.PcsLqO8/tracks');
        $this->assertEquals('/v1/me/library/albums/l.PcsLqO8/tracks', $this->relationship->getHref());

        $this->relationship->setHref('/v1/catalog/gb/albums/111153953');
        $this->assertEquals('/v1/catalog/gb/albums/111153953', $this->relationship->getHref());
    }

    public function testDataSetterGetter()
    {
        $album = new Album();
        $this->relationship->setData([$album]);
        $this->assertContains($album, $this->relationship->getData());
    }

    public function testNextSetterGetter()
    {
        $this->relationship->setNext('albums');
        $this->assertEquals('albums', $this->relationship->getNext());

        $this->relationship->setNext('library-albums');
        $this->assertEquals('library-albums', $this->relationship->getNext());
    }
}
