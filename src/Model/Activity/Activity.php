<?php

declare(strict_types=1);

namespace AppleMusic\Model\Activity;

use AppleMusic\Model\Common\Resource;
use AppleMusic\Model\Common\Artwork;
use AppleMusic\Model\Common\EditorialNotes;

/**
 * Class Activity
 * @package AppleMusic\Model
 */
class Activity extends Resource
{
    const RESOURCE_TYPE = 'activities';

    protected $artwork;
    protected $editorialNotes;
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
            ->setEditorialNotes(null)
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
    public function setArtwork(?Artwork $artwork): Activity
    {
        $this->artwork = $artwork;

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
    public function setEditorialNotes(?EditorialNotes $editorialNotes): Activity
    {
        $this->editorialNotes = $editorialNotes;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Activity
    {
        $this->name = $name;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Activity
    {
        $this->url = $url;

        return $this;
    }
}
