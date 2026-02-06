<?php

namespace Database\Seeders;
use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
            Menu::create([
                'title' => 'Mediterranean Menu',
                'description' => 'Light and healthy Mediterranean dishes.',
                'is_active' => 1,
                'highlights' => [
                    'Curated 3-course dining experience',
                    'Fresh Mediterranean ingredients',
                    'Light & healthy flavors',
                    'Prepared in your kitchen',
                ],
            ]);
            Menu::create([
                'title' => 'Traditional Menu',
                'description' => 'Classic homemade meals.',
                'is_active' => 1,
                'highlights' => [
                    'Traditional 3-course menu',
                    'Slow-cooked authentic dishes',
                    'Family-style serving',
                ],
            ]);
        }
    }
