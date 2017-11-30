<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf\TestClasses;

use ChrisHarrison\ArrayOf\ArrayOf;

final class ValidClassArrayOf extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return SimpleTestObject::class;
    }
}
