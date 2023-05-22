@extends('header')
@section('content')
<html>
<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact.css">
</head>
<div id="rcorners1" style="height: 550px;">
    <center>
        <form method=POST action="">
            <table>
                <br>
                <tr>
                    <h4 id="register">Please fill this form in a decent manner</h4>
                </tr>
                <tr>
                    <td><b>Full Name:</b></td>
                    <td><input type="text" name="fullname" maxlength="255" id="textbox" required/></td>
                </tr>
                <tr>
                    <td><b>E-mail:</b></td>
                    <td><input type="text" name="email" maxlength="255" id="textbox" required/></td>
                </tr>
                <tr>
                    <td><b>Message:</b></td><br>
                </tr>
                <tr>
                    <td colspan="2" style="width: 100%;"><textarea name="message" maxlength="255" id="messagetextbox" required></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type=submit name="submit" id="test" value='SUBMIT' style='width: 100%;'></td>
                </tr>
            </table> 
        </form>
    </center>
</div>
@endsection