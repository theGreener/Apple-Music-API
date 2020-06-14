<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Album;
use AppleMusic\Model\AlbumResponse;
use PHPUnit\Framework\TestCase;

class AlbumResponseTest extends TestCase
{
    protected $albumResponse;

    public function setUp()
    {
        $this->albumResponse = new AlbumResponse();
    }

    public function testDefaultValues()
    {
        $this->assertNull($this->albumResponse->getData());
        $this->assertNull($this->albumResponse->getErrors());
        $this->assertEmpty($this->albumResponse->getHref());
        $this->assertEmpty($this->albumResponse->getNext());
        $this->assertNull($this->albumResponse->getResults());
    }

    public function testDataSetterGetter()
    {
        $album = new Album();
        $this->albumResponse->setData([$album]);
        $this->assertContains($album, $this->albumResponse->getData());
    }
}
