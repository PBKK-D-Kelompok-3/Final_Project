<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .button {
      display: inline-block;
      padding: 5px 10px;
      margin-right: 5px;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      border: 2px solid #ffffff;
      color: #fff6f6;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .button:hover {
      background-color: #283337;
      color: #fff;
    }

    .container {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container .row {
      height: 100%;
      width: 100%;
    }

    .carousel-item img {
      width: 800px;
      height: 400px;
      object-fit: cover;
    }
    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0.5, 0.5);
}
  </style>
</head>
<body style="background-color: #E6E6E6;">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #606E7C;">
        <a class="navbar-brand text-light" href="#">10NopemberCinema</a>
        @if (auth()->user()->role == 1)
          <a href="/create-film-studio" class="button">Create Film Studio</a>
          <a href="/create-film-showtime" class="button">Create Film Showtime</a>
          <a href="/create-showtime" class="button">Create Showtime</a>
        @endif
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
    <header class="col-md-12 col-lg-12 mt-5 text-center">
      <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" class="carousel carousel-fade" data-bs-ride="carousel">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('storage/images/poster-1.png') }}" class="d-block img-fluid" style="width: 100%;" alt="Image 1">
            </div>
    
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('storage/images/poster-2.jpg') }}" class="d-block img-fluid" style="width: 100%;" alt="Image 2">
            </div>
    
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('storage/images/poster-3.png') }}" class="d-block img-fluid" style="width: 100%;" alt="Image 3">
            </div>
    
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>    
      <h3>Film Menarik Untuk Meningkatkan Semangat Perjuangan Anda</h3>
    </header>
  </div>

  <div>
    <section id="carousel" class="my-4">
        <div class="row">
            @foreach ($films as $film)
                <div class="col-lg-2 col-md-4 col-sm-6 ">
                  @if (auth()->user()->role == 1)
                    <a href="/film/{{$film->id}}" class="btn">
                        <div class="card">
                            <img src="/storage/images/{{$film->poster}}" class="card-img" alt="Film 1" width="200" height="300">
                        </div>
                    </a>
                  @else 
                    <a href="/movie-ticket/{{$film->id}}" class="btn">
                      <div class="card">
                          <img src="/storage/images/{{$film->poster}}" class="card-img" alt="Film 1" width="200" height="300">
                      </div>
                    </a>
                  @endif
                </div>
            @endforeach
        </div>
    </section>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
