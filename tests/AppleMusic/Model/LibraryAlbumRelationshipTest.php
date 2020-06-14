<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\LibraryAlbum;
use AppleMusic\Model\LibraryAlbumRelationship;
use PHPUnit\Framework\TestCase;

class LibraryAlbumRelationshipTest extends TestCase
{
    protected $libraryAlbumRelationship;

    public function setUp()
    {
        $this->libraryAlbumRelationship = new LibraryAlbumRelationship();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->libraryAlbumRelationship->getHref());
        $this->assertEmpty($this->libraryAlbumRelationship->getData());
        $this->assertEmpty($this->libraryAlbumRelationship->getNext());
    }

    public function testHrefSetterGetter()
    {
        $this->libraryAlbumRelationship->setHref('/v1/me/library/songs/i.QO7Pf2rWEP/albums');
        $this->assertEquals('/v1/me/library/songs/i.QO7Pf2rWEP/albums', $this->libraryAlbumRelationship->getHref());
    }

    public function testDataSetterGetter()
    {
        $libraryAlbum = new LibraryAlbum();
        $this->libraryAlbumRelationship->setData([$libraryAlbum]);
        $this->assertContains($libraryAlbum, $this->libraryAlbumRelationship->getData());
    }

    public function testNextSetterGetter()
    {
        $this->libraryAlbumRelationship->setNext('/v1/me/library/songs/i.QO7Pf2rWEP/albums');
        $this->assertEquals('/v1/me/library/songs/i.QO7Pf2rWEP/albums', $this->libraryAlbumRelationship->getNext());
    }
}
