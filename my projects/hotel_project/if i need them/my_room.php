<?php
session_start();

require 'db_connection.php';
global $connection;


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
   echo $_SESSION['test'] = $room['id'];
   echo $room['id'].'&nbsp; &nbsp;';
   echo $room['room_type'].'&nbsp; &nbsp;';
   echo $room['price']. '&nbsp; &nbsp;';
   echo $room['view'].'&nbsp; &nbsp;';
   echo "<a href='edit_room.php'>Edit </a> ".'&nbsp; &nbsp;';
   echo " <a href='delete_room.php' >Delete</a>";
   echo " <a href='test_session.php' >test</a>";
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



 ?>

<form  action="dashB.php" method="POST">
  <input type="'text'" name="id_name" placeholder="enter id">
  <input type="submit" name="delete_room" value="Delete Room">
  <input type="submit" name="to_edit_room" value="Edit Room">

</form>
