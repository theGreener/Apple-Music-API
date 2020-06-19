<?php

declare(strict_types=1);

namespace AppleMusic\Traits;

use AppleMusic\Model\Common\Resource;

/**
 * Trait ArtistTrait
 * @package AppleMusic\Model
 */
trait Artist
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
