<?php
declare(strict_types=1);

namespace Nora\Utility;

use Nora\Utility\DotEnv\DotEnv;
use Nora\Utility\FileSystem\FileSystemHandler;
use Nora\Utility\FileSystem\Path;
use PHPUnit\Framework\TestCase;

class FileSystemTest extends TestCase
{
    public function testIsTrue()
    {
        $f = new FileSystemHandler(__DIR__);
        $f->move("tmp")->directory(
            [
                'aaa',
                'a/b/c/c/d',
             ]
        )->create(0755, true);
    }
}
