<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use App\Models\Tagihan;

class CreateTagihan implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $booking;
    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $booking = $this->booking;
        

        $secret_key = 'Basic '.config('xendit.key_auth');
        $external_id = Str::random(10);
        $data_request = Http::withHeaders([
            'Authorization' => $secret_key
        ])->post('https://api.xendit.co/v2/invoices', [
            'external_id' => $external_id,
            'amount' => $booking->harga
        ]);
        $response = $data_request->object();

        $tagihan = new Tagihan();
        $tagihan->booking_id = $booking->id;
        $tagihan->doc_no = $external_id;
        $tagihan->amount = $booking->harga;
        $tagihan->description = 'Tagihan Tiket';
        
        $tagihan->payment_status = $response->status;
        $tagihan->payment_link = $response->invoice_url;

        $tagihan->booking()->associate($booking->id);
        $tagihan->save();

        // Tagihan::create([
        //     'booking_id' => $booking->id,
        //     'doc_no' => $external_id,
        //     'amount' => $booking->harga,
        //     'description' => 'Description',
        //     'payment_status' => $response->status,
        //     'payment_link' => $response->invoice_url
        // ]);
    }
}
