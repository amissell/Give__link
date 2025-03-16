<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function register(array $data); // Registers a user
    public function login(array $credentials); // Logs in a user
}
