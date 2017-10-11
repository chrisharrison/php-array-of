<?php

namespace ChrisHarrison\ArrayOf;

final class ArrayOfString extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'string';
    }
}
