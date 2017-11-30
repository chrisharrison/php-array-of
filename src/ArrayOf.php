<?php

declare(strict_types=1);

namespace ChrisHarrison\ArrayOf;

use ChrisHarrison\ArrayOf\Exceptions\InvalidEnforcementType;
use ChrisHarrison\ArrayOf\Exceptions\InvalidInstantiationType;

abstract class ArrayOf extends \ArrayObject
{
    abstract protected function typeToEnforce() : string;

    public function __construct(array $input = [], ?callable $filter = null)
    {
        //Check that the type to enforce is valid
        if (!$this->checkEnforcementType()) {
            throw new InvalidEnforcementType($this->typeToEnforce());
        }

        $filteredInput = [];
        foreach ($input as $key => $item) {
            //Enforce type of array items.
            if (!$this->checkType($item)) {
                throw new InvalidInstantiationType(static::class, self::getType($item), $this->typeToEnforce());
            }

            //Allow input to be filtered by callback
            if ($filter !== null && $filter($item) == false) {
                continue;
            }

            $filteredInput[$key] = $item;
        }

        parent::__construct($filteredInput);
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
        if (class_exists($this->typeToEnforce()) || interface_exists($this->typeToEnforce())) {
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
