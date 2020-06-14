<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Activity;
use AppleMusic\Model\Artwork;
use AppleMusic\Model\EditorialNotes;
use PHPUnit\Framework\TestCase;

class ActivityTest extends TestCase
{
    protected $activity;

    public function setUp()
    {
        $this->activity = new Activity();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->activity->getId());
        $this->assertEmpty($this->activity->getHref());
        $this->assertEmpty($this->activity->getRelationships());
        $this->assertEquals('activities', $this->activity->getType());
        $this->assertNull($this->activity->getArtwork());
        $this->assertNull($this->activity->getEditorialNotes());
        $this->assertEmpty($this->activity->getName());
        $this->assertEmpty($this->activity->getUrl());
    }

    public function testArtworkSetterGetter()
    {
        $artwork = new Artwork();
        $this->activity->setArtwork($artwork);
        $this->assertEquals($artwork, $this->activity->getArtwork());
    }

    public function testEditorialNotesSetterGetter()
    {
        $editorialNotes = new EditorialNotes();
        $this->activity->setEditorialNotes($editorialNotes);
        $this->assertEquals($editorialNotes, $this->activity->getEditorialNotes());
    }

    public function testNameSetterGetter()
    {
        $this->activity->setName('Party');
        $this->assertEquals('Party', $this->activity->getName());
    }

    public function testUrlSetterGetter()
    {
        $this->activity->setUrl('https://music.apple.com/gb/activity/party/976439514');
        $this->assertEquals('https://music.apple.com/gb/activity/party/976439514', $this->activity->getUrl());
    }
}
