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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
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
            <a class="nav-link text-light" href="/dashboard">Dashboard</a>
        </div>
        <div class="ml-auto d-none d-lg-block">
            <a class="nav-link text-light" href="/detail">Account</a>
        </div>
    </nav>
    <div class="container" style="margin-top: 40px;">
    <div class="gray-200">
        @yield('content')
    </div>
</body>

</html>