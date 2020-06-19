<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Activity\Activity;
use AppleMusic\Model\Album\Album;
use AppleMusic\Model\Curator\AppleCurator;
use AppleMusic\Model\Artist\Artist;
use AppleMusic\Model\Curator\Curator;
use AppleMusic\Model\MusicVideo\MusicVideo;
use AppleMusic\Model\Playlist\Playlist;
use AppleMusic\Model\Search\SearchResults;
use AppleMusic\Model\Song\Song;
use AppleMusic\Model\Station\Station;
use PHPUnit\Framework\TestCase;

class SearchResultsTest extends TestCase
{
    protected $searchResults;

    public function setUp()
    {
        $this->searchResults = new SearchResults();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->searchResults->getActivities());
        $this->assertEmpty($this->searchResults->getAlbums());
        $this->assertEmpty($this->searchResults->getAppleCurators());
        $this->assertEmpty($this->searchResults->getArtists());
        $this->assertEmpty($this->searchResults->getCurators());
        $this->assertEmpty($this->searchResults->getMusicVideos());
        $this->assertEmpty($this->searchResults->getPlaylists());
        $this->assertEmpty($this->searchResults->getSongs());
        $this->assertEmpty($this->searchResults->getStations());
    }

    public function testActivitesSetterGetter()
    {
        $activity = new Activity();
        $this->searchResults->setActivities([$activity]);
        $this->assertContains($activity, $this->searchResults->getActivities());
    }

    public function testAlbumsSetterGetter()
    {
        $album = new Album();
        $this->searchResults->setAlbums([$album]);
        $this->assertContains($album, $this->searchResults->getAlbums());
    }

    public function testAppleCuratorsSetterGetter()
    {
        $appleCurator = new AppleCurator();
        $this->searchResults->setAppleCurators([$appleCurator]);
        $this->assertContains($appleCurator, $this->searchResults->getAppleCurators());
    }

    public function testArtistsSetterGetter()
    {
        $artist = new Artist();
        $this->searchResults->setArtists([$artist]);
        $this->assertContains($artist, $this->searchResults->getArtists());
    }

    public function testCuratorsSetterGetter()
    {
        $curator = new Curator();
        $this->searchResults->setCurators([$curator]);
        $this->assertContains($curator, $this->searchResults->getCurators());
    }

    public function testMusicVideosSetterGetter()
    {
        $musicVideo = new MusicVideo();
        $this->searchResults->setMusicVideos([$musicVideo]);
        $this->assertContains($musicVideo, $this->searchResults->getMusicVideos());
    }

    public function testPlaylistsSetterGetter()
    {
        $playlist = new Playlist();
        $this->searchResults->setPlaylists([$playlist]);
        $this->assertContains($playlist, $this->searchResults->getPlaylists());
    }

    public function testSongsSetterGetter()
    {
        $song = new Song();
        $this->searchResults->setSongs([$song]);
        $this->assertContains($song, $this->searchResults->getSongs());
    }

    public function testStationsSetterGetter()
    {
        $stations = new Station();
        $this->searchResults->setStations([$stations]);
        $this->assertContains($stations, $this->searchResults->getStations());
    }
}
