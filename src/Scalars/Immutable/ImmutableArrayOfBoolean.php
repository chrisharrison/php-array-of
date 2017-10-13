<?php

namespace ChrisHarrison\ArrayOf\Scalars\Immutable;

use ChrisHarrison\ArrayOf\ImmutableArrayOf;

final class ImmutableArrayOfBoolean extends ImmutableArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'boolean';
    }
}
