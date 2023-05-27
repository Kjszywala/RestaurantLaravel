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
        <form method=POST action="{{route('sendEmail')}}">
            @csrf
            <table>
                <br>
                <tr>
                    <h4 id="register">Please fill this form in a decent manner</h4>
                </tr>
                <tr>
                    <td><b>Full Name:</b></td>
                    <td><input type="text" name="fullname" id="fullname" maxlength="255" required/></td>
                </tr>
                <tr>
                    <td><b>E-mail:</b></td>
                    <td><input type="text" name="email" id="email" maxlength="255" required/></td>
                </tr>
                <tr>
                    <td><b>Subject:</b></td>
                    <td><input type="text" name="subject" id="subject" maxlength="255" required/></td>
                </tr>
                <tr>
                    <td><b>Message:</b></td><br>
                </tr>
                <tr>
                    <td colspan="2" style="width: 100%;"><textarea name="message" id="message" style="resize: none;" maxlength="255" required cols="40" rows="5"></textarea></td>
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