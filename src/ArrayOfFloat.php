<?php

namespace ChrisHarrison\ArrayOf;

final class ArrayOfFloat extends ArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'double';
    }
}
