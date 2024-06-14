<?php

use App\DTO\UserRegistration;
use App\Validation\Validator;

require_once __DIR__ . '/vendor/autoload.php';

$userRegistration = new UserRegistration('', 'not-valid-email');

$validator = new Validator();

$validator->validate($userRegistration);

// $errors = $validator->getErrors();