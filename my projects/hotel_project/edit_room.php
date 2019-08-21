<?php
require 'db_connection.php';
global $connection;
session_start();

 $the_id = $_POST['id_name'];
 $_SESSION['room_id'] = $the_id;

//-------------check the session-----------------
if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
	# code...
  //---------------core code-----------------


echo $the_id;

echo "<center> <h1> THIS IS EDIT Room </h1> </center> ";


//sellect from database.

 $sellect_room_query = "SELECT * FROM `room` WHERE `room`.`id` = '$the_id' ";
 $run_sellect_room_query = mysqli_query($connection, $sellect_room_query);
 $rooms_array = mysqli_fetch_assoc($run_sellect_room_query);
 //echo "<br>".$rooms_array['room_type'];



  //-------------------

  //botton start here

  //botton end here.


//---------------end core code-------------


}else{
  //header to go to sign in
  header('Location: admin_log.php');
  die();
}

//----------------end the check---------------- 





 ?>

 <form  action="add_updated_room_action.php" method="POST" enctype="multipart/form-data">

<center>
   <input type="text" name="type" placeholder="type" value="<?php echo $rooms_array['room_type']; ?>"> <br><br>
   <input type="text" name="description" placeholder="description" value="<?php echo $rooms_array['description']; ?>"><br><br>
   <input type="text" name="view" placeholder="view" value="<?php echo $rooms_array['view']; ?>"><br><br>
   <input type="text" name="capacity" placeholder="capacity" value="<?php echo $rooms_array['capacity']; ?>"><br><br>
   <input type="text" name="price" placeholder="price" value="<?php echo $rooms_array['price']; ?>"><br><br>
   <input type="text" name="romm_numbers" placeholder="romm_numbers" value="<?php echo $rooms_array['room_numbers']; ?>"><br><br>



   <input type="file" name="image" value="image" ><br><br>



   <input type="submit" name="add_room" value="EDIT">

</center>



 </form>
