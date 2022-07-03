<?php

namespace Tamara;

use App\Palindrome;
use PHPUnit\Framework\TestCase;

class PalindromeTest extends TestCase
{
    public function testPalindrome(): void
    {
        self::assertEquals('deleveled', Palindrome::isPalindrome('Deleveled'));
    }
}
