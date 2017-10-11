<?php

namespace ChrisHarrison\ArrayOf;

use PHPUnit\Framework\TestCase;

final class ArrayOfBooleanTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ArrayOfBoolean([true]);
        $this->assertInstanceOf(ArrayOfBoolean::class, $test);
        $this->assertInstanceOf(ArrayOf::class, $test);
    }
}
