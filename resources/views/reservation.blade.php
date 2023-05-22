@extends('header')
@section('content')
@php $naglowki = array("name","surname","data", "time", "party_size",); @endphp

<link rel="stylesheet" href="aboutus.css">

<form method='GET'>
<br>
<br>
<div id="rcorners1" >

    <h1>Reservation</h1>
    <td align='center'>
    <input type='submit' value='Dodaj'
                     onClick="action='/reservation_edit/add'">
    </td><br><br>
    <table align='center' border = 1 class=table><tr>
    <thead class="thead-dark">


    @foreach($naglowki as $naglowek) 
        <td><b>{{$naglowek}}</b></td>
    @endforeach

    </thead>
    @foreach($reservation as $reservations)
    <tr>
            <td>{{$reservations->user->name}}</td>
                <td>{{$reservations->user->surname}}</td>
                <td>{{date('d F', strtotime($reservations->date))}}</td>
                <td>{{date('H:i A', strtotime($reservations->time))}}</td>
                <td>{{$reservations->party_size}}</td>

                <td align='center'>
                <input type="submit" class="btn btn-success" value='Edit' 
				   onClick="action='/reservation_edit/edit/{{$reservations->id}}'">
                <input type='submit' class="btn btn-success" value='Delete'
                     onClick="action='/reservation/delete/{{$reservations->id}}'">

                </td>	
		<tr>
    @endforeach


</table>
</form>
</div>
@endsection
