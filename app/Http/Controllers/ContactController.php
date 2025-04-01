<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Show the application's "contact" page.
     */
    public function index(): View
    {
        return view('contact');
    }
}