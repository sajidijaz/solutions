<?php

declare(strict_types=1);

namespace App;

class Palindrome
{
    public static function isPalindrome(string $word): string
    {
        $w = strtolower($word);
        if($w == strrev($w)){
            return $w;
        }
        return $word;
    }
}
