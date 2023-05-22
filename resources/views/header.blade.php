<?php
    session_start();
?>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('mainwindow.css') }}">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<header id="headerStyle">     
  <div id="buttonsDiv">
    <form method="post" action="">
      <input type="button" value="Home" id="transparent" onclick="location.href='/'">
      <input type="button" value="Menu"  id="transparent" onclick="location.href='/menu'">
      <input type="button" value="About Us" id="transparent" onclick="location.href='/aboutus'">
      <input type="button" value="Contact Us" id="transparent" onclick="location.href='/contact'">
      <input type="button" value="Gallery" id="transparent" onclick="location.href='/gallery'">
      @php
          $name1 = session('name');
          $isLoggedIn = session('login');
      @endphp

      @if ($isLoggedIn)
          <input type="button" value="Logout" name="logout" id="transparent" onclick="location.href='/logout'">
          <label id="label1">Hello {{ $name1 }}!</label>
      @else
          <input type="button" value="Login" id="transparent" onclick="location.href='/login'">
          <input type="button" value="Register" id="transparent" onclick="location.href='/register'">
      @endif
    </div>
  </form>
</header>
@if (!empty($message))
<script>
    swal({
        title: "{{ $message }}",
        icon: "{{ $type }}",
        button: "OK",
    });
</script>
@endif
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
<div class="row justify-content-center">
    <div class="col-12 text-center">
        @yield('content')
	</div>
</div>
<br><br>
<div class="row">
<footer class="footer bg-dark text-white">
  <div class="container1">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <h5>About Us</h5>
        <p>We are a fine dining restaurant that specializes in providing a unique culinary experience.</p>
      </div>
      <div class="col-lg-4 col-md-6">
        <h5>Contact Information</h5>
        <p>123 Main Street, City, State</p>
        <p>Phone: (123) 456-7890</p>
        <p>Email: info@example.com</p>
      </div>
      <div class="col-lg-4">
        <h5>Opening Hours</h5>
        <p>Monday - Friday: 9am - 10pm</p>
        <p>Saturday - Sunday: 10am - 11pm</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <hr class="divider">
        <p class="text-center">&copy; 2023 Your Restaurant. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
</div>
<style>
.footer {
  background-color: #333;
  color: #fff;
  padding: 30px 0;
}

.container12 {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.footer-logo img {
  height: 50px;
}

.footer-links ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.footer-links ul li {
  display: inline;
  margin-right: 15px;
}

.footer-links ul li a {
  color: #fff;
  text-decoration: none;
}

.footer-social ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.footer-social ul li {
  display: inline;
  margin-right: 10px;
}

.footer-social ul li a {
  color: #fff;
  font-size: 20px;
}

.footer-bottom {
  margin-top: 20px;
  text-align: center;
  font-size: 14px;
}

.footer-bottom p {
  margin: 0;
}
</style>