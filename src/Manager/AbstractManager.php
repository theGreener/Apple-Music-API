<?php

namespace AppleMusic\Manager;

use AppleMusic\HttpClient;
use AppleMusic\Hydrator\HydratorInterface;

abstract class AbstractManager
{
    protected $client;
    protected $hydrator;

    /**
     * @param HttpClient $client
     * @param HydratorInterface $hydrator
     */
    public function __construct(HttpClient $client, HydratorInterface $hydrator)
    {
        $this->client = $client;
        $this->hydrator = $hydrator;
    }
}
