<?php

namespace AppleMusic\Model\Collection;

use ArrayIterator;
use Countable;
use IteratorAggregate;

/**
 * Class ArrayCollection
 * @package AppleMusic\Model\Collection
 */
class ArrayCollection implements Countable, IteratorAggregate
{
    protected $items;

    /**
     * ArrayCollection constructor.
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    /**
     * @return int
     */
    public function count()
    {
        return (int) count($this->items);
    }
}
