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

$register_user = new UserRepository(new MySql());
$result['Registration User'] = $register_user->registerUser($user_data);

$send_email = new EmailService();
$result['Email Send'] = $send_email->sendWelcomeEmail($user_data['email']);

$send_sms = new SMSService();
$result['SMS Send'] = $send_sms->sendSMS($user_data['phone']);

dd($result);