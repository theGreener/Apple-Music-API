<?php

declare(strict_types=1);

namespace AppleMusic\Model\Common;

/**
 * Class Resource
 * @package AppleMusic\Model
 */
class Resource
{
    protected $id;
    protected $href;
    protected $relationships;
    protected $type;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): Resource
    {
        $this->id = $id;

        return $this;
    }

    public function getHref(): string
    {
        return $this->href;
    }

    public function setHref(string $href): Resource
    {
        $this->href = $href;

        return $this;
    }

    public function getRelationships(): array
    {
        return $this->relationships;
    }

    public function setRelationships(array $relationships): Resource
    {
        $this->relationships = $relationships;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): Resource
    {
        $this->type = $type;

        return $this;
    }
}
