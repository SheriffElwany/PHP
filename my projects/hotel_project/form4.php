<?php
session_start();
require 'db_connection.php';
global $connection;

//--------------check session-----------------------
if (isset($_SESSION['check_in']) && isset($_SESSION['check_out']) && isset($_SESSION['adult']) && isset($_SESSION['child'])) {
	# code...

	//---------------------core code----------------------

   //---------------------
    $deposite = $_SESSION['deposite'];

  //--------------------


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$country = $_POST['country'];
$street = $_POST['street'];
$area = $_POST['area'];
$reqirment = $_POST['reqirment'];
$payment_method = $_POST['payment_method'];
$room_amount = $_SESSION['room_numbers'];
$deposite = $_SESSION['deposite'];
$check_in = $_SESSION['check_in'];
$check_out =  $_SESSION['check_out'];
$adult =  $_SESSION['adult'];
$child =  $_SESSION['child'];
$full_days = $_SESSION['full_days'];
$totall_cost = $_SESSION['totall_cost'];




$user_query = "INSERT INTO `booking` ( `first_name`, `last_name`, `phone`, `email`, `counrty`, `city`, `area`, `street`,
 `chek_in`, `check_out`, `adult`, `child`, `requirment`, `deposite`, `totall_cost`, `payment_method`, `rooms_amount`, `full_days`)
  VALUES ('$first_name', '$last_name', '$phone', '$email', '$country', '$city', '$area', '$street ', '$check_in',
   '$check_out', '$adult', '$child', '$reqirment', '$deposite', '$totall_cost', '$payment_method', '$room_amount', '$full_days')";

//var_dump($user_query);
$insert_user = mysqli_query($connection, $user_query);


if ($insert_user) {
  // code...
  //echo "<br> user inserted ";
  echo "<center> <h1> thank you for sign up </h1> </center>";  
  //header to go out to thank you page---------------
  header('Location: thank_you.php');
  //have fun in thank you page--------------------
 





}   else {
  echo "<br> faild to insert user";
}




	//---------------------end of core code---------------
	
}else {
  //header to go to set session
  header('Location: form1.php');
  die();

}



//--------------end of checking session-------------




 ?>
