<?php

declare(strict_types=1);

namespace AppleMusic\Traits;

use AppleMusic\Model\Common\Artwork;
use AppleMusic\Model\Common\Resource;
use AppleMusic\Model\Common\PlayParameters;

/**
 * Trait PlaylistTrait
 * @package AppleMusic\Model
 */
trait Playlist
{
    protected $artwork;
    protected $description;
    protected $name;
    protected $playParams;

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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Resource
    {
        $this->description = $description;

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
}
