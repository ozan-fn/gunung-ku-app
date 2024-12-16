<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $users = [
            ['name' => 'ozan', 'email' => 'ozan6825@gmail.com', 'password' => 'Akhmad6825'],
            ['name' => 'gilang', 'email' => 'gilang@gmail.com', 'password' => 'gilang12'],
            ['name' => 'astha', 'email' => 'astha@gmail.com', 'password' => 'astha123'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'password' => $user['password'],
                ]
            );
        }
    }
}
