@extends('header')
@section('content')
<link rel="stylesheet" href="booking.css">
<link rel="stylesheet" href="css/bootstrap.css">

<div id="rcorners2" class="form-container1">
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
          <input type="date" name="date" value="{{ $reservation->date }}" class="form-input"><br>
  
          <label for="time" class="form-label">Time:</label>
          <input type="time" name="time" value="{{ $reservation->time }}" step="1800" min="09:00" max="19:00" name="reservation-time" maxlength="255" id="textbox" required class="form-input"><br>
  
          <label for="party_size" class="form-label">Number of Guests:</label>
          <input type="number" name="party_size" value="{{ $reservation->party_size }}" class="form-input"><br>
  
          <input type="hidden" name="user_id" value="{{ $reservation->userId }}"><br>
  
          <label for="table_id" class="form-label">Select a Table:</label>
          <select name="table_id" class="form-select">
              @foreach($tables as $table)
                  <option value="{{ $table->id }}">{{ $table->party_size }}</option>
              @endforeach
          </select><br>
          <input type="submit" class="button-37" value="Add Reservation">
      </form>
    </div>
</div>
<style>
.form-container1 {
  height: 550px;
  background-color: transparent;
  display: flex;
  flex-direction: column;
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
  align-items: center;
  justify-content: center;
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

/* CSS */
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
.footer {
  background-color: #333;
  color: #fff;
  padding: 30px 0;
}

.container1 {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.footer-logo img {
  height: 50px;
}

.footer-links ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.footer-links ul li {
  display: inline;
  margin-right: 15px;
}

.footer-links ul li a {
  color: #fff;
  text-decoration: none;
}

.footer-social ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.footer-social ul li {
  display: inline;
  margin-right: 10px;
}

.footer-social ul li a {
  color: #fff;
  font-size: 20px;
}

.footer-bottom {
  margin-top: 20px;
  text-align: center;
  font-size: 14px;
}

.footer-bottom p {
  margin: 0;
}
</style>
@endsection
