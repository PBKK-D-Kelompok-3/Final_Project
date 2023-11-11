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
        <img src="/storage/images/{{$film->poster}}" alt="Movie Poster" onerror="this.style.display='none'" class="img-responsive">
    {{-- <div class="no-image">Image not available</div> --}}
    </div>
    <div class="row">
        <div class="col-12">
        <div class="text-left">
            <a href="" class="d-inline-block">
            <button class="btn btn-primary" id="button01" onclick="checkButtons()">Lanjut</button>
            </a>
        </div>
        </div>
    </div>
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
        <button class="btn btn-primary m-2" id="button1" onclick="toggleButtonColor(this)">Jam 1</button>
        <button class="btn btn-primary m-2" id="button2" onclick="toggleButtonColor(this)">Jam 2</button>
        <button class="btn btn-primary m-2" id="button3" onclick="toggleButtonColor(this)">Jam 3</button>
        <button class="btn btn-primary m-2" id="button4" onclick="toggleButtonColor(this)">Jam 4</button>
        <button class="btn btn-primary m-2" id="button5" onclick="toggleButtonColor(this)">Jam 5</button>
        <button class="btn btn-primary m-2" id="button6" onclick="toggleButtonColor(this)">Jam 6</button>
        <button class="btn btn-primary m-2" id="button7" onclick="toggleButtonColor(this)">Jam 7</button>
        <button class="btn btn-primary m-2" id="button8" onclick="toggleButtonColor(this)">Jam 8</button>
        <button class="btn btn-primary m-2" id="button9" onclick="toggleButtonColor(this)">Jam 9</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    let selectedButtonId = null;
  
    function toggleButtonColor(button) {
      if (selectedButtonId) {
        const prevSelectedButton = document.getElementById(selectedButtonId);
        prevSelectedButton.classList.remove("btn-secondary");
        prevSelectedButton.classList.add("btn-primary");
      }
  
      button.classList.remove("btn-primary");
      button.classList.add("btn-secondary");
      selectedButtonId = button.id;
    }
  
    function checkButtons() {
      if (selectedButtonId) {
        const selectedButton = document.getElementById(selectedButtonId);
        const buttonLabel = selectedButton.textContent;
        const confirmation = confirm("Apakah anda yakin dengan " + buttonLabel + "?");
  
        if (confirmation) {
          // Lanjutkan dengan aksi yang sesuai
          alert("Anda telah memilih " + buttonLabel + ". Lanjutkan memilih kursi");
        } else {
          // Pembatalan konfirmasi
          alert("Pemilihan jam dibatalkan.");
        }
      } else {
        alert("Silakan pilih salah satu waktu tayang sebelum melanjutkan.");
      }
    }
  </script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
