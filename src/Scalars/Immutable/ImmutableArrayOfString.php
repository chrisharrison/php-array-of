<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\Scalars\Immutable;

use ChrisHarrison\ArrayOf\ImmutableArrayOf;

final class ImmutableArrayOfString extends ImmutableArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'string';
    }
}
