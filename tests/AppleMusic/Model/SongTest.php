<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\EditorialNotes;
use AppleMusic\Model\Preview;
use AppleMusic\Model\Song;
use DateTime;
use PHPUnit\Framework\TestCase;

class SongTest extends TestCase
{
    protected $song;

    public function setUp()
    {
        $this->song = new Song();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->song->getId());
        $this->assertEmpty($this->song->getHref());
        $this->assertEquals('songs', $this->song->getType());
        $this->assertEmpty($this->song->getRelationships());
        $this->assertEmpty($this->song->getAlbumName());
        $this->assertEmpty($this->song->getArtistName());
        $this->assertNull($this->song->getArtwork());
        $this->assertEmpty($this->song->getContentRating());
        $this->assertEquals(0, $this->song->getDiscNumber());
        $this->assertEquals(0, $this->song->getDurationInMillis());
        $this->assertNull($this->song->getEditorialNotes());
        $this->assertEmpty($this->song->getGenreNames());
        $this->assertEmpty($this->song->getIsrc());
        $this->assertEquals(0, $this->song->getMovementCount());
        $this->assertEmpty($this->song->getMovementName());
        $this->assertEquals(0, $this->song->getMovementNumber());
        $this->assertEmpty($this->song->getName());
        $this->assertNull($this->song->getPlayParams());
        $this->assertEmpty($this->song->getPreviews());
        $this->assertNull($this->song->getReleaseDate());
        $this->assertEquals(0, $this->song->getTrackNumber());
        $this->assertEmpty($this->song->getUrl());
        $this->assertEmpty($this->song->getWorkName());
    }

    public function testComposerNameSetterGetter()
    {
        $this->song->setComposerName('Michael de Jong');
        $this->assertEquals('Michael de Jong', $this->song->getComposerName());
    }

    public function testEditorialNotesSetterGetter()
    {
        $editorialNotes = new EditorialNotes();
        $this->song->setEditorialNotes($editorialNotes);
        $this->assertEquals($editorialNotes, $this->song->getEditorialNotes());
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

        $this->song->setGenreNames($genreNames);
        $this->assertEquals($genreNames, $this->song->getGenreNames());
    }

    public function testIsrcSetterGetter()
    {
        $this->song->setIsrc('NLH851300057');
        $this->assertEquals('NLH851300057', $this->song->getIsrc());
    }

    public function testMovementCountSetterGetter()
    {
        $this->song->setMovementCount(33);
        $this->assertEquals(33, $this->song->getMovementCount());
    }

    public function testMovementNameSetterGetter()
    {
        $this->song->setWorkName('Movement name');
        $this->assertEquals('Movement name', $this->song->getWorkName());
    }

    public function testMovementNumberSetterGetter()
    {
        $this->song->setMovementNumber(12);
        $this->assertEquals(12, $this->song->getMovementNumber());
    }

    public function testPreviewsSetterGetter()
    {
        $preview = new Preview();
        $preview->setUrl('https://audio-ssl.itunes.apple.com/itunes-assets/Music3/v4/0e/87/8d/0e878d76-734f-39b3-8904-00c1fa873088/mzaf_8986718721308175601.plus.aac.p.m4a');

        $previews = [
            $preview,
        ];

        $this->song->setPreviews($previews);
        $this->assertEquals($previews, $this->song->getPreviews());
    }

    public function testReleaseDateSetterGetter()
    {
        $releaseDate = new DateTime('2014-07-11');
        $this->song->setReleaseDate($releaseDate);
        $this->assertEquals($releaseDate, $this->song->getReleaseDate());
    }

    public function testUrlSetterGetter()
    {
        $this->song->setUrl('https://music.apple.com/gb/album/something-for-the-pain/900032785?i=900032829');
        $this->assertEquals('https://music.apple.com/gb/album/something-for-the-pain/900032785?i=900032829', $this->song->getUrl());
    }

    public function testWorkNameSetterGetter()
    {
        $this->song->setWorkName('Work name');
        $this->assertEquals('Work name', $this->song->getWorkName());
    }
}
