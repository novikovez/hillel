<?php
include 'vendor/autoload.php';

use App\Controllers\Database\MySql;
use App\Controllers\User\Notification\EmailService;
use App\Controllers\User\Notification\SMSService;
use App\Controllers\User\UserRepository;


$user_data = [
    "name" => "Igor",
    "email" => "user@gmail.com",
    "phone" => "0935555555",
];

$userRepository = new UserRepository(new MySql(), new EmailService(), new SMSService());
dd($userRepository->registerUser($user_data));