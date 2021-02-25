<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOfTest\Unit\TestClasses;

use ChrisHarrison\ArrayOf\ImmutableArrayOf;

final class ValidScalarImmutableArrayOf extends ImmutableArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'string';
    }
}
