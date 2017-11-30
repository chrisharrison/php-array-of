<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\Exceptions;

final class InvalidEnforcementType extends \Exception
{
    public function __construct(string $type)
    {
        parent::__construct(sprintf(
            "ArrayOf objects can only enforce scalars and objects. Tried to enforce: %s",
            $type
        ));
    }
}
