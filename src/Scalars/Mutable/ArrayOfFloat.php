<?php

namespace ChrisHarrison\ArrayOf\Scalars\Mutable;

use ChrisHarrison\ArrayOf\ArrayOf;

final class ArrayOfFloat extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'double';
    }
}
