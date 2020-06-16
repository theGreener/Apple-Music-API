<?php


namespace AppleMusic\Hydrator;

use AppleMusic\Model\Resource;

interface HydratorInterface
{
    /**
     * @param Resource &$resource The resource object to hydrate
     * @param array $data The raw data to hydrate the resource with
     */
    public function hydrate(Resource &$resource, array $data): void;
}
