<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Trait CuratorTrait
 * @package AppleMusic\Model
 */
trait CuratorTrait
{
    protected $artwork;
    protected $editorialNotes;
    protected $name;
    protected $url;

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
    public function setEditorialNotes(?EditorialNotes $editorialNotes): Resource
    {
        $this->editorialNotes = $editorialNotes;

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

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Resource
    {
        $this->url = $url;

        return $this;
    }
}
