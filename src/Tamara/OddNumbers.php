<?php

declare(strict_types=1);

namespace App;

class OddNumbers
{
    public static function getOddNumbers(array $srcValues): int
    {
        $result = 0;
        for ($i = 0; $i < sizeof($srcValues); $i++) {
            $result = $result ^ $srcValues[$i];
        }
        return $result;
    }
}
