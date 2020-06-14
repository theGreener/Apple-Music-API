<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\LibraryPlaylist;
use PHPUnit\Framework\TestCase;

class LibraryPlaylistTest extends TestCase
{
    protected $libraryPlaylist;

    public function setUp()
    {
        $this->libraryPlaylist = new LibraryPlaylist();
    }

    public function testDefaultValues()
    {
        $this->assertNull($this->libraryPlaylist->getArtwork());
        $this->assertEmpty($this->libraryPlaylist->getDescription());
        $this->assertEmpty($this->libraryPlaylist->getName());
        $this->assertNull($this->libraryPlaylist->getPlayParams());
        $this->assertFalse($this->libraryPlaylist->getCanEdit());
    }

    public function testCanEditSetterGetter()
    {
        $this->libraryPlaylist->setCanEdit(true);
        $this->assertTrue($this->libraryPlaylist->getCanEdit());
    }
}
