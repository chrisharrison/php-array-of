<?php

namespace ChrisHarrison\ArrayOf\Scalars\Immutable;

use PHPUnit\Framework\TestCase;

final class ImmutableArrayOfIntegerTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ImmutableArrayOfInteger([1]);
        $this->assertInstanceOf(ImmutableArrayOfInteger::class, $test);
        $this->assertInstanceOf(ImmutableArrayOf::class, $test);
    }
}
