<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\LibrarySong;
use PHPUnit\Framework\TestCase;

class LibrarySongTest extends TestCase
{
    protected $librarySong;

    public function setUp()
    {
        $this->librarySong = new LibrarySong();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->librarySong->getId());
        $this->assertEmpty($this->librarySong->getHref());
        $this->assertEquals('library-songs', $this->librarySong->getType());
        $this->assertEmpty($this->librarySong->getRelationships());
        $this->assertEmpty($this->librarySong->getAlbumName());
        $this->assertEmpty($this->librarySong->getArtistName());
        $this->assertNull($this->librarySong->getArtwork());
        $this->assertEmpty($this->librarySong->getContentRating());
        $this->assertEquals(0, $this->librarySong->getDiscNumber());
        $this->assertEquals(0, $this->librarySong->getDurationInMillis());
        $this->assertEmpty($this->librarySong->getName());
        $this->assertNull($this->librarySong->getPlayParams());
        $this->assertEquals(0, $this->librarySong->getTrackNumber());
    }
}
