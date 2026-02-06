<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MenuController extends Controller
{
    public function displayMenu()
    {
        $menus = Menu::where('is_active', 1)->get();

        return view('menu', compact('menus'));
    }
}
