<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', 1)->get();

        return view('welcome', compact('services'));
    }
}
