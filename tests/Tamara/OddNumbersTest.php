<?php

namespace Tamara;

use App\OddNumbers;
use PHPUnit\Framework\TestCase;

class OddNumbersTest extends TestCase
{
    public function testOddNumbers(): void
    {
        $arr = [2, 5, 9, 1, 5, 1, 8, 2, 8];
        $this->assertEquals(9, OddNumbers::getOddNumbers($arr));
    }
}
