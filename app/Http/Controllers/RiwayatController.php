<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Film;
use App\Models\FilmShowTime;
use App\Models\Booking;

class RiwayatController extends Controller
{
    public function index(){

        $user = Auth::user();

        $booking = Booking::all();
        

        $bookingsList = Booking::join('film_showtimes', 'bookings.film_showtime_id', '=', 'film_showtimes.id')
    ->join('films', 'film_showtimes.film_id', '=', 'films.id')
    ->where('bookings.user_id', $user->id)
    ->select('bookings.id', 'bookings.seats', 'bookings.day', 'bookings.time', 'films.judul', 'films.poster')
    ->get();

    // foreach ($bookingsList as $booking) {
    //     // Access the 'genre' property of the associated film
    //     dd($booking->judul);
    
    //     // Use $genre as needed
    // }

        //dd($bookingsList);   
        // Do something with the bookings, like passing them to a view
    
        return view('riwayatCinema', ['bookings' => $bookingsList]);

    }
}
