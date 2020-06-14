<?php

namespace Tests\AppleMusic\Model\Error;

use AppleMusic\Model\Error\Source;
use PHPUnit\Framework\TestCase;

class SourceTest extends TestCase
{
    protected $source;

    public function setUp()
    {
        $this->source = new Source();
    }

    public function testParameterSetterGetter()
    {
        $this->source->setParameter('term');
        $this->assertEquals('term', $this->source->getParameter());
    }

    public function testPointerSetterGetter()
    {
        $this->source->setPointer('term');
        $this->assertEquals('term', $this->source->getPointer());
    }
}
