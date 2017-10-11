<?php

namespace ChrisHarrison\ArrayOf;

use PHPUnit\Framework\TestCase;

final class ArrayOfIntegerTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ArrayOfInteger([1]);
        $this->assertInstanceOf(ArrayOfInteger::class, $test);
        $this->assertInstanceOf(ArrayOf::class, $test);
    }
}
