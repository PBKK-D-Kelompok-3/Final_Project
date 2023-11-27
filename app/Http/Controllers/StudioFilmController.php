<?php

namespace App\Http\Controllers;

use App\Models\FilmShowtime;
use App\Models\FilmStudio;
use App\Models\StudioFilm;
use Illuminate\Http\Request;

class StudioFilmController extends Controller
{
    public function index()
    {
        $studioFilms = StudioFilm::with(['film_studio', 'film_showtime'])->get();

        return response()->json([
            'message' => 'success',
            'data' => $studioFilms
        ]);
    }

    public function createStudioFilm($id)
    {
        $filmStudios = FilmStudio::with(['studio', 'film'])->where('film_id', $id)->get();
        $filmShowtimes = FilmShowtime::with(['film', 'showtime'])->where('film_id', $id)->get();

        // dd($filmStudios->toArray());

        return view('film-studio', ['filmStudios' => $filmStudios, 'filmShowtimes' => $filmShowtimes]);
    }

    public function storeStudioFilm(Request $request)
    {
        $film_studio_id = $request->film_studio_id;
        $film_showtime_id = $request->film_showtime_id;

        $studiofilm = StudioFilm::where('film_studio_id', $film_studio_id)->where('film_showtime_id', $film_showtime_id)->first();

        if ($studiofilm)
        {
            return response()->json([
                'message' => 'fail',
                'data' => $studiofilm
            ]);
        }

        $studioFilm = StudioFilm::create([
            'film_studio_id' => $film_studio_id,
            'film_showtime_id' => $film_showtime_id,
        ]);

        return view('studio-films');
    }
}
