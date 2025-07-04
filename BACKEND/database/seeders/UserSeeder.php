<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'), // Ganti dengan password yang aman
            'role' => 'admin'
        ]);

        // Tambahkan user biasa
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user1234'), // Ganti dengan password yang aman
            'role' => 'murid'
        ]);
    }
}
