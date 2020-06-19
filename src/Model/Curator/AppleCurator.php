<?php

declare(strict_types=1);

namespace AppleMusic\Model\Curator;

use AppleMusic\Model\Common\Resource;
use AppleMusic\Traits\Curator as CuratorTrait;

/**
 * Class AppleCurator
 * @package AppleMusic\Model
 */
class AppleCurator extends Resource
{
    const RESOURCE_TYPE = 'apple-curators';

    use CuratorTrait;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setArtwork(null)
            ->setEditorialNotes(null)
            ->setName('')
            ->setUrl('');
    }
}
