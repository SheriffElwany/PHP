
<?php 
session_start();

require 'db_connection.php';
global $connection;
$id = $_SESSION['room_id'];
echo $id;


//------------------------ceck session--------------
if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
  # code...
  //------------------core code--------------------

echo "<h1> this is the add updated roon new </h1>";

//botton add.
if (isset($_POST['add_room'])) {
  // code...
  //take the form into variables.
  $room_type = $_POST['type'];
  $room_description = $_POST['description'];
  $room_view = $_POST['view'];
  $room_capacity = $_POST['capacity'];
  $room_price = $_POST['price'];

  //image code here
  $image_type = $_FILES['image']['type'];
  $name = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $location = 'uploded_images/';
  //--------


  $room_numbers = $_POST['romm_numbers'];
  //--------------------


  //upload image code.

  if (move_uploaded_file($tmp_name, $location.$name)){
    echo "<br>";
    echo  "[image name is:] ".$location.$name;
    echo "<?php echo 'string'; ?> ";
    echo " <br><br> <h1>  uploded  </h1>  ";
  }else {
    echo "<br> <br> <h1> upload faild";
  }

  //-----------
  //update start here
  //update the database.
$edit_room_query = "UPDATE `room` SET `room_type` = '$room_type', `description` = '$room_description', `view` = '$room_view', `capacity` = '$room_capacity',
 `price` = '$room_price', `image` = '$location.$name', `room_numbers` = '$room_numbers' WHERE `room`.`id` = '$id'; ";

 $run_edit_room_query  = mysqli_query($connection,$edit_room_query );
 if ($run_edit_room_query ) {
   // code...
   echo "<br><h1> Room Updated </h1> <br>";
   //go back to my rooms.
   header('Location: my_room.php');
 }else {
   echo "faild to update";
 }
//------
//end of the update hew



}
//end of the botton

  //------------------end of core code-------------

}else{
  //header to go to sign in
  header('Location: admin_log.php');
  die();



}
//-----------------------end cehck----------------






 ?>