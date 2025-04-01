<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('bookings.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $rooms = Room::all();
        return view('bookings.create', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $booking = new Booking();

        $booking->guest = $request->input('guest');
        $booking->checkInDate = $request->input('checkInDate');
        $booking->checkOutDate = $request->input('checkOutDate');
        $booking->roomId = $request->input('roomId');
        $booking->orderDate = now()->toDateString();
        $booking->specialRequestType = null;

        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'Reserva creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}