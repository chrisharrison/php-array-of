<?php

namespace ChrisHarrison\ArrayOf\Scalars\Mutable;

use ChrisHarrison\ArrayOf\ArrayOf;

final class ArrayOfString extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'string';
    }
}
