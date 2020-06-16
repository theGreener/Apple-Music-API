<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class LibrarySong
 * @package AppleMusic\Model
 */
class LibrarySong extends Resource
{
    const RESOURCE_TYPE = 'library-songs';

    use SongTrait;

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
            ->setName('')
            ->setPlayParams(null)
            ->setTrackNumber(0);
    }
}
