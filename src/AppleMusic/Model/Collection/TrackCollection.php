<?php

namespace AppleMusic\Model\Collection;

use AppleMusic\Model\Track;

/**
 * Class TrackCollection
 * @package AppleMusic\Model\Collection
 */
class TrackCollection extends ArrayCollection
{
    /**
     * @param string $key
     * @param Track $item
     */
    public function addItem($key, Track $item)
    {
        $this->items[$key] = $item;
    }
}
