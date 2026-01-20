<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Admin Erfran",
            'email' => "erfrandarmawan@develobe.id",
            'password' => Hash::make('test1234'),
            'role' => "admin",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
