<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class EditorialNotes
 * @package AppleMusic\Model
 */
class EditorialNotes
{
    protected $short;
    protected $standard;

    public function __construct()
    {
        $this
            ->setShort('')
            ->setStandard('');
    }

    public function getShort(): string
    {
        return $this->short;
    }

    public function setShort(string $short): EditorialNotes
    {
        $this->short = $short;

        return $this;
    }

    public function getStandard(): string
    {
        return $this->standard;
    }

    public function setStandard(string $standard): EditorialNotes
    {
        $this->standard = $standard;

        return $this;
    }
}
