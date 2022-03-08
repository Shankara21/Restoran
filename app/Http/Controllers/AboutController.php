<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'chefs' => Chef::take(4)->get(),
            'title' => 'About Us',
            'page' => 'About Us',
            'url' => '/about'
        ]);
    }
}
