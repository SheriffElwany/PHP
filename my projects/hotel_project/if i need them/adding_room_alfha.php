<?php

require 'db_connection.php';
global $connection;

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
  $room_image = $_POST['image'];
  $room_numbers = $_POST['romm_numbers'];
  //--------------------
  //database.
  $room_query = "INSERT INTO `room` (`room_type`, `description`, `view`, `capacity`, `price`, `image`, `room_numbers`)
                VALUES ($room_type, $room_description, $room_view, $room_capacity, $room_price, $room_image, $room_numbers)";


$run_query = mysqli_query($connection, $room_query);

//check  insert.
if ($run_query) {
  echo "inserted";
}else {
  echo "insert faild";
  echo mysqli_error($connection);
}








}




 ?>

 <form  action="adding_room.php" method="post">

<center>
   <input type="text" name="type" placeholder="type"> <br><br>
   <input type="text" name="description" placeholder="description"><br><br>
   <input type="text" name="view" placeholder="view"><br><br>
   <input type="text" name="capacity" placeholder="capacity"><br><br>
   <input type="text" name="price" placeholder="price"><br><br>
   <input type="text" name="image" placeholder="image"><br><br>
   <input type="text" name="romm_numbers" placeholder="romm_numbers"><br><br>

   <input type="submit" name="add_room" value="ADD">

</center>



 </form>
