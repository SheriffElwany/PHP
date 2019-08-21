<?php

require 'db_connection.php';
global $connection;
session_start();

//------------------check session--------------
 if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
   # code...
   echo "i got here with session";
   //-------------core code---------------
   echo "<center> <h1> Adding a Room </h1> </center> ";

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
     echo " <br>  uploded    ";
     }else {
      echo "upload faild";
    }

    //-----------
    //database.
    $room_query = "INSERT INTO `room` (`room_type`, `description`, `view`, `capacity`, `price`, `image`, `room_numbers`)
                VALUES ('$room_type', '$room_description', '$room_view', '$room_capacity', '$room_price', ' $location.$name', '$room_numbers')";


   $run_query = mysqli_query($connection, $room_query);

//check  insert.
if ($run_query) {
  echo "inserted";

  //the best possition for the header--------------

  header('Location: admin_page.php');
  //------------------------------------------------


 }else {
  echo "insert faild";
  echo mysqli_error($connection);
 }








 }




  //-------------end of the core code-----------------
}else{
  //header to go to sign in
  header('Location: admin_log.php');
  die();
}

//-----------------end check-----------------




 ?>

 <form  action="adding_room.php" method="post" enctype="multipart/form-data">

<center>
   <input type="text" name="type" placeholder="type"> <br><br>
   <input type="text" name="description" placeholder="description"><br><br>
   <input type="text" name="view" placeholder="view"><br><br>
   <input type="text" name="capacity" placeholder="capacity"><br><br>
   <input type="text" name="price" placeholder="price"><br><br>
   <input type="text" name="romm_numbers" placeholder="romm_numbers"><br><br>


   <input type="file" name="image" ><br><br>


   

   <input type="submit" name="add_room" value="ADD">

</center>



 </form>
