<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Eka Putra',
            'username' => 'eka',
            'email' => 'eka@gmail.com',
            'password' => '12345678',
            'is_admin' => true
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Dwi Putri',
            'username' => 'dwi',
            'email' => 'dwi@gmail.com',
            'password' => '12345678',
        ]);
    }
}
