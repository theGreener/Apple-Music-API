<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class Storefront
 * @package AppleMusic\Model
 */
class Storefront extends Resource
{
    const RESOURCE_TYPE = 'storefronts';

    protected $defaultLanguageTag;
    protected $supportedLanguageTags;
    protected $explicitContentPolicy;
    protected $name;

    public function __construct()
    {
        $this
            ->setId('')
            ->setHref('')
            ->setRelationships([])
            ->setType(self::RESOURCE_TYPE)
            ->setDefaultLanguageTag('')
            ->setSupportedLanguageTags([])
            ->setExplicitContentPolicy('')
            ->setName('');
    }

    public function getDefaultLanguageTag(): string
    {
        return $this->defaultLanguageTag;
    }

    public function setDefaultLanguageTag(string $defaultLanguageTag): Storefront
    {
        $this->defaultLanguageTag = $defaultLanguageTag;

        return $this;
    }

    public function getSupportedLanguageTags(): array
    {
        return $this->supportedLanguageTags;
    }

    public function setSupportedLanguageTags(array $supportedLanguageTags): Storefront
    {
        $this->supportedLanguageTags = $supportedLanguageTags;

        return $this;
    }

    public function getExplicitContentPolicy(): string
    {
        return $this->explicitContentPolicy;
    }

    public function setExplicitContentPolicy(string $explicitContentPolicy): Storefront
    {
        $this->explicitContentPolicy = $explicitContentPolicy;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Storefront
    {
        $this->name = $name;

        return $this;
    }
}
