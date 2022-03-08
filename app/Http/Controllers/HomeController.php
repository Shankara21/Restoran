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
            'snacks' => Menu::where('category', 2)->get(),
            'title' => 'Home',
            'page' => 'Home',
            'url' => '/'
        ]);
    }
    public function menu()
    {
        return view('menu', [
            'foods' => Menu::where('category', 3)->get(),
            'drinks' => Menu::where('category', 1)->get(),
            'snacks' => Menu::where('category', 2)->get(),
            'title' => 'Menu',
            'page' => 'Menu',
            'url' => '/menu'
        ]);
    }
    public function about()
    {
        return view('about');
    }
    public function booking()
    {
        return view('booking', [
            'title' => 'Booking',
            'page' => 'Booking',
            'url' => '/booking'
        ]);
    }
    public function service()
    {
        return view('service', [
            'services' => Service::all(),
            'title' => 'Service',
            'page' => 'Service',
            'url' => '/service'
        ]);
    }
    public function chef()
    {
        return view('team', [
            'title' => 'Team | Restoran',
            'page' => 'Team',
            'teams' => Chef::all(),
            'title' => 'Team',
            'page' => 'Team',
            'url' => '/team'
        ]);
    }
    public function testimoni()
    {
        return view('testimonial', [
            'testimonials' => Testimoni::all(),
            'title' => 'Testimoni',
            'page' => 'Testimoni',
            'url' => '/testimoni'
        ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Contact',
            'page' => 'Contact',
            'url' => '/contact'
        ]);
    }
}
