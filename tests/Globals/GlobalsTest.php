<?php
declare(strict_types=1);

namespace Nora\Utility;

use Nora\Utility\Globals\Globals;
use PHPUnit\Framework\TestCase;

class GlobalsTest extends TestCase
{
    public function testIsTrue()
    {
        $this->assertInstanceOf(Globals::class, new Globals());
    }
}
