<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmShowtimeController;
use App\Http\Controllers\FilmStudioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\ShowtimeController;
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


Route::post('/db-form', [FormController::class, 'store']);
Route::post('/db-auth', [LoginController::class, 'authenticate']);



Route::middleware('auth-middleware')->group(function() {
    
    Route::get('/allForm', [FormController::class, 'index']);

    Route::get('/cache', [FormController::class, 'getCache']);



    Route::get('/detail', [FormController::class, 'index']);


    Route::get('/film', function(){
        return view('filmCinema');
    });

    Route::get('/seat', function(){
        return view('seatCinema');
    });

    Route::get('/info/{id}', [InfoController::class, 'index']);

    Route::get('/riwayat', [RiwayatController::class, 'index']);

    Route::get('/dashboard', [FilmController::class, 'index']);
    Route::get('/film/{id}', [FilmController::class, 'show']);
    Route::post('/logout', [FormController::class,'logOut']);
    Route::post('/delete-account', [FormController::class,'deleteAcc']);
    
    // Route For CRUD 
    Route::get('/studios', [StudioController::class, 'index']);
    Route::get('/studio', function() {
        return view('studio');
    });
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    
    Route::middleware('admin-middleware')->group(function() {
        Route::post('/create-studio', [StudioController::class, 'createStudio']);
        
        Route::get('/film-studios', [FilmStudioController::class, 'index']);
        Route::post('/storeFilmStudio', [FilmStudioController::class, 'storeFilmStudio']);
        Route::get('/create-film-studio', [FilmStudioController::class, 'createFilmStudio']); // 1
        Route::post('/create-film-studio', [FilmStudioController::class, 'storeFilmStudio']);
        
        Route::get('/film-showtimes', [FilmShowtimeController::class, 'index']);
        Route::post('/storeFilmShowtime', [FilmShowtimeController::class, 'storeFilmShowtime']);
        Route::get('/create-film-showtime', [FilmShowtimeController::class, 'createFilmShowtime']); //2
        Route::post('/create-film-showtime', [FilmShowtimeController::class, 'storeFilmShowtime']);
        
        Route::get('/studio-films', [StudioFilmController::class, 'index']);
        Route::post('/storeStudioFilm', [FilmShowtimeController::class, 'storeStudioFilm']);
        Route::get('/create-studio-film/{id}', [StudioFilmController::class, 'createStudioFilm']); //3
        Route::post('/create-studio-film', [StudioFilmController::class, 'storeStudioFilm']);
        
        Route::get('/showtimes', [ShowtimeController::class, 'index']);
        Route::post('/storeShowtime', [FilmShowtimeController::class, 'storeShowtime']);
        Route::get('/create-showtime', [ShowtimeController::class, 'createShowtime']);
        Route::post('/create-showtime', [ShowtimeController::class, 'storeShowtime']);
        

    });

    Route::get('/movie-ticket/{id}', [FilmController::class,'movieTicketDetail']);

    

});

// Route::get('/create-schedule/{id}', [FilmController::class, 'createSchedule']);
// Route::post('/create-schedule/{id}', [FilmController::class, 'storeSchedule']);