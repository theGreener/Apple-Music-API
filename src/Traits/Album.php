<?php

declare(strict_types=1);

namespace AppleMusic\Traits;

use AppleMusic\Model\Common\Artwork;
use AppleMusic\Model\Common\PlayParameters;
use AppleMusic\Model\Common\Resource;

/**
 * Trait AlbumTrait
 * @package AppleMusic\Model
 */
trait Album
{
    protected $artistName;
    protected $artwork;
    protected $contentRating;
    protected $name;
    protected $playParams;
    protected $trackCount;

    public function getArtistName(): string
    {
        return $this->artistName;
    }

    public function setArtistName(string $artistName): Resource
    {
        $this->artistName = $artistName;

        return $this;
    }

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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Resource
    {
        $this->name = $name;

        return $this;
    }

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

    public function getTrackCount(): int
    {
        return $this->trackCount;
    }

    public function setTrackCount(int $trackCount): Resource
    {
        $this->trackCount = $trackCount;

        return $this;
    }
}
