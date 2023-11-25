<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmShowtimeController;
use App\Http\Controllers\FilmStudioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\StudioFilmController;
use App\Models\StudioFilm;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('loginAccount');
});

Route::get('/register', function(){
    return view('registAccount');
}); 

Route::get('/detail', [FormController::class, 'index']);


Route::get('/film', function(){
    return view('filmCinema');
});

Route::get('/seat', function(){
    return view('seatCinema');
});

Route::get('/info', function(){
    return view('informationCinema');
});

Route::get('/riwayat', function(){
    return view('riwayatCinema');
});

Route::post('/db-form', [FormController::class, 'store']);
Route::post('/db-auth', [LoginController::class, 'authenticate']);

Route::get('/allForm', [FormController::class, 'index']);

Route::get('/cache', [FormController::class, 'getCache']);

Route::get('/dashboard', [FilmController::class, 'index']);
Route::get('/film/{id}', [FilmController::class, 'show']);
Route::post('/logout', [FormController::class,'logOut']);
Route::post('/delete-account', [FormController::class,'deleteAcc']);

// Route For CRUD 
Route::get('/studios', [StudioController::class, 'index']);
Route::get('/studio', function() {
    return view('studio');
});

Route::post('/create-studio', [StudioController::class, 'createStudio']);

Route::get('/film-studios', [FilmStudioController::class, 'index']);
Route::get('/create-film-studio', [FilmStudioController::class, 'createFilmStudio']); // 1
Route::post('/create-film-studio', [FilmStudioController::class, 'storeFilmStudio']);

Route::get('/film-showtimes', [FilmShowtimeController::class, 'index']);
Route::get('/create-film-showtime', [FilmShowtimeController::class, 'createFilmShowtime']); //2
Route::post('/create-film-showtime', [FilmShowtimeController::class, 'storeFilmShowtime']);

Route::get('/studio-films', [StudioFilmController::class, 'index']);
Route::get('/create-studio-film/{id}', [StudioFilmController::class, 'createStudioFilm']); //3
Route::post('/create-studio-film', [StudioFilmController::class, 'storeStudioFilm']);