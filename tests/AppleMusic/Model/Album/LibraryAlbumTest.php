<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Common\Artwork;
use AppleMusic\Model\Album\LibraryAlbum;
use AppleMusic\Model\Common\PlayParameters;
use PHPUnit\Framework\TestCase;

class LibraryAlbumTest extends TestCase
{
    protected $libraryAlbum;

    public function setUp()
    {
        $this->libraryAlbum = new LibraryAlbum();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->libraryAlbum->getId());
        $this->assertEmpty($this->libraryAlbum->getHref());
        $this->assertEquals('library-albums', $this->libraryAlbum->getType());
        $this->assertEmpty($this->libraryAlbum->getRelationships());
        $this->assertEmpty($this->libraryAlbum->getArtistName());
        $this->assertNull($this->libraryAlbum->getArtwork());
        $this->assertEmpty($this->libraryAlbum->getContentRating());
        $this->assertEmpty($this->libraryAlbum->getName());
        $this->assertNull($this->libraryAlbum->getPlayParams());
        $this->assertEquals(-1, $this->libraryAlbum->getTrackCount());
    }

    public function testArtistNameSetterGetter()
    {
        $this->libraryAlbum->setArtistName('Arctic Monkeys');
        $this->assertEquals('Arctic Monkeys', $this->libraryAlbum->getArtistName());
    }

    public function testArtworkSetterGetter()
    {
        $artwork = new Artwork();
        $this->libraryAlbum->setArtwork($artwork);
        $this->assertEquals($artwork, $this->libraryAlbum->getArtwork());
    }

    public function testContentRatingNameSetterGetter()
    {
        $this->libraryAlbum->setContentRating('PARENTAL ADVISORY');
        $this->assertEquals('PARENTAL ADVISORY', $this->libraryAlbum->getContentRating());
    }

    public function testNameSetterGetter()
    {
        $this->libraryAlbum->setName('AM');
        $this->assertEquals('AM', $this->libraryAlbum->getName());
    }

    public function testPlayParamsSetterGetter()
    {
        $playParams = new PlayParameters();
        $this->libraryAlbum->setPlayParams($playParams);
        $this->assertEquals($playParams, $this->libraryAlbum->getPlayParams());
    }

    public function testTrackCountSetterGetter()
    {
        $this->libraryAlbum->setTrackCount(12);
        $this->assertEquals(12, $this->libraryAlbum->getTrackCount());
    }
}
