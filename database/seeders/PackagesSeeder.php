<?php

namespace Database\Seeders;
use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::insert([
            [
                'service_id' => 1,
                'name' => 'Basic Package',
                'description' => 'Up to 4 guests, one main course.',
                'price' => 120.00,
                'duration_hours' => 3,
            ],
            [
                'service_id' => 2,
                'name' => 'Premium Package',
                'description' => 'Up to 8 guests, full course menu.',
                'price' => 250.00,
                'duration_hours' => 5,
            ],
        ]);
    }
}
