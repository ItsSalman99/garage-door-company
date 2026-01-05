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
        $categories = [
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
            'Shafts & Tubes'
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['name' => $category],
                [
                    'status' => true,
                    'type'   => 'product'
                ]
            );
        }
    }
}
