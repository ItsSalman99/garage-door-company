<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productCategories = [
            'Garage Doors',
            'Openers',
            'Springs',
            'Cables',
            'Rollers',
            'Tracks & Hardware',
            'Panels / Sections',
            'Remotes & Keypads',
            'Sensors & Controls',
            'Smart Controllers',
            'Weather & Insulation',
            'Commercial',
            'Drums',
            'Shafts & Tubes',
            'Repairs',
            'Installations & Replacement',
            'Maintenance',
            'Emergency',
            'Smart / Home Automation',
            'Safety & Security',
            'Commercial',
            'Specialty & Custom',
            'Inspection & Consultation'
        ];

        foreach ($productCategories as $category) {
            Category::updateOrCreate(
                ['name' => $category],
                [
                    'status' => true
                ]
            );
        }


    }
}

