<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class LibraryPlaylist
 * @package AppleMusic\Model
 */
class LibraryPlaylists extends Resource
{
    use PlaylistTrait;

    const RESOURCE_TYPE = 'libraryPlaylists';

    protected $canEdit;

    public function __construct()
    {
        $this
            ->setArtwork(null)
            ->setDescription('')
            ->setName('')
            ->setPlayParams(null)
            ->setCanEdit(false);
    }

    public function getCanEdit(): bool
    {
        return $this->canEdit;
    }

    public function setCanEdit(bool $canEdit): LibraryPlaylist
    {
        $this->canEdit = $canEdit;

        return $this;
    }
}
