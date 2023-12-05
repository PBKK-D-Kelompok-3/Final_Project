<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
    <div class="row" style="margin-right: 30px;">
        <div class="bg-secondary text-center text-lg-start text-white" style="margin-top: 15px;">
                    <div class="container p-2">
                      <div class="row my-4">
                        <div class="col-lg-12 col-md-12 mb-4 mb-md-0">
                
                          <div class="shadow-1-strong d-flex align-items-center justify-content-center mb-2 mx-auto">
                            <h2 class="text-light" href="#">10NopemberCinema</h2>
                          </div>
                          <h3 class="text-center">News</h3>
                
                        </div>
                        
                        <div class="col-lg-12 col-md-12 mb-2 mb-md-0">
                          <ul class="list-unstyled">
                            <li class="mb-2">
                                <hr class="line-secondary mt-0 mb-3" style="border-top:2px solid #c9cacc;">
                                <a href="https://www.tix.id/172-days-kisah-cinta-singkat-penuh-makna" class="text-white">
                                    <i class="fas fa-paw pe-3"></i>172 Days, Kisah Cinta Singkat Penuh Makna
                                </a>
                            </li>
                            <li class="mb-2">
                                <hr class="line-secondary mt-0 mb-3" style="border-top:2px solid #c9cacc;">
                                <a href="https://www.tix.id/ikuti-perjalanan-wonka-membangun-pabrik-coklat-ajaib/" class="text-white">
                                    <i class="fas fa-paw pe-3"></i>Ikuti Perjalanan WONKA Membangun Pabrik Coklat Ajaib!
                                </a>
                            </li>
                            <li class="mb-2">
                                <hr class="line-secondary mt-0 mb-3" style="border-top:2px solid #c9cacc;">
                                <a href="https://www.tix.id/anya-taylor-joy-tampil-sangar-di-trailer-pertama-furiosa-2/" class="text-white">
                                    <i class="fas fa-paw pe-3"></i>Anya Taylor Joy Tampil Sangar di Trailer Pertama Furiosa
                                </a>
                            </li>
                            <li class="mb-2">
                                <hr class="line-secondary mt-0 mb-3" style="border-top:2px solid #c9cacc;">
                                <a href="https://www.tix.id/weekend-lebih-seru-bareng-trolls-band-together-di-bioskop/" class="text-white">
                                    <i class="fas fa-paw pe-3"></i>Weekend Lebih Seru Bareng Trolls Band Together di Bioskop
                                </a>
                            </li>
                            <li class="mb-2">
                                <hr class="line-secondary mt-0 mb-3" style="border-top:2px solid #c9cacc;">
                                <a href="https://www.tix.id/top-5-karakter-utama-film-yang-aktornya-diganti/" class="text-white">
                                    <i class="fas fa-paw pe-3"></i>Top 5 Karakter Utama Film Yang Aktornya Diganti!
                                </a>
                            </li>
                            <li class="mb-2">
                                <hr class="line-secondary mt-0 mb-3" style="border-top:2px solid #c9cacc;">
                                <a href="https://www.tix.id/intip-daftar-lagu-taylor-swift-the-eras-tour-sebelum-nonton-filmnya/" class="text-white">
                                    <i class="fas fa-paw pe-3"></i>Intip Daftar Lagu Taylor Swift: The Eras Tour Sebelum Nonton Filmnya!
                                </a>
                            </li>
                            <li class="mb-2">
                                <hr class="line-secondary mt-0 mb-3" style="border-top:2px solid #c9cacc;">
                                <a href="https://www.tix.id/perankan-tigris-snow-hunter-schafer-tuai-pujian-dari-warganet/" class="text-white">
                                    <i class="fas fa-paw pe-3"></i>Perankan Tigris Snow, Hunter Schafer Tuai Pujian Dari Warganet!
                                </a>
                            </li>
                              <hr class="line-secondary mt-3" style="border-top:2px solid #c9cacc;">
                          </ul>
                        </div>
                      </div>
                    </div>
                </div>
    </div>
</div>

<div class="col-md-8 right-section">
  <div class="info">
    @foreach($bookings as $booking)
    <div class="card" style="width: 750px;">
        <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                  <img src="/storage/images/{{ $booking->poster}}" alt="Movie Poster" onerror="this.style.display='none'" class="card-img-top" style="max-width: 75%;">
              </div>            
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">{{ $booking->judul}}</h2>
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-12">
                                      <p class="card-text">Jam Tayang : {{ $booking->time }}</p>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <p class="card-text">Tanggal Tayang : {{ $booking->day }}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>            
        </div>
            <a href="/info/{{ $booking->id }}" class="btn btn-secondary">Detail</a>
        </div>
    </div>
    @endforeach
</div>
</div>

  <script>

  </script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
