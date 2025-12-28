<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

    }
}
