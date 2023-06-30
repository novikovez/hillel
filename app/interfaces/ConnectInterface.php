<?php

namespace App\Interfaces;

interface ConnectInterface
{
    public function connect(): array;

    public function insert($users, $userData): bool;
}

