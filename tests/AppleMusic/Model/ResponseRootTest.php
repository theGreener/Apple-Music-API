<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\Album;
use AppleMusic\Model\Error;
use AppleMusic\Model\LibrarySearchResults;
use AppleMusic\Model\ResponseRoot;
use AppleMusic\Model\SearchHints;
use AppleMusic\Model\SearchResults;
use PHPUnit\Framework\TestCase;

class ResponseRootTest extends TestCase
{
    protected $responseRoot;

    public function setUp()
    {
        $this->responseRoot = new ResponseRoot();
    }

    public function testDefaultValues()
    {
        $this->assertNull($this->responseRoot->getData());
        $this->assertNull($this->responseRoot->getErrors());
        $this->assertEmpty($this->responseRoot->getHref());
        $this->assertEmpty($this->responseRoot->getNext());
        $this->assertNull($this->responseRoot->getResults());
    }

    public function testDataSetterGetter()
    {
        $album = new Album();
        $this->responseRoot->setData([$album]);
        $this->assertContains($album, $this->responseRoot->getData());
    }

    public function testErrorsSetterGetter()
    {
        $errors = [
            new Error(),
            new Error(),
        ];
        $this->responseRoot->setErrors($errors);
        $this->assertEquals($errors, $this->responseRoot->getErrors());
    }

    public function testHrefSetterGetter()
    {
        $this->responseRoot->setHref('/v1/catalog/gb/search?limit=10&offset=0&term=national&types=artists');
        $this->assertEquals('/v1/catalog/gb/search?limit=10&offset=0&term=national&types=artists', $this->responseRoot->getHref());
    }

    public function testNextSetterGetter()
    {
        $this->responseRoot->setNext('/v1/catalog/gb/search?offset=10&term=national&types=artists');
        $this->assertEquals('/v1/catalog/gb/search?offset=10&term=national&types=artists', $this->responseRoot->getNext());
    }

    public function testResultsSetterGetter()
    {
        $searchResults = new SearchResults();
        $this->responseRoot->setResults($searchResults);
        $this->assertEquals($searchResults, $this->responseRoot->getResults());

        $searchHints = new SearchHints();
        $this->responseRoot->setResults($searchHints);
        $this->assertEquals($searchHints, $this->responseRoot->getResults());

        $librarySearchResults = new LibrarySearchResults();
        $this->responseRoot->setResults($librarySearchResults);
        $this->assertEquals($librarySearchResults, $this->responseRoot->getResults());
    }
}
