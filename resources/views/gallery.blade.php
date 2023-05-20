
<html>
<head>
    <meta charset="UTF-8">
    <title>Galeria </title>

    <link rel="stylesheet" href="gallery.css">

</head>
<body>
		<center>
        <img src="images/logo.png" id="img1"><br>
	<?php
        if(isset($_POST['logout'])){
            $_SESSION["login"] = false;
            header("Location: mainwindow.php");
            die();
        }
    ?>
    <button id="button" onclick="location.href='mainwindow.php'">Main Menu</button>
	<br>
	<h1 id="gallery_text">Our gallery</h1>
	</center>
	
<section class="gallery" id="gallery">

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
            </div>
        </div>

    </div>

</section>

</body>
</html>