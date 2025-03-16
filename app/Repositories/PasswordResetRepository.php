<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PasswordResetRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PasswordResetRepository implements PasswordResetRepositoryInterface
{
    public function createResetToken(string $email, string $token)
    {
        return DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now() // Store the current timestamp
        ]);
    }

    public function findByToken(string $token)
    {
        return DB::table('password_resets')->where('token', $token)->first();
    }

    public function deleteToken(string $email)
    {
        return DB::table('password_resets')->where('email', $email)->delete();
    }
}
