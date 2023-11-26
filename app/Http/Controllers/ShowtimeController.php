<?php

namespace App\Http\Controllers;

use App\Models\Showtime;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    public function index()
    {
        $showtimes = Showtime::all();

        return response()->json([
            'message' => 'success',
            'data' => $showtimes
        ]);
    }
    
    public function createShowtime()
    {
        return view('showtime');
    }

    public function storeShowtime(Request $request)
    {
        $day = $request->day;
        $time = $request->time;

        $showtime = Showtime::where('day', $day)->where('time', $time)->first();

        if ($showtime)
        {
            return response()->json([
                'messsage' => 'fail',
                'data' => $showtime,
            ]);
        }

        $showtime = Showtime::create([
            'day' => $day,
            'time' => $time
        ]);

        return redirect('/showtimes');
    }
}
