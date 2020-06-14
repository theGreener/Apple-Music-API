<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class LibraryArtist
 * @package AppleMusic\Model
 */
class LibraryArtist extends Resource
{
    const RESOURCE_TYPE = 'library-artists';

    use ArtistTrait;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setName('');
    }
}
