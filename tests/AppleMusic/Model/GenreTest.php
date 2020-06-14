<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Genre;
use PHPUnit\Framework\TestCase;

class GenreTest extends TestCase
{
    protected $genre;

    public function setUp()
    {
        $this->genre = new Genre();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->genre->getId());
        $this->assertEmpty($this->genre->getHref());
        $this->assertEquals('genres', $this->genre->getType());
        $this->assertEmpty($this->genre->getRelationships());
        $this->assertEmpty($this->genre->getName());
    }

    public function testNameSetterGetter()
    {
        $this->genre->setName('Alternative');
        $this->assertEquals('Alternative', $this->genre->getName());
    }
}
