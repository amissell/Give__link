<?php

namespace App\Repositories\Interfaces;

interface PasswordResetRepositoryInterface
{
    public function createResetToken(string $email, string $token); // Create a password reset token
    public function findByToken(string $token); // Find a reset token
    public function deleteToken(string $email); // Delete the reset token
}
