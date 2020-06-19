<?php

declare(strict_types=1);

namespace AppleMusic\Model\Common;

/**
 * Class Relationship
 * @package AppleMusic\Model
 */
class Relationship
{
    protected $href;
    protected $data;
    protected $next;

    public function __construct()
    {
        $this
            ->setHref('')
            ->setData([])
            ->setNext('');
    }

    public function getHref(): string
    {
        return $this->href;
    }

    public function setHref(string $href): Relationship
    {
        $this->href = $href;

        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): Relationship
    {
        $this->data = $data;

        return $this;
    }

    public function getNext(): string
    {
        return $this->next;
    }

    public function setNext(string $next): Relationship
    {
        $this->next = $next;

        return $this;
    }
}
