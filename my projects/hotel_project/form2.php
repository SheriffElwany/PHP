<?php

session_start();

require 'db_connection.php';

//---------------check session-------------
if (isset($_POST['check_in']) && isset($_POST['check_out']) && isset($_POST['adult'])  && isset($_POST['child'])) {
  # code...
  //------------------core code------------------------
  
    if (isset($_POST['form1_submit'])) {

  if (!empty($_POST['check_in']) && !empty($_POST['check_out']) && !empty($_POST['adult']) && !empty($_POST['child'])) {
    // cbut input in the session to stay with me in form2 and ill insert all of data together
    $_SESSION['check_in'] = $_POST['check_in'];
    $_SESSION['check_out'] = $_POST['check_out'];
    $_SESSION['adult'] = $_POST['adult'];
    $_SESSION['child'] = $_POST['child'];


  }

}


echo 'check in: '.$_SESSION['check_in'] .'<br>';
echo 'check out: '.$_SESSION['check_out'] .'<br>';
echo 'adult: '.$_SESSION['adult']  .'<br>';
echo 'child: '.$_SESSION['child']  .'<br>';




//--------------database---veiw avilable rooms.

$rooms_query = " SELECT * FROM `room`";
$sellect_rooms = mysqli_query($connection, $rooms_query);
echo mysqli_error($connection);
if ($sellect_rooms) {
  // code...
  echo "sellected <br>";
}else {
  echo "sellect faild";
}

$avilable = mysqli_num_rows($sellect_rooms); ;
//------------end database
if ($avilable > 0 ) {
  // code...
  echo "   there is some avilable <br>";
}

echo "<br> <br>";
foreach ($sellect_rooms as $avilable_result) {
  // code...
  echo 'Room ID: '.$avilable_result['id'].'<br>';
  echo 'Room type: '.$avilable_result['room_type'].'<br>';
  echo 'Room price: '.$avilable_result['price'].'<br>';
  echo 'Room view: '.$avilable_result['view'].'<br>';
  echo 'Room numbers: '.$avilable_result['room_numbers'].'<br>';
  echo 'Room image: '.$avilable_result['image'].'<br>';


  echo "<br> <br>";

}
//----------------------check the room capacity-----------------

//-----------sellect room amout foom database

//----------------------end check room capacity---------------






  //------------------end of core code----------------

}else{
  
  //header to go to set session
  header('Location: form1.php');
  die();

}

//---------------end of check in--------------------------










 ?>

<br><br><br>



<form action="sellected_rooms.php" method="POST">


<input type="text" name="sellected_room1" placeholder =" Enter room id">
<input type="text" name="sellected_room_numbers" placeholder =" Enter full days ">


<br> <br><br> 

<input type="submit" name="sellect_rooms" value="Sllect">


<br><br><br> <br><br><br>


</form> 
