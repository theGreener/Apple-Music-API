<?php

declare(strict_types=1);

namespace AppleMusic\Hydrator\Album;

use AppleMusic\Model\Album\Album;
use AppleMusic\Model\Common\Artwork;
use AppleMusic\Model\Common\PlayParameters;
use AppleMusic\Hydrator\Common\EditorialNotesHydrator;
use AppleMusic\Hydrator\Common\PlayParametersHydrator;
use AppleMusic\Hydrator\Common\ArtworkHydrator;

class LibraryAlbumHydrator
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

    public function hydrate(LibraryAlbum &$album, $data)
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

        if (isset($data->attributes->name)) {
            $album->setName($data->attributes->name);
        }

        if (isset($data->attributes->playParams)) {
            $playParams = new PlayParameters();
            $this->playParametersHydrator->hydrate($playParams, $data->attributes->playParams);
            $album->setPlayParams($playParams);
        }

        if (isset($data->attributes->trackCount)) {
            $album->setTrackCount($data->attributes->trackCount);
        }
    }
}
