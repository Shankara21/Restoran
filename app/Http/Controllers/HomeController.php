<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Menu;
use App\Models\Service;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'chefs' => Chef::take(4)->get(),
            'services' => Service::take(4)->get(),
            'testimonials' => Testimoni::all(),
            'foods' => Menu::where('category', 3)->get(),
            'drinks' => Menu::where('category', 1)->get(),
            'snacks' => Menu::where('category', 2)->get()
        ]);
    }
    public function menu()
    {
        return view('menu', [
            'foods' => Menu::where('category', 3)->get(),
            'drinks' => Menu::where('category', 1)->get(),
            'snacks' => Menu::where('category', 2)->get()
        ]);
    }
}
