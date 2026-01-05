<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [

            // CABLES
            'Cables' => [
                [
                    'image' => 'assets/images/product/cable7ft.png',
                    'name' => 'Lifting Cable – 7 ft Door',
                    'brand' => '7 ft door',
                    'description' => 'Lifting cable assembly for garage doors.',
                ],
                [
                    'image' => 'assets/images/product/cable8ft.png',
                    'name' => 'Lifting Cable – 8 ft Door',
                    'brand' => '8 ft door',
                    'description' => 'Lifting cable assembly for garage doors.',
                ],
                [
                    'image' => 'assets/images/product/cable9ft.png',
                    'name' => 'Lifting Cable – 9 ft Door',
                    'brand' => '9 ft door',
                    'description' => 'Lifting cable assembly for garage doors.',
                ],
            ],

            // DRUMS
            'Drums' => [
                [
                    'image' => 'assets/images/product/drum.png',
                    'name' => 'Cable Drums for Torsion Systems',
                    'brand' => null,
                    'description' => 'Cable drums used with torsion spring systems (pair with matching door height and lift type).',
                ],
            ],

            // GARAGE DOOR OPENERS
            'Openers' => [
                [
                    'image' => 'assets/images/product/HPSmart_Quiet_Opener.png',
                    'name' => '3/4 HP Smart Quiet Belt Drive Garage Door Opener',
                    'brand' => 'Chamberlain',
                    'description' => '3/4 HP motor, belt drive, smart/Wi-Fi control.',
                ],
                [
                    'image' => 'assets/images/product/HPUltra_Quiet_Belt_Opener.png',
                    'name' => '3/4 HP Smart Belt Drive Opener with Camera',
                    'brand' => 'Chamberlain',
                    'description' => '3/4 HP motor, belt drive, integrated camera, smart/Wi-Fi control.',
                ],
                [
                    'image' => 'assets/images/product/HPSmart_Quiet_Opener.png',
                    'name' => '1/2 HP Smart Belt Drive Opener with Battery Backup',
                    'brand' => 'Chamberlain',
                    'description' => '1/2 HP motor, belt drive, battery backup, smart/Wi-Fi control.',
                ],
                [
                    'image' => 'assets/images/product/HPSmart_Quiet_Opener.png',
                    'name' => '1/2 HP Smart Chain Drive Opener with Battery Backup',
                    'brand' => 'Chamberlain',
                    'description' => '1/2 HP motor, chain drive, battery backup, smart/Wi-Fi control.',
                ],
                [
                    'image' => 'assets/images/product/HPSmart_Quiet_Opener.png',
                    'name' => 'Secure View 3/4 HP Belt Drive Opener with Camera & Battery Backup',
                    'brand' => 'Chamberlain',
                    'description' => '3/4 HP motor, belt drive, battery backup, integrated camera, smart/Wi-Fi control.',
                ],
                [
                    'image' => 'assets/images/product/HPSmart_Quiet_Opener.png',
                    'name' => 'Signature Series 3/4 HP Ultra-Quiet Belt Drive Opener',
                    'brand' => 'Genie',
                    'description' => '3/4 HP motor, belt drive, smart/Wi-Fi control.',
                ],
                [
                    'image' => 'assets/images/product/HPSmart_Quiet_Opener.png',
                    'name' => 'SilentMax 750 3/4 HP Belt Drive Opener',
                    'brand' => 'Genie',
                    'description' => '3/4 HP motor, ultra-quiet belt drive, includes wireless keypad.',
                ],
                [
                    'image' => 'assets/images/product/HPSmart_Quiet_Opener.png',
                    'name' => 'LiftMaster 6580L Belt Drive Opener',
                    'brand' => 'LiftMaster',
                    'description' => '1 HP motor with battery backup, belt drive.',
                ],
                [
                    'image' => 'assets/images/product/HPSmart_Quiet_Opener.png',
                    'name' => 'LiftMaster 2220L Chain Drive Opener with Camera',
                    'brand' => 'LiftMaster',
                    'description' => '3/4 HP motor, chain drive, integrated camera, smart/Wi-Fi control.',
                ],
            ],

            // SHAFTS & TUBES
            'Shafts & Tubes' => [
                [
                    'image' => 'assets/images/product/Tube_Shaft.png',
                    'name' => '8 ft Tube Shaft',
                    'brand' => null,
                    'description' => 'Steel tube/shaft for torsion spring assemblies. Length: 8 ft.',
                ],
                [
                    'image' => 'assets/images/product/Tube_Shaft.png',
                    'name' => '16 ft Tube Shaft',
                    'brand' => null,
                    'description' => 'Steel tube/shaft for torsion spring assemblies. Length: 16 ft.',
                ],
            ],

            // SPRINGS
            'Springs' => [
                [
                    'image' => 'assets/images/product/Torsion_spring.png',
                    'name' => 'Torsion Spring 207', 'brand' => '207',
                    'description' => 'Torsion spring for sectional garage doors.',
                ],
                [
                    'image' => 'assets/images/product/225Spring.png',
                    'name' => 'Torsion Spring 225', 'brand' => '225', 'description' => 'Torsion spring for sectional garage doors.'],
                [
                    'image' => 'assets/images/product/218Spring.png',
                    'name' => 'Torsion Spring 218', 'brand' => '218', 'description' => 'Torsion spring for sectional garage doors.'],
                [
                    'image' => 'assets/images/product/192Spring.png',
                    'name' => 'Torsion Spring 192', 'brand' => '192', 'description' => 'Torsion spring for sectional garage doors.'],
                [
                    'image' => 'assets/images/product/243Spring.png',
                    'name' => 'Torsion Spring 243', 'brand' => '243', 'description' => 'Torsion spring for sectional garage doors.'],
                [
                    'image' => 'assets/images/product/234Spring.png',
                    'name' => 'Torsion Spring 234', 'brand' => '234', 'description' => 'Torsion spring for sectional garage doors.'],
                [
                    'image' => 'assets/images/product/250Spring.png',
                    'name' => 'Torsion Spring 250', 'brand' => '250', 'description' => 'Torsion spring for sectional garage doors.'],
            ],
        ];

        foreach ($products as $categoryName => $items) {

            $category = Category::where('name', $categoryName)
                ->where('type', 'product')
                ->first();

            if (! $category) {
                continue;
            }

            foreach ($items as $p) {
                Product::updateOrCreate(
                    [
                        'name' => $p['name'],
                        'image' => $p['image'],
                        'categoryId' => $category->id,
                    ],
                    [
                        'brand' => $p['brand'],
                        'description' => $p['description'],
                        'status' => true,
                    ]
                );
            }
        }
    }
}
