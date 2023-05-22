@extends('header')
@section('content')
<?php
    session_set_cookie_params(0);
?>
<html>
<style>
    #label1{
        background-color: transparent;
        border-color: transparent;
        font-size: x-large;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-left: 2ch;
        margin-right: 2ch;
        color: white;
        font-family: brush script mt, cursive;
    }
</style>
<div class="container" id="sliderDiv" style="width: 50%; height: auto; margin-top:0px;">
    
    <div class="wrapper">
        <img src="images/photo1.jpg">
        <img src="images/photo2.jpg">
        <img src="images/photo5.jpg">
        <img src="images/photo4.jpg">
    </div> 
</div>
@endsection
