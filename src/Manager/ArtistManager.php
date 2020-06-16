<?php

declare(strict_types=1);

namespace AppleMusic\Manager;

use AppleMusic\HttpClient;
use AppleMusic\Hydrator\ArtistHydrator;

class ArtistManager extends AbstractManager
{
    public function __construct(HttpClient $client, ArtistHydrator $hydrator)
    {
        $this->hydrator = $hydrator;

        parent::__construct($client);
    }
}
