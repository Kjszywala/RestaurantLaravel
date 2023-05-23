@extends('header')
@section('content')
@php $naglowki = array("name","surname","data", "time", "party_size",); @endphp

<link rel="stylesheet" href="booking.css">

<br>
<br>
<div id="rcorners2" >

    <h1>Reservation</h1>

    <td align='center'>
			<form method='GET' action='/reservation/create'>
				<b><input type='submit'  class="btn btn-success" value='Add new'></b>
			</form>
		</td>
    
    <br><br>


    <table align='center' border = 1 class=table><tr>
    <thead class="thead-dark">


        @foreach($naglowki as $naglowek) 
            <td><b>{{$naglowek}}</b></td>
        @endforeach

        </thead>
        @foreach($reservation as $item)
        <tr>
            <td>{{$item->user->name}}</td>
            <td>{{$item->user->surname}}</td>
            <td>{{date('d F', strtotime($item->date))}}</td>
            <td>{{date('H:i A', strtotime($item->time))}}</td>
            <td>{{$item->party_size}}</td>
            <td align="center">

            <form method="GET" action='/reservation/{{$item->id}}/edit'>
            <input type="submit"  class="btn btn-success" value="Edit">
            </form>
            
			<form method='POST' action='/reservation/{{$item->id}}'>
				@csrf
				@method('DELETE')
            <input type="submit" class="btn btn-success" value="Delete">
            </form>
            </td>
        </tr>
        @endforeach

</table>
</div>
@endsection
