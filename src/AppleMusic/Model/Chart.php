<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class Chart
 * @package AppleMusic\Model
 */
class Chart
{
    protected $chart;
    protected $data;
    protected $href;
    protected $name;
    protected $next;

    public function __construct()
    {
        $this
            ->setChart('')
            ->setData([])
            ->setHref('')
            ->setName('')
            ->setNext('');
    }

    public function getChart(): string
    {
        return $this->chart;
    }

    public function setChart(string $chart): Chart
    {
        $this->chart = $chart;

        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): Chart
    {
        $this->data = $data;

        return $this;
    }

    public function getHref(): string
    {
        return $this->href;
    }

    public function setHref(string $href): Chart
    {
        $this->href = $href;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Chart
    {
        $this->name = $name;

        return $this;
    }

    public function getNext(): string
    {
        return $this->next;
    }

    /**
     * @param string $next
     * @return Chart
     */
    public function setNext(string $next)
    {
        $this->next = $next;

        return $this;
    }
}
