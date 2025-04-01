<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

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

    public function rooms(Request $request): View
    {
        $searchTerm = $request->query('search');
        $checkInDate = $request->query('check_in');
        $checkOutDate = $request->query('check_out');

        if ($searchTerm) {
            Log::info('Búsqueda de habitaciones:', ['term' => $searchTerm]);
        }

        $availableRooms = Room::query();

        if ($checkInDate && $checkOutDate) {
            $availableRooms->whereDoesntHave('bookings', function ($query) use ($checkInDate, $checkOutDate) {
                $query->where('checkInDate', '<', $checkOutDate)
                      ->where('checkOutDate', '>', $checkInDate);
            });
        }

        $rooms = $availableRooms->get();

        return view('pages.rooms', compact('rooms'));
    }

    public function roomsDetails(string $id): View
    {
        return view('pages.roomsDetails', ['id' => $id]);
    }

    /**
     * Procesa el envío del formulario de contacto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitContactForm(Request $request): RedirectResponse
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $message = $request->input('message');

        Log::info('Mensaje de contacto recibido:', [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message,
        ]);

        return redirect()->route('contact')->with('success', '¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');
    }
}