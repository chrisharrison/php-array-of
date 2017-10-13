<?php

namespace ChrisHarrison\ArrayOf;

use ChrisHarrison\ArrayOf\Exceptions\InvalidEnforcementType;
use ChrisHarrison\ArrayOf\Exceptions\InvalidInstantiationType;
use ChrisHarrison\ArrayOf\TestClasses\InvalidClassArrayOf;
use ChrisHarrison\ArrayOf\TestClasses\InvalidScalarArrayOf;
use ChrisHarrison\ArrayOf\TestClasses\SimpleTestObject;
use ChrisHarrison\ArrayOf\TestClasses\ValidClassArrayOf;
use ChrisHarrison\ArrayOf\TestClasses\ValidScalarArrayOf;
use PHPUnit\Framework\TestCase;

final class ArrayOfTest extends TestCase
{
    public function testValidEnforcementTypes()
    {
        $validScalar = new ValidScalarArrayOf([]);
        $this->assertInstanceOf(ArrayOf::class, $validScalar);

        $validClass = new ValidClassArrayOf([]);
        $this->assertInstanceOf(ArrayOf::class, $validClass);
    }

    public function testInvalidScalarEnforcementType()
    {
        $this->expectException(InvalidEnforcementType::class);
        new InvalidScalarArrayOf([]);
    }

    public function testInvalidClassEnforcementType()
    {
        $this->expectException(InvalidEnforcementType::class);
        new InvalidClassArrayOf([]);
    }

    public function testValidInputTypes()
    {
        $scalars = new ValidScalarArrayOf(['test', 'test-again']);
        $this->assertInstanceOf(ArrayOf::class, $scalars);

        $classes = new ValidClassArrayOf([new SimpleTestObject, new SimpleTestObject]);
        $this->assertInstanceOf(ArrayOf::class, $classes);
    }

    public function testInvalidScalarInputType()
    {
        $this->expectException(InvalidInstantiationType::class);
        new ValidScalarArrayOf([1]);
    }

    public function testInvalidClassInputType()
    {
        $this->expectException(InvalidInstantiationType::class);
        new ValidClassArrayOf([new \stdClass]);
    }

    public function testCanUseAsArray()
    {
        $test = new ValidScalarArrayOf(['test1', 'test2']);

        $this->assertEquals('test1', $test[0]);
        $this->assertEquals('test2', $test[1]);
        $this->assertTrue(isset($test[0]));
        $this->assertFalse(isset($test[100]));

        $i = 0;
        foreach ($test as $item) {
            $i++;
        }
        $this->assertEquals(2, $i);
    }
}
