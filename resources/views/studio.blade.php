@extends('mainLayout')
@section('content')

<script type="module">

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
    
})

</script>

<form action="/create-studio" method="POST">
    @csrf
    <input type="text" name="name" class="">
    <button type="submit">Submit</button>
</form>

@endsection