<?php

namespace App\Controllers\User\Notification;

class EmailService
{
    public function sendWelcomeEmail($email): string
    {
        return 'Відправив листа на ' . $email;
    }
}