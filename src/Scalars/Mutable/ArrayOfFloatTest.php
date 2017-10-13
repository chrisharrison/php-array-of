<?php

namespace ChrisHarrison\ArrayOf\Scalars\Mutable;

use PHPUnit\Framework\TestCase;

final class ArrayOfFloatTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ArrayOfFloat([1.5]);
        $this->assertInstanceOf(ArrayOfFloat::class, $test);
        $this->assertInstanceOf(ArrayOf::class, $test);
    }
}
