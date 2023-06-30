<?php

namespace App\Controllers\User\Notification;

class SMSService
{
    public function sendSMS($phone): string
    {
        $text = 'Вітаємо з реєстрацією!';
        return $text . ' ' . $phone;
    }
}