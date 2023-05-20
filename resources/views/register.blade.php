<?php
    session_start();
    include 'phpscripts.php';    
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="register.css">
</head>
<body>
    <center>
        <img id="img2" src="images/logo.png"/>
        <h1 id="register">Register</h1>
        <button id="button" onclick="location.href='mainwindow.php'">Main Menu</button>
    </center><br>
<div id="rcorners1" style="height: 550px;">
    <center>
    <form method=POST action="">
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
    <?php
        if(isset($_POST['singUp'])){
            $login = $_POST['login'];
            $password1 = $_POST['password'];
            $password = password_hash($password1, PASSWORD_BCRYPT);
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            open_connection();
            global $connection;
            $query = "insert into users values(null, '$login', '$password', '$name', '$surname', '$email', '$age', '$gender');";
            mysqli_query($connection, $query) or exit("Query error: " . $query);
            $_SESSION['login'] = true;
            $_SESSION["name"] = $name;
            header("Location: mainwindow.php");
            close_connection();
            die();
        }
    ?>
    </center>
</div>
</body>
</html>