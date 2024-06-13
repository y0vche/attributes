<?php

namespace App\DTO;

use App\Validation\Rules\Required;

readonly class UserRegistration
{
    public function __construct(
<<<<<<< HEAD
        readonly public string $email,
        readonly public string $username,
=======
        #[Required]
        public string $username,
        #[Required]
        public string $email,
>>>>>>> 3dfafc66c0b2d139f92f8638484b62c7710dc671
    ) {
    }
}