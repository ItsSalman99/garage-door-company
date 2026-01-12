<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [

            // OPENERS
            'Openers' => [
                [
                    'name' => 'Safety sensor alignment / replacement',
                    'market' => 'Residential',
                    'is_emergency' => true,
                    'description' => 'Adjustment or replacement of safety sensors to ensure proper garage door operation.',
                ],
            ],

            // MAINTENANCE
            'Maintenance' => [
                [
                    'name' => 'Tune-up & lubrication',
                    'market' => 'Residential',
                    'is_emergency' => false,
                    'description' => 'Complete tune-up including lubrication of all moving garage door components.',
                ],
                [
                    'name' => 'Safety inspection & balance test',
                    'market' => 'Residential',
                    'is_emergency' => false,
                    'description' => 'Inspection of door balance, springs, cables, and safety systems.',
                ],
            ],

            // EMERGENCY
            'Emergency' => [
                [
                    'name' => 'Same-day emergency repair',
                    'market' => 'Residential',
                    'is_emergency' => true,
                    'description' => 'Urgent same-day garage door repair service.',
                ],
                [
                    'name' => '24/7 emergency service',
                    'market' => 'Residential',
                    'is_emergency' => true,
                    'description' => 'Round-the-clock emergency garage door repair service.',
                ],
            ],

            // SMART / HOME AUTOMATION
            'Smart / Home Automation' => [
                [
                    'name' => 'Smart opener / Wi-Fi setup',
                    'market' => 'Residential',
                    'is_emergency' => false,
                    'description' => 'Installation and configuration of smart garage door opener with Wi-Fi.',
                ],
                [
                    'name' => 'Smart controller retrofit',
                    'market' => 'Residential',
                    'is_emergency' => false,
                    'description' => 'Upgrade existing opener with smart controller.',
                ],
            ],

            // SAFETY & SECURITY
            'Safety & Security' => [
                [
                    'name' => 'Auto-reverse / force settings adjustment',
                    'market' => 'Residential',
                    'is_emergency' => false,
                    'description' => 'Calibration of auto-reverse and force settings for safety compliance.',
                ],
                [
                    'name' => 'Lock & reinforcement upgrades',
                    'market' => 'Residential',
                    'is_emergency' => false,
                    'description' => 'Upgrading door locks and reinforcing garage doors for security.',
                ],
            ],

            // COMMERCIAL
            'Commercial' => [
                [
                    'name' => 'Commercial door repair',
                    'market' => 'Commercial',
                    'is_emergency' => true,
                    'description' => 'Repair of commercial garage doors and shutters.',
                ],
                [
                    'name' => 'Commercial door installation',
                    'market' => 'Commercial',
                    'is_emergency' => false,
                    'description' => 'Installation of new commercial garage doors.',
                ],
                [
                    'name' => 'Preventive maintenance contract',
                    'market' => 'Commercial',
                    'is_emergency' => false,
                    'description' => 'Scheduled preventive maintenance for commercial doors.',
                ],
                [
                    'name' => 'Commercial operator repair / installation',
                    'market' => 'Commercial',
                    'is_emergency' => true,
                    'description' => 'Repair or installation of commercial door operators and motors.',
                ],
            ],

            // SPECIALTY & CUSTOM
            'Specialty & Custom' => [
                [
                    'name' => 'Custom / wood door installation',
                    'market' => 'Residential',
                    'is_emergency' => false,
                    'description' => 'Installation of custom or wooden garage doors.',
                ],
                [
                    'name' => 'Insulation & weather sealing upgrade',
                    'market' => 'Residential',
                    'is_emergency' => false,
                    'description' => 'Improving insulation and weather sealing for energy efficiency.',
                ],
                [
                    'name' => 'Modern glass / aluminum door installation',
                    'market' => 'Residential',
                    'is_emergency' => false,
                    'description' => 'Installation of modern glass or aluminum garage doors.',
                ],
            ],

            // INSPECTION & CONSULTATION
            'Inspection & Consultation' => [
                [
                    'name' => 'On-site estimate / consultation',
                    'market' => 'Both',
                    'is_emergency' => false,
                    'description' => 'Professional on-site inspection and project estimate.',
                ],
            ],

        ];

        foreach ($services as $categoryName => $items) {

            $category = Category::where('name', $categoryName)
                ->first();

            if (! $category) {
                continue;
            }

            foreach ($items as $s) {
                Service::updateOrCreate(
                    [
                        'name' => $s['name'],
                        'categoryId' => $category->id,
                    ],
                    [
                        'market' => $s['market'],
                        'is_emergency' => $s['is_emergency'],
                        'description' => $s['description'],
                        'status' => true,
                    ]
                );
            }
        }

    }
}
