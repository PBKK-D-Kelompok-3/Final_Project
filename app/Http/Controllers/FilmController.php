<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Showtime;
use App\Models\Studio;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();

        return view('dashboardCinema', ['films' => $films]);
    }

    public function show($id)
    {
        $film = Film::find($id);

        return view('filmCinema', ['film'=> $film]);
    }

    public function movieTicketDetail($id)
    {
        $film = Film::with(['film_studio', 'film_showtime', 'film_studio.studio_film', 'film_studio.studio', 'film_showtime.showtime'])->find($id);
        
        // return response()->json([
        //     'data' => $film
        // ]);
            
        return view('movieTicketDetail', ['film' => $film]);
    }
}
