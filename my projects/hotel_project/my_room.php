<?php

require 'db_connection.php';
global $connection;
session_start();

//-------------check the session-----------------
if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
  # code...
  //-----------------core code-----------

echo "<h1> this page is the dasheboard </h1>";

//get the room info.
$room_query = "SELECT * FROM `room` ";
$run_room_query = mysqli_query($connection,$room_query);

//---------------------------------


//show all rooms if there is exist.
$roms_num_rows = mysqli_num_rows ($run_room_query);
if ($roms_num_rows > 0) {



 foreach ($run_room_query as $room) {
   // code...
   echo '<strong> The ID: </strong>'.$room['id'].'&nbsp; &nbsp;';
   echo $room['room_type'].'&nbsp; &nbsp;';
   echo $room['price']. '&nbsp; &nbsp;';
   echo $room['view'].'&nbsp; &nbsp;';
 

   echo "<br> <hr>";


 }








}else {
  echo "there is no rooms";
}

//---------------------



if (isset($_POST['delete_room'])) {
  $id_name = $_POST['id_name'];
  //delete button.
  $delete_room_query = "DELETE FROM `room` WHERE `room`.`id` = $id_name ";
  $run_delete_rom_query = mysqli_query($connection, $delete_room_query);
  //-------------


  // code...
  if ($run_delete_rom_query) {
    // code...
    echo "deleted";
  }else {
    echo "delet faild";
  }

}



  //-----------------end core code-----------------------
}else{

  
 //header to go to sign in to set a session.
  header('Location: admin_log.php');
  die();
}

//----------------end the check---------------- 






 ?>

<form  action="edit_room.php" method="POST">
  <input type="'text'" name="id_name" placeholder="Enter the ID to edit" >
  <input type="submit" name="to_edit_room" value="Edit Room">

</form>


<form action="delete_room.php" method="POST">
   <input type="text" name="delete_id" placeholder="Enter the ID to delete">
   <input type="submit" name="delet" value="DELETE">

</form>
