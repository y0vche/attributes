<?php

namespace App\Validation\Rules;

use Attribute;
use App\Validation\Validators\RequiredValidator;
use App\Validation\Validators\ValidatorInterface;

#[Attribute]
class Required implements ValidationRuleInterface
{
    public function getValidator(): ValidatorInterface
    {
        return new RequiredValidator();
    }
}