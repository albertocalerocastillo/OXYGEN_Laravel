<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view('pages.index');
    }

    public function about(): View
    {
        return view('pages.aboutUs');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function offers(): View
    {
        return view('pages.offers');
    }

    public function rooms(): View
    {
        return view('pages.rooms');
    }

    public function roomsDetails(string $id): View
    {
        return view('pages.roomsDetails', ['id' => $id]);
    }
}