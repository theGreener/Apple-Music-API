<?php

namespace AppleMusic\Utils;

use AppleMusic\ServiceManager;

trait CommandTrait
{
    /**
     * @var ServiceManager
     */
    private $serviceManager;

    public function __construct(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;

        parent::__construct();
    }
}
