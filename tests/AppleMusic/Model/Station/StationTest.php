<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Common\Artwork;
use AppleMusic\Model\Common\EditorialNotes;
use AppleMusic\Model\Station\Station;
use PHPUnit\Framework\TestCase;

class StationTest extends TestCase
{
    protected $station;

    public function setUp()
    {
        $this->station = new Station();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->station->getId());
        $this->assertEmpty($this->station->getHref());
        $this->assertEquals('stations', $this->station->getType());
        $this->assertEmpty($this->station->getRelationships());
        $this->assertNull($this->station->getArtwork());
        $this->assertEquals(0, $this->station->getDurationInMillis());
        $this->assertNull($this->station->getEditorialNotes());
        $this->assertEquals(0, $this->station->getEpisodeNumber());
        $this->assertFalse($this->station->getIsLive());
        $this->assertEmpty($this->station->getName());
        $this->assertEmpty($this->station->getUrl());
    }

    public function testArtworkSetterGetter()
    {
        $artwork = new Artwork();
        $this->station->setArtwork($artwork);
        $this->assertEquals($artwork, $this->station->getArtwork());
    }

    public function testDurationInMillisSetterGetter()
    {
        $this->station->setDurationInMillis(2000);
        $this->assertEquals(2000, $this->station->getDurationInMillis());
    }

    public function testEditorialNotesSetterGetter()
    {
        $editorialNotes = new EditorialNotes();
        $this->station->setEditorialNotes($editorialNotes);
        $this->assertEquals($editorialNotes, $this->station->getEditorialNotes());
    }

    public function testEpisodeNumberSetterGetter()
    {
        $this->station->setEpisodeNumber(123);
        $this->assertEquals(123, $this->station->getEpisodeNumber());
    }

    public function testIsLiveSetterGetter()
    {
        $this->station->setIsLive(true);
        $this->assertTrue($this->station->getIsLive());
    }

    public function testNameSetterGetter()
    {
        $this->station->setName('Alternative');
        $this->assertEquals('Alternative', $this->station->getName());
    }

    public function testUrlSetterGetter()
    {
        $this->station->setUrl('https://music.apple.com/gb/station/alternative/ra.985484166');
        $this->assertEquals('https://music.apple.com/gb/station/alternative/ra.985484166', $this->station->getUrl());
    }
}
