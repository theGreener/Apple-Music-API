<?php

namespace AppleMusic\Hydrator;

use AppleMusic\Model\Album;
use AppleMusic\Model\Artwork;
use AppleMusic\Model\Collection\TrackCollection;
use AppleMusic\Model\Track;
use DateTime;

class AlbumHydrator
{
    public function hydrate(Album &$album, $data)
    {
        $album
            ->setId($data->id)
            ->setName($data->attributes->name)
            ->setArtistName($data->attributes->artistName)
            ->setTrackCount($data->attributes->trackCount)
            ->setGenreNames($data->attributes->genreNames);

        if (isset($data->attributes->releaseDate)) {
            $album->setReleaseDate(
                new DateTime($data->attributes->releaseDate)
            );
        }

//        if (isset($data->attributes->artwork)) {
//            $artwork = new Artwork();
//            $this->artworkHydrator->hydrate($artwork, $data->attributes->artwork);
//            $album->setArtwork($artwork);
//        }
//
//        if (isset($data->relationships->tracks)) {
//            $tracks = new TrackCollection();
//            foreach ($data->relationships->tracks->data as $trackData) {
//                $track = new Track();
//                $this->trackHydrator->hydrate($track, $trackData);
//                $tracks->addItem($track->getId(), $track);
//            }
//
//            $album->setTracks($tracks);
//        }
    }
}
