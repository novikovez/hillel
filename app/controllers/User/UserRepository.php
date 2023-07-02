<?php

namespace App\Controllers\User;

use App\Controllers\User\Notification\EmailService;
use App\Controllers\User\Notification\SMSService;
use App\Interfaces\DatabaseInterface;


readonly class UserRepository
{

    public function __construct(
        private DatabaseInterface $database,
        private EmailService      $emailService,
        private SMSService        $smsService,
    )
    {
    }

    public function registerUser($userData): array
    {
        $result['Registration User'] = $this->database->insert('users', $userData);
        $result['Email Send'] = $this->emailService->sendWelcomeEmail($userData['email']);
        $result['SMS Send'] = $this->smsService->sendSMS($userData['phone']);
        return $result;
    }

}