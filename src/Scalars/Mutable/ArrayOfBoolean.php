<?php

namespace ChrisHarrison\ArrayOf\Scalars\Mutable;

use ChrisHarrison\ArrayOf\ArrayOf;

final class ArrayOfBoolean extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'boolean';
    }
}
