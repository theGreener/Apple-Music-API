<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\LibraryAlbum;
use AppleMusic\Model\LibraryAlbumResponse;
use PHPUnit\Framework\TestCase;

class LibraryAlbumResponseTest extends TestCase
{
    protected $libraryAlbumResponse;

    public function setUp()
    {
        $this->libraryAlbumResponse = new LibraryAlbumResponse();
    }

    public function testDefaultValues()
    {
        $this->assertNull($this->libraryAlbumResponse->getData());
        $this->assertNull($this->libraryAlbumResponse->getErrors());
        $this->assertEmpty($this->libraryAlbumResponse->getHref());
        $this->assertEmpty($this->libraryAlbumResponse->getNext());
        $this->assertNull($this->libraryAlbumResponse->getResults());
    }

    public function testDataSetterGetter()
    {
        $album = new LibraryAlbum();
        $this->libraryAlbumResponse->setData([$album]);
        $this->assertContains($album, $this->libraryAlbumResponse->getData());
    }
}
