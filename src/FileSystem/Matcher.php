<?php
/**
 * this file is part of Nora
 */
declare(strict_types=1);

namespace Nora\Utility\FileSystem;

class Matcher
{
    public function __construct()
    {
    }

    public function __invoke($pattern)
    {
        var_dump(glob($pattern));
        return $this;
    }
}
