<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama'       => 'Admin UPS',
                'name'       => 'admin',
                'email'      => 'admin@ups.com',
                'password'   => Hash::make('admin123'),
                'role'       => 'admin',
                'kelas'      => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama'       => 'User Test',
                'name'       => 'user',
                'email'      => 'user@ups.com',
                'password'   => Hash::make('user1234'),
                'role'       => 'murid',
                'kelas'      => 'XII RPL 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
