<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Common\Error;
use AppleMusic\Model\Error\Source;
use PHPUnit\Framework\TestCase;

class ErrorTest extends TestCase
{
    protected $error;

    public function setUp()
    {
        $this->error = new Error();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->error->getId());
        $this->assertEmpty($this->error->getTitle());
        $this->assertEmpty($this->error->getDetail());
        $this->assertEmpty($this->error->getStatus());
        $this->assertEmpty($this->error->getCode());
        $this->assertNull($this->error->getSource());
    }

    public function testIdSetterGetter()
    {
        $this->error->setId('A5T3EHQ5BSTQI5QTWNEW4TDTUM');
        $this->assertEquals('A5T3EHQ5BSTQI5QTWNEW4TDTUM', $this->error->getId());
    }

    public function testTitleSetterGetter()
    {
        $this->error->setTitle('Missing Parameter');
        $this->assertEquals('Missing Parameter', $this->error->getTitle());
    }

    public function testDetailSetterGetter()
    {
        $this->error->setDetail('A single search term must be supplied');
        $this->assertEquals('A single search term must be supplied', $this->error->getDetail());
    }

    public function testStatusSetterGetter()
    {
        $this->error->setStatus('400');
        $this->assertEquals('400', $this->error->getStatus());
    }

    public function testCodeSetterGetter()
    {
        $this->error->setCode('40003');
        $this->assertEquals('40003', $this->error->getCode());
    }

    public function testSourceSetterGetter()
    {
        $source = new Source();
        $source->setParameter('term');

        $this->error->setSource($source);
        $this->assertEquals($source, $this->error->getSource());
    }
}
