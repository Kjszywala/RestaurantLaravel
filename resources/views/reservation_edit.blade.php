@extends('header')
@section('content')

<link rel="stylesheet" href="booking.css">


<div id="rcorners1" align=center style="height: 550px;">
    <h1>Booking modification</h1>

    @if($reservation->id != null)
    <form method="POST" action="{{route('reservation.update', $reservation)}}">
    @method('PUT')
    @else
    <form method=POST action="{{route('reservation.store')}}">	
    @endif
        @csrf
        <label for="date">Date:</label>
        <input type="date" name="date" value="{{ $reservation->date }}"><br><br>

        <label for="time">Time:</label>
        <input type="time" name="time" value="{{ $reservation->time }}" step="1800" min="09:00" max="19:00" name="reservation-time" maxlength="255" id="textbox" required/></td>><br><br>

        <label for="table_id">Party size:</label>
        <select name="table_id" id="table_id">
            @foreach($tables as $table)
                <option value="{{ $table->id }}">{{ $table->party_size }}</option>
            @endforeach
        </select>
        <input type="hidden" name="user_id" value="{{ $reservation->user_id }}"><br><br>

        
        <input type="submit" class="btn btn-success" value="Implement changes">
    </form>
    </div>


@endsection
