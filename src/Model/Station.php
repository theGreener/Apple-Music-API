<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class Station
 * @package AppleMusic\Model
 */
class Station extends Resource
{
    const RESOURCE_TYPE = 'stations';

    protected $artwork;
    protected $durationInMillis;
    protected $editorialNotes;
    protected $episodeNumber;
    protected $isLive;
    protected $name;
    protected $url;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setArtwork(null)
            ->setDurationInMillis(0)
            ->setEditorialNotes(null)
            ->setEpisodeNumber(0)
            ->setIsLive(false)
            ->setName('')
            ->setUrl('');
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
    public function setArtwork(?Artwork $artwork): Station
    {
        $this->artwork = $artwork;

        return $this;
    }

    public function getDurationInMillis(): int
    {
        return $this->durationInMillis;
    }

    public function setDurationInMillis(int $durationInMillis): Station
    {
        $this->durationInMillis = $durationInMillis;

        return $this;
    }

    /**
     * @return EditorialNotes
     */
    public function getEditorialNotes(): ?EditorialNotes
    {
        return $this->editorialNotes;
    }

    /**
     * @param EditorialNotes $editorialNotes
     */
    public function setEditorialNotes(?EditorialNotes $editorialNotes): Station
    {
        $this->editorialNotes = $editorialNotes;

        return $this;
    }

    public function getEpisodeNumber(): int
    {
        return $this->episodeNumber;
    }

    public function setEpisodeNumber(int $episodeNumber): Station
    {
        $this->episodeNumber = $episodeNumber;

        return $this;
    }

    public function getIsLive(): bool
    {
        return $this->isLive;
    }

    public function setIsLive(bool $isLive): Station
    {
        $this->isLive = $isLive;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Station
    {
        $this->name = $name;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Station
    {
        $this->url = $url;

        return $this;
    }
}
