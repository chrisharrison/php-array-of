<?php

namespace ChrisHarrison\ArrayOf;

final class ArrayOfInteger extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'integer';
    }
}
