<?php

namespace App\Controllers\User;

use App\Interfaces\DatabaseInterface;
use App\Interfaces\EmailServiceInterfaces;
use App\Interfaces\SMSServiceInterfaces;

readonly class UserRepository
{

    public function __construct(
        private DatabaseInterface      $database,
        private EmailServiceInterfaces $emailService,
        private SMSServiceInterfaces   $smsService,
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