@extends('mainLayout')
@section('content')
@php
 use App\Models\Showtime;
 use App\Models\FilmShowtime;
@endphp

<style>
    .container {
      padding: 20px;
    }
    .left-section {
      width: 100%;
      text-align: center;
    }
    .left-section img {
      max-width: 100%;
      max-height: 100%;
      width: 100%;
      height: auto;
      object-fit: cover;
      box-shadow: 3px 3px 5px #888888;
    }
    .left-section .no-image {
      width: 300px;
      height: 800px;
      background-color: #eee;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .left-section button {
      margin-top: 15px;
    }
    .right-section {
      padding: 20px;
    }
    .info {
      margin: 20px 0;
    }
    .btn-primary {
      background-color: #007BFF;
    }
    .btn-secondary {
      background-color: #6C757D;
    }
    
  </style>

<div class="row">
    <div class="col-md-4 left-section">
        <img src="/storage/images/{{$film->poster}}" alt="Movie Poster" onerror="this.style.display='none'" class="img-responsive">
    </div>
    <div class="col-md-8 right-section">
        <div class="info">
            <div class="row">
              <h2 class="col-12">{{$film->judul}}</h2>
            </div>
            <div class="row">
              <div class="col-4">JENIS FILM</div>
              <div class="col-8">{{$film->genre}}</div>
            </div>
            <div class="row">
              <div class="col-4">PRODUSER</div>
              <div class="col-8">{{$film->produser}}</div>
            </div>
            <div class="row">
              <div class="col-4">SUTRADARA</div>
              <div class="col-8">{{$film->sutradara}}</div>
            </div>
            <div class="row">
              <div class="col-4">PENULIS</div>
              <div class="col-8">{{$film->penulis}}</div>
            </div>
            <div class="row">
              <div class="col-4">PRODUKSI</div>
              <div class="col-8">{{$film->produksi}}</div>
            </div>
            <div class="row">
              <div class="col-4">DURASI</div>
              <div class="col-8">{{$film->durasi}} Menit</div>
            </div>
          </div>
          <div class="info">
            <div class="row">
              <h2 class="col-12">Sinopsis</h2>
            </div>
            <div class="row">
              <div class="col-12">
                  {{$film->sinopsis}}
              </div>
            </div>
          </div>
          <div class="info">
            <h2>Jadwal Tayang</h2>
    
            @foreach ($film->film_studio as $film_studio)
                <h1>{{ $film_studio->studio->name }}</h1>
                @foreach ($film_studio->studio_film as $studio_film)
                    @php
                        $filmShowtimes = FilmShowtime::with('showtime')->where('id', $studio_film->film_showtime_id)->get();
                    @endphp 
                    <p>
                        @foreach ($filmShowtimes as $index => $filmShowtime)
                            <button class="btn btn-primary m-2" id="button{{ $index + 1 }}" onclick="redirectToSeat('{{ $film_studio->studio->name }}', '{{ $studio_film->film_showtime_id }}', '{{ $filmShowtime->showtime->day }}', '{{ $filmShowtime->showtime->time }}', '{{ $film->id }}', '{{ $film->judul }}')">
                                Jam#{{ $index + 1 }} - {{ $filmShowtime->showtime->day }} - {{ $filmShowtime->showtime->time }}
                            </button>
                        @endforeach
                    </p>
                @endforeach
            @endforeach
        </div>
    </div>
</div>

<script>
  function redirectToSeat(studioName, filmShowtimeId, day, time, filmId, filmJudul) {
      var url = '/seat?studioName=' + encodeURIComponent(studioName) + '&filmShowtimeId=' + filmShowtimeId + '&day=' + day + '&time=' + time + '&filmId=' + filmId + '&filmJudul=' + filmJudul;
      window.location.href = url;
  }
</script>


@endsection