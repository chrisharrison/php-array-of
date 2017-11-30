<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\Scalars\Immutable;

use PHPUnit\Framework\TestCase;
use ChrisHarrison\ArrayOf\ImmutableArrayOf;

final class ImmutableArrayOfBooleanTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ImmutableArrayOfBoolean([true]);
        $this->assertInstanceOf(ImmutableArrayOfBoolean::class, $test);
        $this->assertInstanceOf(ImmutableArrayOf::class, $test);
    }
}
