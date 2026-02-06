<?php

namespace Database\Seeders;
use App\Models\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuItem::insert([
            [
                'menu_id' => 1,
                'name' => 'Greek Salad',
                'description' => 'Tomatoes, cucumber, feta cheese, olives, and extra virgin olive oil.',
                'price' => 6.50,
                'category' => 'starter',
            ],
            [
                'menu_id' => 1,
                'name' => 'Seafood Pasta',
                'description' => 'Fresh handmade pasta with shrimp, mussels, garlic, and herbs.',
                'price' => 15.50,
                'category' => 'main',
            ],
            [
                'menu_id' => 1,
                'name' => 'Grilled Salmon Fillet',
                'description' => 'Salmon fillet served with lemon butter sauce and seasonal vegetables.',
                'price' => 18.00,
                'category' => 'main',
            ],
            [
                'menu_id' => 1,
                'name' => 'Beef Tenderloin Steak',
                'description' => 'Juicy beef tenderloin with rosemary potatoes and red wine sauce.',
                'price' => 22.00,
                'category' => 'main',
            ],
            [
                'menu_id' => 1,
                'name' => 'Chocolate Lava Cake',
                'description' => 'Warm chocolate cake with a soft molten center.',
                'price' => 7.00,
                'category' => 'dessert',
            ],
            [
                'menu_id' => 2,
                'name' => 'Cold Cuts & Cheese Platter',
                'description' => 'Selection of premium cured meats and fine cheeses.',
                'price' => 14.00,
                'category' => 'starter',
            ],
            [
                'menu_id' => 2,
                'name' => 'Vegetarian Canapés',
                'description' => 'Bite-sized vegetarian snacks perfect for receptions.',
                'price' => 5.50,
                'category' => 'starter',
            ],
            [
                'menu_id' => 2,
                'name' => 'Mini Chicken Sliders',
                'description' => 'Small chicken burgers with lettuce and special house sauce.',
                'price' => 4.50,
                'category' => 'main',
            ],
            [
                'menu_id' => 2,
                'name' => 'Stuffed Cabbage Rolls',
                'description' => 'Traditional cabbage rolls stuffed with minced meat and rice.',
                'price' => 10.00,
                'category' => 'main',
            ],
            [
                'menu_id' => 2,
                'name' => 'Mini Desserts Selection',
                'description' => 'Assorted mini cakes, brownies, and fruit tartlets.',
                'price' => 6.00,
                'category' => 'dessert',
            ],
        ]);
    }
}
