<?php

namespace AppleMusic\Model\Collection;

use AppleMusic\Model\Album;

/**
 * Class AlbumCollection
 * @package AppleMusic\Model\Collection
 */
class AlbumCollection extends ArrayCollection
{
    /**
     * @param string $key
     * @param Album $item
     */
    public function addItem($key, Album $item)
    {
        $this->items[$key] = $item;
    }

    /**
     * @param string $albumName [description]
     *
     * @return Album
     */
    public function getItemByAlbumName($albumName)
    {
        foreach ($this->items as $item) {
            if ($item->getName() === $albumName) {
                return $item;
            }
        }

        // TODO: Replace with NotFound Exception
        return false;
    }
}
