<?php

namespace App\Interfaces;

interface DatabaseInterface
{
    public function connect(): array;

    public function insert($users, $userData): bool;
}

