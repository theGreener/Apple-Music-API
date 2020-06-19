<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\MusicVideo\LibraryMusicVideo;
use PHPUnit\Framework\TestCase;

class LibraryMusicVideoTest extends TestCase
{
    protected $libraryMusicVideo;

    public function setUp()
    {
        $this->libraryMusicVideo = new LibraryMusicVideo();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->libraryMusicVideo->getId());
        $this->assertEquals('library-music-videos', $this->libraryMusicVideo->getType());
        $this->assertEmpty($this->libraryMusicVideo->getHref());
        $this->assertEmpty($this->libraryMusicVideo->getAlbumName());
        $this->assertEmpty($this->libraryMusicVideo->getArtistName());
        $this->assertNull($this->libraryMusicVideo->getArtwork());
        $this->assertEmpty($this->libraryMusicVideo->getContentRating());
        $this->assertEquals(0, $this->libraryMusicVideo->getDurationInMillis());
        $this->assertEmpty($this->libraryMusicVideo->getName());
        $this->assertNull($this->libraryMusicVideo->getPlayParams());
        $this->assertEquals(0, $this->libraryMusicVideo->getTrackNumber());
    }
}
