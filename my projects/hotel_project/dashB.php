<?php


session_start();

if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
	# code...
	echo "<h1> this is dash board </h1>";
    echo "<a href='my_room.php'>  Rooms </a>";
    echo "<br><br>";
    echo "<a href='booking_for_admin.php'> Booking </a>";



}else{
 
 //header to go to sign in
 header('Location: admin_log.php');
 die();

}


 ?>
