<?php

namespace App\Http\Controllers;

use App\Models\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function cookingType()
    {
        $allType = ServiceModel::all();
        return view('service', compact('allType'));
    }
}
