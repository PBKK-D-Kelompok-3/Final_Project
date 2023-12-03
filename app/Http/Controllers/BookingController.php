<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Tagihan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

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


        // $secret_key = 'Basic '.config('xendit.key_auth');
        // $external_id = Str::random(10);
        // $data_request = Http::withHeaders([
        //     'Authorization' => $secret_key
        // ])->post('https://api.xendit.co/v2/invoices', [
        //     'external_id' => $external_id,
        //     'amount' => $harga
        // ]);
        // $response = $data_request->object();
        // Tagihan::create([
        //     'doc_no' => $external_id,
        //     'amount' => request('amount'),
        //     'description' => request('description'),
        //     'payment_status' => $response->status,
        //     'payment_link' => $response->invoice_url
        // ]);


        
        
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

        // Return a response (example)
        return response()->json(['message' => 'Booking successful']);
    }
}
