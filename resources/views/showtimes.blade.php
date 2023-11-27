@extends('mainLayout')
@section('content')

<style>
    .my-5 {
        margin: 5%;
    }

    .status {
        font-size: 1.5em;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .data-list {
        list-style-type: none;
        padding: 0;
    }

    .data-item {
        border: 1px solid #ccc;
        margin-bottom: 10px;
        padding: 10px;
    }
</style>

<div class="my-5">
    <div class="status">
        Status: {{ $status }}
    </div>
    
    @if($status == 'success')
        <h3>Data:</h3>
        <ul class="data-list">
            @foreach($data as $showtime)
                <li class="data-item">
                    <p>ID: {{ $showtime->id }}</p>
                    <p>Day: {{ $showtime->day}}</p>
                    <p>Time: {{ $showtime->time }}</p>
                    <p>Created At: {{ $showtime->created_at }}</p>
                    <p>Updated At: {{ $showtime->updated_at }}</p>
                </li>
            @endforeach
        </ul>
    @elseif($status == 'fail')
        <div>
            <p>Message: {{ $data['message'] }}</p>
            <p>Data:</p>
            <pre>{{ json_encode($data['data'], JSON_PRETTY_PRINT) }}</pre>
        </div>
    @endif
</div>

@endsection
