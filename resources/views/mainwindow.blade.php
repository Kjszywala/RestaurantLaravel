<?php
    session_set_cookie_params(0);
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>MainWindow</title>
    <link rel="stylesheet" href="{{ asset('mainwindow.css') }}">
</head>
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
<body>
    <header id="headerStyle">    
        
            <div id="buttonsDiv">
            <form method="post" action="">
                <input type="button" value="Home" id="transparent" onclick="location.href='mainwindow.php'">
                <input type="button" value="Menu"  id="transparent" onclick="location.href='Menu.php'">
                <input type="button" value="About Us" id="transparent" onclick="location.href='aboutus.php'">
                <input type="button" value="Contact Us" id="transparent" onclick="location.href='contact.php'">
                <input type="button" value="Gallery" id="transparent" onclick="location.href='gallery.php'">
                <?php
                    $name1 = @$_SESSION['name'];
                    if (@$_SESSION["login"]) {
                        echo "<input type='submit' value='Logout' name='logout' id='transparent'>
                                <label id=\"label1\">Hello $name1!</label>";
                    } else {
                        echo "<input type='button' value='Login' id='transparent' onclick=\"location.href='login.php'\">
                            <input type='button' value='Register' id='transparent' onclick=\"location.href='register.php'\">";
                    }
                ?>
            </div>
        </form>
    </header>
    <?php
        if(isset($_POST['logout'])){
            $_SESSION["login"] = false;
            header("Location: mainwindow.php");
            die();
        }
    ?>
    <div id = "image">
        <img src="images/logo.png" id="logo">
    </div>
    <?php
        if(@$_SESSION['login'] == true){
            echo "
                <div id=\"bookdiv\">
                    <button id=\"book\" onclick=\"location.href='booking_modyfikacje.php'\">Book a Table</button>
                </div>";
        }
        else{
            echo
                "<center>
                    <div id=\"logToBook\">
                        <h4 id='pleaselogin'>Please log in to book a table.</h4>
                    </div>
                </center>";
        }
    ?>
    <div class="container" id="sliderDiv" style="width: 50%; height: auto;">
        <div class="wrapper">
            <img src="images/photo1.jpg">
            <img src="images/photo2.jpg">
            <img src="images/photo5.jpg">
            <img src="images/photo4.jpg">
        </div>
    </div>
    <div id="bottomDiv">
        <marquee>
            <h3>Sebastian Arendarczyk & Kamil Szywała</h3>
        </marquee>
    </div> 
</body>
</html>