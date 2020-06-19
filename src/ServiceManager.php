<?php

namespace AppleMusic;

use AppleMusic\Manager\AlbumManager;
use AppleMusic\Manager\ArtistManager;

class ServiceManager
{
    private $albumManager;
    private $artistManager;

    public function __construct(
        AlbumManager $albumManager,
        ArtistManager $artistManager
    ) {
        $this->albumManager = $albumManager;
        $this->artistManager = $artistManager;
    }

    /**
     * @param string $id
     *
     * @return Artist
     */
    public function getArtist($id)
    {
        return $this->artistManager->get($id);
    }

    /**
     * @param string $id
     *
     * @return Artist
     */
    public function getArtistFromCatalog($id)
    {
        return $this->artistManager->get($id, HttpClient::SOURCE_CATALOG);
    }

    /**
     * @return ArtistCollection
     */
    public function getArtists()
    {
        return $this->artistManager->getAll();
    }

    /**
     * @param string $searchTerm [description]
     *
     * @return ArtistCollection
     */
    public function searchArtist($searchTerm)
    {
        return $this->artistManager->find($searchTerm);
    }

    /**
     * @param string $searchTerm [description]
     *
     * @return ArtistCollection
     */
    public function searchArtistInCatalog($searchTerm)
    {
        return $this->artistManager->find($searchTerm, HttpClient::SOURCE_CATALOG);
    }

    /**
     * @param string $artistID
     *
     * @return array[string]Album
     */
    public function getAlbumsByArtist($artistID)
    {
        return $this->albumManager->getAlbumsByArtistId($artistID);
    }

    /**
     * @param string $artistID
     *
     * @return array[string]Album
     */
    public function getAlbumsByArtistFromCatalog($artistID)
    {
        return $this->albumManager->getAlbumsByArtistId($artistID, HttpClient::SOURCE_CATALOG);
    }

    /**
     * @param string $searchTerm [description]
     *
     * @return AlbumCollection
     */
    public function searchAlbum($searchTerm)
    {
        return $this->albumManager->findAlbum($searchTerm);
    }

    /**
     * @param string $searchTerm [description]
     *
     * @return AlbumCollection
     */
    public function searchAlbumInCatalog($searchTerm)
    {
        return $this->albumManager->findAlbum($searchTerm, HttpClient::SOURCE_CATALOG);
    }

    /**
     * @param string $id
     *
     * @return Album
     */
    public function getAlbum($id)
    {
        return $this->albumManager->getACatalogAlbum($id, 'gb');
    }

    /**
     * @param string $id
     *
     * @return ArtistCollection
     */
    public function getAlbumFromCatalog($id)
    {
        return $this->albumManager->getAlbum($id, HttpClient::SOURCE_CATALOG);
    }

    /**
     * @param string $artistID
     *
     * @return TrackCollection
     */
    public function getTrackOnAlbumByAlbumId($id)
    {
        $album = $this->getAlbum($id);

        return $album->getTracks();
    }

    /**
     * @param string $artistID
     *
     * @return TrackCollection
     */
    public function getTrackOnAlbumByAlbumIdInCatalog($id)
    {
        $album = $this->getAlbumFromCatalog($id);

        return $album->getTracks();
    }
}
