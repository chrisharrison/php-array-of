<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\Scalars\Mutable;

use PHPUnit\Framework\TestCase;
use ChrisHarrison\ArrayOf\ArrayOf;

final class ArrayOfBooleanTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ArrayOfBoolean([true]);
        $this->assertInstanceOf(ArrayOfBoolean::class, $test);
        $this->assertInstanceOf(ArrayOf::class, $test);
    }
}
