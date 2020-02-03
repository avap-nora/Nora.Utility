<?php
/**
 * this file is part of Nora
 */
declare(strict_types=1);

namespace Nora\Utility\FileSystem\Entry;

class DirectoryEntry implements EntryInterface
{
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function create(
        $mode = 0777,
        $recursive = false
    ) {
        if (!file_exists($this->path)) {
            mkdir($this->path, $mode, $recursive);
        }
    }

    public function writable()
    {
        if (!file_exists($this->path)) {
            chmod($this->path, 777);
        }
    }

    public function __toString()
    {
        return $this->path;
    }
}
