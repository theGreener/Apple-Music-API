<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Artist\Artist;
use AppleMusic\Model\Common\EditorialNotes;
use PHPUnit\Framework\TestCase;

class ArtistTest extends TestCase
{
    protected $artist;

    public function setUp()
    {
        $this->artist = new Artist();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->artist->getId());
        $this->assertEmpty($this->artist->getHref());
        $this->assertEquals('artists', $this->artist->getType());
        $this->assertEmpty($this->artist->getRelationships());
        $this->assertNull($this->artist->getEditorialNotes());
        $this->assertEmpty($this->artist->getGenreNames());
        $this->assertEmpty($this->artist->getUrl());
    }

    public function testNameSetterGetter()
    {
        $this->artist->setName('Artic Monkeys');
        $this->assertEquals('Artic Monkeys', $this->artist->getName());
    }

    public function testEditorialNotesSetterGetter()
    {
        $editorialNotes = new EditorialNotes();
        $this->artist->setEditorialNotes($editorialNotes);
        $this->assertEquals($editorialNotes, $this->artist->getEditorialNotes());
    }

    public function testGenreNamesSetterGetter()
    {
        $genres = [
            'Alternative',
            'Indie Rock',
        ];

        $this->artist->setGenreNames($genres);
        $this->assertEquals($genres, $this->artist->getGenreNames());
    }

    public function testUrlSetterGetter()
    {
        $this->artist->setUrl('https://music.apple.com/gb/artist/bruce-springsteen/178834');
        $this->assertEquals('https://music.apple.com/gb/artist/bruce-springsteen/178834', $this->artist->getUrl());
    }

    public function testToString()
    {
        $this->artist->setName('Artic Monkeys');
        $this->assertEquals('Artic Monkeys', (string) $this->artist);
    }
}
