<?php

declare(strict_types=1);

namespace AppleMusic\Model\Search;

/**
 * Class LibrarySearchResults
 * @package AppleMusic\Model
 */
class LibrarySearchResults
{
    protected $libraryAlbums;
    protected $libraryArtists;
    protected $libraryMusicVideos;
    protected $libraryPlaylists;
    protected $librarySongs;

    public function __construct()
    {
        $this
            ->setLibraryAlbums([])
            ->setLibraryArtists([])
            ->setLibraryMusicVideos([])
            ->setLibraryPlaylists([])
            ->setLibrarySongs([]);
    }

    public function getLibraryAlbums(): array
    {
        return $this->libraryAlbums;
    }

    public function setLibraryAlbums(array $libraryAlbums): LibrarySearchResults
    {
        $this->libraryAlbums = $libraryAlbums;

        return $this;
    }

    public function getLibraryArtists(): array
    {
        return $this->libraryArtists;
    }

    public function setLibraryArtists(array $libraryArtists): LibrarySearchResults
    {
        $this->libraryArtists = $libraryArtists;

        return $this;
    }

    public function getLibraryMusicVideos(): array
    {
        return $this->libraryMusicVideos;
    }

    public function setLibraryMusicVideos(array $libraryMusicVideos): LibrarySearchResults
    {
        $this->libraryMusicVideos = $libraryMusicVideos;

        return $this;
    }

    public function getLibraryPlaylists(): array
    {
        return $this->libraryPlaylists;
    }

    public function setLibraryPlaylists(array $libraryPlaylists): LibrarySearchResults
    {
        $this->libraryPlaylists = $libraryPlaylists;

        return $this;
    }

    public function getLibrarySongs(): array
    {
        return $this->librarySongs;
    }

    public function setLibrarySongs(array $librarySongs): LibrarySearchResults
    {
        $this->librarySongs = $librarySongs;

        return $this;
    }
}
