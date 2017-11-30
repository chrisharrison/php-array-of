<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\Scalars\Mutable;

use PHPUnit\Framework\TestCase;
use ChrisHarrison\ArrayOf\ArrayOf;

final class ArrayOfFloatTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ArrayOfFloat([1.5]);
        $this->assertInstanceOf(ArrayOfFloat::class, $test);
        $this->assertInstanceOf(ArrayOf::class, $test);
    }
}
