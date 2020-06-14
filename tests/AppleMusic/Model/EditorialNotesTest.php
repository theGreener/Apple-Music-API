<?php

namespace Tests\AppleMusic\Model;

use AppleMusic\Model\EditorialNotes;
use PHPUnit\Framework\TestCase;

class EditorialNotesTest extends TestCase
{
    protected $editorialNotes;

    public function setUp()
    {
        $this->editorialNotes = new EditorialNotes();
    }

    public function testDefaultValues()
    {
        $this->assertEmpty($this->editorialNotes->getShort());
        $this->assertEmpty($this->editorialNotes->getStandard());
    }

    public function testShortGetterSetter()
    {
        $this->editorialNotes->setShort("Toast the boys' UK tour by treating yourself to an all-time great debut.");
        $this->assertEquals("Toast the boys' UK tour by treating yourself to an all-time great debut.", $this->editorialNotes->getShort());
    }

    public function testStandardGetterSetter()
    {
        $this->editorialNotes->setStandard('Back in 2006, Arctic Monkeys were cast as revolutionaries for uploading music to the internet. There’s nothing <i>quite</i> so radical about their debut, which fuses a punk snarl with the sharp tunes and agitated rhythms of New Wave, but it’s delivered with such invigorating panache that every note sounds fresh. The clincher is Alex Turner, who can carve knowing vignettes from any situation—whether he’s idly fantasising in a checkout queue (“I Bet You Look Good on the Dancefloor”) or, on “Mardy Bum”, lamenting a girlfriend’s volatile mood (“I see your frown and it’s like looking down the barrel of a gun.”)');
        $this->assertEquals('Back in 2006, Arctic Monkeys were cast as revolutionaries for uploading music to the internet. There’s nothing <i>quite</i> so radical about their debut, which fuses a punk snarl with the sharp tunes and agitated rhythms of New Wave, but it’s delivered with such invigorating panache that every note sounds fresh. The clincher is Alex Turner, who can carve knowing vignettes from any situation—whether he’s idly fantasising in a checkout queue (“I Bet You Look Good on the Dancefloor”) or, on “Mardy Bum”, lamenting a girlfriend’s volatile mood (“I see your frown and it’s like looking down the barrel of a gun.”)', $this->editorialNotes->getStandard());
    }
}
