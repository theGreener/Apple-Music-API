<?php

declare(strict_types=1);

namespace AppleMusic\Model;

use DateTime;

/**
 * Class Album
 * @package AppleMusic\Model
 */
class Album extends Resource
{
    use AlbumTrait;

    const RESOURCE_TYPE = 'albums';

    protected $albumName;
    protected $copyright;
    protected $editorialNotes;
    protected $genreNames;
    protected $isComplete;
    protected $isSingle;
    protected $recordLabel;
    protected $releaseDate;
    protected $url;
    protected $isMasteredForItunes;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setRelationships([])
            ->setAlbumName('')
            ->setArtistName('')
            ->setArtwork(null)
            ->setContentRating('')
            ->setCopyright('')
            ->setEditorialNotes(null)
            ->setGenreNames([])
            ->setIsComplete(false)
            ->setIsSingle(false)
            ->setName('')
            ->setPlayParams(null)
            ->setRecordLabel('')
            ->setReleaseDate(null)
            ->setTrackCount(0)
            ->setUrl('')
            ->setIsMasteredForItunes(false);
    }

    public function getAlbumName(): string
    {
        return $this->albumName;
    }

    public function setAlbumName(string $albumName): Album
    {
        $this->albumName = $albumName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    public function setCopyright(string $copyright): Album
    {
        $this->copyright = $copyright;

        return $this;
    }

    public function getEditorialNotes(): ?EditorialNotes
    {
        return $this->editorialNotes;
    }

    /**
     * @param EditorialNotes $editorialNotes
     */
    public function setEditorialNotes(?EditorialNotes $editorialNotes): Album
    {
        $this->editorialNotes = $editorialNotes;

        return $this;
    }

    public function getGenreNames(): array
    {
        return $this->genreNames;
    }

    public function setGenreNames(array $genreNames): Album
    {
        $this->genreNames = $genreNames;

        return $this;
    }

    public function getIsComplete(): bool
    {
        return $this->isComplete;
    }

    public function setIsComplete(bool $isComplete): Album
    {
        $this->isComplete = $isComplete;

        return $this;
    }

    public function getIsSingle(): bool
    {
        return $this->isSingle;
    }

    public function setIsSingle(bool $isSingle): Album
    {
        $this->isSingle = $isSingle;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Album
    {
        $this->name = $name;

        return $this;
    }

    public function getRecordLabel(): string
    {
        return $this->recordLabel;
    }

    public function setRecordLabel(string $recordLabel): Album
    {
        $this->recordLabel = $recordLabel;

        return $this;
    }

    public function getReleaseDate(): ?DateTime
    {
        return $this->releaseDate;
    }

    /**
     * @param DateTime $releaseDate
     */
    public function setReleaseDate(?DateTime $releaseDate): Album
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Album
    {
        $this->url = $url;

        return $this;
    }

    public function getIsMasteredForItunes(): bool
    {
        return $this->isMasteredForItunes;
    }

    public function setIsMasteredForItunes(bool $isMasteredForItunes): Album
    {
        $this->isMasteredForItunes = $isMasteredForItunes;

        return $this;
    }
}
