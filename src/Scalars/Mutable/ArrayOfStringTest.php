<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\Scalars\Mutable;

use PHPUnit\Framework\TestCase;
use ChrisHarrison\ArrayOf\ArrayOf;

final class ArrayOfStringTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ArrayOfString(['test']);
        $this->assertInstanceOf(ArrayOfString::class, $test);
        $this->assertInstanceOf(ArrayOf::class, $test);
    }
}
