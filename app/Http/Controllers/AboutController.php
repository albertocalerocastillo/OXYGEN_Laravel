<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Show the application's "about" page.
     */
    public function index(): View
    {
        return view('about');
    }
}