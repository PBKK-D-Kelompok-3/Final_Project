<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class InfoController extends Controller
{
    public function index($id){
        $booking_id = $id;
        $booking = Booking::join('film_showtimes', 'bookings.film_showtime_id', '=', 'film_showtimes.id')
        ->join('films', 'film_showtimes.film_id', '=', 'films.id')
        ->join('tagihans', 'bookings.id', '=', 'tagihans.booking_id')
        ->where('bookings.id', $booking_id)
        ->select('bookings.id', 'films.judul', 'films.genre', 'films.produser', 
                    'films.sutradara', 'films.penulis', 'bookings.studio_name',
                    'films.produksi', 'films.durasi', 'bookings.seats', 
                    'films.poster', 'films.sinopsis','bookings.day', 'bookings.time',
                    'bookings.harga', 'tagihans.payment_status', 
                    'tagihans.payment_link')
        ->first();
        
        

        $seatArray = json_decode($booking->seats, true);

       

        $seatNumberArray = array();
        foreach ($seatArray as $seat){
            $seatNumber = $seat["rowLetter"] . '' . $seat["seatNumber"];
            $seatNumberArray[] = $seatNumber;
        }

        // dd($seatNumberArray);

        return view('informationCinema', ['booking'=>$booking, 'seat' => $seatNumberArray]);
    }
}
