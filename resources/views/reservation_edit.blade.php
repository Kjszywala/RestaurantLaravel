@extends('header')
@section('content')
    <h1>Booking modification</h1>

    <form method="POST" action="{{route('updateReservation', $reservation->id)}}">
        @csrf
        <label for="date">Data:</label>
        <input type="date" name="date" value="{{ $reservation->date }}"><br><br>

        <label for="time">Time:</label>
        <input type="time" name="time" value="{{ $reservation->time }}"><br><br>

        <label for="party_size">Numer of guests:</label>
        <input type="number" name="party_size" value="{{ $reservation->party_size }}"><br><br>

        <label for="user_id">ID user:</label>
        <input type="number" name="user_id" value="{{ $reservation->user_id }}"><br><br>

        <label for="table_id">ID table:</label>
        <input type="text" name="table_id" value="{{ $reservation->table_id }}"><br><br>

        <input type="submit" value="Implement changes">
    </form>

@endsection
