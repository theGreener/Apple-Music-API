<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class SearchResults
 * @package AppleMusic\Model
 */
class SearchResults
{
    protected $activities;
    protected $albums;
    protected $appleCurators;
    protected $artists;
    protected $curators;
    protected $musicVideos;
    protected $playlists;
    protected $songs;
    protected $stations;

    public function __construct()
    {
        $this
            ->setActivities([])
            ->setAlbums([])
            ->setAppleCurators([])
            ->setArtists([])
            ->setCurators([])
            ->setMusicVideos([])
            ->setPlaylists([])
            ->setSongs([])
            ->setStations([]);
    }

    public function getActivities(): array
    {
        return $this->activities;
    }

    public function setActivities(array $activities): SearchResults
    {
        $this->activities = $activities;

        return $this;
    }

    public function getAlbums(): array
    {
        return $this->albums;
    }

    public function setAlbums(array $albums): SearchResults
    {
        $this->albums = $albums;

        return $this;
    }

    public function getAppleCurators(): array
    {
        return $this->appleCurators;
    }

    public function setAppleCurators(array $appleCurators): SearchResults
    {
        $this->appleCurators = $appleCurators;

        return $this;
    }

    public function getArtists(): array
    {
        return $this->artists;
    }

    public function setArtists(array $artists): SearchResults
    {
        $this->artists = $artists;

        return $this;
    }

    public function getCurators(): array
    {
        return $this->curators;
    }

    public function setCurators(array $curators): SearchResults
    {
        $this->curators = $curators;

        return $this;
    }

    public function getMusicVideos(): array
    {
        return $this->musicVideos;
    }

    public function setMusicVideos(array $musicVideos): SearchResults
    {
        $this->musicVideos = $musicVideos;

        return $this;
    }

    public function getPlaylists(): array
    {
        return $this->playlists;
    }

    public function setPlaylists(array $playlists): SearchResults
    {
        $this->playlists = $playlists;

        return $this;
    }

    public function getSongs(): array
    {
        return $this->songs;
    }

    public function setSongs(array $songs): SearchResults
    {
        $this->songs = $songs;

        return $this;
    }

    public function getStations(): array
    {
        return $this->stations;
    }

    public function setStations(array $stations): SearchResults
    {
        $this->stations = $stations;

        return $this;
    }
}
