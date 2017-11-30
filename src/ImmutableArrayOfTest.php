<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf;

use ChrisHarrison\ArrayOf\Exceptions\ImmutabilityException;
use ChrisHarrison\ArrayOf\TestClasses\ValidScalarImmutableArrayOf;
use PHPUnit\Framework\TestCase;

final class ImmutableArrayOfTest extends TestCase
{
    public function testImmutabilityOfSet()
    {
        $test = new ValidScalarImmutableArrayOf(['test']);
        $this->expectException(ImmutabilityException::class);
        $test[] = 'invalid';
    }

    public function testImmutabilityOfUnset()
    {
        $test = new ValidScalarImmutableArrayOf(['test']);
        $this->expectException(ImmutabilityException::class);
        unset($test[0]);
    }
}
