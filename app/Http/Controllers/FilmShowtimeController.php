<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\FilmShowtime;
use App\Models\Showtime;
use Illuminate\Http\Request;

class FilmShowtimeController extends Controller
{
    public function index()
    {
        $filmShowTimes = FilmShowtime::all();

        return response()->json([
            'status' => "success",
            'data' => $filmShowTimes
        ]);
    }

    public function createFilmShowtime()
    {
        $films = Film::all();
        $showtimes = Showtime::all();

        return view('film-showtime', ['films' => $films, 'showtimes' => $showtimes]);
    }

    public function storeFilmShowtime(Request $request)
    {
        $film_id = $request->film_id;
        $showtime_id = $request->showtime_id;

        $filmShowtime = FilmShowtime::where('film_id', $film_id)->where('showtime_id', $showtime_id)->first();

        if ($filmShowtime)
        {
            return response()->json([
                'message' => 'fail',
                'data' => $filmShowtime
            ]);
        }

        $filmShowtime = FilmShowtime::create([
            'film_id' => $film_id,
            'showtime_id' => $showtime_id,
        ]);

        return redirect('/film-showtimes');
    }

}
