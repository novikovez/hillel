<?php

namespace App\Interfaces;

interface SMSServiceInterfaces {
    public function sendSMS($phone): string;
}