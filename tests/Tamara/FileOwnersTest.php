<?php

namespace Tamara;

use App\FileOwners;
use PHPUnit\Framework\TestCase;

class FileOwnersTest extends TestCase
{
    public function testGroupByOwners(): void
    {
        $files = [
            "Input.txt" => "Randy",
            "Code.py" => "Stan",
            "Output.txt" => "Randy"
        ];
        $expected = [
            'Randy' => ['Input.txt', 'Output.txt'],
            'Stan' => ['Code.py']
        ];
        $groupByOwners = FileOwners::groupByOwners($files);

        $this->assertEquals($expected, $groupByOwners);
    }
}
