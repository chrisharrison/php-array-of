<?php

namespace ChrisHarrison\ArrayOf\TestClasses;

use ChrisHarrison\ArrayOf\ArrayOf;

final class InvalidClassArrayOf extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'CompletelyInvalidClassName' . md5(time());
    }
}
