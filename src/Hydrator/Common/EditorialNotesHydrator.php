<?php
declare(strict_types=1);

namespace AppleMusic\Hydrator;

use AppleMusic\Model\Common\EditorialNotes;

class EditorialNotesHydrator
{
    public function hydrate(EditorialNotes &$editorialNotes, $data)
    {
        if (isset($data->short)) {
            $editorialNotes->setShort($data->short);
        }

        if (isset($data->standard)) {
            $editorialNotes->setStandard($data->standard);
        }
    }
}
