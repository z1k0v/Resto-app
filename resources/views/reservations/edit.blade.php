<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Reservation</title>
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

        .error-messages {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-bottom: 20px;
            list-style-type: none;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #495057;
        }

        input[type="text"],
        input[type="tel"],
        input[type="number"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Edit a Reservation</h1>

    <div>
        @if($errors->any())
            <ul class="error-messages">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form method="post" action="{{ route('reservation.update', ['reservation' => $reservation]) }}">
        @csrf
        @method('put')

        <div>
            <label for="customer">Customer Name</label>
            <input type="text" id="customer" name="customer" placeholder="Name" value="{{ $reservation->customer }}" />
        </div>

        <div>
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Phone Number" value="{{ $reservation->phone }}" />
        </div>

        <div>
            <label for="guests">Number of Guests</label>
            <input type="number" id="guests" name="guests" placeholder="Number of Guests" value="{{ $reservation->guests }}" />
        </div>

        <div>
            <label for="datentime">Date & Time of Arrival</label>
            <input type="datetime-local" id="datentime" name="datentime" placeholder="Date and Time" value="{{ $reservation->datentime }}" />
        </div>

        <div>
            <input type="submit" value="Update Reservation"/>
        </div>
    </form>
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
    <h1>Edit a Reservation</h1>
      <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('reservation.update', ['reservation' => $reservation])}}" >
    @csrf
    @method('put')
 <div>
    <label>Customer Name</label>
    <input type="text" name="customer" placeholder="Name" value="{{$reservation->customer}}" />
</div>

<div>
    <label>Phone Number</label>
    <input type="tel" name="phone" placeholder="Phone Number" value="{{$reservation->phone}}" />
</div>

<div>
    <label>Number of Guests</label>
    <input type="number" name="guests" placeholder="Number of Guests" value="{{$reservation->guests}}" />
</div>

<div>
    <label>Date & Time of Arrival</label>
    <input type="datetime-local" name="datentime" placeholder="Date and Time" value="{{$reservation->datentime}}" />
</div>

<div>
    <input type="submit" value="Update Reservation"/>
</div>

</body>
</html> --}}