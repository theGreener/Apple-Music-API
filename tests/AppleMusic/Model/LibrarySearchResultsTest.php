<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\LibraryAlbum;
use AppleMusic\Model\LibraryArtist;
use AppleMusic\Model\LibraryMusicVideo;
use AppleMusic\Model\LibraryPlaylist;
use AppleMusic\Model\LibrarySearchResults;
use AppleMusic\Model\LibrarySong;
use PHPUnit\Framework\TestCase;

class LibrarySearchResultsTest extends TestCase
{
    protected $librarySearchResults;

    public function setUp()
    {
        $this->librarySearchResults = new LibrarySearchResults();
    }

    public function testLibraryAlbumsSetterGetter()
    {
        $album = new LibraryAlbum();
        $this->librarySearchResults->setLibraryAlbums([$album]);
        $this->assertContains($album, $this->librarySearchResults->getLibraryAlbums());
    }

    public function testLibraryArtistsSetterGetter()
    {
        $artist = new LibraryArtist();
        $this->librarySearchResults->setLibraryArtists([$artist]);
        $this->assertContains($artist, $this->librarySearchResults->getLibraryArtists());
    }

    public function testLibraryMusicVideosSetterGetter()
    {
        $musicVideo = new LibraryMusicVideo();
        $this->librarySearchResults->setLibraryMusicVideos([$musicVideo]);
        $this->assertContains($musicVideo, $this->librarySearchResults->getLibraryMusicVideos());
    }

    public function testLibraryPlaylistsSetterGetter()
    {
        $playlist = new LibraryPlaylist();
        $this->librarySearchResults->setLibraryPlaylists([$playlist]);
        $this->assertContains($playlist, $this->librarySearchResults->getLibraryPlaylists());
    }

    public function testLibrarySongsSetterGetter()
    {
        $song = new LibrarySong();
        $this->librarySearchResults->setLibrarySongs([$song]);
        $this->assertContains($song, $this->librarySearchResults->getLibrarySongs());
    }
}
