<?php

declare(strict_types=1);

namespace AppleMusic\Model\Search;

/**
 * Class SearchHints
 * @package AppleMusic\Model
 */
class SearchHints
{
    protected $terms;

    public function __construct()
    {
        $this->setTerms([]);
    }

    public function getTerms(): array
    {
        return $this->terms;
    }

    public function setTerms(array $terms): SearchHints
    {
        $this->terms = $terms;

        return $this;
    }
}
