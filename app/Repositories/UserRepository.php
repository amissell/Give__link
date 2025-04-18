<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface 
{
    public function register(array $data)
    {
        // Create the user first
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Attach the role using the name
        $role = \App\Models\Role::where('name', $data['role'])->first();

        if ($role) {
            $user->roles()->attach($role->id);
        }

        return $user;
    }

    public function login(array $credentials)
    {
        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return false;
        }

        auth()->login($user); 

        return $user;
    }
}
