<?php

namespace ChrisHarrison\ArrayOf;

final class ArrayOfBoolean extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'boolean';
    }
}
