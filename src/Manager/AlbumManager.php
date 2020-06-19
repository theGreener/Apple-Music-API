<?php

declare(strict_types=1);

namespace AppleMusic\Manager;

use AppleMusic\HttpClient;
use AppleMusic\Hydrator\Album\AlbumHydrator;
use AppleMusic\Hydrator\Album\LibraryAlbumHydrator;
use AppleMusic\Model\Album\Album;
use AppleMusic\Model\Album\LibraryAlbum;

class AlbumManager extends AbstractManager
{
    protected $albumHydrator;
    protected $libraryAlbumHydrator;

    public function __construct(
        HttpClient $client,
        AlbumHydrator $albumHydrator,
        LibraryAlbumHydrator $libraryAlbumHydrator
    ) {
        $this->albumHydrator = $albumHydrator;
        $this->libraryAlbumHydrator = $libraryAlbumHydrator;

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
        $args = [];
        if ($l !== '') {
            $args['l'] = $l;
        }
        if ($include !== '') {
            $args['include'] = $include;
        }

        $response = $this->client->get(
            sprintf("/v1/catalog/%s/albums/%s?%s", $storefront, $id, http_build_query($args))
        );

        $album = new Album();
        $this->albumHydrator->hydrate($album, $response->data[0]);

        return $album;
    }

    /**
     * @param string $id
     * @param string $relationship
     * @param string $storefront
     * @param string $l
     * @param int $limit
     * @return Album
     */
    public function getACatalogAlbumsRelationshipDirectlyByName(
        string $id,
        string $relationship,
        string $storefront,
        string $l = '',
        int $limit = 0
    ): Album {
        $args = [];
        if ($l !== '') {
            $args['l'] = $l;
        }
        if ($limit > 0) {
            $args['limit'] = $limit;
        }

        $response = $this->client->get(
            sprintf("/v1/catalog/%s/albums/%s/%s?%s", $storefront, $id, $relationship, http_build_query($args))
        );

        $album = new Album();
        $this->albumHydrator->hydrate($album, $response->data[0]);

        return $album;
    }

    /**
     * @param string $storefront
     * @param string $ids
     * @param string $include
     * @param string $l
     * @return array
     */
    public function getMultipleCatalogAlbums(
        string $storefront,
        string $ids,
        string $include = '',
        string $l = ''
    ): array {
        $args = [];
        if ($include !== '') {
            $args['include'] = $include;
        }
        if ($l > 0) {
            $args['l'] = $l;
        }

        $albums = [];
        $url = sprintf("/v1/catalog/%s/albums?ids=%s&%s", $storefront, $ids, http_build_query($args));

        do {
            $response = $this->client->get($url);

            foreach ($response->data as $data) {
                $album = new LibraryAlbum();
                $this->libraryAlbumHydrator->hydrate($album, $data);
                $albums[] = $album;
            }

            $url = $response->next ?? null;
        } while (!is_null($url));

        return $albums;
    }


    /**
     * @param string $id
     * @param string $l
     * @param string $include
     * @return LibraryAlbum
     */
    public function getALibraryAlbum(
        string $id,
        string $l = '',
        string $include = ''
    ): LibraryAlbum {
        $args = [];
        if ($l > 0) {
            $args['l'] = $l;
        }
        if ($include !== '') {
            $args['include'] = $include;
        }

        $response = $this->client->get(
            sprintf("/v1/me/library/albums/%s?%s", $id, http_build_query($args))
        );

        $album = new LibraryAlbum();
        $this->libraryAlbumHydrator->hydrate($album, $response->data[0]);

        return $album;
    }

    /**
     * @param string $id
     * @param string $relationship
     * @param int $limit
     * @param string $offset
     * @return LibraryAlbum
     */
    public function getALibraryAlbumsRelationshipDirectlyByName(
        string $id,
        string $relationship,
        int $limit = 0,
        string $offset = ''
    ): LibraryAlbum {
        $args = [];
        if ($limit > 0) {
            $args['limit'] = $limit;
        }
        if ($offset !== '') {
            $args['offset'] = $offset;
        }

        $response = $this->client->get(
            sprintf("/v1/me/library/albums/%s/%s?%s", $id, $relationship, http_build_query($args))
        );

        $album = new LibraryAlbum();
        $this->libraryAlbumHydrator->hydrate($album, $response->data[0]);

        return $album;
    }

    /**
     * @param string $ids
     * @param string $l
     * @param string $include
     * @return array
     */
    public function getMultipleLibraryAlbums(
        string $ids,
        string $l = '',
        string $include = ''
    ): array {
        $args = [];
        if ($l > 0) {
            $args['l'] = $l;
        }
        if ($include !== '') {
            $args['include'] = $include;
        }

        $albums = [];
        $url = sprintf("/v1/me/library/albums?ids=%s&%s", $ids, http_build_query($args));

        do {
            $response = $this->client->get($url);

            foreach ($response->data as $data) {
                $album = new LibraryAlbum();
                $this->libraryAlbumHydrator->hydrate($album, $data);
                $albums[] = $album;
            }

            $url = $response->next ?? null;
        } while (!is_null($url));

        return $albums;
    }

    /**
     * @param string $include
     * @param string $l
     * @param string $limit
     * @param string $offset
     * @return LibraryAlbum
     */
    public function getAllLibraryAlbums(
        string $include = '',
        string $l = '',
        string $limit = '',
        string $offset = ''
    ): array {
        $args = [];
        if ($include !== '') {
            $args['include'] = $include;
        }
        if ($l > 0) {
            $args['l'] = $l;
        }
        if ($limit !== '') {
            $args['limit'] = $limit;
        }
        if ($offset !== '') {
            $args['offset'] = $offset;
        }

        $albums = [];
        $url = sprintf("/v1/me/library/albums?%s", http_build_query($args));

        do {
            $response = $this->client->get($url);

            foreach ($response->data as $data) {
                $album = new LibraryAlbum();
                $this->libraryAlbumHydrator->hydrate($album, $data);
                $albums[] = $album;
            }

            $url = $response->next ?? null;
        } while (!is_null($url));

        return $albums;
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
