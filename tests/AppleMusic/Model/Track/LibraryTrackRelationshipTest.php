<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\MusicVideo\LibraryMusicVideo;
use AppleMusic\Model\Song\LibrarySong;
use AppleMusic\Model\Track\LibraryTrackRelationship;
use PHPUnit\Framework\TestCase;

class LibraryTrackRelationshipTest extends TestCase
{
    protected $albumTrackRelationship;

    public function setUp()
    {
        $this->libraryTrackRelationship = new LibraryTrackRelationship();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->libraryTrackRelationship->getHref());
        $this->assertEmpty($this->libraryTrackRelationship->getData());
        $this->assertEmpty($this->libraryTrackRelationship->getNext());
    }

    public function testHrefSetterGetter()
    {
        $this->libraryTrackRelationship->setHref('/v1/me/library/albums/l.PcsLqO8/tracks');
        $this->assertEquals('/v1/me/library/albums/l.PcsLqO8/tracks', $this->libraryTrackRelationship->getHref());
    }

    public function testDataSetterGetter()
    {
        $librarySong = new LibrarySong();
        $this->libraryTrackRelationship->setData([$librarySong]);
        $this->assertContains($librarySong, $this->libraryTrackRelationship->getData());

        $LibraryMusicVideo = new LibraryMusicVideo();
        $this->libraryTrackRelationship->setData([$LibraryMusicVideo]);
        $this->assertContains($LibraryMusicVideo, $this->libraryTrackRelationship->getData());
    }

    public function testNextSetterGetter()
    {
        $this->libraryTrackRelationship->setNext('v1/me/library/albums/l.PcsLqO8/tracks?include=catalog,albums,tracks');
        $this->assertEquals('v1/me/library/albums/l.PcsLqO8/tracks?include=catalog,albums,tracks', $this->libraryTrackRelationship->getNext());
    }
}
