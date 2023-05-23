@extends('header')
@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>PDF Viewer</title>
</head>
<body>
  <div>
    <div>
      <object data="menu.pdf" type="application/pdf" width="50%" height="800">
          alt : <a href="menu.pdf">menu.pdf</a>
      </object>
  </div>
  </div>
</body>
</html>
@endsection