<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin role (if it doesn't exist)
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Create the admin user
        $user = User::create([
            'name' => 'amissell',
            'email' => 'amalissellay01@gmail.com',
            'password' => Hash::make('password_admin'),
        ]);

        // Attach the admin role to the user
        $user->roles()->attach($adminRole->id);
    }
}
