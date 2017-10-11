<?php

namespace ChrisHarrison\ArrayOf\TestClasses;

use ChrisHarrison\ArrayOf\ArrayOf;

final class InvalidScalarArrayOf extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'array';
    }
}
