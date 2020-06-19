<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Common\EditorialNotes;
use AppleMusic\Model\MusicVideo\MusicVideo;
use AppleMusic\Model\Common\Preview;
use DateTime;
use PHPUnit\Framework\TestCase;

class MusicVideoTest extends TestCase
{
    protected $musicVideo;

    public function setUp()
    {
        $this->musicVideo = new MusicVideo();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->musicVideo->getId());
        $this->assertEmpty($this->musicVideo->getHref());
        $this->assertEquals('music-videos', $this->musicVideo->getType());
        $this->assertEmpty($this->musicVideo->getRelationships());
        $this->assertEmpty($this->musicVideo->getAlbumName());
        $this->assertEmpty($this->musicVideo->getArtistName());
        $this->assertNull($this->musicVideo->getArtwork());
        $this->assertEmpty($this->musicVideo->getContentRating());
        $this->assertEquals(0, $this->musicVideo->getDurationInMillis());
        $this->assertNull($this->musicVideo->getEditorialNotes());
        $this->assertEmpty($this->musicVideo->getGenreNames());
        $this->assertEmpty($this->musicVideo->getIsrc());
        $this->assertEmpty($this->musicVideo->getName());
        $this->assertNull($this->musicVideo->getPlayParams());
        $this->assertEmpty($this->musicVideo->getPreviews());
        $this->assertNull($this->musicVideo->getReleaseDate());
        $this->assertEquals(0, $this->musicVideo->getTrackNumber());
        $this->assertEmpty($this->musicVideo->getUrl());
        $this->assertEmpty($this->musicVideo->getVideoSubType());
        $this->assertFalse($this->musicVideo->getHasHDR());
        $this->assertFalse($this->musicVideo->getHas4K());
    }

    public function testEditorialNotesSetterGetter()
    {
        $editorialNotes = new EditorialNotes();
        $this->musicVideo->setEditorialNotes($editorialNotes);
        $this->assertEquals($editorialNotes, $this->musicVideo->getEditorialNotes());
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

        $this->musicVideo->setGenreNames($genreNames);
        $this->assertEquals($genreNames, $this->musicVideo->getGenreNames());
    }

    public function testIsrcSetterGetter()
    {
        $this->musicVideo->setIsrc('GBDCE0900012');
        $this->assertEquals('GBDCE0900012', $this->musicVideo->getIsrc());
    }

    public function testPreviewsSetterGetter()
    {
        $preview = new Preview();
        $preview->setUrl('https://video-ssl.itunes.apple.com/itunes-assets/Video128/v4/0d/16/37/0d163730-016b-d688-c8d7-dce416677dac/mzvf_49732681106238244.640x480.h264lc.U.p.m4v');

        $previews = [
            $preview,
        ];

        $this->musicVideo->setPreviews($previews);
        $this->assertEquals($previews, $this->musicVideo->getPreviews());
    }

    public function testReleaseDateSetterGetter()
    {
        $releaseDate = new DateTime('2014-07-11');
        $this->musicVideo->setReleaseDate($releaseDate);
        $this->assertEquals($releaseDate, $this->musicVideo->getReleaseDate());
    }

    public function testUrlSetterGetter()
    {
        $this->musicVideo->setUrl('https://music.apple.com/gb/music-video/rubber-soul-documentary/401135199');
        $this->assertEquals('https://music.apple.com/gb/music-video/rubber-soul-documentary/401135199', $this->musicVideo->getUrl());
    }

    public function testVideoSubTypeSetterGetter()
    {
        $this->musicVideo->setVideoSubType('Video sub type');
        $this->assertEquals('Video sub type', $this->musicVideo->getVideoSubType());
    }

    public function testHasHDRSetterGetter()
    {
        $this->musicVideo->setHasHDR(true);
        $this->assertTrue($this->musicVideo->getHasHDR());
    }

    public function testHas4KSetterGetter()
    {
        $this->musicVideo->setHas4K(true);
        $this->assertTrue($this->musicVideo->getHas4K());
    }
}
