<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Auth\User::create([
            'name' => 'Test User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
        ]);

        \App\Models\Auth\Administrator::create([
            'name' => 'Administrator',
            'email' => 'admin@adlux.asia',
            'password' => bcrypt('admin123$'),
        ]);
    }
}
