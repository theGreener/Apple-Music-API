<?php

declare(strict_types=1);

namespace AppleMusic\Model\Artist;

use AppleMusic\Model\Common\Resource;
use AppleMusic\Traits\Artist as ArtistTrait;
use AppleMusic\Model\Common\EditorialNotes;

/**
 * Class Artist
 * @package AppleMusic\Model
 */
class Artist extends Resource
{
    const RESOURCE_TYPE = 'artists';

    use ArtistTrait;

    protected $editorialNotes;
    protected $genreNames;
    protected $url;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setEditorialNotes(null)
            ->setGenreNames([])
            ->setUrl('');
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
    public function setEditorialNotes(?EditorialNotes $editorialNotes): Artist
    {
        $this->editorialNotes = $editorialNotes;

        return $this;
    }

    public function getGenreNames(): array
    {
        return $this->genreNames;
    }

    public function setGenreNames(array $genreNames): Artist
    {
        $this->genreNames = $genreNames;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Artist
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s', $this->getName());
    }
}
