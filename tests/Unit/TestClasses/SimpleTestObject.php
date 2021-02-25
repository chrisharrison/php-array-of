<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOfTest\Unit\TestClasses;

final class SimpleTestObject
{
    private $value;

    public function __construct(?string $value = null)
    {
        $this->value = $value;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }
}
