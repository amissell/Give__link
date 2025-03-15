<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Repositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function create(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        $data['verification_token'] = Str::random(60);
        $user = User::create($data);

        // Send verification email
        Mail::to($user->email)->send(new \App\Mail\VerifyEmail($user));

        return $user;
    }

    public function verifyEmail($token)
    {
        $user = User::where('verification_token', $token)->first();

        if ($user) {
            $user->email_verified_at = now();
            $user->verification_token = null;
            $user->save();
            return $user;
        }

        return null;
    }

    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }
}
