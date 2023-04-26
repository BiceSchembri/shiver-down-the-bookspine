<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Comment::factory(3)->create();

        // Create the admin user if it doesn't exist
        \App\Models\User::firstOrCreate([
            'email' => 'admin@email.com',
        ], [
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'username' => 'Admin',
            'password' => 'ClownsAreScary',
            'email_verified_at' => now(),
            'is_admin' => 1,
        ]);

        \App\Models\User::firstOrCreate([
            'email' => 'sam@email.com',
        ], [
            'firstname' => 'Sam',
            'lastname' => 'Smith',
            'username' => 'sammy',
            'password' => '12345678',
            'email_verified_at' => now(),
            'is_admin' => 0
        ]);
    }
}
