<?php

namespace App\Validation\Rules;

use Attribute;

#[Attribute]
class Required implements ValidationRuleInterface
{
    public function getValidator()
    {
        // Implement getValidator() method.
    }
}