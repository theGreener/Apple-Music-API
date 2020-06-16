<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class LibraryAlbum
 * @package AppleMusic\Model
 */
class LibraryAlbum extends Resource
{
    use AlbumTrait;

    const RESOURCE_TYPE = 'library-albums';

    protected $artistName;
    protected $artwork;
    protected $contentRating;
    protected $name;
    protected $playParams;
    protected $trackCount;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setArtistName('')
            ->setArtwork(null)
            ->setContentRating('')
            ->setName('')
            ->setPlayParams(null)
            ->setTrackCount(-1);
    }
}
