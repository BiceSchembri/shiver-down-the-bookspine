<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed comments from factory
        \App\Models\Comment::factory(1)->create();

        // Seed non-admin users from factory
        \App\Models\User::factory(3)->create();

        // Create admin if it doesn't exist already (unique email)
        \App\Models\User::firstOrCreate([
            'email' => 'admin@email.com',
        ], [
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'username' => 'Admin',
            'email_verified_at' => now(),
            'password' => 'adminpassword',
            'is_admin' => 1,
            'remember_token' => Str::random(10),
        ]);
    }
}
