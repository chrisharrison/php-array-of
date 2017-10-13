<?php

namespace ChrisHarrison\ArrayOf\Scalars\Immutable;

use ChrisHarrison\ArrayOf\ImmutableArrayOf;

final class ImmutableArrayOfString extends ImmutableArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'string';
    }
}
