<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => env('DEFAULT_USERNAME', 'Test User'),
            'email' => env('DEFAULT_USER_EMAIL', 'test@example.com'),
            'password' => env('DEFAULT_PASSWORD_HASH', bcrypt('password')),
        ]);

        $this -> call(PostSeeder::class);
    }
}
