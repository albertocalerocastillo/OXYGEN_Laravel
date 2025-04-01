<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class RoomController extends Controller
{
    /**
     * Display a listing of the rooms (for the search page).
     */
    public function index(): View
    {
        return view('rooms.index');
    }
}