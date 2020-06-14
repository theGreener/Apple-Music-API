<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class RatingRequest
 * @package AppleMusic\Model
 */
class RatingRequest extends Resource
{
    const RESOURCE_TYPE = 'rating';

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

    public function setValue(int $value): RatingRequest
    {
        $this->value = $value;

        return $this;
    }
}
