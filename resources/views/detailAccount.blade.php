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
  width: 50%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.container .row {
  height: 100%;
}

.col-6 {
  max-width: 1000px;
  width: 100%;
  padding: 10px;
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
            <a class="nav-link text-light" href="/dashboard">Dashboard</a>
        </div>
        <div class="ml-auto d-none d-lg-block">
            <a class="nav-link text-light" href="/detail">Account</a>
        </div>
    </nav>
    <div class="container" style="margin-top: 40px;">
<div class="row">
<div class="container col-12" style="background-color: #FFFFFF;">
  <div class="row justify-content-center align-items-center" style="height:100%;">
    <div class="col-12">
      <div class="rounded-circle bg-secondary shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="margin-top:15px; width: 70px; height: 70px;">
        <img class="rounded-circle "src="/storage/images/{{$datas->gambar}}" height="70" alt=""
             loading="lazy" />
      </div>
      <div class="row justify-content-center">{{$datas->name}}</div>
      <div class="row justify-content-center">{{$datas->phone}}</div>
      <div class="row justify-content-center">{{$datas->email}}</div>
      <hr class="line-secondary mt-0 mb-3" style="border-top:2px solid #6c757d;">
    </div>
    <div class="col-12">
    {{-- <button type="button" class="btn btn-default btn-lg btn-block mx-auto p-1 m-1" style="border:1px solid #6c757d;">Delete Account</button> --}}
    <form method="POST" action="/delete-account">
      @csrf
      <button type="submit" class="btn btn-default btn-lg btn-block mx-auto p-1 m-4" style="border:1px solid #6c757d;">
          Delete
      </button>
    </form>
    {{-- <button type="button" class="btn btn-default btn-lg btn-block mx-auto p-1 m-4" style="border:1px solid #6c757d;">Log Out</button> --}}
    <form method="POST" action="/logout">
      @csrf
      <button type="submit" class="btn btn-default btn-lg btn-block mx-auto p-1 m-4" style="border:1px solid #6c757d;">
          Logout
      </button>
    </form>
    <a class="btn btn-default btn-lg btn-block mx-auto p-1 m-1" href="/riwayat" role="button" style="border:1px solid #6c757d;">Riwayat Pemesanan</a>
    </div>
    <div class="col-12">
      <hr class="line-secondary mt-3 mb-4" style="border-top:2px solid #6c757d;">
    </div>
  </div>
</div>
<div style="margin-top: 40px"></div>
<div class="container" style="background-color: #FFFFFF;">
  <div class="justify-content-center align-center-items" style="height: 100%;">
    <hr class="line-secondary mt-3 mb-3" style="border-top:2px solid #6c757d;">
    <a class="btn btn-default btn-lg btn-block mx-auto p-1 m-1" href="/dashboard" role="button" style="border:1px solid #6c757d;">Pesan Film</a>
    <hr class="line-secondary mt-3 mb-3" style="border-top:2px solid #6c757d;">
  </div>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
