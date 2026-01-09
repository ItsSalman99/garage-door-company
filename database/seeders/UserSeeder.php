<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 2️⃣ Create admin user
        $user = User::updateOrCreate(
            ['email' => 'admin@company.com'],   // unique check
            [
                'full_name' => 'Admin',
                'password' => Hash::make('admin123'),
                'phone' => '1231231231',
                'status' => true,
                'email_verified_at' => now(),
            ]
        );

        // 3️⃣ Assign Spatie Role
        if (!$user->hasRole('admin')) {
            $user->assignRole('admin');
        }

        // 2️⃣ Create company user
        $user = User::updateOrCreate(
            ['email' => 'universal@company.com'],   // unique check
            [
                'full_name' => 'Universal Garage Door',
                'password' => Hash::make('company123'),
                'phone' => '03001234567',
                'status' => true,
                'email_verified_at' => now(),
            ]
        );

        // 3️⃣ Assign Spatie Role
        if (!$user->hasRole('company')) {
            $user->assignRole('company');
        }

         // 2️⃣ Create company user
        $user2 = User::updateOrCreate(
            ['email' => 'buffalo@company.com'],   // unique check
            [
                'full_name' => 'Buffalo Garage Doors',
                'password' => Hash::make('company123'),
                'phone' => '12312421123',
                'status' => true,
                'email_verified_at' => now(),
            ]
        );

        // 3️⃣ Assign Spatie Role
        if (!$user2->hasRole('company')) {
            $user2->assignRole('company');
        }

        // 2️⃣ Create company user
        $user = User::updateOrCreate(
            ['email' => 'john@gmail.com'],   // unique check
            [
                'full_name' => 'John',
                'password' => Hash::make('tech123'),
                'phone' => '1232112312',
                'status' => true,
                'email_verified_at' => now(),
            ]
        );

        // 3️⃣ Assign Spatie Role
        if (!$user->hasRole('technician')) {
            $user->assignRole('technician');
        }

    }
}
