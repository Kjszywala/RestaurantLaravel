@extends('header')
@section('content')
<?php
    include 'phpscripts.php';
?>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<div id="rcorners1" >
    <div style="background-color: transparent; width: 50%; height: 900px; float:left;">
    <br><center>
        <h5>Sign in to get most from our restaurant</h5>
        <form method=POST action="{{route('logUser')}}">
            @csrf
            <br><br><br>
            <table>
                <tr>
                    <td><b>Login</b></td>
                    <td><input type="text" name="login" maxlength="255" required/></td>
                </tr>
                <tr>
                    <td><b>Password</b></td>
                    <td><input type="text" name="password" maxlength="255" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="singIn" id="test" value='Sign In' style='width: 100%;'></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="buttonSignUp" type="button" name="singUp" id="test" value='Sign Up' style='width: 100%;' onclick="location.href='register.php'"></td>
                </tr>
            </table>
        </form>
    </div>
    <div style="background-color: transparent; width:50%; height: 500px; float:right;">
    <br>
        <h2>SERVED EVERY DAY SINCE 1990</h2>
        <h5>
        Restaurant opened on Thanksgiving Day 1990. Chef / Owner Ron<br>Silver began baking pies and selling them to restaurants and his neighbors<br>out of a small kitchen at the corner of Hudson and North Moore St. in<br>Tribeca. Today, NYC’s beloved restaurant and pie shop celebrates 32<br>years of classic, made from scratch American cooking.
        </h5>
        <img id="img1" src="images/old.jpg" sizes="10"/>
    </div>
    </center>
</div>

@endsection
