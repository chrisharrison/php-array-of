<?php

namespace ChrisHarrison\ArrayOf\Scalars\Mutable;

use ChrisHarrison\ArrayOf\ArrayOf;

final class ArrayOfInteger extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'integer';
    }
}
