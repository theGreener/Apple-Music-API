<?php

declare(strict_types=1);

namespace AppleMusic\Model;

use DateTime;

/**
 * Class MusicVideo
 * @package AppleMusic\Model
 */
class MusicVideo extends Resource
{
    const RESOURCE_TYPE = 'music-videos';

    use MusicVideoTrait;

    protected $editorialNotes;
    protected $genreNames;
    protected $isrc;
    protected $previews;
    protected $releaseDate;
    protected $url;
    protected $videoSubType;
    protected $hasHDR;
    protected $has4K;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setAlbumName('')
            ->setArtistName('')
            ->setArtwork(null)
            ->setContentRating('')
            ->setDurationInMillis(0)
            ->setEditorialNotes(null)
            ->setGenreNames([])
            ->setIsrc('')
            ->setName('')
            ->setPlayParams(null)
            ->setPreviews([])
            ->setReleaseDate(null)
            ->setTrackNumber(0)
            ->setUrl('')
            ->setVideoSubType('')
            ->setHasHDR(false)
            ->setHas4K(false);
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
    public function setEditorialNotes(?EditorialNotes $editorialNotes): MusicVideo
    {
        $this->editorialNotes = $editorialNotes;

        return $this;
    }

    public function getGenreNames(): array
    {
        return $this->genreNames;
    }

    public function setGenreNames(array $genreNames): MusicVideo
    {
        $this->genreNames = $genreNames;

        return $this;
    }

    public function getIsrc(): string
    {
        return $this->isrc;
    }

    public function setIsrc(string $isrc): MusicVideo
    {
        $this->isrc = $isrc;

        return $this;
    }

    public function getPreviews(): array
    {
        return $this->previews;
    }

    public function setPreviews(array $previews): MusicVideo
    {
        $this->previews = $previews;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getReleaseDate(): ?DateTime
    {
        return $this->releaseDate;
    }

    /**
     * @param DateTime $releaseDate
     */
    public function setReleaseDate(?DateTime $releaseDate): MusicVideo
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): MusicVideo
    {
        $this->url = $url;

        return $this;
    }

    public function getVideoSubType(): string
    {
        return $this->videoSubType;
    }

    public function setVideoSubType(string $videoSubType): MusicVideo
    {
        $this->videoSubType = $videoSubType;

        return $this;
    }

    public function getHasHDR(): bool
    {
        return $this->hasHDR;
    }

    public function setHasHDR(bool $hasHDR): MusicVideo
    {
        $this->hasHDR = $hasHDR;

        return $this;
    }

    public function getHas4K(): bool
    {
        return $this->has4K;
    }

    public function setHas4K(bool $has4K): MusicVideo
    {
        $this->has4K = $has4K;

        return $this;
    }
}
