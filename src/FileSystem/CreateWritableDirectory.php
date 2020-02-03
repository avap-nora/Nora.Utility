<?php
/**
 * this file is part of Nora
 */
declare(strict_types=1);

namespace Nora\Utility\FileSystem;

class CreateWritableDirectory
{
    public function __invoke(...$parts)
    {
        $directory = "/".implode(
            "/", array_map(
                function ($value) {
                    return trim($value, '/');
                }, $parts
            )
        );

        if (!file_exists($directory) && !@mkdir($directory, 0777, true) && !is_dir($directory)) {
            throw new NotWritableException($directory);
        }
        return $directory;
    }
}
