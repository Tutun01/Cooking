<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function getAll()
    {
        $allProducts = MenuModel::all();
        return view("menu", compact('allProducts'));
    }
}
