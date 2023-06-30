<?php

namespace App\Controllers\Database;

use App\Interfaces\ConnectInterface;

class MySql implements ConnectInterface
{

    public function connect(): array
    {
        return [];
    }

    public function insert($users, $userData): bool
    {
        return true;
    }
}