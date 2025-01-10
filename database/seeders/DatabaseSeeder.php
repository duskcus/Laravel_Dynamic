<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'profile_picture_url' => 'https://img.daisyui.com/images/profile/demo/3@94.webp',
            'name' => 'Admin',
            'email' => 'test@example.com',
        ]);

        User::factory(10)->create();
    }
}
