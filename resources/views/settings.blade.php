@extends('header')
@section('content')
<head>
  <title>Edit User</title>
  <style>
    /* CSS styling for the form */
    .body1 {
      font-family: Arial, sans-serif;
      background-color: transparent;
      padding: 20px;
    }

    .userH1 {
      text-align: center;
    }

    .form1 {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .form2 {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .class32 {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .submit34 {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }

    .submit34:hover {
      background-color: #45a049;
    }
  </style>
</head>
<div class="body1">
  <h1 class="userH1">Edit User</h1>
  <form class="form1" method=POST action="{{route('settingsUser')}}">
    @csrf
    <div class="form-group form2">
      <label for="login">Login:</label>
      <input type="text" class="class32" name="login" id="login" value="{{$user->login}}" required>
    </div>

    <div class="form-group form2">
      <label for="password">Password:</label>
      <input type="password" class="class32" name="password"value="" id="password" required>
    </div>

    <div class="form-group form2">
      <label for="name">Name:</label>
      <input type="text" class="class32" name="name"value="{{$user->name}}" id="name" required>
    </div>

    <div class="form-group form2">
      <label for="surname">Surname:</label>
      <input type="text" class="class32" name="surname"value="{{$user->surname}}" id="surname" required>
    </div>

    <div class="form-group form2">
      <label for="phone">Phone:</label>
      <input type="text" class="class32" name="phone"value="{{$user->phone}}" id="phone" required>
    </div>

    <div class="form-group form2">
      <label for="email">Email:</label>
      <input type="email" class="class32" name="email"value="{{$user->email}}" id="email" required>
    </div>

    <div class="form-group form2">
      <label for="age">Age:</label>
      <input type="number" class="class32" name="age"value="{{$user->age}}" id="age" required min="0">
    </div>

    <div class="form-group form2">
      <label for="gender">Gender:</label>
      <select name="gender" class="class32" id="gender" required>
        <option value="">Select Gender</option>
        <option value="male"@php if($user->gender == 'male') echo 'selected' @endphp>Male</option>
        <option value="female" @php if($user->gender == 'female') echo 'selected' @endphp>Female</option>
        <option value="other">Other</option>
      </select>
    </div>

    <div class="form-group form2">
      <input type="submit" class="submit34" value="Save">
    </div>
  </form>
  <div>
@endsection