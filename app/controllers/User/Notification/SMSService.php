<?php

namespace App\Controllers\User\Notification;

use App\Interfaces\SMSServiceInterfaces;

class SMSService implements SMSServiceInterfaces
{
    public function sendSMS($phone): string
    {
        $text = 'Вітаємо з реєстрацією!';
        return $text . ' ' . $phone;
    }
}