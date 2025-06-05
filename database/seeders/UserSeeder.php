<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Super Admin
        User::create([
            'name' => 'Admin King',
            'email' => 'admin@kingstream.com',
            'password' => Hash::make('password'),
            'role' => 'super_admin',
        ]);

        // Revendeur test
        User::create([
            'name' => 'Test Reseller',
            'email' => 'reseller@test.com',
            'password' => Hash::make('password'),
            'role' => 'reseller',
            'brand_name' => 'NovaStream',
            'logo_url' => null,
            'custom_domain' => null,
            'credit' => 100,
        ]);

    }
}
