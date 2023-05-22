@extends('header')
@section('content')
<?php
    session_start();
    include 'phpscripts.php';   
?>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="register.css">
</head>

    <center>
        <h1 id="register">Register</h1>
    </center><br>
<div id="rcorners1" style="height: 650px;">
    <center>
    <form method=POST action="{{route('updateUser', ['user' => $user])}}"> 
        @csrf
        <table>
            <br><br>
            <tr>
                <td><b>Login:</b></td>
                <td><input type="text" name="login" maxlength="255" required/></td>
            </tr>
            <tr>
                <td><b>Password:</b></td>
                <td><input type="text" name="password" maxlength="255" required/></td>
            </tr>
            <tr>
                <td><b>Name:</b></td>
                <td><input type="text" name="name" maxlength="255" required/></td>
            </tr>
            <tr>
                <td><b>Surname:</b></td>
                <td><input type="text" name="surname" maxlength="255" required/></td>
            </tr>
            <tr>
                <td><b>Phone:</b></td>
                <td><input type="text" name="phone" maxlength="255" required/></td>
            </tr>
            <tr>
                <td><b>Email:</b></td>
                <td><input type="text" name="email" maxlength="255" required/></td>
            </tr>
            <tr>
                <td><b>Age:</b></td>
                <td><input type="number" name="age" maxlength="255" required/></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <b>Choose your gender:</b>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="male" value="male" checked>
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="female" value="female">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 30px;">
                <input type=submit name="singUp" id="singUp" value='Sign Up' style='width: 100%;'></td>
            </tr>
        </table> 
    </form>
    </center>
</div>
@endsection