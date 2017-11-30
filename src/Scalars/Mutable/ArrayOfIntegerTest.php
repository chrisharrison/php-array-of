<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\Scalars\Mutable;

use PHPUnit\Framework\TestCase;
use ChrisHarrison\ArrayOf\ArrayOf;

final class ArrayOfIntegerTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ArrayOfInteger([1]);
        $this->assertInstanceOf(ArrayOfInteger::class, $test);
        $this->assertInstanceOf(ArrayOf::class, $test);
    }
}
