<html>
<head>
  <meta charset="utf-8">
  <title>Booking</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
    <center>
        <img id="img2" src="images/logo.png"/>
        <h1 id="register">Booking</h1>
        <button id="button" onclick="location.href='mainwindow.php'">Main Menu</button>
        
    </center><br>
<div id="rcorners1" >
    <center>
        <form method=POST action="">
            <table>
                <br>
                <tr>
                    <h4 id="register">Book a table now!</h4>
                </tr>
                <tr>
                    <td><b>Full Name:</b></td>
                    <td><input type="text" name="reservation-name" maxlength="255" id="textbox" required/></td>
                </tr>
                <tr>
                    <td><b>Phone number:</b></td>
                    <td><input type="phone" name="reservation-phone" maxlength="255" id="textbox" required/></td>
                </tr>                       
					<td><b>Number of people:</b></td>
                    <td><input type="number" name="reservation-party-size" maxlength="255" id="textbox" pattern="[0-9]" required/></td>
                </tr>                
				<tr>
                    <td><b>Date of reservation:</b></td>
                    <td><input type="date" name="reservation-date" maxlength="255" id="textbox" required/></td>
                </tr>
                <tr>
                    <td><b>Booking time:</b></td><br>
					<td><input type="time" step="1800" min="09:00" max="19:00" name="reservation-time" maxlength="255" id="textbox" required/></td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-top: 20px;">
                    <input type=submit name="submit_reservation" id="submit_reservation" value='SUBMIT' style='width: 100%;'></td>
                </tr>
            </table> 
        </form>
    </center>

</div>
<?php
	if(isset($_POST['submit_reservation'])){
        $serwer = mysqli_connect("localhost", "root", "")
                    or exit("Could not connect to the database server");
        $baza = mysqli_select_db($serwer, "restauracja") 
                or exit ("Could not connect to the database server");
        mysqli_set_charset($serwer, "utf8");
        
        $date = $_POST['reservation-date'];
        $time = $_POST['reservation-time'];
        $party_size = $_POST['reservation-party-size'];
        $name = $_POST['reservation-name'];
        $phone = $_POST['reservation-phone'];

        // sprawdzenie, czy rezerwacja jest już zarezerwowana
        $query = "SELECT * FROM reservation WHERE date='$date' AND time='$time'";
        $result = mysqli_query($serwer, $query);

        if(mysqli_num_rows($result) == 4){
            ?>
            <script>
                alert("Reservation for this date, time and party size is already booked. Please choose a different date or time.");
            </script>
            <?php
	    }
        else {
            // sprawdzenie, czy istnieją wolne stoliki dla danej wielkości grupy
            $query = "SELECT * FROM tables WHERE party_size >= '$party_size'";
            $result = mysqli_query($serwer, $query);

            if(mysqli_num_rows($result) > 0){
                // pobranie ID pierwszego wolnego stolika
                $row = mysqli_fetch_array($result);
                $table_id = $row['id'];
                
                //wstawienie rezerwacji
                $query = "INSERT INTO `reservation` (date, time, party_size, name, phone, table_id) VALUES ('$date', '$time', '$party_size', '$name', '$phone', $table_id)";
                mysqli_query($serwer, $query);
                
                // // zmiana statusu stolika na zarezerwowany
                // $query = "UPDATE tables SET is_reserved = '1' WHERE id = '$table_id'";
                // mysqli_query($serwer, $query);
            ?>
            
            <script>
                alert("A table has been reserved. Thank you for using our service");
            </script>

            <?php
        }
        else {
            ?>
            <script>
                alert("No available tables for the selected party size. Please choose a different party size or later date.");
            </script>
        <?php
            }
    }
	    mysqli_close($serwer);
	}
	?>
</body>
</html>