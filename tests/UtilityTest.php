<?php
declare(strict_types=1);

namespace Nora\Utility;

use PHPUnit\Framework\TestCase;

class UtilityTest extends TestCase
{
    public function testIsTrue()
    {
        $this->assertInstanceOf(Utility::class, new Utility());
    }
}
