<?php
session_start();

if (isset($_SESSION['check_in']) && isset($_SESSION['check_out']) && isset($_SESSION['adult']) && isset($_SESSION['child'])) {
  # code...

  echo "totall cost is: ".$_SESSION['totall_cost'].'<br><br>';
  echo "deposite will be: ".$_SESSION['deposite'];
  
  $full_days = $_SESSION['full_days'];
  echo '<br><br>'."full days is: ".$full_days;

  $room_amount = $_SESSION['room_numbers'];
  echo '<br> Totall Room is: '.$room_amount;






}else{
  //header to go to set session
  header('Location: form1.php');
  die();
}




 ?>
<form  action="form4.php" method="post">


  <input type="text" name="first_name" placeholder="first name"> <br> <br>
  <input type="text" name="last_name" placeholder="last name"> <br> <br>
  <input type="number" name="phone" placeholder="phone"> <br> <br>
  <input type="text" name="email" placeholder="email"> <br> <br>
  <input type="text" name="country" placeholder="counrty"> <br> <br>
  <input type="text" name="city" placeholder="city"> <br> <br>
  <input type="text" name="area" placeholder="area"> <br> <br>
  <input type="text" name="street" placeholder="street"> <br> <br>
  <input type="text" name="reqirment" placeholder="requirment"> <br> <br>
  <input type="text" name="payment_method" placeholder="patment method"> <br> <br>
  





  <input type="submit" name="form1_submit" value="Confirm">



</form>
