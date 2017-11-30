<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\Scalars\Mutable;

use ChrisHarrison\ArrayOf\ArrayOf;

final class ArrayOfInteger extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'integer';
    }
}
