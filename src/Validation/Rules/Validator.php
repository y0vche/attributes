<?php

namespace App\Validation\Rules;

use ReflectionClass;

class Validator
{
    private array $errors = [];

    public function validate(object $object): void
    {
        // ...
    

        // Instantiate a $reflector using new ReflectionClass($object);
        $reflector = new ReflectionClass($object);

    // Loop over the reflector properties

        dd($reflector);
        // Get the Attributes using $property->getAttributes(); (only ValidationRuleInterface)

        // Loop over the Attributes

            // Instantiate PropertyValidator instance using $attribute->getValidator();

            // Ask IF the property does not validate

                // Add the property to errors with message 

    }
}