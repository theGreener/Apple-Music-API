<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Album\Album;
use AppleMusic\Model\Chart\Chart;
use PHPUnit\Framework\TestCase;

class ChartTest extends TestCase
{
    protected $chart;

    public function setUp()
    {
        $this->chart = new Chart();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->chart->getChart());
        $this->assertEmpty($this->chart->getData());
        $this->assertEmpty($this->chart->getHref());
        $this->assertEmpty($this->chart->getName());
        $this->assertEmpty($this->chart->getNext());
    }

    public function testChartSetterGetter()
    {
        $this->chart->setChart('most-played');
        $this->assertEquals('most-played', $this->chart->getChart());
    }

    public function testDataSetterGetter()
    {
        $album = new Album();
        $this->chart->setData([$album]);
        $this->assertContains($album, $this->chart->getData());
    }

    public function testHrefSetterGetter()
    {
        $this->chart->setHref('/v1/catalog/gb/charts?chart=most-played&types=albums');
        $this->assertEquals('/v1/catalog/gb/charts?chart=most-played&types=albums', $this->chart->getHref());
    }

    public function testNameSetterGetter()
    {
        $this->chart->setName('Top Albums');
        $this->assertEquals('Top Albums', $this->chart->getName());
    }

    public function testNextSetterGetter()
    {
        $this->chart->setNext('/v1/catalog/gb/charts?chart=most-played&offset=20&types=albums');
        $this->assertEquals('/v1/catalog/gb/charts?chart=most-played&offset=20&types=albums', $this->chart->getNext());
    }
}
