<?php
/**
 * this file is part of Nora
 */
declare(strict_types=1);

namespace Nora\Utility\FileSystem;

use Nora\Utility\FileSystem\EntryList\DirectoryList;
use Nora\Utility\FileSystem\Entry\DirectoryEntry;
use Nora\Utility\FileSystem\Entry\EntryInterface;

class FileSystemHandler
{
    private $root;
    private $entries;

    public function __construct($root = null)
    {
        $this->root = $root ?? getcwd();
    }

    public function match() : Matcher
    {
        return call_user_func_array(
            [(new Matcher), '__invoke'],
            func_get_args()
        );
    }

    public function root(string $dir)
    {
        return new FileSystemHandler($dir);
    }

    public function move(string $dir)
    {
        return new FileSystemHandler(
            Path::join(
                $this->root,
                $dir
            )
        );
    }

    public function directory($directories)
    {
        $list = new DirectoryList();
        foreach ($directories as $directory) {
            $list->addEntry(
                new DirectoryEntry(
                    Path::join(
                        $this->root,
                        $directory
                    )
                )
            );
        }
        return $list;
    }

}
