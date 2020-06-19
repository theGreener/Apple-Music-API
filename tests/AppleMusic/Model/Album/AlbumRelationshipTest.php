<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Album\Album;
use AppleMusic\Model\Album\AlbumRelationship;
use PHPUnit\Framework\TestCase;

class AlbumRelationshipTest extends TestCase
{
    protected $albumRelationship;

    public function setUp()
    {
        $this->albumRelationship = new AlbumRelationship();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->albumRelationship->getHref());
        $this->assertEmpty($this->albumRelationship->getData());
        $this->assertEmpty($this->albumRelationship->getNext());
    }

    public function testHrefSetterGetter()
    {
        $this->albumRelationship->setHref('/v1/me/library/albums/l.PcsLqO8/tracks');
        $this->assertEquals('/v1/me/library/albums/l.PcsLqO8/tracks', $this->albumRelationship->getHref());
    }

    public function testDataSetterGetter()
    {
        $album = new Album();
        $this->albumRelationship->setData([$album]);
        $this->assertContains($album, $this->albumRelationship->getData());
    }

    public function testNextSetterGetter()
    {
        $this->albumRelationship->setNext('v1/me/library/albums/l.PcsLqO8/tracks?include=catalog,albums,tracks');
        $this->assertEquals('v1/me/library/albums/l.PcsLqO8/tracks?include=catalog,albums,tracks', $this->albumRelationship->getNext());
    }
}
