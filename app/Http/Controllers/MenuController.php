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

    public function delete($product)
    {
        $singleProduct =MenuModel::where(['id' => $product])->first();

        $singleProduct->delete();
        return redirect()->back();
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            "name" => "required|string|unique:menu,name",
            "type" => "required|string",
            "description" => "required|string|min:3",
        ]);


        MenuModel::create([
            "name" => $request->get("name"),
            "type" => $request->get("type"),
            "description" => $request->get("description"),
        ]);

        return redirect()->route("menu");
    }
}
