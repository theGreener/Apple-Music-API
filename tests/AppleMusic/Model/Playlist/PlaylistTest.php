<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Playlist\Playlist;
use DateTime;
use PHPUnit\Framework\TestCase;

class PlaylistTest extends TestCase
{
    protected $playlist;

    public function setUp()
    {
        $this->playlist = new Playlist();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->playlist->getId());
        $this->assertEmpty($this->playlist->getHref());
        $this->assertEquals('library-playlists', $this->playlist->getType());
        $this->assertEmpty($this->playlist->getRelationships());
        $this->assertNull($this->playlist->getArtwork());
        $this->assertEmpty($this->playlist->getCuratorName());
        $this->assertEmpty($this->playlist->getDescription());
        $this->assertNull($this->playlist->getLastModifiedDate());
        $this->assertEmpty($this->playlist->getName());
        $this->assertNull($this->playlist->getPlayParams());
        $this->assertEmpty($this->playlist->getPlaylistType());
        $this->assertEmpty($this->playlist->getUrl());
    }

    public function testCuratorNameSetterGetter()
    {
        $this->playlist->setCuratorName('Apple Music R&B/Soul');
        $this->assertEquals('Apple Music R&B/Soul', $this->playlist->getCuratorName());
    }

    public function testLastModifiedDateSetterGetter()
    {
        $lastModifiedDate = new DateTime('2020-06-13T22:59:14Z');
        $this->playlist->setLastModifiedDate($lastModifiedDate);
        $this->assertEquals($lastModifiedDate, $this->playlist->getLastModifiedDate());
    }

    public function testPlaylistTypeSetterGetter()
    {
        $this->playlist->setPlaylistType('editorial');
        $this->assertEquals('editorial', $this->playlist->getPlaylistType());
    }

    public function testUrlSetterGetter()
    {
        $this->playlist->setUrl('https://music.apple.com/gb/playlist/janet-jackson-no-1-songs/pl.acc464c750b94302b8806e5fcbe56e17');
        $this->assertEquals('https://music.apple.com/gb/playlist/janet-jackson-no-1-songs/pl.acc464c750b94302b8806e5fcbe56e17', $this->playlist->getUrl());
    }
}
