<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Curator\AppleCurator;
use AppleMusic\Model\Common\Artwork;
use AppleMusic\Model\Common\EditorialNotes;
use PHPUnit\Framework\TestCase;

class AppleCuratorTest extends TestCase
{
    protected $appleCurator;

    public function setUp()
    {
        $this->appleCurator = new AppleCurator();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->appleCurator->getId());
        $this->assertEmpty($this->appleCurator->getHref());
        $this->assertEquals('apple-curators', $this->appleCurator->getType());
        $this->assertEmpty($this->appleCurator->getRelationships());
        $this->assertNull($this->appleCurator->getArtwork());
        $this->assertNull($this->appleCurator->getEditorialNotes());
        $this->assertEmpty($this->appleCurator->getName());
        $this->assertEmpty($this->appleCurator->getUrl());
    }

    public function testArtworkSetterGetter()
    {
        $artwork = new Artwork();
        $this->appleCurator->setArtwork($artwork);
        $this->assertEquals($artwork, $this->appleCurator->getArtwork());
    }

    public function testEditorialNotesSetterGetter()
    {
        $editorialNotes = new EditorialNotes();
        $this->appleCurator->setEditorialNotes($editorialNotes);
        $this->assertEquals($editorialNotes, $this->appleCurator->getEditorialNotes());
    }

    public function testNameSetterGetter()
    {
        $this->appleCurator->setName('Apple Music Alternative');
        $this->assertEquals('Apple Music Alternative', $this->appleCurator->getName());
    }

    public function testUrlSetterGetter()
    {
        $this->appleCurator->setUrl('https://music.apple.com/us/curator/apple-music-alternative/976439526');
        $this->assertEquals('https://music.apple.com/us/curator/apple-music-alternative/976439526', $this->appleCurator->getUrl());
    }
}
