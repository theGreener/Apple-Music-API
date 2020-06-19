<?php

declare(strict_types=1);

namespace AppleMusic\Model\MusicVideo;

use AppleMusic\Traits\MusicVideo as MusicVideoTrait;
use AppleMusic\Model\Common\Resource;

/**
 * Class LibraryMusicVideo
 * @package AppleMusic\Model
 */
class LibraryMusicVideo extends Resource
{
    const RESOURCE_TYPE = 'library-music-videos';

    use MusicVideoTrait;

    public function __construct()
    {
        $this
            ->setId('')
            ->setType(self::RESOURCE_TYPE)
            ->setHref('')
            ->setAlbumName('')
            ->setArtistName('')
            ->setArtwork(null)
            ->setContentRating('')
            ->setDurationInMillis(0)
            ->setName('')
            ->setPlayParams(null)
            ->setTrackNumber(0);
    }
}
