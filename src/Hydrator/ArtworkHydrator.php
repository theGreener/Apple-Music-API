<?php

namespace AppleMusic\Hydrator;

use AppleMusic\Model\Artwork;

class ArtworkHydrator
{
    /**
     * @param Artwork &$artwork
     * @param object  $data
     */
    public function hydrate(Artwork &$artwork, $data)
    {
        $artwork
            ->setWidth($data->width)
            ->setHeight($data->height)
            ->setUrl($data->url);

        if (isset($data->bgColor)) {
            $artwork->setBgColor($data->bgColor);
        }
        if (isset($data->textColor1)) {
            $artwork->setTextColor1($data->textColor1);
        }
        if (isset($data->textColor2)) {
            $artwork->setTextColor2($data->textColor2);
        }
        if (isset($data->textColor3)) {
            $artwork->setTextColor3($data->textColor3);
        }
        if (isset($data->textColor3)) {
            $artwork->setTextColor4($data->textColor3);
        }
    }
}
