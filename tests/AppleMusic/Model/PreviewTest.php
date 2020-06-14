<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Artwork;
use AppleMusic\Model\Preview;
use PHPUnit\Framework\TestCase;

class PreviewTest extends TestCase
{
    protected $preview;

    public function setUp()
    {
        $this->preview = new Preview();
    }

    public function testDefaultValues()
    {
        $this->assertNull($this->preview->getArtwork());
        $this->assertEmpty($this->preview->getUrl());
    }

    public function testArtworkGetterSetter()
    {
        $artwork = new Artwork();
        $this->preview->setArtwork($artwork);
        $this->assertEquals($artwork, $this->preview->getArtwork());
    }

    public function testUrlGetterSetter()
    {
        $this->preview->setUrl('https://is5-ssl.mzstatic.com/image/thumb/Features/9a/68/e6/dj.npwkgmai.jpg/{w}x{h}bb.jpeg');
        $this->assertEquals('https://is5-ssl.mzstatic.com/image/thumb/Features/9a/68/e6/dj.npwkgmai.jpg/{w}x{h}bb.jpeg', $this->preview->getUrl());
    }
}
