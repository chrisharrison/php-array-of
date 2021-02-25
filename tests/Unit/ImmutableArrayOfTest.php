<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOfTest\Unit;

use ChrisHarrison\ArrayOf\Exceptions\ImmutabilityException;
use ChrisHarrison\ArrayOfTest\Unit\TestClasses\ValidScalarImmutableArrayOf;
use PHPUnit\Framework\TestCase;

final class ImmutableArrayOfTest extends TestCase
{
    public function testImmutabilityOfSet(): void
    {
        $test = new ValidScalarImmutableArrayOf(['test']);
        $this->expectException(ImmutabilityException::class);
        $test[] = 'invalid';
    }

    public function testImmutabilityOfUnset(): void
    {
        $test = new ValidScalarImmutableArrayOf(['test']);
        $this->expectException(ImmutabilityException::class);
        unset($test[0]);
    }
}
