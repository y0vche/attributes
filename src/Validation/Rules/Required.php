<?php

namespace App\Validation\Rules;

use Attribute;

#[Attribute]
class Required extends ValidationRuleInterface
{
    public function getValidator()
    {
        // Implement getValidator() method.
    }
}