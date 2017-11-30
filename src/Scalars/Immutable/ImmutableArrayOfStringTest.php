<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\Scalars\Immutable;

use PHPUnit\Framework\TestCase;
use ChrisHarrison\ArrayOf\ImmutableArrayOf;

final class ImmutableArrayOfStringTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ImmutableArrayOfString(['test']);
        $this->assertInstanceOf(ImmutableArrayOfString::class, $test);
        $this->assertInstanceOf(ImmutableArrayOf::class, $test);
    }
}
