<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Chart;
use AppleMusic\Model\ChartResponse;
use PHPUnit\Framework\TestCase;

class ChartResponseTest extends TestCase
{
    protected $chartResponse;

    public function setUp()
    {
        $this->chartResponse = new ChartResponse();
    }

    public function testDefaultValues()
    {
        $this->assertNull($this->chartResponse->getAlbums());
        $this->assertNull($this->chartResponse->getMusicVideos());
        $this->assertNull($this->chartResponse->getSongs());
    }

    public function testAlbumsSetterGetter()
    {
        $chart = new Chart();
        $this->chartResponse->setAlbums($chart);
        $this->assertEquals($chart, $this->chartResponse->getAlbums());
    }

    public function testMusicVideosSetterGetter()
    {
        $chart = new Chart();
        $this->chartResponse->setMusicVideos($chart);
        $this->assertEquals($chart, $this->chartResponse->getMusicVideos());
    }

    public function testSongsSetterGetter()
    {
        $chart = new Chart();
        $this->chartResponse->setSongs($chart);
        $this->assertEquals($chart, $this->chartResponse->getSongs());
    }
}
