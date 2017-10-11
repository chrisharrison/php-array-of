<?php

namespace ChrisHarrison\ArrayOf;

use PHPUnit\Framework\TestCase;

final class ArrayOfStringTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ArrayOfString(['test']);
        $this->assertInstanceOf(ArrayOfString::class, $test);
        $this->assertInstanceOf(ArrayOf::class, $test);
    }
}
