<?php
declare(strict_types=1);

namespace Nora\Utility;

use Nora\Utility\DotEnv\DotEnv;
use PHPUnit\Framework\TestCase;

class DotEnvTest extends TestCase
{
    public function testIsTrue()
    {
        $this->assertInstanceOf(DotEnv::class, new DotEnv(__DIR__));
    }
}
