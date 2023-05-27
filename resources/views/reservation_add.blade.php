@extends('header')
@section('content')
<link rel="stylesheet" href="{{ asset('add.css') }}">
<link rel="stylesheet" href="{{ asset('footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="css/bootstrap.css">

<div id="rcorners2">
    <div class="form-content1">
      <h1 class="form-title">Add Reservation</h1>
  
      @if($reservation->id != null)
      <form method="POST" action="{{ route('reservation.update', $reservation) }}" class="reservation-form">
      @method('PUT')
      @else
      <form method="POST" action="{{ route('reservation.store') }}" class="reservation-form">	
      @endif
          @csrf
      
          <label for="date" class="form-label">Date:</label>
          <input type="date" name="date" value="{{ $reservation->date }}" class="form-input" required><br>
  
          <label for="time" class="form-label">Time:</label>
          <input type="time" name="time" value="{{ $reservation->time }}" step="1800" min="09:00" max="19:00" name="reservation-time" maxlength="255" id="textbox" required class="form-input"><br>
  
          <label for="party_size" class="form-label">Number of Guests:</label>
          <input type="number" name="party_size" min="0" value="{{ $reservation->party_size }}" class="form-input" required><br>
  
          <input type="hidden" name="user_id" value="{{ $reservation->userId }}"><br>
  
          <label for="table_id" class="form-label">Select a Table:</label>
          <select name="table_id" class="form-select" required>
              @foreach($tables as $table)
                  <option value="{{ $table->id }}">{{ $table->party_size }}</option>
              @endforeach
          </select><br>
          <input type="submit" class="button-37" value="Add Reservation">
      </form>
    </div>
</div>
@endsection
