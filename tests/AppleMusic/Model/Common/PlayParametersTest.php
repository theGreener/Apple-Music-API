<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Common\PlayParameters;
use PHPUnit\Framework\TestCase;

class PlayParametersTest extends TestCase
{
    protected $playParameters;

    public function setUp()
    {
        $this->playParameters = new PlayParameters();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->playParameters->getId());
        $this->assertEmpty($this->playParameters->getKind());
        $this->assertFalse($this->playParameters->getIsLibrary());
        $this->assertFalse($this->playParameters->getReporting());
        $this->assertEmpty($this->playParameters->getCatalogId());
    }

    public function testIdGetterSetter()
    {
        $this->playParameters->setId('111153953');
        $this->assertEquals('111153953', $this->playParameters->getId());

        $this->playParameters->setId('l.GB1J0mz');
        $this->assertEquals('l.GB1J0mz', $this->playParameters->getId());
    }

    public function testKindGetterSetter()
    {
        $this->playParameters->setKind('album');
        $this->assertEquals('album', $this->playParameters->getKind());
    }

    public function testIsLibraryGetterSetter()
    {
        $this->playParameters->setIsLibrary(true);
        $this->assertTrue($this->playParameters->getIsLibrary());
    }

    public function testReportingGetterSetter()
    {
        $this->playParameters->setReporting(true);
        $this->assertTrue($this->playParameters->getReporting());
    }

    public function testCatalogIdGetterSetter()
    {
        $this->playParameters->setCatalogId('330283247');
        $this->assertEquals('330283247', $this->playParameters->getCatalogId());
    }
}
