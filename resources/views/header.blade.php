<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('mainwindow.css') }}">
</head>

<header id="headerStyle">    
        
            <div id="buttonsDiv">
            <form method="post" action="">
                <input type="button" value="Home" id="transparent" onclick="location.href='/'">
                <input type="button" value="Menu"  id="transparent" onclick="location.href='/menu'">
                <input type="button" value="About Us" id="transparent" onclick="location.href='/aboutus'">
                <input type="button" value="Contact Us" id="transparent" onclick="location.href='/contact'">
                <input type="button" value="Gallery" id="transparent" onclick="location.href='/gallery'">
                <?php
                    $name1 = @$_SESSION['name'];
                    if (@$_SESSION["login"]) {
                        echo "<input type='submit' value='Logout' name='logout' id='transparent'>
                                <label id=\"label1\">Hello $name1!</label>";
                    } else {
                        echo "<input type='button' value='Login' id='transparent' onclick=\"location.href='/login'\">
                            <input type='button' value='Register' id='transparent' onclick=\"location.href='/register'\">";
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
    <br><br>
<center>
    @yield('content')
</center>
<br><br>
