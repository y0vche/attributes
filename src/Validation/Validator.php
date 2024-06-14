<?php

namespace App\Validation;

use App\Validation\Rules\ValidationRuleInterface;
use ReflectionAttribute;
use ReflectionClass;

class Validator
{
    private array $errors = [];

    public function validate(object $object): void
    {
        // Instantiate a $reflector using new ReflectionClass($object);
        $reflector = new ReflectionClass($object);

        // Loop over the reflector properties
        foreach ($reflector->getProperties() as $property) {

            // Get the Attributes using $property->getAttributes(); (only ValidationRuleInterface)
            $attributes = $property->getAttributes(
                ValidationRuleInterface::class, 
                ReflectionAttribute::IS_INSTANCEOF
            );

            dd($attributes);
            // Loop over the Attributes

            // Instantiate PropertyValidator instance using $attribute->getValidator();

            // Ask IF the property does not validate

            // Add the property to errors with message 

        }
    }
}
