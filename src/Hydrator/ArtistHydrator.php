<?php

namespace AppleMusic\Hydrator;

use AppleMusic\Model\Artist;

class ArtistHydrator
{
    public function hydrate(Artist &$artist, $data)
    {
        $artist
            ->setId($data->id)
            ->setName($data->attributes->name);
    }
}
