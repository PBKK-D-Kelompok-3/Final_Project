<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\FilmStudio;
use App\Models\Studio;
use Illuminate\Http\Request;

class FilmStudioController extends Controller
{
    public function index()
    {
        $filmStudios = FilmStudio::all();

        return response()->json([
            "status" => "success",
            "data" => $filmStudios,
        ]);
    }

    public function createFilmStudio()
    {
        $studios = Studio::all();
        $films = Film::all();

        return view('studio-film', ['studios' => $studios, 'films' => $films]);
    }

 
    public function storeFilmStudio(Request $request)
    {
        $film_id = $request->film_id;
        $studio_id = $request->studio_id;

        $filmStudio = FilmStudio::where('film_id', $film_id)->where('studio_id', $studio_id)->first();

        if ($filmStudio)
        {
            return view('film-studios', [
                'status' => 'fail',
                'data' => [
                    'message' => 'fail',
                    'data' => $filmStudio
                ],
            ]);
        }

        $filmStudio = FilmStudio::create([
            'film_id' => $film_id,
            'studio_id' => $studio_id,
        ]);

        $filmStudio = FilmStudio::all();
        return view('film-studios', ['status' => 'success', 'data' => $filmStudio]);
    }

}
