<?php

declare(strict_types=1);

namespace AppleMusic\Model\Error;

/**
 * Class Source
 * @package AppleMusic\Model\Error
 */
class Source
{
    protected $parameter;
    protected $pointer;

    public function __construct()
    {
        $this
            ->setParameter('')
            ->setPointer('');
    }

    public function getParameter(): string
    {
        return $this->parameter;
    }

    public function setParameter(string $parameter): Source
    {
        $this->parameter = $parameter;

        return $this;
    }

    public function getPointer(): string
    {
        return $this->pointer;
    }

    public function setPointer(string $pointer): Source
    {
        $this->pointer = $pointer;

        return $this;
    }
}
