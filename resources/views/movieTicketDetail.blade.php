@extends('mainLayout')
@section('content')

<h1>{{ $film->judul }}</h1>
<p>{{ $film->sinopsis }}</p>

<h2>Jadwal Tayang</h2>

@php
 use App\Models\Showtime;
 use App\Models\FilmShowtime;
@endphp

@foreach ($film->film_studio as $film_studio)
    <h1>{{ $film_studio->studio->name }}</h1>
    @foreach ($film_studio->studio_film as $studio_film)
        @php
            $filmShowtimes = FilmShowtime::with('showtime')->where('id', $studio_film->film_showtime_id)->get();
        @endphp 
        <p>
            @foreach ($filmShowtimes as $filmShowtime)
                <p>{{ $filmShowtime->showtime->day}} - {{ $filmShowtime->showtime->time }}</p>
            @endforeach
        </p>
    @endforeach
@endforeach


@endsection