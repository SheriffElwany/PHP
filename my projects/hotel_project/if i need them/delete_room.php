<?php
session_start();
echo $_SESSION['test'];
echo "hello";
echo "<h1> the deleted page </h1>";

require 'db_connection.php';
global $connection;

$delet_room_query = "DELETE FROM `room` WHERE `room`.`id` = 27" ;
$run_delet_room_query = mysqli_query($connection,$delet_room_query);
if ($run_delet_room_query) {
  // code...
  echo "deleted";
}





 ?>
