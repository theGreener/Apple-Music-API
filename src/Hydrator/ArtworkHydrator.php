<?php
declare(strict_types=1);

namespace AppleMusic\Hydrator;

use AppleMusic\Model\Artwork;

class ArtworkHydrator
{
    /**
     * @param Artwork &$artwork
     * @param object  $data
     */
    public function hydrate(Artwork &$artwork, $data)
    {
        foreach (get_object_vars($data) as $property => $value) {
            $methodName = 'set' . ucfirst($property);
            
            if (is_callable([$artwork, $methodName]), true) {
                $artwork->$methodName($value);
            }
        }
    }
}
