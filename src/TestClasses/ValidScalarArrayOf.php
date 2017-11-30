<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\TestClasses;

use ChrisHarrison\ArrayOf\ArrayOf;

final class ValidScalarArrayOf extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'string';
    }
}
