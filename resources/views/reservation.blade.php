@extends('header')
@section('content')
@php $naglowki = array("Name","Surname","Date", "Time", "Party Size","Actions"); @endphp

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

<div class="row" style="margin-top:-50px;">
    <center>
        <h1>Reservations</h1>
        <br><br>
        <div class="table-container">
            <table class="styled-table" id="reservation-table">
                <thead class="thead-dark">
                    <tr>
                        @foreach($naglowki as $naglowek) 
                            <th>{{$naglowek}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
        </div>
    </center>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#reservation-table').DataTable({
            "order": [], // Disable initial sorting
            "paging": false, // Disable pagination if necessary
            "searching": true, // Enable searching
            "info": false, // Disable showing information if necessary
            "language": {
                "search": "_INPUT_",
                "searchPlaceholder": "Search..."
            }
        });
    });
</script>
@endsection
<style>
.table-container {
    max-width: 700px;
    margin: 0 auto;
    text-align: center; /* Align the table and search input in the center */
}
#reservation-table_filter {
    display: inline-block; /* Display the search input as an inline block */
    margin-top: 10px; /* Adjust the top margin as needed */
}

#reservation-table_filter label {
    font-weight: bold;
    margin-right: 5px;
    color: #333;
}

#reservation-table_filter input[type="search"] {
    width: 200px;
    padding: 5px;
    border: 1px solid #ccc;
    background-color: white;
    border-radius: 4px;
    color: #333;
}

.styled-table {
    border-collapse: collapse;
    width: 100%;
    font-size: 0.9em;
    max-width: 700px;
    font-family: sans-serif;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    background-color: white;
    margin-top: 20px;
}
  
  .styled-table thead tr {
      background-color: #009879;
      color: #ffffff;
      text-align: center;
  }
  
  .styled-table th,
  .styled-table td {
      padding: 12px 15px;
      text-align: center;
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
  
  .form-container {
      display: flex;
      justify-content: center;
      align-items: center;
  }
  
  .inline-form {
      margin: 0 5px;
  }
  
  .dataTables_filter {
      margin-bottom: 20px;
  }
  
  .dataTables_filter label {
      font-weight: bold;
      margin-right: 5px;
  }
  
  .dataTables_filter input[type="search"] {
      width: 200px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
  }
  
  .table-container {
      max-width: 600px;
      margin: 0 auto;
      overflow-x: auto;
      margin-bottom: 20px;
  }
  </style>
