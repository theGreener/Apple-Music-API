<?php

namespace AppleMusic\Hydrator;

use AppleMusic\Model\Track;
use DateTime;

class TrackHydrator
{
    public function hydrate(Track &$track, $data)
    {
        $track
            ->setId($data->id)
            ->setArtistName($data->attributes->artistName)
            ->setGenreNames($data->attributes->genreNames)
            ->setDurationInMillis($data->attributes->durationInMillis)
            ->setName($data->attributes->name)
            ->setAlbumName($data->attributes->albumName)
            ->setTrackNumber($data->attributes->trackNumber);

        if (property_exists($data->attributes, 'releaseDate')) {
            $track->setReleaseDate(
                new DateTime($data->attributes->releaseDate)
            );
        }
    }
}
