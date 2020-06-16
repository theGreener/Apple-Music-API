<?php

declare(strict_types=1);

namespace AppleMusic\Model;

use AppleMusic\Model\Error\Source;

/**
 * Class Error
 * @package AppleMusic\Model
 */
class Error
{
    protected $id;
    protected $title;
    protected $detail;
    protected $status;
    protected $code;
    protected $source;

    public function __construct()
    {
        $this
            ->setId('')
            ->setTitle('')
            ->setDetail('')
            ->setStatus('')
            ->setCode('')
            ->setSource(null);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): Error
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Error
    {
        $this->title = $title;

        return $this;
    }

    public function getDetail(): string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): Error
    {
        $this->detail = $detail;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): Error
    {
        $this->status = $status;

        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): Error
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return Source
     */
    public function getSource(): ?Source
    {
        return $this->source;
    }

    /**
     * @param Source $source
     */
    public function setSource(?Source $source): Error
    {
        $this->source = $source;

        return $this;
    }
}
