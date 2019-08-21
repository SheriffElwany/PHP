<?php

echo "<h1> the deleted page </h1>";

require 'db_connection.php';
global $connection;

if (isset($_POST['delet'])) {
	# code...
	$id = $_POST['delete_id'];

	$delet_room_query = "DELETE FROM `room` WHERE `room`.`id` = '$id ' " ;
  $run_delet_room_query = mysqli_query($connection,$delet_room_query);
  if ($run_delet_room_query) {
      // code...
      echo "<h1>  Deleted </h1> ";
      header('Location: my_room.php');
    }


}







 ?>
