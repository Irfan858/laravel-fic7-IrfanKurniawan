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
        \App\Models\User::factory(5)->create();

        \App\Models\User::factory()->create([
            'name' => 'Irfan Kurniawan',
            'email' => 'irfankurniawan858@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'phone' => '6282387724330',
            'bio' => 'flutter dev',
            'password' => Hash::make('IrfanKWN858')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'phone' => '6282387724330',
            'bio' => 'laravel dev',
            'password' => Hash::make('12345678')
        ]);
    }
}
