<?php 
    function open_connection(){
        global $connection;
        $server = "127.0.0.1";
        $user = "root";
        $password = "";
        $db = "restauracja";
    
        $connection = mysqli_connect($server, $user, $password) or exit("Cannot connect do database.");	

        if(!mysqli_select_db($connection, $db)) {
            // 1049 oznacza że baza nie istnieje
            if(mysqli_errno($connection) == 1049) {
                mysqli_select_db($connection, $db);
            }
            else echo("Cannot connect to $db <br>");
        }
        mysqli_set_charset($connection, "utf8");
    }

    function close_connection(){
        global $connection;
        mysqli_close($connection);
    }

    function save_user() {
        global $polaczenie;
        $login = $_POST['login'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $query = "insert into users values('$login', '$password', '$name', '$surname', '$email', '$age', '$gender');";	
        mysqli_query($polaczenie, $query) or exit("Query error: ".$query);
    }
?>