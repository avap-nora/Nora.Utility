<?php
/**
 * this file is part of Nora
 */
declare(strict_types=1);

namespace Nora\Utility\FileSystem;

class Path
{
    public static function join(...$args) : string
    {
        return implode(DIRECTORY_SEPARATOR, $args);
    }
}
