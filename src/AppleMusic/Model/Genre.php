<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class Genre
 * @package AppleMusic\Model
 */
class Genre extends Resource
{
    const RESOURCE_TYPE = 'genres';

    protected $name;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setName('');
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Genre
    {
        $this->name = $name;

        return $this;
    }
}
