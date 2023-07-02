<?php

namespace App\Controllers\Database;

use App\Interfaces\DatabaseInterface;

class PgSql implements DatabaseInterface
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