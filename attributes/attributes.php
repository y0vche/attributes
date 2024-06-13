<?php

use App\DTO\UserRegistration;

require_once __DIR__.'/../vendor/autoload.php';

$userRegistration = new UserRegistration('Gary', 'gary@example.com');

$userRegistration->email = 'gary@example.com';

dd($userRegistration);