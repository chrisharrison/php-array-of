<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOfTest\Unit\TestClasses;

use ChrisHarrison\ArrayOf\ArrayOf;

final class InvalidScalarArrayOf extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'array';
    }
}
