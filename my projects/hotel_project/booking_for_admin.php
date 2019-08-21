<?php

require 'db_connection.php';
global $connection;
session_start();
//cehck session--------------------
if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
  # code...

  //echo "<h1>  i got this page with session </h1> ";
  //-------- all the code here
  //-------------core code-------------------
  $booking_show_query = "SELECT * FROM `booking`";
  $run_booking_show_query = mysqli_query($connection,$booking_show_query);

  foreach ($run_booking_show_query  as $booking) {
    // code...
    echo "<strong> The ID is:</strong>  ".$booking['id'].'<br>';  
    echo "first name is: ".$booking['first_name']."<br>";
    echo "last name is: ".$booking['last_name']."<br>";
    echo "phone is: ".$booking['phone']."<br>";
    echo "email is: ".$booking['email']."<br>";
    echo "city is: ".$booking['city']."<br>";
    echo "street is: ".$booking['street']."<br>";
    echo "area is: ".$booking['area']."<br>";
    echo "requirment : ".$booking['requirment']."<br>";

    echo "<hr>";
}

//------------------------------












}else{
  //header to go to sign in
  header('Location: admin_log.php');
  die();
}

//----------------------



 ?>

 <form  action="delet_booking.php" method="POST">

 	<input type="text" name="booking_id" placeholder="Enter the booking ID">
 	<input type="submit" name="delete_booking" value="Delete Booking">
 	<br> <br>


 </form>
