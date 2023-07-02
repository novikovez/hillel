<?php
namespace App\Interfaces;
interface EmailServiceInterfaces {
    public function sendWelcomeEmail($email): string;
}