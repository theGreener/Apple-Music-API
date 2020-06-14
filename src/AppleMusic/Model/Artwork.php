<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class Artwork
 * @package AppleMusic\Model
 */
class Artwork
{
    protected $bgColor;
    protected $height;
    protected $width;
    protected $textColor1;
    protected $textColor2;
    protected $textColor3;
    protected $textColor4;
    protected $url;

    public function __construct()
    {
        $this
            ->setBgColor('')
            ->setHeight(0)
            ->setWidth(0)
            ->setTextColor1('')
            ->setTextColor2('')
            ->setTextColor3('')
            ->setTextColor4('')
            ->setUrl('');
    }

    public function getBgColor(): string
    {
        return $this->bgColor;
    }

    public function setBgColor(string $bgColor): Artwork
    {
        $this->bgColor = $bgColor;

        return $this;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): Artwork
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): Artwork
    {
        $this->width = $width;

        return $this;
    }

    public function getTextColor1(): string
    {
        return $this->textColor1;
    }

    public function setTextColor1(string $textColor1): Artwork
    {
        $this->textColor1 = $textColor1;

        return $this;
    }

    public function getTextColor2(): string
    {
        return $this->textColor2;
    }

    public function setTextColor2(string $textColor2): Artwork
    {
        $this->textColor2 = $textColor2;

        return $this;
    }

    public function getTextColor3(): string
    {
        return $this->textColor3;
    }

    public function setTextColor3(string $textColor3): Artwork
    {
        $this->textColor3 = $textColor3;

        return $this;
    }

    public function getTextColor4(): string
    {
        return $this->textColor4;
    }

    public function setTextColor4(string $textColor4): Artwork
    {
        $this->textColor4 = $textColor4;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Artwork
    {
        $this->url = $url;

        return $this;
    }
}
