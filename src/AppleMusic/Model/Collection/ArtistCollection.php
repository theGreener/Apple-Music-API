<?php

namespace AppleMusic\Model\Collection;

use AppleMusic\Model\Artist;

/**
 * Class ArtistCollection
 * @package AppleMusic\Model\Collection
 */
class ArtistCollection extends ArrayCollection
{
    /**
     * @param string $key
     * @param Artist $item
     */
    public function addItem($key, Artist $item)
    {
        $this->items[$key] = $item;
    }

    /**
     * @param string $artistName [description]
     *
     * @return Artist
     */
    public function getItemByArtistName($artistName)
    {
        foreach ($this->items as $item) {
            if ($item->getName() === $artistName) {
                return $item;
            }
        }

        // TODO: Replace with NotFound Exception
        return false;
    }
}
