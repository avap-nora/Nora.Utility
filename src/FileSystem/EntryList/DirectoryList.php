<?php
/**
 * this file is part of Nora
 */
declare(strict_types=1);

namespace Nora\Utility\FileSystem\EntryList;

use Nora\Utility\FileSystem\Entry\EntryInterface;

class DirectoryList extends AbstractList
{
    private $entries;

    public function addEntry(EntryInterface $entry)
    {
        $this->entries[] = $entry;
    }

    public function create($mode = 0777, $recursive = false)
    {
        foreach ($this->entries as $entry)
        {
            $entry->create($mode, $recursive);
        }
        return $this;
    }

    public function writable()
    {
        foreach ($this->entries as $entry)
        {
            $entry->writable();
        }
        return $this;
    }
}
