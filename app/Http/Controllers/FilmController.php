<?php

namespace App\Http\Controllers;

use App\Models\Film;
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
}
