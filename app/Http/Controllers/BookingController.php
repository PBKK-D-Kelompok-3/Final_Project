<?php

namespace App\Http\Controllers;

use App\Jobs\CreateTagihan;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;
use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        
        // $request->validate([
        //     'activeSeats' => 'required|array',
        //     'studioName' => 'required|string',
        //     'filmShowTimeID' => 'required|exists:film_showtimes,id',
        //     'day' => 'required|date',
        //     'time' => 'required|time',
        // ]);

        $user = Auth::user();

        
        
        $total_seats = $request->input('totalSeats');
        $harga = $total_seats * 1000;
        $activeSeatsJson = json_encode($request->input('activeSeats'));
        $payment_url = "https:www.google.com/";


        // Store the booking data
        $booking = new Booking();
        $booking->film_showtime_id = $request->input('filmShowTimeID');
        $booking->seats = $activeSeatsJson;
        $booking->studio_name = $request->input('studioName');
        $booking->day = $request->input('day');
        $booking->time = $request->input('time');
        
        $booking->total_seats = $request->input('totalSeats');
        $booking->harga = $harga;
        $booking->link_pembayaran = $payment_url;
        
        $booking->user()->associate($user);
        // Add other fields as needed

       
        $booking->save();

        dispatch(new CreateTagihan($booking));

        // Return a response (example)
        return response()->json(['message' => 'Booking successful']);
    }

    
}
