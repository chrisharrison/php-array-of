<?php

namespace ChrisHarrison\ArrayOf\Scalars\Immutable;

use PHPUnit\Framework\TestCase;

final class ImmutableArrayOfBooleanTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ImmutableArrayOfBoolean([true]);
        $this->assertInstanceOf(ImmutableArrayOfBoolean::class, $test);
        $this->assertInstanceOf(ImmutableArrayOf::class, $test);
    }
}
