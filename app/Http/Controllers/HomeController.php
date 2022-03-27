<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'HOME',
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'ABOUT',
            'name' => 'Mohamad Lazuardi Noor',
            'email' => 'lazuardi.reznnov@gmail.com',
        ]);
    }
}
