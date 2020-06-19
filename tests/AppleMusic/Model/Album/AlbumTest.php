<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Album\Album;
use AppleMusic\Model\Common\Artwork;
use AppleMusic\Model\Common\EditorialNotes;
use AppleMusic\Model\Common\PlayParameters;
use DateTime;
use PHPUnit\Framework\TestCase;

class AlbumTest extends TestCase
{
    protected $album;

    public function setUp()
    {
        $this->album = new Album();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->album->getId());
        $this->assertEmpty($this->album->getHref());
        $this->assertEquals('albums', $this->album->getType());
        $this->assertEmpty($this->album->getRelationships());
        $this->assertEmpty($this->album->getAlbumName());
        $this->assertEmpty($this->album->getArtistName());
        $this->assertNull($this->album->getArtwork());
        $this->assertEmpty($this->album->getContentRating());
        $this->assertEmpty($this->album->getCopyright());
        $this->assertNull($this->album->getEditorialNotes());
        $this->assertEmpty($this->album->getGenreNames());
        $this->assertFalse($this->album->getIsComplete());
        $this->assertFalse($this->album->getIsSingle());
        $this->assertEmpty($this->album->getName());
        $this->assertNull($this->album->getPlayParams());
        $this->assertEmpty($this->album->getRecordLabel());
        $this->assertNull($this->album->getReleaseDate());
        $this->assertEquals(0, $this->album->getTrackCount());
        $this->assertEmpty($this->album->getUrl());
        $this->assertFalse($this->album->getIsMasteredForItunes());
    }

    public function testAlbumNameSetterGetter()
    {
        $this->album->setAlbumName('London Calling');
        $this->assertEquals('London Calling', $this->album->getAlbumName());
    }

    public function testArtistNameSetterGetter()
    {
        $this->album->setArtistName('The Clash');
        $this->assertEquals('The Clash', $this->album->getArtistName());
    }

    public function testArtworkSetterGetter()
    {
        $artwork = new Artwork();
        $this->album->setArtwork($artwork);
        $this->assertEquals($artwork, $this->album->getArtwork());
    }

    public function testContentRatingSetterGetter()
    {
        $this->album->setContentRating('PARENTAL ADVISORY');
        $this->assertEquals('PARENTAL ADVISORY', $this->album->getContentRating());
    }

    public function testCopyrightSetterGetter()
    {
        $this->album->setCopyright('℗ 2013 Sony Music Entertainment UK Limited');
        $this->assertEquals('℗ 2013 Sony Music Entertainment UK Limited', $this->album->getCopyright());
    }

    public function testEditorialNotesSetterGetter()
    {
        $editorialNotes = new EditorialNotes();
        $this->album->setEditorialNotes($editorialNotes);
        $this->assertEquals($editorialNotes, $this->album->getEditorialNotes());
    }

    public function testGenreNamesSetterGetter()
    {
        $genreNames = [
            'Punk',
            'Music',
            'Alternative',
            'New Wave',
            'Rock',
            'Rock & Roll',
            'Hard Rock',
        ];

        $this->album->setGenreNames($genreNames);
        $this->assertEquals($genreNames, $this->album->getGenreNames());
    }

    public function testIsCompleteSetterGetter()
    {
        $this->album->setIsComplete(true);
        $this->assertTrue($this->album->getIsComplete());
    }

    public function testIsSingleSetterGetter()
    {
        $this->album->setIsSingle(true);
        $this->assertTrue($this->album->getIsSingle());
    }

    public function testNameSetterGetter()
    {
        $this->album->setName('AM');
        $this->assertEquals('AM', $this->album->getName());
    }

    public function testPlayParamsSetterGetter()
    {
        $playParams = new PlayParameters();
        $this->album->setPlayParams($playParams);
        $this->assertEquals($playParams, $this->album->getPlayParams());
    }

    public function testRecordLabelSetterGetter()
    {
        $this->album->setRecordLabel('Sony Music UK');
        $this->assertEquals('Sony Music UK', $this->album->getRecordLabel());
    }

    public function testReleaseDateSetterGetter()
    {
        $releaseDate = new DateTime('1979-12-14');
        $this->album->setReleaseDate($releaseDate);
        $this->assertEquals($releaseDate, $this->album->getReleaseDate());
    }

    public function testTrackCountSetterGetter()
    {
        $this->album->setTrackCount(12);
        $this->assertEquals(12, $this->album->getTrackCount());
    }

    public function testUrlSetterGetter()
    {
        $this->album->setUrl('https://music.apple.com/gb/album/london-calling/684811762');
        $this->assertEquals('https://music.apple.com/gb/album/london-calling/684811762', $this->album->getUrl());
    }

    public function testIsMasteredForItunesSetterGetter()
    {
        $this->album->setIsMasteredForItunes(true);
        $this->assertTrue($this->album->getIsMasteredForItunes());
    }
}
