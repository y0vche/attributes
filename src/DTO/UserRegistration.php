<?php

namespace App\DTO;

class UserRegistration
{
    public function __construct(
        readonly public string $email,
        readonly public string $username,
    ) {
    }
}