<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the application's home page.
     */
    public function index(): View
    {
        return view('home');
    }
}