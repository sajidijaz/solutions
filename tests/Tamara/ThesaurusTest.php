<?php

namespace Tamara;

use App\Thesaurus;
use PHPUnit\Framework\TestCase;

class ThesaurusTest extends TestCase
{
    public function testGetSynonyms(): void
    {
        $thesaurus = new Thesaurus(["buy" => ["purchase"], "big" => ["great", "large"]]);
        $expected = '{"word":"big","synonyms":["great","large"]}';
        self::assertJsonStringEqualsJsonString($expected, $thesaurus->getSynonyms('big'));
    }
}
