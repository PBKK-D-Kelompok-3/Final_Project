<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

    .row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 5px; /* Jarak antar baris */
    }

    .col-4, .col-8 {
        border: 1px solid #000; /* Warna dan ketebalan border dapat disesuaikan */
        padding: 5px; /* Untuk memberikan ruang di dalam setiap kolom */
    }
  </style>
</head>
<body style="background-color: #E6E6E6;">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #606E7C;">
    <a class="navbar-brand text-light" href="#">10NopemberCinema</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border-width: 4px;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-lg-none">
          <a class="nav-link text-light" href="/riwayat">Riwayat</a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link text-light" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link text-light" href="/detail">Account</a>
        </li>
      </ul>
    </div>
    <div class="ml-auto d-none d-lg-block">
      <a class="nav-link text-light" href="/riwayat">Riwayat</a>
  </div>
    <div class="ml-auto d-none d-lg-block">
      <a class a nav-link text-light" href="/dashboard">Dashboard</a>
    </div>
    <div class="ml-auto d-none d-lg-block">
      <a class="nav-link text-light" href="/detail">Account</a>
    </div>
  </nav>

  <div class="container" style="margin-top: 40px;">
    <div class="row">
    <div class="col-md-4 left-section">
    <div class="row">
      <img src="/storage/images/{{ $booking->poster}}" alt="Movie Poster" onerror="this.style.display='none'" class="img-responsive">
      <div class="no-image">Image not available</div>
    </div>
</div>

<div class="col-md-8 right-section">
  <div class="info">
    <div class="row">
      <h2 class="col-12">{{ $booking->judul }}</h2>
    </div>
    <div class="row">
      <div class="col-4">JENIS FILM</div>
      <div class="col-8">{{ $booking->genre }}</div>
    </div>
    <div class="row">
      <div class="col-4">PRODUSER</div>
      <div class="col-8">{{ $booking->produser }}</div>
    </div>
    <div class="row">
      <div class="col-4">SUTRADARA</div>
      <div class="col-8">{{ $booking->sutradara }}</div>
    </div>
    <div class="row">
      <div class="col-4">PENULIS</div>
      <div class="col-8">{{ $booking->penulis }}</div>
    </div>
    <div class="row">
      <div class="col-4">PRODUKSI</div>
      <div class="col-8">{{ $booking->produksi }}</div>
    </div>
    <div class="row">
      <div class="col-4">DURASI</div>
      <div class="col-8"> {{ $booking->durasi }}</div>
    </div>
  </div>
  <div class="info">
    <div class="row">
      <h2 class="col-12">Sinopsis</h2>
    </div>
    <div class="row">
      <div class="col-12">
        {{ $booking->sinopsis }}
      </div>
    </div>
    </div>

    <div class="info">
        <div class="row">
            <div class="col-4">JAM TAYANG</div>
            <div class="col-8">{{ $booking->time }}</div>
        </div>
        <div class="row">
            <div class="col-4">TANGGAL TAYANG</div>
            <div class="col-8">{{ $booking->day }}</div>
        </div>
        <div class="row">
            <div class="col-4">TOTAL KURSI</div>
            <div class="col-8"  id="seat-info">
            @foreach ($seat as $seat)
            <p>{{ $seat }}</p>
            
            @endforeach

            </div>
        </div>
        <div class="row">
            <div class="col-4">HARGA</div>
            <div class="col-8">{{ $booking->harga }}</div>
        </div>
        <div class="row">
            <div class="col-4">PAYMENT_STATUS</div>
            <div class="col-8">{{ $booking->payment_status }}</a></div>
        </div>
        <div class="row">
            <div class="col-4">LINK PEMBAYARAN</div>
            <div class="col-8"><a href="{{ $booking->payment_link}}">{{ $booking->payment_link}}</a></div>
        </div>
    </div>
  </div>

  <script>
    function seats(seat){
      var element = document.getElementById('seat-info');
      var bookingData = <?php echo $booking; ?>;
      console.log(bookingData);
    }
    
    seats();
  
    
  </script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
