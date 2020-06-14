<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class Preview
 * @package AppleMusic\Model
 */
class Preview
{
    protected $artwork;
    protected $url;

    public function __construct()
    {
        $this
            ->setArtwork(null)
            ->setUrl('');
    }

    public function getArtwork(): ?Artwork
    {
        return $this->artwork;
    }

    public function setArtwork(?Artwork $artwork): Preview
    {
        $this->artwork = $artwork;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Preview
    {
        $this->url = $url;

        return $this;
    }
}
