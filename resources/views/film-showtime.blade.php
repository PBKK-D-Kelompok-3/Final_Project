@extends('mainLayout')

@section('content')
<div class="container" style="align-content: center;">pokok dah</div>
<form id="filmShowtimeForm" action="/create-film-showtime" method="POST" class="my-5">
    @csrf
    <div class="form-group">
        <label for="film_id">Pilih Film</label>
        <select id="film_id" name="film_id" class="form-control">
            <option value="" disabled selected>Pilih Film</option>
            @foreach ($films as $film)
                <option value="{{ $film->id }}">{{ $film->judul }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="showtime_id">Pilih Waktu Tayang</label>
        <select id="showtime_id" name="showtime_id" class="form-control">
            <option value="" disabled selected>Pilih Waktu Tayang</option>
            @foreach ($showtimes as $showtime)
                <option value="{{ $showtime->id }}">{{ $showtime->day }} - {{ $showtime->time }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Submit</button>
</form>

<script>
    const styles = `
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    `;

    const styleElement = document.createElement('style');
    styleElement.innerHTML = styles;

    document.head.appendChild(styleElement);
</script>

@endsection
