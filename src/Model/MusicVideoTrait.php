<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Trait MusicVideoTrait
 * @package AppleMusic\Model
 */
trait MusicVideoTrait
{
    protected $albumName;
    protected $artistName;
    protected $artwork;
    protected $contentRating;
    protected $durationInMillis;
    protected $name;
    protected $playParams;
    protected $trackNumber;

    /**
     * @return string
     */
    public function getAlbumName()
    {
        return $this->albumName;
    }

    public function setAlbumName(string $albumName): Resource
    {
        $this->albumName = $albumName;

        return $this;
    }

    public function getArtistName(): string
    {
        return $this->artistName;
    }

    /**
     * @param string $artistName
     */
    public function setArtistName($artistName): Resource
    {
        $this->artistName = $artistName;

        return $this;
    }

    /**
     * @return Artwork
     */
    public function getArtwork(): ?Artwork
    {
        return $this->artwork;
    }

    /**
     * @param Artwork $artwork
     */
    public function setArtwork(?Artwork $artwork): Resource
    {
        $this->artwork = $artwork;

        return $this;
    }

    public function getContentRating(): string
    {
        return $this->contentRating;
    }

    public function setContentRating(string $contentRating): Resource
    {
        $this->contentRating = $contentRating;

        return $this;
    }

    public function getDurationInMillis(): int
    {
        return $this->durationInMillis;
    }

    public function setDurationInMillis(int $durationInMillis): Resource
    {
        $this->durationInMillis = $durationInMillis;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Resource
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return PlayParameters
     */
    public function getPlayParams(): ?PlayParameters
    {
        return $this->playParams;
    }

    /**
     * @param PlayParameters $playParams
     */
    public function setPlayParams(?PlayParameters $playParams): Resource
    {
        $this->playParams = $playParams;

        return $this;
    }

    public function getTrackNumber(): int
    {
        return $this->trackNumber;
    }

    public function setTrackNumber(int $trackNumber): Resource
    {
        $this->trackNumber = $trackNumber;

        return $this;
    }
}
