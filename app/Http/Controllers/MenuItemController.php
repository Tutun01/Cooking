<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController
{
    public function displayItem($menuId)
    {

        $items = MenuItem::where('menu_id', $menuId)
            ->get()
            ->groupBy('category');

        $starters = MenuItem::where('menu_id', $menuId)
            ->where('category', 'starter')
            ->get();

        $mainCourses = MenuItem::where('menu_id', $menuId)
            ->where('category', 'main')
            ->get();

        $desserts = MenuItem::where('menu_id', $menuId)
            ->where('category', 'dessert')
            ->get();

        return view('menuItems', [
            'menuId'      => $menuId,
            'starters'    => $items['starter'] ?? collect(),
            'mainCourses' => $items['main'] ?? collect(),
            'desserts'    => $items['dessert'] ?? collect(),
        ]);
    }
}
