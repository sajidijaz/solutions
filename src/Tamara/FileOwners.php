<?php

declare(strict_types=1);

namespace App;

class FileOwners
{
    public static function groupByOwners(array $files): array
    {
        $ownerFiles = [];
        foreach($files as $file => $owner) {
            $ownerFiles[$owner][] = $file;
        }
        return $ownerFiles;
    }
}
