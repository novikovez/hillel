<?php

namespace App\Controllers\User;

use App\Interfaces\ConnectInterface;

class UserRepository
{

    protected ConnectInterface $db;

    public function __construct(
        ConnectInterface $connect,
    )
    {
        $this->db = $connect;
    }

    public function registerUser($userData): bool
    {
        return $this->db->insert('users', $userData);
    }
}