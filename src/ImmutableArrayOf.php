<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf;

use ChrisHarrison\ArrayOf\Exceptions\ImmutabilityException;

abstract class ImmutableArrayOf extends ArrayOf
{
    public function offsetSet($offset, $value)
    {
        throw new ImmutabilityException();
    }

    public function offsetUnset($offset)
    {
        throw new ImmutabilityException();
    }
}
