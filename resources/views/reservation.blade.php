@extends('header')
@section('content')
@php $naglowki = array("Name","Surname","Date", "Time", "Party Size","Actions"); @endphp

<link rel="stylesheet" href="booking.css">

<div class="row" style="margin-top:-50px;">
    <center>
        <h1>Reservation</h1>
            <td>
                <form method='GET' action='/reservation/create'>
                    <b><input type='submit'  class="btn btn-success" value='Add new'></b>
                </form>
            </td>
        
        <br><br>
        <table class="styled-table"><tr>
            <thead class="thead-dark">
                @foreach($naglowki as $naglowek) 
                    <td><b>{{$naglowek}}</b></td>
                @endforeach
            </thead>
            @foreach($reservation as $item)
            <tr class="active-row">
                <td>{{$item->user->name}}</td>
                <td>{{$item->user->surname}}</td>
                <td>{{date('d F', strtotime($item->date))}}</td>
                <td>{{date('H:i A', strtotime($item->time))}}</td>
                <td>{{$item->party_size}}</td>
                <td>
                    <div class="form-container">
                        <form method="GET" action="/reservation/{{$item->id}}/edit" class="inline-form">
                          <input type="submit" class="btn btn-success" value="Edit">
                        </form>
                      
                        <form method="POST" action="/reservation/{{$item->id}}" class="inline-form">
                          @csrf
                          @method('DELETE')
                          <input type="submit" class="btn btn-success" value="Delete">
                        </form>
                      </div>
                </td>
            </tr>
            @endforeach
        </table>
    </center>
</div>
<style>
.styled-table {
border-collapse: collapse;
margin: 25px 0;
font-size: 0.9em;
font-family: sans-serif;
min-width: 400px;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
background-color: white;
}
.form-container {
  display: flex; /* Use flexbox to align the forms */
}

.inline-form {
  display: inline-block; /* Display the forms inline */
  margin-right: 10px; /* Add some spacing between the forms if needed */
}
.styled-table thead tr {
background-color: #009879;
color: #ffffff;
text-align: center;
}
.styled-table th,
.styled-table td {
padding: 12px 15px;
}
.styled-table tbody tr {
border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
font-weight: bold;
color: #009879;
}
</style>
@endsection
