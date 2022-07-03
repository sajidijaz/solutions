<?php

declare(strict_types=1);

namespace App;

class Thesaurus
{
    private array $thesaurus;

    function __construct(array $thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms(string $word) : string
    {
        return json_encode(["word" => $word, "synonyms" => $this->thesaurus[$word] ?? []]);
    }
}
