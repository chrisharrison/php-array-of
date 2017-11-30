<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\Exceptions;

final class ImmutabilityException extends \Exception
{
    public function __construct()
    {
        parent::__construct('ArrayOf objects are immutable.');
    }
}
