<?php
declare(strict_types=1);

namespace AppleMusic\Hydrator;

use AppleMusic\Model\PlayParameters;

class PlayParametersHydrator
{
    public function hydrate(PlayParameters &$playParameters, $data)
    {
        foreach (get_object_vars($data) as $property => $value) {
            $methodName = 'set' . ucfirst($property);
            
            if (method_exists($playParameters, $methodName)) {
                $playParameters->$methodName($value);
            }
        }
    }
}
