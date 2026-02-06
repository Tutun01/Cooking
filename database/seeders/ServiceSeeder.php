<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
           [
               'title' => 'Personal Chef at Home',
               'description' => 'Complete meal preparation at the client’s home.',
               'is_active' => true,
           ],
            [
                'title' => 'Event Catering',
                'description' => 'Private dinners, birthdays, and special events.',
                'is_active' => true,
            ]
        ]);
    }
}
