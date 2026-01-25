<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin Develobe',
            'email' => 'erfrandarmawan@develobe.id',
            'password' => Hash::make('test1234'),
            'role' => 'admin',
            'avatar_path' => 'avatars/sample.jpg'
        ]);

        // User
        User::create([
            'name' => 'Erfran Darmawan',
            'email' => 'testuser@mailnesia.com',
            'password' => Hash::make('123456'),
            'role' => 'user',
            'avatar_path' => 'avatars/sample.jpg'
        ]);
    }
}
