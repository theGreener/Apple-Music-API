<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\SearchHints;
use PHPUnit\Framework\TestCase;

class SearchHintsTest extends TestCase
{
    protected $searchHints;

    public function setUp()
    {
        $this->searchHints = new SearchHints();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->searchHints->getTerms());
    }

    public function testTermsSetterGetter()
    {
        $terms = [
            'the national',
            'national anthems',
            'national express',
            'the national essentials',
            'the national parks',
            'free nationals',
            'russian national anthem',
            'welsh national anthem',
            'american national anthem',
            'soviet national anthem',
        ];

        $this->searchHints->setTerms($terms);
        $this->assertEquals($terms, $this->searchHints->getTerms());
    }
}
