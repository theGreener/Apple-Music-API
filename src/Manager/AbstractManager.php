<?php

namespace AppleMusic\Manager;

use AppleMusic\HttpClient;

abstract class AbstractManager
{
    protected $client;
    protected $hydrator;

    /**
     * @param HttpClient $client
     */
    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }
}
