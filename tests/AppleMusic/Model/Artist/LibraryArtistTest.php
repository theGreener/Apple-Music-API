<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Artist\LibraryArtist;
use PHPUnit\Framework\TestCase;

class LibraryArtistTest extends TestCase
{
    protected $libraryArtist;

    public function setUp()
    {
        $this->libraryArtist = new LibraryArtist();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->libraryArtist->getId());
        $this->assertEmpty($this->libraryArtist->getHref());
        $this->assertEquals('library-artists', $this->libraryArtist->getType());
        $this->assertEmpty($this->libraryArtist->getRelationships());
        $this->assertEmpty($this->libraryArtist->getName());
    }

    public function testName()
    {
        $this->libraryArtist->setName('Artic Monkeys');
        $this->assertEquals('Artic Monkeys', $this->libraryArtist->getName());
    }
}
