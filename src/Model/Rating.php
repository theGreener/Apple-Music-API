<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class Rating
 * @package AppleMusic\Model
 */
class Rating extends Resource
{
    const RESOURCE_TYPE = 'ratings';

    protected $value;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setValue(-1);
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): Rating
    {
        $this->value = $value;

        return $this;
    }
}
