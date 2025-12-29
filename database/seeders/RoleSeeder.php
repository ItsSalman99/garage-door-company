<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1️⃣ Create company role if not exists
        $companyRole = Role::firstOrCreate([
            'name' => 'company',
            'guard_name' => 'web'
        ]);
        $technicianRole = Role::firstOrCreate([
            'name' => 'technician',
            'guard_name' => 'web'
        ]);

    }
}
