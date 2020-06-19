<?php

declare(strict_types=1);

namespace AppleMusic\Model\Recommendation;

use AppleMusic\Model\Common\Resource;

use DateTime;

/**
 * Class Recommendation
 * @package AppleMusic\Model
 */
class Recommendation extends Resource
{
    const RESOURCE_TYPE = 'personal-recommendation';

    protected $isGroupRecommendation;
    protected $nextUpdateDate;
    protected $reason;
    protected $resourceTypes;
    protected $title;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setIsGroupRecommendation(false)
            ->setNextUpdateDate(null)
            ->setReason('')
            ->setResourceTypes([])
            ->setTitle('');
    }

    public function getIsGroupRecommendation(): bool
    {
        return $this->isGroupRecommendation;
    }

    public function setIsGroupRecommendation(bool $isGroupRecommendation): Recommendation
    {
        $this->isGroupRecommendation = $isGroupRecommendation;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getNextUpdateDate(): ?DateTime
    {
        return $this->nextUpdateDate;
    }

    /**
     * @param DateTime $nextUpdateDate
     */
    public function setNextUpdateDate(?DateTime $nextUpdateDate): Recommendation
    {
        $this->nextUpdateDate = $nextUpdateDate;

        return $this;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function setReason(string $reason): Recommendation
    {
        $this->reason = $reason;

        return $this;
    }

    public function getResourceTypes(): array
    {
        return $this->resourceTypes;
    }

    public function setResourceTypes(array $resourceTypes): Recommendation
    {
        $this->resourceTypes = $resourceTypes;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Recommendation
    {
        $this->title = $title;

        return $this;
    }
}
