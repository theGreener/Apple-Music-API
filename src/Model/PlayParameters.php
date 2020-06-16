<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class PlayParameters
 * @package AppleMusic\Model
 */
class PlayParameters
{
    protected $id;
    protected $kind;
    protected $isLibrary;
    protected $reporting;
    protected $catalogId;

    public function __construct()
    {
        $this
            ->setId('')
            ->setKind('')
            ->setIsLibrary(false)
            ->setReporting(false)
            ->setCatalogId('');
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): PlayParameters
    {
        $this->id = $id;

        return $this;
    }

    public function getKind(): string
    {
        return $this->kind;
    }

    public function setKind(string $kind): PlayParameters
    {
        $this->kind = $kind;

        return $this;
    }

    public function getIsLibrary(): bool
    {
        return $this->isLibrary;
    }

    public function setIsLibrary(bool $isLibrary): PlayParameters
    {
        $this->isLibrary = $isLibrary;

        return $this;
    }

    public function getReporting(): bool
    {
        return $this->reporting;
    }

    public function setReporting(bool $reporting): PlayParameters
    {
        $this->reporting = $reporting;

        return $this;
    }

    public function getCatalogId(): string
    {
        return $this->catalogId;
    }

    public function setCatalogId(string $catalogId): PlayParameters
    {
        $this->catalogId = $catalogId;

        return $this;
    }
}
