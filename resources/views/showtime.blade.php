@extends('mainLayout')

@section('content')
    <form action="/create-showtime" method="POST" class="my-5">
        @csrf
        <div class="form-group">
            <label for="day">Pilih Hari</label>
            <input type="date" name="day" class="form-control">
        </div>

        <div class="form-group">
            <label for="time">Pilih Jam</label>
            <input type="time" name="time" class="form-control">
        </div>

        <button type="submit" >Submit</button>
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

            input, button {
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
