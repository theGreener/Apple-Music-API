<?php

declare(strict_types=1);

namespace AppleMusic\Manager;

use AppleMusic\HttpClient;
use AppleMusic\Hydrator\AlbumHydrator;
use AppleMusic\Model\Album;
use AppleMusic\Model\AlbumResponse;
use AppleMusic\Model\LibraryAlbumResponse;

class AlbumManager extends AbstractManager
{
    public function __construct(HttpClient $client, AlbumHydrator $hydrator)
    {
        $this->hydrator = $hydrator;
        
        parent::__construct($client);
    }

    /**
     * Fetch an album by using its identifier.
     *
     * @param string $id
     * @param string $storefront
     * @param string $l
     * @param string $include
     * @return Album
     */
    public function getACatalogAlbum(
        string $id,
        string $storefront,
        string $l = '',
        string $include = ''
    ): Album {
        $response = $this->client->get(
            sprintf("v1/catalog/%s/albums/%s?l%s&include=%s", $id, $storefront, $l, $include)
        );

        $album = new Album();
        $this->hydrator->hydrate($album, $response->data[0]);
        return $album;
//        return new AlbumResponse();
    }

    /**
     * @param string $id
     * @param string $relationship
     * @param string $storefront
     * @param string $l
     * @param int $number
     * @return AlbumResponse
     */
    public function getACatalogAlbumsRelationshipDirectlyByName(
        string $id,
        string $relationship,
        string $storefront,
        string $l = '',
        int $number = 0
    ): AlbumResponse {
        // TODO
        return new AlbumResponse();
    }

    /**
     * @param string $storefront
     * @param string $ids
     * @param string $include
     * @param string $l
     * @return AlbumResponse
     */
    public function getMultipleCatalogAlbums(
        string $storefront,
        string $ids,
        string $include = '',
        string $l = ''
    ): AlbumResponse {
        // TODO
        return new AlbumResponse();
    }

    /**
     * @param string $id
     * @param string $l
     * @param string $include
     * @return LibraryAlbumResponse
     */
    public function getALibraryAlbum(
        string $id,
        string $l = '',
        string $include = ''
    ): LibraryAlbumResponse {
        // TODO
        return new LibraryAlbumResponse();
    }

    /**
     * @param string $id
     * @param string $relationship
     * @param string $limit
     * @param string $offset
     * @return LibraryAlbumResponse
     */
    public function getALibraryAlbumsRelationshipDirectlyByName(
        string $id,
        string $relationship,
        string $limit = '',
        string $offset = ''
    ): LibraryAlbumResponse {
        // TODO
        return new LibraryAlbumResponse();
    }

    /**
     * @param string $ids
     * @param string $l
     * @param string $include
     * @return LibraryAlbumResponse
     */
    public function getMultipleLibraryAlbums(
        string $ids,
        string $l = '',
        string $include = ''
    ): LibraryAlbumResponse {
        // TODO
        return new LibraryAlbumResponse();
    }

    /**
     * @param string $include
     * @param string $l
     * @param string $limit
     * @param string $offset
     * @return LibraryAlbumResponse
     */
    public function getAllLibraryAlbums(
        string $include = '',
        string $l = '',
        string $limit = '',
        string $offset = ''
    ): LibraryAlbumResponse {
        // TODO
        return new LibraryAlbumResponse();
    }

    /**
     * @param string $ids
     * @return bool
     */
    public function addAResourceToALibrary(
        string $ids
    ): bool {
        // TODO
        return true;
    }
}
