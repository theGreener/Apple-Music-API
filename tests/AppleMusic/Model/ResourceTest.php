<?php

namespace App\Tests;

use AppleMusic\Model\Resource;
use PHPUnit\Framework\TestCase;

class ResourceTest extends TestCase
{
    protected $resource;

    public function setUp()
    {
        $this->resource = new Resource();
    }

    public function testIdSetterGetter()
    {
        $this->resource->setId('523493568');
        $this->assertEquals('523493568', $this->resource->getId());

        $this->resource->setId('l.PcsLqO8');
        $this->assertEquals('l.PcsLqO8', $this->resource->getId());
    }

    public function testHrefSetterGetter()
    {
        $this->resource->setHref('/v1/catalog/gb/albums/1453848132');
        $this->assertEquals('/v1/catalog/gb/albums/1453848132', $this->resource->getHref());

        $this->resource->setHref('/v1/me/library/albums/l.PcsLqO8');
        $this->assertEquals('/v1/me/library/albums/l.PcsLqO8', $this->resource->getHref());
    }

    public function testRelationshipsSetterGetter()
    {
        $relationships = [
            'tracks' => [],
            'catalog' => [],
            'artists' => [],
            'albums' => [],
        ];

        $this->resource->setRelationships($relationships);
        $this->assertArrayHasKey('tracks', $this->resource->getRelationships());
        $this->assertArrayHasKey('catalog', $this->resource->getRelationships());
        $this->assertArrayHasKey('artists', $this->resource->getRelationships());
        $this->assertArrayHasKey('albums', $this->resource->getRelationships());
    }

    public function testTypeSetterGetter()
    {
        $this->resource->setType('albums');
        $this->assertEquals('albums', $this->resource->getType());

        $this->resource->setType('library-albums');
        $this->assertEquals('library-albums', $this->resource->getType());
    }
}
