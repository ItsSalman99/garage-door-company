<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // 2️⃣ Create company user
        $user = User::updateOrCreate(
            ['email' => 'john@gmail.com'],   // unique check
            [
                'full_name' => 'John',
                'password' => Hash::make('tech123'),
                'phone' => '',
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
