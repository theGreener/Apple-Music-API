<?php

declare(strict_types=1);

namespace AppleMusic\Hydrator;

use AppleMusic\Model\Album;
use AppleMusic\Model\Artwork;
use AppleMusic\Model\EditorialNotes;
use AppleMusic\Model\PlayParameters;
use AppleMusic\Model\Collection\TrackCollection;
use AppleMusic\Model\Track;
use DateTime;
use AppleMusic\Hydrator\ArtworkHydrator;
use AppleMusic\Hydrator\EditorialNotesHydrator;
use AppleMusic\Hydrator\PlayParamsHydrator;

class AlbumHydrator
{
    protected $artworkHydrator;
    protected $editorialNotesHydrator;
    protected $playParametersHydrator;

    public function __construct(
        ArtworkHydrator $artworkHydrator,
        EditorialNotesHydrator $editorialNotesHydrator,
        PlayParametersHydrator $playParametersHydrator
    ) {
        $this->artworkHydrator = $artworkHydrator;
        $this->editorialNotesHydrator = $editorialNotesHydrator;
        $this->playParametersHydrator = $playParametersHydrator;
    }

    public function hydrate(Album &$album, $data)
    {
        $album
            ->setId($data->id)
            ->setHref($data->href);

        if (isset($data->attributes->artistName)) {
            $album->setArtistName($data->attributes->artistName);
        }

        if (isset($data->attributes->artwork)) {
            $artwork = new Artwork();
            $this->artworkHydrator->hydrate($artwork, $data->attributes->artwork);
            $album->setArtwork($artwork);
        }
        
        if (isset($data->attributes->contentRating)) {
            $album->setContentRating($data->attributes->contentRating);
        }
        
        if (isset($data->attributes->copyright)) {
            $album->setCopyright($data->attributes->copyright);
        }

        if (isset($data->attributes->editorialNotes)) {
            $editorialNotes = new EditorialNotes();
            $this->editorialNotesHydrator->hydrate($editorialNotes, $data->attributes->editorialNotes);
            $album->setEditorialNotes($editorialNotes);
        }

        if (isset($data->attributes->genreNames)) {
            $album->setGenreNames($data->attributes->genreNames);
        }

        if (isset($data->attributes->isComplete)) {
            $album->setIsComplete($data->attributes->isComplete);
        }

        if (isset($data->attributes->isSingle)) {
            $album->setIsSingle($data->attributes->isSingle);
        }
        
        if (isset($data->attributes->name)) {
            $album->setName($data->attributes->name);
        }

        if (isset($data->attributes->playParams)) {
            $playParams = new PlayParameters();
            $this->playParametersHydrator->hydrate($playParams, $data->attributes->playParams);
            $album->setPlayParams($playParams);
        }

        if (isset($data->attributes->recordLabel)) {
            $album->setRecordLabel($data->attributes->recordLabel);
        }

        if (isset($data->attributes->trackCount)) {
            $album->setTrackCount($data->attributes->trackCount);
        }

        if (isset($data->attributes->url)) {
            $album->setUrl($data->attributes->url);
        }

        if (isset($data->attributes->isMasteredForItunes)) {
            $album->setIsMasteredForItunes($data->attributes->isMasteredForItunes);
        }

        if (isset($data->attributes->releaseDate)) {
            $album->setReleaseDate(
                new DateTime($data->attributes->releaseDate)
            );
        }
    }
}
