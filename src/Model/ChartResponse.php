<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class ChartResponse
 * @package AppleMusic\Model
 */
class ChartResponse
{
    protected $albums;
    protected $musicVideos;
    protected $songs;

    public function __construct()
    {
        $this
            ->setAlbums(null)
            ->setMusicVideos(null)
            ->setSongs(null);
    }

    /**
     * @return Chart
     */
    public function getAlbums(): ?Chart
    {
        return $this->albums;
    }

    /**
     * @param Chart $albums
     */
    public function setAlbums(?Chart $albums): ChartResponse
    {
        $this->albums = $albums;

        return $this;
    }

    /**
     * @return Chart
     */
    public function getMusicVideos(): ?Chart
    {
        return $this->musicVideos;
    }

    /**
     * @param Chart $musicVideos
     */
    public function setMusicVideos(?Chart $musicVideos): ChartResponse
    {
        $this->musicVideos = $musicVideos;

        return $this;
    }

    /**
     * @return Chart
     */
    public function getSongs(): ?Chart
    {
        return $this->songs;
    }

    /**
     * @param Chart $songs
     */
    public function setSongs(?Chart $songs): ChartResponse
    {
        $this->songs = $songs;

        return $this;
    }
}
