<?php
namespace App\DTO;



class UserRegistration
{ 
    public string $username;
    public string $email;

    public function __construct(string $username, string $email)
}