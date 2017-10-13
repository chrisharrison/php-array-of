<?php

namespace ChrisHarrison\ArrayOf;

use ChrisHarrison\ArrayOf\Exceptions\InvalidEnforcementType;
use ChrisHarrison\ArrayOf\Exceptions\InvalidInstantiationType;

abstract class ArrayOf extends \ArrayObject
{
    abstract protected function typeToEnforce() : string;

    public function __construct(array $input = [])
    {
        //Check that the type to enforce is valid
        if (!$this->checkEnforcementType()) {
            throw new InvalidEnforcementType($this->typeToEnforce());
        }

        //Enforce type of array items.
        foreach ($input as $item) {
            if (!$this->checkType($item)) {
                throw new InvalidInstantiationType(static::class, self::getType($item), $this->typeToEnforce());
            }
        }
        parent::__construct($input);
    }

    private function checkType($variable) : bool
    {
        if (is_object($variable)) {
            return get_class($variable) == $this->typeToEnforce() || is_subclass_of($variable, $this->typeToEnforce());
        }

        return (self::getType($variable) == $this->typeToEnforce());
    }

    private function checkEnforcementType() : bool
    {
        //Check for valid class
        if (class_exists($this->typeToEnforce())) {
            return true;
        }

        //Check for scalar
        $scalars = ['boolean', 'integer', 'double', 'string'];
        return in_array($this->typeToEnforce(), $scalars);
    }

    private static function getType($variable) : string
    {
        if (is_object($variable)) {
            return get_class($variable);
        }

        return gettype($variable);
    }
}
