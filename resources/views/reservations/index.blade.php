<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #343a40;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .create-reservation {
            text-align: center;
            margin-bottom: 20px;
        }

        .create-reservation a {
            text-decoration: none;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }

        .create-reservation a:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        form {
            display: inline;
        }

        input[type="submit"] {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h1>Reservation Management</h1>

    <div>
        @if(session()->has('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="create-reservation">
        <a href="{{ route('reservation.create') }}">Create a Reservation</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Phone</th>
            <th>Guests</th>
            <th>Date & Time</th>
            <th>Edit</th>
            @if( auth()->user()->is_admin() )
            <th>Delete</th>
            @endif
        </tr>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->customer }}</td>
                <td>{{ $reservation->phone }}</td>
                <td>{{ $reservation->guests }}</td>
                <td>{{ $reservation->datentime }}</td>
                <td>
                    <a href="{{ route('reservation.edit', ['reservation' => $reservation]) }}">Edit</a>
                </td>
                @if( auth()->user()->is_admin() )
                <td>
                    <form method="post" action="{{ route('reservation.destroy', ['reservation' => $reservation]) }}">
                        @csrf 
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
                
                @endif
            </tr>
        @endforeach
    </table>
</body>
</html>



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Reservation</h1>
    <div>
     @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
     <div>
            <a href="{{route('reservation.create')}}">Create a Reservation</a>
        </div>
    <table border="1">
    <tr>
    <th>ID</th>
    <th>Customer</th>
    <th>Phone</th>
    <th>Guests</th>
    <th>Date</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
    @foreach($reservations as $reservation)
    <tr>
    <td>{{$reservation->id}}</td>
    <td>{{$reservation->customer}}</td>
    <td>{{$reservation->phone}}</td>
    <td>{{$reservation->guests}}</td>
    <td>{{$reservation->datentime}}</td>
    <td>
    <a href="{{route('reservation.edit', ['reservation' => $reservation])}}">Edit</a>
    </td>
    <td>
         <form method="post" action="{{route('reservation.destroy', ['reservation' => $reservation])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
         </form>
    </td>
    </tr>
    @endforeach
    </div>
</body>
</html> --}}