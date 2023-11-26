@extends('mainLayout')

@section('content')

<form id="showtimeForm" action="/create-showtime" method="POST" class="my-5">
    @csrf
    <div class="form-group">
        <label for="day">Pilih Hari</label>
        <input type="date" name="day" >
    </div>

    <div class="form-group">
        <label for="time">Pilih Jam</label>
        <input type="time" name="time">
    </div>

    <button type="submit" >Submit</button>
</form>

@endsection