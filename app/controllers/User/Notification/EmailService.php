<?php

namespace App\Controllers\User\Notification;

use App\Interfaces\EmailServiceInterfaces;

class EmailService implements EmailServiceInterfaces
{

    public function sendWelcomeEmail($email): string
    {
        return 'Відправив листа на ' . $email;
    }
}