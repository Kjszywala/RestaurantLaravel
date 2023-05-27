@extends('header')
@section('content')

<link rel="stylesheet" href="booking.css">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

<div id="rcorners1" class="form-container1" style="height: 550px;">
    <div class="form-content1">
    <h1>Booking modification</h1>

    @if($reservation->id != null)
    <form method="POST" action="{{route('reservation.update', $reservation)}}">
    @method('PUT')
    @else
    <form method=POST action="{{route('reservation.store')}}" class="reservation-form">	
    @endif
        @csrf
        <label for="date" class="form-label">Date:</label>
        <input type="date" name="date" value="{{ $reservation->date }}" class="form-input" required><br><br>

        <label for="time" class="form-label">Time:</label>
        <input type="time" name="time" value="{{ $reservation->time }}" step="1800" min="09:00" max="19:00" name="reservation-time" class="form-input" maxlength="255" id="textbox" required/></td><br><br>

        <label for="table_id" class="form-label">Party size:</label>
        <select name="table_id" id="table_id" class="form-select" required>
            @foreach($tables as $table)
                <option value="{{ $table->id }}">{{ $table->party_size }}</option>
            @endforeach
        </select>
        <input type="hidden" name="user_id" value="{{ $reservation->user_id }}"><br><br>
        <input type="submit" class="button-37" value="Implement changes">
    </form>
    </div>
</div>
<style>
    .button-37 {
  background-color: #13aa52;
  border: 1px solid #13aa52;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
  font-size: 16px;
  font-weight: 400;
  outline: none;
  outline: 0;
  padding: 10px 25px;
  text-align: center;
  transform: translateY(0);
  transition: transform 150ms, box-shadow 150ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-37:hover {
  box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
  transform: translateY(-2px);
}

@media (min-width: 768px) {
  .button-37 {
    padding: 10px 30px;
  }
}
    .form-container1 {
      height: 550px;
      background-color: transparent;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 10px;
    }
    
    .form-content1 {
      width: 50%;
      background-color: white;
      border-radius: 7px;
      max-width: 400px;
      padding: 20px;
      text-align: center;
    }
    
    .form-title {
      font-size: 24px;
      margin-bottom: 20px;
    }
    
    .reservation-form {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }
    
    .form-label {
      font-size: 16px;
      margin-bottom: 5px;
    }
    
    .form-input {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }
    
    .form-select {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }
    
    .form-submit {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
</style>
@endsection
