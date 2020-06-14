<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Trait ArtistTrait
 * @package AppleMusic\Model
 */
trait ArtistTrait
{
    protected $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Resource
    {
        $this->name = $name;

        return $this;
    }
}
