<?php
require 'db_connection.php';
global $connection;
echo "<h1> the delete booking page </h1>";
//database

if (isset($_POST['delete_booking'])) {
	# code...
	//id
	$bookig_id = $_POST['booking_id'];
	echo $bookig_id;

	$delete_booking_query = "DELETE FROM `booking` WHERE `booking`.`id` = '$bookig_id' ";
    $run_delete_booking_query = mysqli_query($connection,$delete_booking_query);

  //---------s

    if ($run_delete_booking_query) {
        // code...
        echo "deleted";
        header('Location: booking_for_admin.php');

     }
