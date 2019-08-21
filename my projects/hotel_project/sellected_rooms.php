<?php 
session_start();


require 'db_connection.php';
global $connection;


//---------------check session------------------------
if (isset($_SESSION['check_in']) && isset($_SESSION['check_out']) && isset($_SESSION['adult']) && isset($_SESSION['child'])) {
	# code...
	//----------------------core code-------------------------

       
//------------form variables------------------

echo "<h1> This is the sellected rooms </h1>";
 echo ' <br>room id is  '.$room_id = $_POST['sellected_room1'];
 echo '<br>room numbers is  '.$room_numbers = $_POST['sellected_room_numbers'];                        

//---------------------
//-----------database-----------------

$sellect_query = "SELECT * FROM `room`  WHERE `id` = '$room_id' ";
$run_sellect_query = mysqli_query($connection,$sellect_query);

if ($run_sellect_query) {
	# code...
	echo "  <br>sellected";
}else{
	echo "faild";
	var_dump($sellect_query);
	mysqli_error($connection);
}
echo "<br><br>";

$result = mysqli_fetch_assoc($run_sellect_query);
$price = $result['price'];






//------------------------------------

//------------ get tha totall cost------------------







//-----------------------get the check in and check out from session-----------
$check_in = $_SESSION['check_in'];
$check_out = $_SESSION['check_out'];
//-------------------get the days from check in and check out-----------------------------------
//---------------get the seconds between check in and check out.--------------------------
$check_in_date = strtotime($check_in);
$check_out_date = strtotime($check_out);
$seconds =  $check_out_date - $check_in_date;
//echo $datediff;
//-------------------------------------------------
//convert seconds into days-----------------------
function convert_seconds($seconds) {
  $dt1 = new DateTime("@0");
  $dt2 = new DateTime("@$seconds");
  return $dt1->diff($dt2)->format('%a');
  }
echo "<br><br>";  
//this function will echo the full days
$full_days = convert_seconds($seconds);
echo 'Full days is: '.$full_days."\n";
//------------------full days will be is a session----------------------
$_SESSION['full_days'] = $full_days;
//------------------full days session-------------------


//----------------the end of get days from check in and check out ------------------------------------
echo '<br><br> price for room is:  '.$price;
//-----------rooms number will be i a sesion---------
echo " <br> Totall Rooms is:  ".$room_numbers;
$_SESSION['room_numbers'] = $room_numbers;

//will be in session.
$totall_cost = $room_numbers * $price * $full_days;
$_SESSION['totall_cost'] = $totall_cost;

echo "<br><br> Totall Cost is: ".$totall_cost;
//will be in session
$deposite = $room_numbers * $price * 0.15;
$_SESSION['deposite'] = $deposite;

echo " <br>the deposite will be 15% ";
echo "<br>Deposite is:  ".$deposite;


//----------------------------end of counting totall cost

//-------------------------go to the sign in form----------------------------
echo " <br><br> <a href='form3.php'>Insert your info </a>";
//-------------- pingoooo i finish this code---------------------------

	//----------------------end of core code------------------
}else{
  
  //header to go to set session
  //header('Location: form1.php');
	echo "you have no session";
  die();

}


//---------------end check---------------------------------



 ?>