<?php

declare(strict_types=1);

namespace AppleMusic\Model\Playlist;

use AppleMusic\Traits\Playlist as PlaylistTrait;
use AppleMusic\Model\Common\Resource;

use DateTime;

/**
 * Class Playlist
 * @package AppleMusic\Model
 */
class Playlist extends Resource
{
    use PlaylistTrait;

    const RESOURCE_TYPE = 'library-playlists';

    protected $curatorName;
    protected $lastModifiedDate;
    protected $playlistType;
    protected $url;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setArtwork(null)
            ->setCuratorName('')
            ->setDescription('')
            ->setLastModifiedDate(null)
            ->setName('')
            ->setPlayParams(null)
            ->setPlaylistType('')
            ->setUrl('');
    }

    /**
     * @return string
     */
    public function getCuratorName()
    {
        return $this->curatorName;
    }

    public function setCuratorName(string $curatorName): Playlist
    {
        $this->curatorName = $curatorName;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastModifiedDate(): ?DateTime
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param DateTime $lastModifiedDate
     */
    public function setLastModifiedDate(?DateTime $lastModifiedDate): Playlist
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getPlaylistType(): string
    {
        return $this->playlistType;
    }

    public function setPlaylistType(string $playlistType): Playlist
    {
        $this->playlistType = $playlistType;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Playlist
    {
        $this->url = $url;

        return $this;
    }
}
