<?php

declare(strict_types=1);

namespace AppleMusic\Model\Playlist;

use AppleMusic\Traits\Playlist as PlaylistTrait;
use AppleMusic\Model\Common\Resource;

/**
 * Class LibraryPlaylist
 * @package AppleMusic\Model
 */
class LibraryPlaylist extends Resource
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
