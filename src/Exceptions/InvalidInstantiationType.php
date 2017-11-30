<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\Exceptions;

final class InvalidInstantiationType extends \InvalidArgumentException
{
    public function __construct(string $className, string $actualType, string $expectedType)
    {
        parent::__construct(sprintf(
            "Tried to instantiate a %s with a %s. Only accepts objects of type %s.",
            $className,
            $actualType,
            $expectedType
        ));
    }
}
