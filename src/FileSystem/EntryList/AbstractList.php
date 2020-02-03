<?php
/**
 * this file is part of Nora
 */
declare(strict_types=1);

namespace Nora\Utility\FileSystem\EntryList;

use Nora\Utility\FileSystem\Entry\EntryInterface;

abstract class AbstractList
{
    private $entries;

    public function addEntry(EntryInterface $entry)
    {
        $this->entries[] = $entry;
    }
}
