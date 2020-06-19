<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Common\Artwork;
use PHPUnit\Framework\TestCase;

class ArtworkTest extends TestCase
{
    protected $artwork;

    public function setUp()
    {
        $this->artwork = new Artwork();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->artwork->getBgColor());
        $this->assertEquals(0, $this->artwork->getHeight());
        $this->assertEquals(0, $this->artwork->getWidth());
        $this->assertEmpty($this->artwork->getTextColor1());
        $this->assertEmpty($this->artwork->getTextColor2());
        $this->assertEmpty($this->artwork->getTextColor3());
        $this->assertEmpty($this->artwork->getTextColor4());
        $this->assertEmpty($this->artwork->getUrl());
    }

    public function testBgColorGetterSetter()
    {
        $this->artwork->setBgColor('081414');
        $this->assertEquals('081414', $this->artwork->getBgColor());
    }

    public function testHeightGetterSetter()
    {
        $this->artwork->setHeight(591);
        $this->assertEquals(591, $this->artwork->getHeight());
    }

    public function testWidthGetterSetter()
    {
        $this->artwork->setWidth(591);
        $this->assertEquals(591, $this->artwork->getWidth());
    }

    public function testTextColor1GetterSetter()
    {
        $this->artwork->setTextColor1('fefefe');
        $this->assertEquals('fefefe', $this->artwork->getTextColor1());
    }

    public function testTextColor2GetterSetter()
    {
        $this->artwork->setTextColor2('dfeeee');
        $this->assertEquals('dfeeee', $this->artwork->getTextColor2());
    }

    public function testTextColor3GetterSetter()
    {
        $this->artwork->setTextColor3('cdcfcf');
        $this->assertEquals('cdcfcf', $this->artwork->getTextColor3());
    }

    public function testTextColor4GetterSetter()
    {
        $this->artwork->setTextColor4('b4c3c3');
        $this->assertEquals('b4c3c3', $this->artwork->getTextColor4());
    }

    public function testUrlGetterSetter()
    {
        $this->artwork->setUrl('https://is5-ssl.mzstatic.com/image/thumb/Features/9a/68/e6/dj.npwkgmai.jpg/{w}x{h}bb.jpeg');
        $this->assertEquals('https://is5-ssl.mzstatic.com/image/thumb/Features/9a/68/e6/dj.npwkgmai.jpg/{w}x{h}bb.jpeg', $this->artwork->getUrl());
    }
}
