<?php

declare(strict_types=1);

namespace AppleMusic\Model;

use DateTime;

/**
 * Class Song
 * @package AppleMusic\Model
 */
class Song extends Resource
{
    const RESOURCE_TYPE = 'songs';

    use SongTrait;

    protected $composerName;
    protected $editorialNotes;
    protected $genreNames;
    protected $isrc;
    protected $movementCount;
    protected $movementName;
    protected $movementNumber;
    protected $previews;
    protected $releaseDate;
    protected $url;
    protected $workName;

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
            ->setDiscNumber(0)
            ->setDurationInMillis(0)
            ->setEditorialNotes(null)
            ->setGenreNames([])
            ->setIsrc('')
            ->setMovementCount(0)
            ->setMovementName('')
            ->setMovementNumber(0)
            ->setName('')
            ->setPlayParams(null)
            ->setPreviews([])
            ->setReleaseDate(null)
            ->setTrackNumber(0)
            ->setUrl('')
            ->setWorkName('');
    }

    public function getComposerName(): string
    {
        return $this->composerName;
    }

    public function setComposerName(string $composerName): Song
    {
        $this->composerName = $composerName;

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
    public function setEditorialNotes(?EditorialNotes $editorialNotes): Song
    {
        $this->editorialNotes = $editorialNotes;

        return $this;
    }

    public function getGenreNames(): array
    {
        return $this->genreNames;
    }

    public function setGenreNames(array $genreNames): Song
    {
        $this->genreNames = $genreNames;

        return $this;
    }

    public function getIsrc(): string
    {
        return $this->isrc;
    }

    public function setIsrc(string $isrc): Song
    {
        $this->isrc = $isrc;

        return $this;
    }

    public function getMovementCount(): int
    {
        return $this->movementCount;
    }

    public function setMovementCount(int $movementCount): Song
    {
        $this->movementCount = $movementCount;

        return $this;
    }

    public function getMovementName(): string
    {
        return $this->movementName;
    }

    public function setMovementName(string $movementName): Song
    {
        $this->movementName = $movementName;

        return $this;
    }

    public function getMovementNumber(): int
    {
        return $this->movementNumber;
    }

    public function setMovementNumber(int $movementNumber): Song
    {
        $this->movementNumber = $movementNumber;

        return $this;
    }

    public function getPreviews(): array
    {
        return $this->preview;
    }

    public function setPreviews(array $preview): Song
    {
        $this->preview = $preview;

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
    public function setReleaseDate(?DateTime $releaseDate): Song
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Song
    {
        $this->url = $url;

        return $this;
    }

    public function getWorkName(): string
    {
        return $this->workName;
    }

    public function setWorkName(string $workName): Song
    {
        $this->workName = $workName;

        return $this;
    }
}
